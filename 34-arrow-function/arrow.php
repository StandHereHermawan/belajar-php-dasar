<?php

$firstName = "Hilmi";
$lastName = "Akbar";
$email = "noir02@example.com";

$anonymousFunctionSayHelloPeople = function () use ($firstName, $lastName, $email): string {
    return "Hello $firstName $lastName! with e-mail: $email in anonymous function." . PHP_EOL;
};

$arrowFunctionSayHelloPeople = fn () => "Hello $firstName $lastName! with e-mail: $email in arrow function" . PHP_EOL;

echo $arrowFunctionSayHelloPeople();
echo $anonymousFunctionSayHelloPeople();
