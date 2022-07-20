<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function index(Request $request){

        $error = '';


        //get error forwarded from method authenticate
        $error = $request->get('error');

        //error list: 1 -> user or password invalid

        if($request->get('error') == 1) {
            $error = 'Invalid user and/or password.';
        }
        if($request->get('error') == 2) {
            $error = 'You must be logged in to access this page.';
        }


        //return view and send 'title' as variable to parameter $title
        return view('website.login' , ['title' => 'Sign in' , 'error' => $error]);


    }

    public function authenticate(Request $request){

        //validation - check if user is an email and if password is filled
        $validation = [
            'user' => 'email',
            'password' => 'required'
        ];

        //validate if the parameters above are right
        $request->validate($validation);

        //get parameters from form
        $email = $request->get('user');
        $password = $request->get('password');



        //Using model User to check data on DB
        $user = new User();
        //get email and password where both are equal to value got from form on view common.login
        $check = $user->where('email', $email)->where('password', $password)->get()->first();

        //if a data is returned from DB, if was found an user and password matching, then starts a session and pass to super global $_SESSION the values for name and email
        if(isset($check->name)) {

            session_start();
            $_SESSION['name'] = $check->name;
            $_SESSION['email'] = $check->email;

            return redirect()->route('app.home');
        } else {
            return redirect()->route('common.login', ['error' => 1]);
        }

    }

    public function signOut(){
        session_destroy();
        return redirect()->route('common.index');
    }
}


