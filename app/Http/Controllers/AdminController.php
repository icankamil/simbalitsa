<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function index(){
        return view("admindashpage");
    }

    public function index2(){
        return view("absorptivedash");
    }

    public function index3(){
        return view("pengguna");
    }

}
