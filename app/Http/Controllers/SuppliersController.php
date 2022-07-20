<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index() {
        //return view and send 'title' as variable to parameter $title
        return view('app.suppliers.index' , ['title' => 'Suppliers']);
    }
}
