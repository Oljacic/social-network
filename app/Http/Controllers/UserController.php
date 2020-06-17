<?php

namespace App\Http\Controllers;


use Illuminate\Http\Client\Request;

class UserController extends Controller
{
    /**
     * @param Request $request
     */
    public function postSignUp(Request $request)
    {
        $email = $request->input('email');
        $first_name = $request->input('first_name');
        $password = Hash::make($request->input('password'));


        dd($email);
    }

    /**
     * @param Request $request
     */
    public function postSignIn(Request $request)
    {

    }
}