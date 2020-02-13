<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MonevController extends Controller
{
    //
    public function index(){
        return view('monev');
    }

    public function index2(){
        return view('laporanfisik');
    }

    public function index3(){
        return view('progreport');
    }

    public function index4(){
        return view('laporanakhir');
    }

    public function index5(){
        return view('laporankinerja');
    }

    public function index6(){
        return view('laporantahunan');
    }

    public function index7(){
        return view('laporantengtahunan');
    }
}
