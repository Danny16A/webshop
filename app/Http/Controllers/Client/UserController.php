<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function login(){
        return view('client.login');
    }

    function register(){
        return view('client.register');
    }
}
