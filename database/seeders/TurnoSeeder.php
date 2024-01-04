<?php

namespace Database\Seeders;

use App\Models\Turno;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TurnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Turno::create([
            'turno_nome' => 'Vespertino',
            'turno_data' => date("Y/m/d"),
            'turno_hora_inicio' => date("Y/m/d 8:00:00"),
            'turno_hora_fim' => date("Y/m/d 23:00:00"),
            'turno_ativo' => 1
        ]);
    }
}
