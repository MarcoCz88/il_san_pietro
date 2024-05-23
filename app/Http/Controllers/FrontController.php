<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome () {
        $promotions = Promotion::take(6)->get()->sortByDesc('created_at');
        return view('welcome', compact('promotions'));
    }
    public function dovesiamo () {
        return view('dovesiamo');
    }
    public function prodotti () {
        return view('prodotti');
    }
    public function storia () {
        return view('storia');
    }

}
