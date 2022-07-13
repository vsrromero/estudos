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

        $request->validate([
            'name' => 'required | min:3 | max:50',
            'phone' => 'required | min:3 | max:20',
            'email' => 'required | min:3 | max:80',
            'contact_reason_id' => 'required',
            'message' => 'required',
        ]);

        SiteContact::create($request->all());

    }
}
