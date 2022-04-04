<?php

/**
 * The about page model
 */
class AboutModel {

    private $message = 'thi is from about.';

    function __construct() {
        
    }

    public function welcomeMessage() {
        return $this->message;
    }

}
