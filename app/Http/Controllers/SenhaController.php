<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\SalaSenha;
use App\Models\Senha;
use App\Models\Turno;
use Illuminate\Http\Request;

class SenhaController extends Controller
{
    public function selecionar_senha()
    {
        return view('gerar');
    }

    public function store(Request $request, $senha)
    {

        $turno = Turno::turno_ativo();

        // dd($turno);

        if (empty($turno)) {
            return response('Nenhum turno ativo', 200);
        } else {
            $senhas = $turno->senhas->where('senha_tipo', '=', $senha)->count();

            $tipo = ($senha == 1) ? 'C' : 'P';

            $senha = Senha::create([
                'turno_id' => $turno->turno_id,
                'user_id' => 1,
                'senha_nome' => $tipo . $senhas + 1,
                'senha_tipo' => $senha,
                'senha_ativa' => 1,
            ]);

            SalaSenha::create([
                'senha_id' => $senha->senha_id,
                'sala_id' => 1,
                'status' => 1,
            ]);
        }

        $senhas = Senha::senhas_sala(1);

        //    $senhas = 'teste';

        // dd( $senhas);

        // Event::dispatch(new EnviarSenha($senhas));

        NewMessage::dispatch($senhas);

        return response()->json(['success' => true]);
    }
}
