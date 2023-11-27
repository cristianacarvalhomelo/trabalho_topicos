<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Medico;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacientes = Paciente::all();

        return view('pacientes.index', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $medicos = Medico::all();
        return view('pacientes.create', compact('medicos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paciente = new Paciente([
            'name' => $request->input('name'),
            'endereco' => $request->input('endereco'),
            'telefone' => $request->input('telefone'),
            'cpf' => $request->input('cpf'),
            'email' => $request->input('email'),
            'password' => $request->input('password'),
            'id_medico' => $request->input('id_medico')
        ]);

        $paciente->save();
        
        return redirect()->route('pacientes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $paciente = Paciente::findOrFail($id);
        // Retorna a view 'autores.show' e passa o autor como parâmetro
        return view('pacientes.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $paciente = Paciente::findOrFail($id);
        // Retorna a view 'autores.edit' e passa o autor como parâmetro
        $medicos = Medico::all();

        return view('pacientes.edit', compact('paciente', 'medicos'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Encontra um autor no banco de dados com o ID fornecido
         $paciente = Paciente::findOrFail($id);
         // Atualiza os campos do autor com os dados fornecidos no request
         $paciente->name = $request->input('name');
         $paciente->cpf = $request->input('cpf');
         $paciente->endereco = $request->input('endereco');
         $paciente->telefone = $request->input('telefone');
         $paciente->email = $request->input('email');
         $paciente->password = $request->input('password');
         $paciente->id_medico = $request->input('id_medico');
 
         // Salva as alterações no autor
         $paciente->update();
         // Redireciona para a rota 'autores.index' após salvar
         return redirect()->route('pacientes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Encontra um autor no banco de dados com o ID fornecido
         $paciente = Paciente::findOrFail($id);
         // Exclui o autor do banco de dados
         $paciente->delete();
         // Redireciona para a rota 'autores.index' após excluir
         return redirect()->route('pacientes.index');
    }
}
