<?php

class Usuario {

    private string $id_blog;
    private string $descricao_blog;
    private string $data_de_lancamento;
    private string $duracao;
    private string $autor;

    

    /**
     * Get the value of id_blog
     */ 
    public function getId_Blog()
    {
        return $this->id_blog;
    }

    /**
     * Set the value of id_blog
     *
     * @return  self
     */ 
    public function setId_Blog($id_blog)
    {
        $this->id_blog = $id_blog;
    }

    /**
     * Get the value of descricao_blog
     */ 
    public function getDescricao_Blog()
    {
        return $this->descricao_blog;
    }

    /**
     * Set the value of descricao_blog
     *
     * @return  self
     */ 
    public function setDescricao_Blog($descricao_blog)
    {
        $this->descricao_blog = $descricao_blog;
    }

    /**
     * Get the value of data_de_lancamento
     */ 
    public function getData_de_Lancamento()
    {
        return $this->data_de_lancamento;
    }

    /**
     * Set the value of data_de_lancamento
     *
     * @return  self
     */ 
    public function setData_de_Lancamento($data_de_lancamento)
    {
        $this->data_de_lancamento = $data_de_lancamento;
    }

    /**
     * Get the value of duracao
     */ 
    public function getDuracao()
    {
        return $this->duracao;
    }

    /**
     * Set the value of duracao
     *
     * @return  self
     */ 
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;

    }

    /**
     * Get the value of autor
     */ 
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set the value of autor
     *
     * @return  self
     */ 
    public function setAutor($autor)
    {
        $this->autor = $autor;
    }
}