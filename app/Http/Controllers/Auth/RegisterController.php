<?php

namespace App\Http\Controllers\Auth;

use auth;
use App\models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
       


        $this->validate($request, [

            'userid' => 'required|max:255',
            'username' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|confirmed',


        ]); 

        User::create([
            'userid' => $request->userid,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        auth()->attempt($request->only('email','password'));
        // sign in

        return redirect()->route('dashboard');


        //dd('abc');

        //store user
        //sign the user in
        //redirection
    }
}
