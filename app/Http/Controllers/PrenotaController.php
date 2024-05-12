<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prenotazione; 


class PrenotaController extends Controller
{
    public function showForm()
    {
        return view('prenota');
    }
    public function submitForm(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'datetime' => 'required|date_format:Y-m-d\TH:i', 
            'guests' => 'required|integer|min:1',
        ]);

        $prenotazione = new Prenotazione();
        $prenotazione->name = $request->name;
        $prenotazione->email = $request->email;
        $prenotazione->phone = $request->phone;
        $prenotazione->datetime = $request->datetime;
        $prenotazione->guests = $request->guests;

        $prenotazione->save();

      
        return redirect()->route('prenota.form')->with('success', 'Prenotazione inviata con successo!Un membro del nostro Staff sta lavorando alla richiesta, ti invieremo una mail di conferma nei prossimi minuti');
    }
}
