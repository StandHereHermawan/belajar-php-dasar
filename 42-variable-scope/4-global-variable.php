<?php

$name = "Arief"; # Global Scope.

function sayName()
{
    echo "Hello {$GLOBALS['name']}!" . PHP_EOL; # {$GLOBALS['name']} untuk mengakses variable pada Global Scope.
}

sayName();

var_dump($GLOBALS);
