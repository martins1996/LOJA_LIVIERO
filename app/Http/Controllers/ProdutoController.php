<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        $produtos = Produto::all();
        return view('produtos', compact('produtos')); // ← Corrigido
    }

    public function create()
    {
        return view('produtos_create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'required',
            'preco' => 'required|numeric',
            'imagem' => 'nullable|image|max:2048',
        ]);

        $path = $request->hasFile('imagem')
            ? $request->file('imagem')->store('produtos', 'public')
            : null;

        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'preco' => $request->preco,
            'imagem' => $path
        ]);

        return redirect()->route('produtos.index')->with('success', 'Produto criado com sucesso!');
    }

    public function edit(Produto $produto)
    {
        return view('produtos_edit', compact('produto'));
    }

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'required',
            'preco' => 'required|numeric',
            'imagem' => 'nullable|image|max:2048',
        ]);

        // Atualiza todos os campos menos a imagem
        $dados = $request->only('nome', 'descricao', 'preco');

        // Verifica se o usuário enviou nova imagem
        if ($request->hasFile('imagem')) {
            $dados['imagem'] = $request->file('imagem')->store('produtos', 'public');
        }

        // Atualiza tudo de uma vez
        $produto->update($dados);

        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index')->with('success', 'Produto excluído!');
    }
}
