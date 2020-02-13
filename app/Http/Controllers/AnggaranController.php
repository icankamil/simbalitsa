<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnggaranController extends Controller
{
    //
    public function index(){
        return view("anggaran");
    }

     //
     public function index2(){
        return view("pelaksanaananggaran");
    }

     //
     public function index3(){
        return view("renjaanggaran");
    }

     //
     public function index4(){
        return view("petunjukoperasional");
    }

    public function index5(){
        return view("datadukungdipa");
    }

    public function index6(){
        return view("pagudana");
    }
}
