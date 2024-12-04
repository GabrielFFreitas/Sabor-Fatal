<?php

class Usuario {

    private string $forma_de_pagamento;
    private string $valor_total;
    private string $id_do_pedido;

    

    /**
     * Get the value of forma_de_pagamento
     */ 
    public function getForma_de_Pagamento()
    {
        return $this->forma_de_pagamento;
    }

    /**
     * Set the value of forma_de_pagamento
     *
     * @return  self
     */ 
    public function setForma_de_Pagamento($forma_de_pagamento)
    {
        $this->forma_de_pagamento = $forma_de_pagamento;
    }

    /**
     * Get the value of valor_total
     */ 
    public function getValor_Total()
    {
        return $this->valor_total;
    }

    /**
     * Set the value of valor_total
     *
     * @return  self
     */ 
    public function setValor_Total($valor_total)
    {
        $this->valor_total = $valor_total;
    }

    /**
     * Get the value of id_do_pedido
     */ 
    public function getId_do_Pedido()
    {
        return $this->id_do_pedido;
    }

    /**
     * Set the value of id_do_pedido
     *
     * @return  self
     */ 
    public function setId_do_Pedido($id_do_pedido)
    {
        $this->id_do_pedido = $id_do_pedido;
    }
}