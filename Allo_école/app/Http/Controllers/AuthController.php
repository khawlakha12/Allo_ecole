<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log; 

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
                'phone' => 'required',
                'description' => 'nullable|string',
                'type' => 'required|in:Admin,Formateur',
                'picture' => 'nullable|image|max:2048',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $fullName = $request->first_name . ' ' . $request->last_name;

            $user = User::create([
                'name' => $fullName, 
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'description' => $request->description,
                'type' => $request->type,
            ]);

            if ($request->hasFile('picture')) {
                $picturePath = $request->file('picture')->store('public/profile_pictures');

                $user->update(['picture' => $picturePath]);
            }

            return redirect()->route('login')->with('success', 'Registration successful!');
        } catch (\Exception $e) {
            Log::error('Registration error: ' . $e->getMessage());
            return redirect()->back()->withErrors('An error occurred while registering. Please try again later.')->withInput();
        }
    }
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|string',
        'password' => 'required|string',
    ]);

    if (Auth::attempt($credentials, $request->filled('remember'))) {
        $request->session()->regenerate();
        return redirect()->route('Dashboard')->with('success', 'Login successful!');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('username');
}
}
