<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    

    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm(){
        return view('backend.auth.login');
    }

    public function login(Request $request)
    {
        // Validate the form data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        // Attempt to log the user in
        if(Auth::guard('admin')->attempt(
                [
                    'email'=> $request->email, 
                    'password'=> $request->password
                ], $request->remember
            ) 
        ){
            // if successful, then redirect to their intended location
            return redirect()->intended(route('admin.dashboard'));
        }
        
        // if unsuccessful, then redirect back with the form data
        return redirect()->back()->withInput($request->only('email','remebder'));
    }

}
