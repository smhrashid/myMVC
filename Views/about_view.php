<?php
class AboutView {
    private $model;
    private $controller;
    function __construct($controller, $model) {
        $this->controller = $controller;
        $this->model = $model;
        echo "Home - ".$this->controller->sayWelcome();
    }
}
