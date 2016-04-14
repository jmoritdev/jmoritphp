<?php

class Car {
    var $name;
    var $brand;
    var $price;
    
    
    function __construct($name, $brand, $price) {
        $this->name = $name;
        $this->brand = $brand;
        $this->price = $price;
    }

    
    function getImageName(){
        return str_replace(" ", "", $this->brand.$this->name);
    }
    
    function getFullName(){
        return $this->brand." ".$this->name;
    }
    
    function getName() {
        return $this->name;
    }

    function getBrand() {
        return $this->brand;
    }

    function getPrice() {
        return $this->price;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setBrand($brand) {
        $this->brand = $brand;
    }

    function setPrice($price) {
        $this->price = $price;
    }


}
