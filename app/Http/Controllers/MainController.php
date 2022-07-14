<?php

namespace App\Http\Controllers;

use App\ContactReason;
use App\SiteContact;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function main(){
        //select on database as an array the contact reasons
        $contact_reason = ContactReason::pluck('reason_description' , 'id');

        //return view and send 'title' as variable to parameter $title
        return view('website.index' , ['title' => 'Wellcome' , 'contact_reason' => $contact_reason]);
    }

    public function saveDb(Request $request){
        //validate fields before saving
        $validation = [
            'name' => 'required | min:3 | max:50',
            'phone' => 'required | min:5 | max:20',
            'email' => 'email',
            'contact_reason_id' => 'required',
            'message' => 'required'
        ];
        //custom messages
        $messages = [
            'contact_reason_id.required' => 'Please select one reason'
        ];

        $request->validate($validation , $messages);

        SiteContact::create($request->all());

    }
}
