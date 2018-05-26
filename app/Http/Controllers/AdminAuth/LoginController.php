<?php

namespace acclinic\Http\Controllers\AdminAuth;
use acclinic\Admin;
use acclinic\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

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


    public function __construct()
    {
        $this->middleware('admin');
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