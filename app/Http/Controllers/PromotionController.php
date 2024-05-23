<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function addPromotion(){
        return view('promotion.add');
    }
    public function showPromotion(){
        $promotions = Promotion::take(6)->get()->sortByDesc('created_at');

        return view ('/promozioni', compact('promotions'));
    }
    
}
