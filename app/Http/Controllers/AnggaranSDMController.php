<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggaranSDMController extends Controller
{
    //
    //
    public function index(){
        return view("jenisbelanja");
    }

    //
    public function index2(){
        return view("sumberpenerimaan");
    }
}
