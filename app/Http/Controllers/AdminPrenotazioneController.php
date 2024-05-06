<?php

namespace App\Http\Controllers;

use App\Models\Prenotazione;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingAccepted;

class AdminPrenotazioneController extends Controller
{
    public function index()
    {
        $prenotazioni = Prenotazione::all();
        return view('admin.prenotazioni.index', ['prenotazioni' => $prenotazioni]);
    }

    public function edit($id)
    {
        $prenotazione = Prenotazione::findOrFail($id);
        return view('admin.prenotazioni.edit', ['prenotazione' => $prenotazione]);
    }

    public function update(Request $request, $id)
    {
        $prenotazione = Prenotazione::findOrFail($id);
        $prenotazione->update($request->all());
        return redirect()->route('admin.prenotazioni.index')->with('success', 'Prenotazione aggiornata correttamente.');
    }

    public function destroy($id)
    {
        $prenotazione = Prenotazione::findOrFail($id);
        $prenotazione->delete();
        return redirect()->route('admin.prenotazioni.index')->with('success', 'Prenotazione eliminata correttamente.');
    }
    public function accept($id)
    {
        //
    }

    public function reject($id)
    {
    //
    }
}