<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function main(){
        //return view and send 'title' as variable to parameter $title
        return view('website.index' , ['title' => 'Wellcome']);
    }
}
