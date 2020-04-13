<?php

namespace App\Http\Controllers\AdminAuth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::ADMIN;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:system')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin_auth.login');
    }

    public function authenticated(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if(Auth::guard('system')->attempt($credentials, $request->filled('remember'))) {
            return redirect()->intended(route('admin.home'));
        }

        return back()->withInput('email');
    }

    public function guard()
    {
        return Auth::guard('system');
    }
}
