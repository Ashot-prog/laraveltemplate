<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\admin\controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function login(Request $request){
        $formFields = $request->only(['email','password']);
        if (Auth::attempt($formFields)){
            return redirect(asset('/'));
        }

        return redirect(asset('/login'));


    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
