<?php

$first = [
    "firstName" => "Arief",
];

$last = [
    "firstName" => "Karditya",
    "lastName" => "Hermawan",
];

$full1 = $first + $last;
$full2 = $last + $first;

var_dump($full1);
var_dump($full2);
