<?php

namespace App\Http\Controllers;

use App\Estagiario;
use Illuminate\Http\Request;

class EstagiarioController extends Controller
{
    public function incluir(Request $request)
    {
        $request->validate([
            'nome' => 'required|string',
            'email' => 'required|string|email|unique:estagiarios',
        ]);
        $estagiario = new Estagiario;
        $estagiario->nome = $request->nome;
        $estagiario->email = $request->email;
        $estagiario->data_nascimento = $request->dataNascimento;
        $estagiario->telefone = $request->telefone;
        $estagiario->save();

        return response()->json([
            'message' => 'Estagiário foi gravado.',
        ], 201);
    }

    public function buscar()
    {
        $estagiarios = Estagiario::all();

        return (json_encode($estagiarios->toArray(), JSON_UNESCAPED_UNICODE));
    }
}
