<?php

$firstName = "Arief";
$lastName = "Karditya";

# Menggunakan Variable $firstName dan $lastName diatas.
$sayHelloArief = function () use ($firstName, $lastName) {
    echo "Hello Mr.{$firstName} {$lastName}!" . PHP_EOL;
};

$sayHelloArief();

$firstName = "Hermawan";
$lastName = "Arief";

# Value dalam function tidak berubah meski value dari variable diubah.
$sayHelloArief();

$sayHelloHermawan = function () use ($firstName, $lastName) {
    echo "Hello Mr.{$firstName} {$lastName}!" . PHP_EOL;
};

$sayHelloHermawan();