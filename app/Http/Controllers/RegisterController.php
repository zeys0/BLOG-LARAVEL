<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login/register', [
            'title' => "Register",
        ]);
    }

    public function store(Request $request)
    {
        $dataValidation = $request->validate([
            'user' => 'required|min:5|max:10',
            'username' => ['required', 'unique:users'],
            'email' => 'required',
            'password' => 'required|min:5'
        ]);

        $dataValidation['password'] = Hash::make($dataValidation['password']);

        User::created($dataValidation);
        dd('berhasil');
    }
}
