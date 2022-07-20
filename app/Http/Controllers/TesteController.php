<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1 = 0 , int $p2 = 0){
        //return view('website.teste' , ['title' => 'teste'] , ['p1' => $p1 , 'p2' => $p2]);



        return view('website.teste' , ['title' => 'teste'] , compact('p1' , 'p2'));




    }

}
