<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        //return view and send 'title' as variable to parameter $title
        return view('website.login' , ['title' => 'Wellcome']);
    }
}
