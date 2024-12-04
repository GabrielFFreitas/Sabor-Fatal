<?php

class Usuario {

    private string $nome_produto;
    private string $preco_produto;
    private string $quantidade;

    

    /**
     * Get the value of nome_produto
     */ 
    public function getNome_produto()
    {
        return $this->nome_produto;
    }

    /**
     * Set the value of nome_produto
     *
     * @return  self
     */ 
    public function setNome_produto($nome_produto)
    {
        $this->nome_produto = $nome_produto;
    }

    /**
     * Get the value of preco_produto
     */ 
    public function getPreco()
    {
        return $this->preco_produto;
    }

    /**
     * Set the value of preco_produto
     *
     * @return  self
     */ 
    public function setPreco($preco_produto)
    {
        $this->preco_produto = $preco_produto;
    }

    /**
     * Get the value of quantidade
     */ 
    public function getQuantidade()
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     *
     * @return  self
     */ 
    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }
}