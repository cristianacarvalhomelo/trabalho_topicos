<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use App\Models\Paciente;
use App\Models\Medico;
use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultas = Consulta::all();

        return view('consultas.index', compact('consultas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pacientes = Paciente::all();
        $medicos = Medico::all();
        return view('consultas.create', compact('pacientes', 'medicos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $consulta = new Consulta([
            'hora' => $request->input('hora'),
            'id_paciente' => $request->input('id_paciente'),
            'id_medico' => $request->input('id_medico')
        ]);

        $consulta->save();
        
        return redirect()->route('consultas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $consulta = Consulta::findOrFail($id);
        // Retorna a view 'autores.show' e passa o autor como parâmetro
        return view('consultas.show', compact('consulta'));
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $consulta = Consulta::findOrFail($id);
        // Retorna a view 'autores.edit' e passa o autor como parâmetro
        $pacientes = Paciente::all();
        $medicos = Medico::all();

        return view('consultas.edit', compact('consulta', 'pacientes', 'medicos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $consulta = Consulta::findOrFail($id);
        // Atualiza os campos do autor com os dados fornecidos no request
        $consulta->hora = $request->input('hora');
        $consulta->id_paciente = $request->input('id_paciente');
        $consulta->id_medico = $request->input('id_medico');

        // Salva as alterações no autor
        $consulta->update();
        // Redireciona para a rota 'autores.index' após salvar
        return redirect()->route('consultas.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $consulta = Consulta::findOrFail($id);
        // Exclui o autor do banco de dados
        $consulta->delete();
        // Redireciona para a rota 'autores.index' após excluir
        return redirect()->route('consultas.index');
    }
}