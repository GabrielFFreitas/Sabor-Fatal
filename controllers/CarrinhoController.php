<?php

require_once "../../models/CarrinhoModel.php";

class CarrinhoController {

    private $model;

    function __construct()
    {
        $this->model = new CarrinhoModel();
    }

    public function read() {
        return $this->model->read();
    }

    public function add(Carrinho $c) {
        return $this->model->create($c);
    }

    public function edit(Carrinho $c) {
        return $this->model->update($c);
    }

    public function findId($id) {
        return $this->model->findId($id);
    }

    public function remove($id) {
        return $this->model->delete($id);
    }

}