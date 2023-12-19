<?php

namespace Database\Seeders;

use App\Models\Especialidade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EspecialidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Especialidade::create(['especialidade_nome'=>'Cargiologia','especialidade_tipo'=>'Consulta']);
        Especialidade::create(['especialidade_nome'=>'Ortopedia','especialidade_tipo'=>'Consulta',]);
    }
}
