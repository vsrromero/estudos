<?php

namespace App\Http\Controllers;

use App\Http\Middleware\LogAccessMiddleware;
use Illuminate\Http\Request;


class AboutUsController extends Controller
{

    public function __construct()
    {
        //$this->middleware(LogAccessMiddleware::class);
    }

    public function aboutUs(){
        //return view and send 'title' as variable to parameter $title
        return view('website.aboutUs' , ['title' => 'About Us']);
    }
}
