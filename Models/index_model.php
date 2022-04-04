<?php

/**
 * The home page model
 */
class IndexModel {

    private $message = 'Welcome.';

    function __construct() {
        
    }

    public function welcomeMessage() {
        return $this->message;
    }

}
