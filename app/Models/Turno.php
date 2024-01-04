<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    protected $table = 'turno';
    protected $primaryKey = 'turno_id';
    // public $timestamps = false;
    // public static $snakeAttributes = false;

    protected $fillable = [
        'turno_nome',
        'turno_data',
        'turno_hora_inicio',
        'turno_hora_fim',
        'turno_ativo',
    ];

    protected $casts = [
        'turno_ativo' => 'boolean',
    ];

    public function senhas(){
       return $this->hasMany(Senha::class, 'turno_id','turno_id');
    }

    public static function turno_ativo(){
        return self::whereDate('turno_data',date('Y/m/d'))
        ->whereTime('turno_hora_inicio','<',date('H:i:s'))
        ->whereTime('turno_hora_fim','>',date('H:i:s'))
        ->where('turno_ativo','=',1)
        ->first();
    }
}
