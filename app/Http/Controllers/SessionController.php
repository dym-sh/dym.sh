<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $validatedAttributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if( !Auth::attempt($validatedAttributes) )
        {
            throw ValidationException::withMessages(['email' => 'wrong password']);
        }

        request()->session()->regenerate();

        return redirect('/admin');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }

}
