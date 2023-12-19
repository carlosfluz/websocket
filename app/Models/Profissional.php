<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    use HasFactory;

    protected $table = 'profissional';

    protected $fillable = [
        'profissional_id',
        'especialidade_id',
        'profissional_nome'
    ];

    protected $primaryKey = 'profissional_id';

    public function especialidade(){
        return $this->belongsTo(Especialidade::class,'especialidade_id', 'especialidade_id');
    }
}
