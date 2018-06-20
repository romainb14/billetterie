<?php

if ($argv[2] < 18) {
    echo $argv[1] . " a " . $argv[2] . " ans et est mineur" . "\n";
} else {
    if ($argv[2] < 60) {
        echo $argv[1] . " a " . $argv[2] . " ans et est majeur" . "\n";
    } else {
        echo $argv[1] . " a " . $argv[2] . " ans et est vieux" . "\n";
    }
}