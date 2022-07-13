<?php

namespace App\Http\Controllers;

use App\ContactReason;
use Illuminate\Http\Request;
use App\SiteContact;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ContactController extends Controller
{
    public function contact(){

        //select on database as an array the contact reasons
        $contact_reason = ContactReason::pluck('reason_description' , 'id');

        //return view and send 'title' as variable to parameter $title and array of reason of contact to view as an array

        return view('website.contact' , ['title' => 'Contact' , 'contact_reason' => $contact_reason]);
    }

    public function saveDb(Request $request){

        $request->validate([
            'name' => 'required | min:3 | max:50',
            'phone' => 'required | min:3 | max:20',
            'email' => 'required | min:3 | max:80',
            'contact_reason' => 'required',
            'message' => 'required',
        ]);

        SiteContact::create($request->all());

    }
}
