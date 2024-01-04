<?php

namespace Database\Seeders;

use App\Models\Sala;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Sala::create(['sala_nome'=>'Recepção']);
        Sala::create(['sala_nome'=>'Exame']);
        Sala::create(['sala_nome'=>'Consultório 1']);
        Sala::create(['sala_nome'=>'Consultório 2']);
    }
}
