<?php
    $barberAgenda["09:15"] = "Mevr. Pietersen";
    $barberAgenda["09:30"] = "Mevr. Willems";
    $barberAgenda["09:45"] = "";
    $barberAgenda["10:00"] = "Paul van den Broek";
    $barberAgenda["10:15"] = "Karel de Meeuw";
    $barberAgenda["10:30"] = "";
?>

<table style="border: 1px solid black;"> 
    <thead>
        <tr>
            <td>
                Tijd:
            </td>
            <td>
                Klant:
            </td>
        </tr>
    </thead>
    <?php
    foreach($barberAgenda as $label => $customer){
    ?>    
        <tr>
            <td>
                <?php echo $label; ?>    
            </td>
            <td>
                <?php echo $customer; ?>    
            </td>
        </tr>
    <?php
    } 
    
    echo "De volgende tijden zijn nog beschikbaar:"."<br>";
    foreach($barberAgenda as $label => $customer){
        if($customer == ""){
            echo $label."<br>";
        }
    }
    ?>
</table>    


