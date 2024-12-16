<?php

require_once "../../models/BlogModel.php";

class BlogController {

    private $model;

    function __construct()
    {
        $this->model = new BlogModel();
    }

    public function read() {
        return $this->model->read();
    }

    public function add(Blog $c) {
        return $this->model->create($c);
    }

    public function edit(Blog $c) {
        return $this->model->update($c);
    }

    public function findId($id) {
        return $this->model->findId($id);
    }

    public function remove($id) {
        return $this->model->delete($id);
    }

}