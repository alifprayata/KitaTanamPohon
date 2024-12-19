<?php

namespace App\Http\Controllers;

use App\Models\User; // Use the correct namespace for User
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:35',
            'username' => 'required|min:4|max:30|unique:users,username', 
            'email' => 'required|email|unique:users,email', 
            'password' => 'required|min:8|max:30',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('profile_picture')) {
            $validatedData['profile_picture'] = $request->file('profile_picture')->store('profile_pictures', 'public');
        } else {
            $validatedData['profile_picture'] = null; 
        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        Auth::login($user);

        return redirect(route('home'))->with('success', 'Registration successful!');
    }
}
