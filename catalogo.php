<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />

</head>
<body>
    <h1>Catálogo</h1>
    <?php 
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        ini_set('display_startup_erros',1);
        require_once 'models/Produto.php';
        $produto = new Produto($_POST['nome_produto'], $_POST['preco_produto'], $_POST['imagem_produto'], $_POST['descricao_produto'], $_POST['avaliacao_produto']);
        echo $produto->geraCard();
    ?>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>