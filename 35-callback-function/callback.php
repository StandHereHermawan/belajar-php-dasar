<?php

# callback function adalah function yang diparameternya memanggil function yang lain.
function sayHello(string $name, callable $filterName)
{
    $filteredName = call_user_func($filterName, $name); /* call_user_func($filterName, $name) = $filterName($name); call_user_func = Call User Function. */
    echo "Hello $filteredName" . PHP_EOL;
}

# Anonymous Function Parameter.
# Cara 1.
$toUpperCase = function (string $name): string {
    return strtoupper($name);
};
sayHello("Hilmi", $toUpperCase);

# Cara 2.
sayHello("Hilmi", function (string $name): string {
    return strtoupper($name);
});

# Arrow Function.
sayHello("Hilmi", fn (string $name) => strtoupper($name));

# Variable Function.
sayHello("Hilmi", "strtoupper");
sayHello("Hilmi", "strtolower");
