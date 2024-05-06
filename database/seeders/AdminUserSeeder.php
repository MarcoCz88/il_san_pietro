<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Logica per creare un utente amministratore
        User::create([
            'name' => 'Edoardo',
            'email' => 'edoardo@gmail.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
