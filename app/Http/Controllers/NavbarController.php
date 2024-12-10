<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function home()
    {
        return view('users.home');
    }

    public function consult()
    {
        return view('users.consult');
    }

    public function forum()
    {
        return view('users.forum');
    }

    public function legalpedia()
    {
        return view('users.legalpedia');
    }
}
