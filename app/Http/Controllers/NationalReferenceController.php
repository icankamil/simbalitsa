<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NationalReferenceController extends Controller
{
    //
    public function index(){
        return view("nationalreference");
    }

    public function index2(){
        return view("mitrabestari");
    }
    public function index3(){
        return view("sitasikumulatif");
    }
    public function index4(){
        return view("skpenugasan");
    }
    public function index5(){
        return view("jumlahundangan");
    }
    public function index6(){
        return view("penghargaanlain");
    }
}
