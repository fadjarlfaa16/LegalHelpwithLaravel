<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function admin() {
        return view('admin.dashboard');
    }
    function user() {
        return view('users.home');
    }
    function  consultant(){
        return view('consultant.dashboard');
    }
}
