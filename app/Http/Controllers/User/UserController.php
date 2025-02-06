<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function userProfile()
    {
        $user = Auth::user();
        return view('frontend.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|string|email|unique:users,email,' . $request->id,
            'phone' => 'required|string',
            'password' => 'nullable|string|min:8|confirmed',
            'image' => 'nullable|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $updateProfile = User::findOrFail($request->id);
        $updateProfile->full_name = $request->full_name;
        $updateProfile->email = $request->email;
        $updateProfile->phone = $request->phone;
        if ($request->password) {
            $updateProfile->password = Hash::make($request->password);
        }
        $updateProfile->is_active = 1;

        if ($request->hasFile('image')) {
            // Check if the user already has an image
            if ($updateProfile->image && file_exists(public_path('profileImages/' . $updateProfile->image))) {
                // Remove the old image
                unlink(public_path('profileImages/' . $updateProfile->image));
            }

            // Upload the new image
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('profileImages'), $imageName);
            $updateProfile->image = $imageName;
        }
        if ($updateProfile->save()) {
            return redirect()->route('user.profile')->with('success', 'Profile updated successfully');
        }
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('frontend.homepage');
    }
}
