<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicione seu Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .rating {
        display: flex;
        justify-content: center;
        gap: 10px; /* Espaçamento entre as estrelas */
    }

    .rating label {
        cursor: pointer;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

    .rating label:before {
        content: '\f005'; /* Código da estrela do FontAwesome */
        font-family: FontAwesome;
        font-size: 40px;
        color: #fbbf24; /* Cor padrão (cinza claro) */
        transition: color 0.3s ease;
    }

    .rating input {
        display: none; /* Esconde os inputs radio */
    }

    /* Estilo ao passar o mouse */
    .rating label:hover ~ label:before {
        color: #d1d5db; /* Reseta as estrelas à direita */
    }

    .rating label:hover:before,
    .rating label:hover ~ label:before {
        color: #fbbf24; /* Cor da estrela ao passar o mouse (amarelo) */
    }

    /* Estilo ao selecionar */
    .rating input:checked + label:before,
    .rating input:checked + label ~ label:before {
        color: #d1d5db; /* Cor das estrelas selecionadas */
    }
</style>
</head>

<body class="flex items-center justify-center min-h-screen bg-gray-100">
    <form class="bg-white shadow-lg rounded-lg p-8 max-w-md w-full" action="catalogo.php" method="post">
        <h1 class="text-2xl font-bold text-gray-800 text-center mb-6">Adicione seu Produto ao Catálogo!</h1>

        <div class="mb-5">
            <label for="nome_produto" class="block mb-2 text-sm font-medium text-gray-700">Nome do Produto</label>
            <input type="text" id="nome_produto" name="nome_produto" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="Digite o nome do produto" required />
        </div>

        <div class="mb-5">
            <label for="preco_produto" class="block mb-2 text-sm font-medium text-gray-700">Preço do Produto</label>
            <input type="number" id="preco_produto" name="preco_produto" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="Digite o preço do produto" required />
        </div>
        <div class="mb-5">
            <label for="imagem_produto" class="block mb-2 text-sm font-medium text-gray-700">Imagem do Produto</label>
            <input type="text" id="imagem_produto" name="imagem_produto" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="Digite o link da imagem do produto" required />
        </div>
        <div class="mb-5">
            <label for="descricao_produto" class="block mb-2 text-sm font-medium text-gray-700">Descrição do Produto</label>
            <input type="text" id="descricao_produto" name="descricao_produto" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="Digite a descrição do produto" required />
        </div>
        <h1>Digite a avaliação do produto</h1>
        <div class="rating">
            <!-- Estrela 1 -->
            <input type="radio" id="star1" name="avaliacao_produto" value="1" />
            <label for="star1"></label>
            <!-- Estrela 2 -->
            <input type="radio" id="star2" name="avaliacao_produto" value="2" />
            <label for="star2"></label>
            <!-- Estrela 3 -->
            <input type="radio" id="star3" name="avaliacao_produto" value="3" />
            <label for="star3"></label>
            <!-- Estrela 4 -->
            <input type="radio" id="star4" name="avaliacao_produto" value="4" />
            <label for="star4"></label>
            <!-- Estrela 5 -->
            <input type="radio" id="star5" name="avaliacao_produto" value="5" />
            <label for="star5"></label>
        </div>
        <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center">Adicionar Produto</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>