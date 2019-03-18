<?php


$temp = "Bob";

print("Welcome to Space Adventures!\nType 'Start' to begin.\nType 'Help' if you have any questions.");

$name = "";
$stdin = fopen('php://stdin', 'rb');
$yes   = false;

while (!$yes) {
    echo ': ';

    $input = trim(fgets($stdin));

    if ($input === 'y') {
        exit('YES!!');
    }
}