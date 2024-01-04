<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escala extends Model
{
    use HasFactory;

    protected $table = 'escala';

    protected $fillable = [
        'profissional_id',
        'especialidade_id',
        'escala_data'
    ];

    protected $primaryKey = 'escala_id';

    public function profissional(){
        return $this->belongsTo(Profissional::class,'profissional_id', 'profissional_id');
    }

    public function especialidade(){
        return $this->belongsTo(Especialidade::class,'especialidade_id', 'especialidade_id');
    }


}
