<?php

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye {$finalName}." . PHP_EOL;
}

# Anonymous Function Sebagai Argument tanpa deklarasi variable function.
sayGoodBye("Arief", function (string $name): string {
    return strtoupper($name);
});


# Anonymous Function Sebagai Argument dengan deklarasi variable function.
$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodBye("Hilmi", $filterFunction);
