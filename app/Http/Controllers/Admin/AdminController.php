<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CountClick;
use App\Models\User;
use App\Models\UserPayment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    // Admin Dashboard
    public function index()
    {
        $user = Auth::user();

        $allUsers = User::with(['payments', 'clicks'])
            ->where('role_id', 2)
            ->where('is_active', 1)
            ->orderBy('id', 'desc')
            ->get();

        // Extract users
        $users = $allUsers->map(function ($user) {
            return [
                'id' => $user->id,
                'full_name' => $user->full_name,
                'email' => $user->email,
                'phone' => $user->phone,
                'is_active' => $user->is_active,
            ];
        });

        // Extract payments with user names
        $payments = $allUsers->flatMap(function ($user) {
            return collect($user->payments)->map(function ($payment) use ($user) {
                return [
                    'full_name' => $user->full_name,
                    'payment_id' => $payment['id'],
                    'name_on_card' => $payment['name_on_card'],
                    'credit_card_number' => $payment['credit_card_number'],
                    'expiration_date' => $payment['expiration_date'],
                    'is_active' => $payment['is_active'],
                ];
            });
        });

        // Extract clicks with user names
        $clicks = $allUsers->flatMap(function ($user) {
            return collect($user->clicks)->map(function ($click) use ($user) {
                return [
                    'full_name' => $user->full_name,
                    'click_id' => $click['id'],
                    'count' => $click['count'],
                    'is_active' => $click['is_active'],
                ];
            });
        });

        // dd($payments);
        return view('backend.pages.index', compact('user', 'users', 'payments', 'clicks'));
    }

    // Admin Profile
    public function profile()
    {
        $user = Auth::user();
        return view('backend.pages.profile', compact('user'));
    }

    // Admin Update Profile
    public function updateProfile(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,' . $request->id,
            'phone' => 'required|string',
            'password' => 'nullable|string|min:8|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $updateProfile = User::findOrFail($request->id);
        $updateProfile->full_name = $request->full_name;
        $updateProfile->email = $request->email;
        $updateProfile->phone = $request->phone;
        if ($request->password) {
            $updateProfile->password = Hash::make($request->password);
        }
        $updateProfile->is_active = 1;
        if ($updateProfile->save()) {
            return redirect()->back()->with('success', 'Profile updated successfully');
        }
    }

    // Admin view Users
    public function users()
    {
        $users = User::where('role_id', 2)->where('is_active', 1)->orderBy('id', 'desc')->get();
        return view('backend.pages.users', compact('users'));
    }

    // Admin view Payments
    public function payments()
    {
        $payments = UserPayment::with('user')->where('is_active', 1)->orderBy('id', 'desc')->get();
        // dd($payments);
        return view('backend.pages.payments', compact('payments'));
    }

    // Admin view Clicks
    public function clicks()
    {
        $clicks = CountClick::with('user')->where('is_active', 1)->orderBy('id', 'desc')->get();
        // dd($clicks);
        return view('backend.pages.clicks', compact('clicks'));
    }

    // Admin Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('frontend.homepage');
    }
}
