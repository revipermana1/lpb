<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|max:25',
            'username' => ['required', 'min:3', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:20'
        ]);

        // $validate['password'] = bcrypt($validate['password']);

        $validate['password'] = Hash::make($validate['password']);

        User::create($validate);

        // $request->session()->flash('success', 'Registration Successful! Silahkan Login.');

        return redirect('/login')->with('success', 'Registration Successful! Silahkan Login.');
    }
}
