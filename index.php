<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicione seu Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>

<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center py-12">
        <form class="bg-white shadow-lg rounded-lg p-6 max-w-md w-full" action="catalogo.php" method="post">
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
                <label for="imagem_produto" class="block mb-2 text-sm font-medium text-gray-700">Link da Imagem do Produto</label>
                <input type="text" id="imagem_produto" name="imagem_produto" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3" placeholder="Digite o link da imagem do produto" required />
            </div>
            <div class="mb-5">
                <label for="descricao_produto" class="block mb-2 text-sm font-medium text-gray-700">Descrição do Produto</label>
                <textarea id="descricao_produto" name="descricao_produto" 
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3 resize-none h-24" 
                    placeholder="Digite a descrição do produto" required></textarea>
            </div>
            <h1 class="text-lg font-medium text-gray-700 mb-4">Selecione a avaliação do produto</h1>
            <!-- Input oculto com a nota -->
            <input type="hidden" name="avaliacao" id="avaliacao" value="0" />

            <!-- Estrelas -->
            <div id="star-rating" class="flex space-x-1 text-2xl text-gray-400 cursor-pointer my-4">
                <i class="fas fa-star" data-index="1"></i>
                <i class="fas fa-star" data-index="2"></i>
                <i class="fas fa-star" data-index="3"></i>
                <i class="fas fa-star" data-index="4"></i>
                <i class="fas fa-star" data-index="5"></i>
            </div>
            <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-3 text-center">Adicionar Produto</button>
        </form>
    </div>


    <!-- Script -->
    <script>
        const stars = document.querySelectorAll("#star-rating i");
        const inputAvaliacao = document.getElementById("avaliacao");
        let currentRating = 0;

        stars.forEach((star, index) => {
            star.addEventListener("mouseover", () => highlightStars(index + 1));
            star.addEventListener("click", () => {
                currentRating = index + 1;
                inputAvaliacao.value = currentRating;
                highlightStars(currentRating);
            });
            star.addEventListener("mouseout", () => highlightStars(currentRating));
        });

        function highlightStars(rating) {
            stars.forEach((star, index) => {
                if (index < rating) {
                    star.classList.add("text-yellow-400");
                    star.classList.remove("text-gray-400");
                } else {
                    star.classList.add("text-gray-400");
                    star.classList.remove("text-yellow-400");
                }
            });
        }
    </script>
</body>

</html>