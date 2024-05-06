<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome () {
        return view('welcome');
    }
    public function menu () {
        return view('menu');
    }
    public function dovesiamo () {
        return view('dovesiamo');
    }
    public function prodotti () {
        return view('prodotti');
    }
}
