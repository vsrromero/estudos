<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactSentController extends Controller
{
    public function contactSent (){
        return view('website._auxiliars.contactsent' , ['title' => 'Message Sent']);
    }
}
