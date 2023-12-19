<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    use HasFactory;

    protected $table = 'especialidade';

    protected $fillable = [
        'especialidade_id',
        'especialidade_nome',
        'especialidade_tipo'
    ];

    protected $primaryKey = 'especialidade_id';

    public function profissionais(){
        return $this->hasMany(Profissional::class,'especialidade_id', 'especialidade_id');
    }
}
