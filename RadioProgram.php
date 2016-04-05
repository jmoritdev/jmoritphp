<?php
class RadioProgram {
    var $name;
    var $description;
    var $songs = array();
    

    function getSongs() {
        return $this->songs;
    }
    
    function addSong($songName){
        $this-> songs[] = $songName;
    }

    function getName() {
        return $this->name;
    }
}
