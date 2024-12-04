<?php

class Usuario {

    private string $data;
    private string $qtd_convidados;
    private string $horario;

    

    /**
     * Get the value of data
     */ 
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set the value of data
     *
     * @return  self
     */ 
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * Get the value of qtd_convidados
     */ 
    public function getQTD_Convidados()
    {
        return $this->qtd_convidados;
    }

    /**
     * Set the value of qtd_convidados
     *
     * @return  self
     */ 
    public function setQTD_Convidados($qtd_convidados)
    {
        $this->qtd_convidados = $qtd_convidados;
    }

    /**
     * Get the value of horario
     */ 
    public function getHorario()
    {
        return $this->horario;
    }

    /**
     * Set the value of horario
     *
     * @return  self
     */ 
    public function setHorario($horario)
    {
        $this->horario = $horario;
    }
}