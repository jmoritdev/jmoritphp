<?php

class MonkeyOverview {
    
    var $monkeyList = array();
    
    function getMonkeyList() {
        return $this->monkeyList;
    }

    function addMonkey($monkey){
        $this-> monkeyList[] = $monkey;
    }
}
