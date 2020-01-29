<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KapasitasLembagaController extends Controller
{
    //
    public function index(){
        return view("kapasitaslembaga");
    }

    //
    public function index2(){
        return view("jumlahakses");
    }

    public function index3(){
        return view("jumlahlayanan");
    }
}
