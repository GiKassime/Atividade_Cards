<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="bg-gray-100">
    <header class="bg-gray-800 text-white py-4">
        <h1 class="text-3xl font-bold text-center">Catálogo de Produtos</h1>
    </header>

    <main class="container mx-auto py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 w-full px-6">
            <?php 
                ini_set('display_errors', 1);
                error_reporting(E_ALL);
                ini_set('display_startup_erros', 1);
                require_once 'models/Produto.php';

                $produto = new Produto($_POST['nome_produto'], $_POST['preco_produto'], $_POST['imagem_produto'], $_POST['descricao_produto'], (int)$_POST['avaliacao']);
                echo $produto->geraCard();
            ?>
        </div>
    </main>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>