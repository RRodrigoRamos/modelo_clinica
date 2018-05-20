<?php

namespace acclinic\Http\Controllers\AdminAuth;

use acclinic\Admin;
use acclinic\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/areaAdmin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // para não conflitar com o outro usuario
    public function __construct()
    {
        $this->middleware('admin')->except('logout');
    }
    
    protected function guard()
    {
        return Auth()->guard('admin');
    }

    public function showLoginForm() 
    {
        return view('admin-auth.login');
    } 
}