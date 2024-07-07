<?php

$first = [
    "firstName" => "Arief",
];

$middle = [
    "middleName" => "Karditya",
];

$last = [
    "lastName" => "Hermawan",
];

$fullName1 = $first + $middle + $last;
$fullName2 = $first + $last + $middle;

echo "Union Array.\n";
echo "\$fullName1 = \$first + \$middle + \$last;\n";
var_dump($fullName1);

echo "\nEquality Array.\n";
echo "\$fullName1 == \$fullName2\n";
var_dump($fullName1 == $fullName2);

echo "\nIdentity Array.\n";
echo "\$fullName1 === \$fullName2\n";
var_dump($fullName1 === $fullName2);

echo "\nInequality Array !=\n";
echo "\$fullName1 != \$fullName2\n";
var_dump($fullName1 != $fullName2);

echo "\nInequality Array <>\n";
echo "\$fullName1 <> \$fullName2\n";
var_dump($fullName1 <> $fullName2);

echo "\nIdentity Array.\n";
echo "\$fullName1 !== \$fullName2\n";
var_dump($fullName1 !== $fullName2);