<?php

function &getValue(): int
{
    static $value = 100;
    return $value;
}

$varA = &getValue(); # varA = 100; sesuai dengan field static pada function.
echo $varA . PHP_EOL;

$varA = 200; # &getValue = 200 && varA = 200; value pada field static function ikut berubah dari 100 menjadi 200.
echo $varA . PHP_EOL;

$varB = &getValue(); # varB = 200;
echo $varB . PHP_EOL;
echo $varA . PHP_EOL;

$varB = 300;
echo $varB . PHP_EOL;
echo $varA . PHP_EOL;