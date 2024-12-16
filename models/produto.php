<?php

class Produto {

    private string $id;
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
    public function getPreco_Produto()
    {
        return $this->preco_produto;
    }

    /**
     * Set the value of preco_produto
     *
     * @return  self
     */ 
    public function setPreco_Produto($preco_produto)
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

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;
    }
}