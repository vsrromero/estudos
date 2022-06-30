<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUs(){
        //return view and send 'title' as variable to parameter $title
        return view('website.aboutUs' , ['title' => 'About Us']);
    }
}
