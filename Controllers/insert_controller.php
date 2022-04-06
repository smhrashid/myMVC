<?php

class InsertController {

    // private $model;

    function __construct($model) {
        $this->model = $model;
    }

    public function sayWelcome() {

        if (isset($_POST)) {
            
            return $this->model->welcomeMessage($_POST);
        }
    }

}
