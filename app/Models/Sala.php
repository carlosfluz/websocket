<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    use HasFactory;

    protected $table = 'sala';
    protected $primaryKey = 'sala_id';
    // public $timestamps = false;
    // public static $snakeAttributes = false;

    protected $fillable = [
        'sala_nome',
    ];

    // protected $casts = [
    //     'senha_ativa' => 'boolean',
    // ];

    public function senhas(){
        $this->belongsToMany(Senha::class, 'senha_id','senha_id');
    }
}
