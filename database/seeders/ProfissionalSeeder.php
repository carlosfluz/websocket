<?php

namespace Database\Seeders;

use App\Models\Profissional;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfissionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profissional::create(['especialidade_nome'=>'Cargiologia','especialidade_tipo'=>'Consulta']);
        Profissional::create(['especialidade_nome'=>'Ortopedia','especialidade_tipo'=>'Consulta',]);
    }
}
