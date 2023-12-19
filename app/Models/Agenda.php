<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $table = 'agenda';

    protected $fillable = [
        'agenda_id',
        'agenda_nome',
        'agenda_data'
    ];

    protected $primaryKey = 'agenda_id';

    public function profissional(){
        return $this->belongsTo(Profissional::class,'profissional_id', 'profissional_id');
    }

    public function especialidade(){
        return $this->belongsTo(Especialidade::class,'especialidade_id', 'especialidade_id');
    }


}
