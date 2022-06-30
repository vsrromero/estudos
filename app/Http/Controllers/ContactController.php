<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        //return view and send 'title' as variable to parameter $title
        return view('website.contact' , ['title' => 'Contact']);
    }
}
