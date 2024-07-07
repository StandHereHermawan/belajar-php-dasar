<?php

$value = 10;
echo "\$value = ";
var_dump($value);
echo "\n";

echo "Post Increment Behavior.\n";
echo "\$value2 = \$value++;\n";
$value2 = $value++;
echo "\$value2 = ";
var_dump($value2);
echo "\$value = ";
var_dump($value);
echo "\n";

$value = 10;
echo "Pre Increment Behavior.\n";
echo "\$value3 = ++\$value;\n";
$value3 = ++$value;
echo "\$value3 = ";
var_dump($value3);
echo "\$value = ";
var_dump($value);
echo "\n";

$value = 10;
echo "\$value = ";
var_dump($value);
echo "\n";

echo "Post Decrement Behavior.\n";
echo "\$value2 = \$value--;\n";
$value2 = $value--;
echo "\$value2 = ";
var_dump($value2);
echo "\$value = ";
var_dump($value);
echo "\n";

$value = 10;
echo "Post Decrement Behavior.\n";
echo "\$value3 = --\$value;\n";
$value3 = --$value;
echo "\$value3 = ";
var_dump($value3);
echo "\$value = ";
var_dump($value);
echo "\n";