<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS correto -->
   <link rel="stylesheet" href="{{ asset('css/cadproduto.css') }}?v={{ time() }}">



    <title>Cadastrar Produto</title>
</head>
<body>

<header>
    <h1>Loja Liviero</h1>
    <nav>
        <a href="{{ route('home') }}">Início</a>
        <a href="{{ route('produtos.index') }}">Produtos</a>
    </nav>
</header>

<main class="container">
    <h2 class="titulo-secao">Cadastrar Novo Produto</h2>

    <!-- Exibe erros de validação -->
    @if ($errors->any())
        <div style="background:#ffdddd; padding:10px; border-radius:5px; margin-bottom:20px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color:red;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('produtos.store') }}" method="POST" enctype="multipart/form-data" 
        class="form-box">
        
        @csrf

        <label>Nome do Produto</label>
        <input type="text" name="nome" required>

        <label>Descrição</label>
        <textarea name="descricao" required rows="4"></textarea>

        <label>Preço</label>
        <input type="number" name="preco" step="0.01" required>

        <label>Imagem do Produto (opcional)</label>
        <input type="file" name="imagem" accept="image/*">

        <button type="submit" class="btn-salvar">
            Salvar Produto
        </button>
    </form>
</main>

<footer>
    <p>© 2025 Loja Liviero - Todos os direitos reservados</p>
</footer>

</body>
</html>
