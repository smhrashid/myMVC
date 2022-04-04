<?php

class IndexController {

    function __construct($model) {
        $this->model = $model;
    }

    public function sayWelcome() {
        return $this->model->welcomeMessage();
    }

}
