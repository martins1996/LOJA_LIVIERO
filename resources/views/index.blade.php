<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja Liviero</title>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">


</head>
<body>

    <header>
        <h1>Loja Liviero</h1>
        <nav>
            <a href="#">Início</a>
            <a href="{{ route('produtos.index') }}">Produtos</a>
            <a href="#">Sobre</a>
            <a href="#">login</a>
        </nav>
    </header>

   <section class="banner">
    <h2>Confira nossos produtos</h2>
    <p>Qualidade e preço justo para você!</p>
</section>

    <main class="container">
        <h2 class="titulo-secao">Produtos em Destaque</h2>

        <div class="produtos">
            <div class="card">
                <img src="https://via.placeholder.com/250x180" alt="Tênis Esportivo">
                <h3>Tênis Esportivo</h3>
                <p>Confortável e moderno</p>
                <p class="preco">R$ 199,90</p>
                <button>Comprar</button>
            </div>

            <div class="card">
                <img src="https://via.placeholder.com/250x180" alt="Sapato Social">
                <h3>Sapato Social</h3>
                <p>Elegância para todas as ocasiões</p>
                <p class="preco">R$ 259,90</p>
                <button>Comprar</button>
            </div>

            <div class="card">
                <img src="https://via.placeholder.com/250x180" alt="Sandália Casual">
                <h3>Sandália Casual</h3>
                <p>Ideal para o verão</p>
                <p class="preco">R$ 129,90</p>
                <button>Comprar</button>
            </div>

            <div class="card">
                <img src="https://via.placeholder.com/250x180" alt="Bota Masculina">
                <h3>Bota Masculina</h3>
                <p>Resistente e estilosa</p>
                <p class="preco">R$ 299,90</p>
                <button>Comprar</button>
            </div>
        </div>
    </main>

    <footer>
        <p>© 2025 Loja Liviero - Todos os direitos reservados</p>
    </footer>

</body>
</html>
