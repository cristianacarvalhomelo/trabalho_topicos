<?php

namespace App\Http\Controllers;

use App\Models\Exame;
use App\Models\Paciente;
use Illuminate\Http\Request;

class ExameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exames = Exame::all();

        return view('exames.index', compact('exames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pacientes = Paciente::all();

        return view('exames.create', compact('pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $exame = new Exame([
            'tipo' => $request->input('tipo'),
            'resultado' => $request->input('resultado'),
            'id_paciente' => $request->input('id_paciente')
        ]);

        $exame->save();
        
        return redirect()->route('exames.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $exame = Exame::findOrFail($id);
        // Retorna a view 'autores.show' e passa o autor como parâmetro
        return view('exames.show', compact('exame'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $exame = Exame::findOrFail($id);
        // Retorna a view 'autores.edit' e passa o autor como parâmetro
        $pacientes = Paciente::all();

        return view('exames.edit', compact('exame', 'pacientes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $exame = Exame::findOrFail($id);
        // Atualiza os campos do autor com os dados fornecidos no request
        $exame->tipo = $request->input('tipo');
        $exame->resultado = $request->input('resultado');
        $exame->id_paciente = $request->input('id_paciente');

        // Salva as alterações no autor
        $exame->update();
        // Redireciona para a rota 'autores.index' após salvar
        return redirect()->route('exames.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $exame = Exame::findOrFail($id);
        // Exclui o autor do banco de dados
        $exame->delete();
        // Redireciona para a rota 'autores.index' após excluir
        return redirect()->route('exames.index');
    }
}
