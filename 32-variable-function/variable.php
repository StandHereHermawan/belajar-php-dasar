<?php

# variable function
function foo()
{
    echo "FOO" . PHP_EOL;
}

function bar()
{
    echo "BAR" . PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

# Penggunaan variable function
function sayHello(string $name, $filter)
{
    $nameModified = $filter($name);
    echo "Hello $nameModified!" .  PHP_EOL;
}

function sampleFunction(string $name): string
{
    return "Sample $name";
}

sayHello("Eko", "strtoupper");
sayHello("Arief", "strtolower");
sayHello("Arief", "sampleFunction"); // Memanggil Function sampleHello. 
