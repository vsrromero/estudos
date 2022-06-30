<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(){
        //return view and send 'title' as variable to parameter $title
        return view('app.products');
    }
}
