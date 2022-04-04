<?php

/**
 * The about page controller
 */
class AboutController {

   // private $model;

    function __construct($model) {
        $this->model = $model;
    }

    public function sayWelcome() {
        return $this->model->welcomeMessage();
    }

}
