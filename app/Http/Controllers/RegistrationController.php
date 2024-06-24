<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view("form");
    }

    public function registration(Request $request)
    {   
        $request->validate(
            [
                'name'=>"required",
                'email'=>"required|email",
                'password'=>"required|confirmed",               
                'confirm_password'=>"required",               
            ]
            );
        echo "<pre>";
        print_r($request->all());
    }
}
