<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
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
}
