<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    //
    //
    public function index(){
        return view("program");
    }

    public function index2(){
        return view("rptprdhp");
    }

    public function index3(){
        return view("rktm");
    }

    public function index4(){
        return view("ropprdhp");
    }

    public function index5(){
        return view("roktm");
    }
}
