<?php

namespace App\Http\Controllers;

use App\ContactReason;
use App\SiteContact;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function contact(){

        //select on database as an array the contact reasons
        $contact_reason = ContactReason::pluck('reason_description' , 'id');

        //return view and send 'title' as variable to parameter $title and array of reason of contact to view as an array

        return view('website.contact' , ['title' => 'Contact' , 'contact_reason' => $contact_reason]);

    }
    //save on DB
    public function saveDb(Request $request){
        //validate fields before saving
        $request->validate(
            [
                'name' => 'required | min:3 | max:50',
                'phone' => 'required | min:5 | max:20',
                'email' => 'email',
                'contact_reason_id' => 'required',
                'message' => 'required',
            ],
            [
                'contact_reason_id.required' => 'Please select one reason'
            ]
        );

        SiteContact::create($request->all());
        return redirect()->route('website.auxiliars.contactsent');

    }


}
