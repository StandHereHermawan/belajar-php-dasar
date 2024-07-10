<?php

function increment(int $value)
{
    $value++;
}

function incrementWithReference(int &$value)
{
    $value++;
}

$counter = 1;
increment($counter); # $counter Tidak Naik. Karena Parameter function increment Bukan Reference
echo $counter . PHP_EOL;

$counter = 1;
incrementWithReference($counter); # $counter Naik. Karena Parameter function increment menggunakan Reference

echo $counter . PHP_EOL;
