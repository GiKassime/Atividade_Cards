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
    public function geraCard(){
        return "
        <div class=\"w-full max-w-sm bg-gray-700 border border-gray-400 rounded-lg shadow-lg\">
            <a href=\"#\">
                <img class=\"w-full rounded-t-lg\" src=\"{$this->imagem}\" alt=\"product image\" />
            </a>
            <div class=\"px-5 pb-5\">
                <h5 class=\"text-2xl font-semibold tracking-tight text-white\">{$this->nome}</h5>
                <p class=\"my-4 text-gray-200 break-words whitespace-normal\">{$this->descricao}</p>
                <div class=\"flex items-center mt-2.5 mb-5\">
                    <span class=\"flex space-x-1 text-2xl cursor-pointer\">{$this->geraEstrelasCard()}</span>
                </div>
                <div class=\"flex items-center justify-between\">
                    <span class=\"text-3xl font-bold text-white\">R\${$this->preco}</span>
                </div>
            </div>
        </div>";
    }
    private function geraEstrelasCard(){
    $estrelas = "";
    $avaliacao = $this->avaliacao;
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $avaliacao) {
            $estrelas .= "<i class=\"fas fa-star text-yellow-400\"></i>";
        } else {
            $estrelas .= "<i class=\"fas fa-star text-gray-400\"></i>";
        }
    }
    return $estrelas;
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of preco
     */
    public function getPreco(): float
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     */
    public function setPreco(float $preco): self
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get the value of imagem
     */
    public function getImagem(): string
    {
        return $this->imagem;
    }

    /**
     * Set the value of imagem
     */
    public function setImagem(string $imagem): self
    {
        $this->imagem = $imagem;

        return $this;
    }

    /**
     * Get the value of descricao
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of avaliacao
     */
    public function getAvaliacao(): int
    {
        return $this->avaliacao;
    }

    /**
     * Set the value of avaliacao
     */
    public function setAvaliacao(int $avaliacao): self
    {
        $this->avaliacao = $avaliacao;

        return $this;
    }
}
