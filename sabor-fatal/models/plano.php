<?php

class Usuario {

    private string $descricao_plano;
    private string $preco_plano;
    private string $id_plano;

    

    /**
     * Get the value of descricao_plano
     */ 
    public function getDescricao_Plano()
    {
        return $this->descricao_plano;
    }

    /**
     * Set the value of descricao_plano
     *
     * @return  self
     */ 
    public function setDescricao_Plano($descricao_plano)
    {
        $this->descricao_plano = $descricao_plano;
    }

    /**
     * Get the value of preco_plano
     */ 
    public function getPreco_Produto()
    {
        return $this->preco_plano;
    }

    /**
     * Set the value of preco_plano
     *
     * @return  self
     */ 
    public function setPreco_Produto($preco_plano)
    {
        $this->preco_plano = $preco_plano;
    }

    /**
     * Get the value of id_plano
     */ 
    public function getId_Plano()
    {
        return $this->id_plano;
    }

    /**
     * Set the value of id_plano
     *
     * @return  self
     */ 
    public function setId_Plano($id_plano)
    {
        $this->id_plano = $id_plano;
    }
}