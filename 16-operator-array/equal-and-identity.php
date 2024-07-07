<?php

$last1 = [
    "firstName" => "Karditya",
    "lastName" => "Hermawan",
];

$last2 = [
    "lastName" => "Hermawan",
    "firstName" => "Karditya",
];

var_dump($last1 == $last2);
var_dump($last2 === $last1);