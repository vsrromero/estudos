<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        //return view and send 'title' as variable to parameter $title
        return view('website.login' , ['title' => 'Sign in']);
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



        //Using model User
        $user = new User();
        $check = $user->where('email', $email)->where('password', $password)->get()->first();

        if(isset($check->name)) {
            echo 'Login efetuado';
        } else {
            echo 'Usuário ou senha incorreto';
        }






        //var_dump($password);

        //print_r($request->all());


        //DD($request);
    }
}
