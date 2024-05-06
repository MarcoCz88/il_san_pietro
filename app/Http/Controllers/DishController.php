<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function addDish(){
        return view('dish.add');
    }
    public function showDish(){
        $dishes = Dish::all();
        return view ('/menu', compact('dishes'));
    }
}
