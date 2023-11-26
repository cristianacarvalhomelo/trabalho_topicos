<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicos = Medico::all();

        return view('medicos.index', compact('medicos')); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medicos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $medico = new Medico([
            'name' => $request->input('name'),
            'cpf' => $request->input('cpf'),
            'cargo' => $request->input('cargo'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        $medico->save();
        
        return redirect()->route('medicos.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         // Encontra um autor no banco de dados com o ID fornecido
         $medico = Medico::findOrFail($id);
         // Retorna a view 'autores.show' e passa o autor como parâmetro
         return view('medicos.show', compact('medico'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $medico = Medico::findOrFail($id);
        // Retorna a view 'autores.edit' e passa o autor como parâmetro
        return view('medicos.edit', compact('medico'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         // Encontra um autor no banco de dados com o ID fornecido
         $medico = Medico::findOrFail($id);
         // Atualiza os campos do autor com os dados fornecidos no request
         $medico->name = $request->input('name');
         $medico->email = $request->input('email');
         $medico->password = $request->input('password');
         $medico->cpf = $request->input('cpf');
         $medico->cargo = $request->input('cargo');
         // Salva as alterações no autor
         $medico->save();
         // Redireciona para a rota 'autores.index' após salvar
         return redirect()->route('medicos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         // Encontra um autor no banco de dados com o ID fornecido
         $medico = Medico::findOrFail($id);
         // Exclui o autor do banco de dados
         $medico->delete();
         // Redireciona para a rota 'autores.index' após excluir
         return redirect()->route('medicos.index');
    }
}
