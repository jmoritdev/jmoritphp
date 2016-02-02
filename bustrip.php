<?php
    $age = 12;
    $ticketCost = 10;
    
    if($age < 3){
        $ticketCost -= 10;
    } else if($age <= 12 || $age > 65){
        $ticketCost -= 5;
    }
    
    echo $ticketCost;
    
    

