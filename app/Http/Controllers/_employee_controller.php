<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\_employee;

class _employee_controller extends Controller
{
    public function home(){
        $emp = _employee::all();
        return view('index', ['emp' => $emp]);
    }

    public function create(){
        return view('create');
    }

    public function update(_employee $emp){
        return view('update', ['emp' => $emp]);
    }


    public function add(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'department' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'basic_salary' => 'required',
        ]);
        _employee::create($data);
        return redirect(route('home'));
    }

    public function push_update(_employee $emp, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'department' => 'required',
            'address' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'basic_salary' => 'required',
        ]);
        $emp->update($data);
        return redirect(route('home'));
    }

    public function delete(_employee $emp){
        $emp->delete();
        return redirect(route('home'));
    }

}
