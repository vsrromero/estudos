<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    public function index() {
        //return view and send 'title' as variable to parameter $title
        return view('app.suppliers.index' , ['title' => 'Suppliers']);
    }

    public function list(){

        $select = new Supplier();

        $list = $select->all();

        dd($list);



        return view('app.suppliers.list', ['title' => 'Suppliers', 'list' => $list]);
    }

    public function addForm(){

        return view('app.suppliers.add' , ['title' => 'Add new Supplier']);
    }

    public function add(Request $request){
        //validate fields before saving
        $validation = [
            'name' => 'required | min:3 | max:50',
            'website' => 'max:80',
            'country'=> 'required | min:2 | max:2',
            'email' => 'email'
        ];

        $request->validate($validation);

        DD($request->all());

        Supplier::create($request->all());

        return redirect()->route('app.suppliers.addForm');
    }
}
