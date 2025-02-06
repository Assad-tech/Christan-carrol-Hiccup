<?php

namespace App\Http\Controllers;

use App\Mail\NewUserWelcomeEmail;
use App\Models\User;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    public function login()
    {
        return view('frontend.login');
    }

    public function loginProcess(Request $request)
    {

        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);

        // dd($request);

        if (Auth::attempt($request->only('email', 'password'))) {
            if (Auth::user()->is_active == 1) {
                if (Auth::user()->role_id == '1') {
                    return redirect()->route('admin.dashboard');
                }else if(Auth::user()->role_id == '2'){
                    return redirect()->route('frontend.homepage');
                }
            } else {
                Auth::logout();
                return redirect()->back()->with('error', 'Your account is not active. Please contact the administrator');
            }
        }

        return redirect()->route('login')->with('error', 'Invalid credentials');
    }

    public function register()
    {
        return view('frontend.register');
    }

    public function registerProcess(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|string|email|unique:users,email',
            'phone' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
            'name_on_card' => 'required|string',
            'credit_card_number' => 'required|string|size:16',
            'cvv' => 'required|integer|min:100|max:999',
            'amount' => 'required|integer|min:5',
            'expiration_date' => 'required|date|after:today',
        ]);

        $newUser = new User();
        $newUser->role_id = 2;
        $newUser->full_name = $request->full_name;
        $newUser->email = $request->email;
        $newUser->phone = $request->phone;
        $newUser->password = Hash::make($request->password);
        $newUser->is_active = 1;
        if ($newUser->save()) {

            $addPayment = new UserPayment();
            $addPayment->user_id = $newUser->id;
            // add stripe payment transaction id here
            $addPayment->transaction_id = Str::random(12);
            $addPayment->amount = $request->amount?? 5;
            $addPayment->name_on_card = $request->name_on_card;
            $addPayment->credit_card_number = $request->credit_card_number;
            $addPayment->cvv = $request->cvv;
            $addPayment->expiration_date = $request->expiration_date;
            $addPayment->is_active = 1;
            $addPayment->save();

            // send Mail to user
            $user = [
                'full_name' => $newUser->full_name,
                'email' => $newUser->email,
                'password' => $request->password
            ];
            $payment = [
                'transaction_id' => $addPayment->transaction_id,
                'name_on_card' => $request->name_on_card,
                'amount' => $addPayment->amount,
                'payment_date' => $addPayment->created_at
            ];

            Mail::to('assadullah.shaffshaw@gmail.com')->send(new NewUserWelcomeEmail($user, $payment));


            return redirect()->route('login')->with('success', 'User Registed and Payment paid successfully');
        }

        return redirect()->route('register')->with('error', 'Something went wrong');
    }

    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('login');
    // }
}
