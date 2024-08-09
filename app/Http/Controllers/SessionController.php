<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
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
            throw ValidationException::withMessages(['email' => 'credentials do not match']);
        }

        request()->session()->regenerate();

        return redirect('/articles');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }

}
