<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Models\Promotion;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    //FUNZIONI AGGIUNGI/MODIFICA/RIMUOVI PIATTI
    public function index()
    {
        $dishes = Dish::all();
        return view('admin.dashboard', ['dishes' => $dishes]);
    }
    public function edit($id)
    {
        $dish = Dish::findOrFail($id);
        return view('admin.edit', ['dish' => $dish]);
    }
    public function update(Request $request, $id)
    {
        $dish = Dish::findOrFail($id);
        $dish->update($request->all());
        return redirect()->route('admin.dashboard')->with('success', 'Piatto aggiornato correttamente.');
    }
    public function destroy($id)
    {
        $dish = Dish::findOrFail($id);
        $dish->delete();
        return redirect()->route('admin.dashboard')->with('success', 'Piatto eliminato correttamente.');
    }

    //FUNZIONI AGGIUNGI/MODIFICA/RIMUOVI PROMOZIONI
    public function indexP()
    {
        $promotions = Promotion::all();
        return view('admin.dashboardp', ['promotions' => $promotions]);
    }
    public function editP($id)
    {
        $promotion = Promotion::findOrFail($id);
        return view('admin.editp', ['promotion' => $promotion]);
    }
    public function updateP(Request $request, $id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->update($request->all());
        return redirect()->route('admin.dashboardp')->with('success', 'Promozione aggiornata correttamente.');
    }
    public function destroyP($id)
    {
        $promotion = Promotion::findOrFail($id);
        $promotion->delete();
        return redirect()->route('admin.dashboardp')->with('success', 'Promozione eliminata correttamente.');
    }
}
