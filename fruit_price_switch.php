<?php

if (isset($argv[1])) {

    switch ($argv[1]) {
        case "banana":
        echo $argv[1] . " costs 3$" . "\n";
        break;

        case "orange":
        echo $argv[1] . " costs 2$" . "\n";
        break;

        case "apple":
        echo $argv[1] . " costs trop cher" . "\n";
        break;

        default:
        echo "on ne vend pas de " . $argv[1] . "\n";
    }
} else {
    echo "Précisez un fruit". "\n";
}


