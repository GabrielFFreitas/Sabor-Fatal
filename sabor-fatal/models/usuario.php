<?php

class Usuario {

    private string $cpf;
    private string $Email;
    private string $Nome;
    private string $Endereco;

    


    /**
     * Get the value of cpf
     */ 
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Set the value of cpf
     *
     * @return  self
     */ 
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }

    /**
     * Get the value of Email
     */ 
    public function getEmail()
    {
        return $this->Email;
    }

    /**
     * Set the value of Email
     *
     * @return  self
     */ 
    public function setEmail($Email)
    {
        $this->Email = $Email;

    }

    /**
     * Get the value of Nome
     */ 
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * Set the value of Nome
     *
     * @return  self
     */ 
    public function setNome($Nome)
    {
        $this->Nome = $Nome;

    }

    /**
     * Get the value of Endereco
     */ 
    public function getEndereco()
    {
        return $this->Endereco;
    }

    /**
     * Set the value of Endereco
     *
     * @return  self
     */ 
    public function setEndereco($Endereco)
    {
        $this->Endereco = $Endereco;

    }
}