<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteContact;

class ContactController extends Controller
{
    public function contact(Request $request){
        //return view and send 'title' as variable to parameter $title
        /*
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
        echo $request->input('name');
        */


        $insert = new SiteContact();
        $insert->name = $request->input('name');
        $insert->phone = $request->input('phone');
        $insert->email = $request->input('email');
        $insert->contact_reason = $request->input('reasonContact');
        $insert->message = $request->input('message');
        $insert->save();



        return view('website.contact' , ['title' => 'Contact']);
    }
}
