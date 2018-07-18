<?php

/*$array = ['pomme','salade',"carottes","navet","haricots"];
if ($array[0] == "pomme") {
    echo $array[0] . " vaut 3€";
}*/


$array = ['pomme','salade',"carottes","navet","haricots", "navet", "mangue"];
foreach ($array as $key => $value) {
    if ($value == "pomme") {
        echo $value .  " vaut 3€ \n";
    } elseif ($value == "salade") {
        echo $value . " vaut 4€ \n ";
    } elseif ($value == "carottes") {
        echo $value . " vaut 4,5€ \n";
     } elseif ($value == "navet") {
        echo $value . " vaut 6€ \n";
    } elseif ($value == "haricots") {
        echo $value . " vaut 2,5€ \n";
    } else {
        echo "je ne vends pas de $value \n";
    }

}