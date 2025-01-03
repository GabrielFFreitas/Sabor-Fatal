<?php

require_once "../../models/FestaModel.php";

class FestaController {

    private $model;

    function __construct()
    {
        $this->model = new FestaModel();
    }

    public function read() {
        return $this->model->read();
    }

    public function add(Festa $c) {
        return $this->model->create($c);
    }

    public function edit(Festa $c) {
        return $this->model->update($c);
    }

    public function findId($id) {
        return $this->model->findId($id);
    }

    public function remove($id) {
        return $this->model->delete($id);
    }

}