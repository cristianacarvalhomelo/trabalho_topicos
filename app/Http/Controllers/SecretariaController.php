<?php

namespace App\Http\Controllers;

use App\Models\Secretaria;
use Illuminate\Http\Request;

class SecretariaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $secretarias = Secretaria::all();

        return view('secretarias.index', compact('secretarias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('secretarias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $secretaria = new Secretaria([
            'name' => $request->input('name'),
            'cpf' => $request->input('cpf'),
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);

        $secretaria->save();
        
        return redirect()->route('secretarias.create');
    } 

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $secretaria = Secretaria::findOrFail($id);
        // Retorna a view 'autores.show' e passa o autor como parâmetro
        return view('secretarias.show', compact('secretaria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $secretaria = Secretaria::findOrFail($id);
        // Retorna a view 'autores.edit' e passa o autor como parâmetro
        return view('secretarias.edit', compact('secretaria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $secretaria = Secretaria::findOrFail($id);
        // Atualiza os campos do autor com os dados fornecidos no request
        $secretaria->name = $request->input('name');
        $secretaria->email = $request->input('email');
        $secretaria->password = $request->input('password');
        $secretaria->cpf = $request->input('cpf');
        // Salva as alterações no autor
        $secretaria->save();
        // Redireciona para a rota 'autores.index' após salvar
        return redirect()->route('secretarias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Encontra um autor no banco de dados com o ID fornecido
        $secretaria = Secretaria::findOrFail($id);
        // Exclui o autor do banco de dados
        $secretaria->delete();
        // Redireciona para a rota 'autores.index' após excluir
        return redirect()->route('secretarias.index');
    }
}
