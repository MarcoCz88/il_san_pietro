<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prenotazione extends Model
{
    protected $table = 'prenotazioni'; // Nome della tabella nel database

    protected $fillable = [
        'name', 'email', 'phone', 'datetime', 'guests'
    ];

    // Definisci eventuali regole di validazione per i campi
    public static $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'datetime' => 'required|date_format:Y-m-d\TH:i', // Formato datetime-local
        'guests' => 'required|integer|min:1',
    ];
}