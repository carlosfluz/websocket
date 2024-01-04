<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class SalaSenha extends Pivot
{
    use HasFactory;

    protected $table = 'sala_senha';
    protected $primaryKey = 'sala_senha_id';
    // public $timestamps = false;
    // public static $snakeAttributes = false;

    protected $fillable = [
        'senha_id',
        'setor_id',
        'status',
    ];
}
