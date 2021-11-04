<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\admin\controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }
    public function login(){
        return view('index');
    }
}
