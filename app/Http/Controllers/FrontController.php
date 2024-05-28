<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

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
    
    public function setLanguage($lang)
    {
        if(in_array($lang,['en','it','fr','de'])){
          App::setLocale($lang);
          Session::put('locale',$lang);  
        }
        
        return back();
        
    }

}
