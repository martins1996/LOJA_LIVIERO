<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Liviero</title>
<link rel="stylesheet" href="{{ asset('css/produtos.css') }}">



</head>
<body>

    <header>
        <h1>Loja Liviero</h1>
        <nav>
            <a href="#">Início</a>
            <a href="{{ route('produtos.index') }}">Produtos</a>
            <a href="#">clientes</a>
            <a href="#">login</a>
        </nav>
    </header>

   <section class="banner">
    <h2>Confira nossos produtos</h2>
    <p>Qualidade e preço justo para você!</p>
</section>
<section class="produtos">
    @forelse($produtos as $produto)
        <div class="card">
            <img src="{{ $produto->imagem ? asset('storage/' . $produto->imagem) : 'https://via.placeholder.com/250x180' }}">
            <h3>{{ $produto->nome }}</h3>
            <p>{{ $produto->descricao }}</p>
            <p class="preco">R$ {{ number_format($produto->preco, 2, ',', '.') }}</p>
        </div>
    @empty
        <p>Nenhum produto cadastrado ainda.</p>
    @endforelse
</section>

    <main class="container">
        <h2 class="titulo-secao">Produtos em Destaque</h2>
    </main>

    <footer>
        <p>© 2025 Loja Liviero - Todos os direitos reservados</p>
    </footer>
    
</body>
</html>
