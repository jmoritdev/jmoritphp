<?php

class Monkey {

    var $name;

    function __construct($name) {
        $this->name = $name;
    }

    function getName() {
        return $this->name;
    }

    function setName($name) {
        $this->name = $name;
    }

}
