<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Support\Facades\DB;

class Senha extends Model
{
    use HasFactory;

    protected $table = 'senha';
    protected $primaryKey = 'senha_id';
    // public $timestamps = false;
    // public static $snakeAttributes = false;

    protected $fillable = [
        'turno_id',
        'senha_nome',
        'senha_tipo',
        'senha_ativa',
    ];

    protected $casts = [
        'senha_ativa' => 'boolean',
    ];

    public function turno(){
       return $this->belongsTo(Turno::class, 'turno_id','turno_id');
    }

    public function salas(){
        return $this->belongsToMany(Sala::class);
    }

    public static function senhas_painel(){

        return self::whereDate('senha.created_at',date('Y-m-d'))
                    ->join('senha_setor', function(JoinClause $join){
                        $join->on('senha.senha_id','=','senha_setor.senha_id')
                        ->on('senha_setor.senha_setor_id','=',DB::raw('(SELECT MAX(senha_setor_id) FROM senha_setor s WHERE senha_id = senha_setor.senha_id)'));
                    })
                    ->where('senha_ativa',1)
                    ->where('senha_setor.status',2)->limit(5)->get();

    }

    public static function senhas_sala(int $setor){

        return self::whereDate('senha.created_at',date('Y-m-d'))
                    ->join('senha_setor', function(JoinClause $join){
                        $join->on('senha.senha_id','=','senha_setor.senha_id')
                        ->on('senha_setor.senha_setor_id','=',DB::raw('(SELECT MAX(senha_setor_id) FROM senha_setor s WHERE senha_id = senha_setor.senha_id)'));
                    })
                    ->where('senha_ativa',1)
                    ->where('senha_setor.status',1)->limit(5)->get();

    }
}
