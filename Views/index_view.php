<?php
class IndexView {
    private $model;
    private $controller;
    function __construct($controller, $model) {
        $this->controller = $controller;
        $this->model = $model;
        echo "vcxvcxv - ".$this->controller->sayWelcome();
    }
}
