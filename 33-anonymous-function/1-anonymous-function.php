<?php

# Anonymous Function
$sayHello = function (string $name) {
    echo "Hello Mr.{$name}!" . PHP_EOL;
};

$sayHello("Budi");
$sayHello("Acep");
