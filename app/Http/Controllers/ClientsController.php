<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function clients(){
        //return view and send 'title' as variable to parameter $title
        return view('app.clients');
    }
}
