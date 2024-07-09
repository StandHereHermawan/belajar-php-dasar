<?php

# Factorial Loop
function loopForLoop(int $value): int
{
    $total = 1;
    for ($i = 1; $i <= $value; $i++) :
        $total *= $i;
    endfor;
    return $total;
};
var_dump(loopForLoop(5));

# Factorial Recursive
function factorialRecursive(int $value): int
{
    switch ($value):
        case 1:
            return 1;
        default:
            return $value * factorialRecursive($value - 1);
    endswitch;
}

var_dump(factorialRecursive(5));

# How Recursive function works especially factorialRecursive:
# factorialRecursive(5) * factorialRecursive(4) * factorialRecursive(3) * factorialRecursive(2) * factorialRecursive(1);
