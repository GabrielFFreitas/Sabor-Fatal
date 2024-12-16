<?php

require_once "../../models/PlanoModel.php";

class PlanoController {

    private $model;

    function __construct()
    {
        $this->model = new PlanoModel();
    }

    public function read() {
        return $this->model->read();
    }

    public function add(Plano $c) {
        return $this->model->create($c);
    }

    public function edit(Plano $c) {
        return $this->model->update($c);
    }

    public function findId($id) {
        return $this->model->findId($id);
    }

    public function remove($id) {
        return $this->model->delete($id);
    }

}