<?php

namespace App\Http\Controllers;

use App\Listeners\LogVerifiedUser;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function send() {
        $user = User::find(Auth::id());
        event(new LogVerifiedUser($user));
    }
}
