<?php

# Contoh 1
function sayHello($name = "Anonymous")
{
    echo "Hello {$name}! From sayHello." . PHP_EOL;
}

# Contoh 2
function sayHello2($first_name, $middle_name = "Anonymous")
{
    echo "Hello {$first_name} {$middle_name}! From sayHello2." . PHP_EOL;
}

# Contoh 3
function sayHello3($first_name = "Anonymous", $middle_name = "Anonymous", $last_name = "Anonymous")
{
    echo "Hello {$first_name} {$middle_name} {$last_name}! From sayHello3." . PHP_EOL;
}

sayHello("Arief");
sayHello("Hilmi");

sayHello2("Arief");
sayHello2("Arief", "Karditya");

sayHello3();
sayHello3("Arief", "Karditya");
sayHello3("Arief", "Karditya", "Hermawan");
