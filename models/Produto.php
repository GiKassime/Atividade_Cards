<?php

class Produto
{
    private string $nome;
    private float $preco;
    private string $imagem;
    private string $descricao;
    private int $avaliacao;

    public function __construct(string $nome, float $preco, string $imagem, string $descricao, int $avaliacao)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->imagem = $imagem;
        $this->descricao = $descricao;
        $this->avaliacao = $avaliacao;
    }
    public function geraCard()
    {
        return "<div class=\"w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700\">
    <a href=\"#\">
        <img class=\"p-8 rounded-t-lg\" src=\"{$this->imagem}\" alt=\"product image\" />
    </a>
    <div class=\"px-5 pb-5\">
        <a href=\"#\">
            <h5 class=\"text-xl font-semibold tracking-tight text-gray-900 dark:text-white\">{$this->nome}</h5>
        </a>
        <div class=\"flex items-center mt-2.5 mb-5\">
            <div class=\"flex items-center space-x-1 rtl:space-x-reverse\">
                
            </div>
            <span class=\"bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded-sm dark:bg-blue-200 dark:text-blue-800 ms-3\">{$this->avaliacao}</span>
        </div>
        <div class=\"flex items-center justify-between\">
            <span class=\"text-3xl font-bold text-gray-900 dark:text-white\">R\${$this->preco}</span>
            <a href=\"#\" class=\"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800\">Add to cart</a>
        </div>
    </div>
    </div>";
    }
}
