<?php

class InsertView {
    private $model;
    private $controller;
    function __construct($controller, $model) {
        $this->controller = $controller;
        $this->model = $model;
        $data = $this->controller->sayWelcome();

        echo '<table  border="1">';
        foreach ($data as $key => $value) {
            if ($key == 'hash_key') {
                $obj = json_decode($value);
                $value="salt:".$obj->salt."<br>hash:".$obj->hash;
            }
            echo "<tr>
                    <td>" . $key . "</td>
                    <td>" . $value . "</td>
                  </tr>";
        }
        echo '</table>';
    }
}
