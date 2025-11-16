<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

// Rota da página inicial
use App\Models\Produto;

Route::get('/', function () {
    $produtos = Produto::all(); // 🔥 Agora a variável existe!
    return view('index', compact('produtos'));
})->name('home');
// Nome da rota para links no Blade

// Rotas de produtos
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');
Route::get('/produtos/create', [ProdutoController::class, 'create'])->name('produtos.create');
Route::post('/produtos', [ProdutoController::class, 'store'])->name('produtos.store');

Route::get('/produtos/{produto}/edit', [ProdutoController::class, 'edit'])->name('produtos.edit');
Route::put('/produtos/{produto}', [ProdutoController::class, 'update'])->name('produtos.update');

Route::delete('/produtos/{produto}', [ProdutoController::class, 'destroy'])->name('produtos.destroy');
