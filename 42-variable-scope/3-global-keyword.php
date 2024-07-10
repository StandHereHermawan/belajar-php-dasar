<?php

$name = "Arief"; # Global Scope.
# kode diatas = $GLOBALS["name"] = "Arief;

function sayName()
{
    global $name; # Global Keyword, Bisa Mengakses variable $name di global scope.
    echo "Hello $name!" . PHP_EOL;
}

sayName();
