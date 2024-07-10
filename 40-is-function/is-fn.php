<?php

$data = "sample";
$number = 100;
$float = 10.23;
$array = [1, 2, 3];
$functionHello = function ($name) {
    echo "Hello Mr.$name!" . PHP_EOL;
};

function checkIsDataType($type)
{
    echo PHP_EOL;
    echo "var_dump(is_bool(\$type))" . PHP_EOL;
    var_dump(is_bool($type));
    echo "var_dump(is_int(\$type))" . PHP_EOL;
    var_dump(is_int($type));
    echo "var_dump(is_float(\$type))" . PHP_EOL;
    var_dump(is_float($type));
    echo "var_dump(is_array(\$type))" . PHP_EOL;
    var_dump(is_array($type));
    echo "var_dump(is_string(\$type))" . PHP_EOL;
    var_dump(is_string($type));
    echo "var_dump(is_callable(\$type))" . PHP_EOL;
    var_dump(is_callable($type));
    echo PHP_EOL;
};

echo "\$data" . PHP_EOL;
checkIsDataType($data);

echo "\$number" . PHP_EOL;
checkIsDataType($number);

echo "\$float" . PHP_EOL;
checkIsDataType($float);

echo "\$array" . PHP_EOL;
checkIsDataType($array);

echo "\$functionHello" . PHP_EOL;
checkIsDataType($functionHello);
