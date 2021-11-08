<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\admin\controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request){
        $formFields = $request->only(['email','password']);
        if (Auth::attempt($formFields)){
            return redirect(route('/'));
        }

    }
}
