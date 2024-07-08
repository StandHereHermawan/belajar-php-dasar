<?php

# Default argument yang salah.
function sayHello2($first_name = "Anonymous", $middle_name)
{
    echo "Hello {$first_name} {$middle_name}! From sayHello2." . PHP_EOL;
}

sayHello2("Karditya");
sayHello2("Arief", "Karditya");
