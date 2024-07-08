<?php

# function return value 1
function sum(int $first, int $second): int
{
    return $first + $second;
}

$total = sum(10, 10);
var_dump($total);

$total2 = sum(20, 10);
var_dump($total);

# function return value 2
function getFinalValue(int $value): string
{
    if ($value >= 81) :
        # code...
        return "A";
    elseif ($value >= 71) :
        # code...
        return "AB";
    elseif ($value >= 61) :
        # code...
        return "B";
    elseif ($value >= 51) :
        # code...
        return "BC";
    elseif ($value >= 41) :
        # code...
        return "C";
    elseif ($value >= 21) :
        # code...
        return "D";
    else :
        return "E";
    endif;
}

$result = getFinalValue(80);
var_dump($result);

$result = getFinalValue(70);
var_dump($result);

$result = getFinalValue(60);
var_dump($result);

$result = getFinalValue(50);
var_dump($result);
