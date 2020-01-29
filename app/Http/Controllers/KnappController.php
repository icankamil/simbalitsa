<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KnappController extends Controller
{
    public function index(){
        return view("knapp");
    }
}
