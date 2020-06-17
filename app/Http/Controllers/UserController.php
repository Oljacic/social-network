<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function getDashboard() {
        return view('dashboard');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'first_name' => 'required|max:120',
            'password' => 'required|min:4'
        ]);

        $email = $request->input('email');
        $first_name = $request->input('first_name');
        $password = Hash::make($request->input('password'));


        $user = new User();
        $user->first_name = $first_name;
        $user->email = $email;
        $user->password = $password;

        $user->save();

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postSignIn(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ])) {
            return redirect()->route('dashboard');
        }

        return redirect()->back();
    }
}