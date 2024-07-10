<?php

$data = [1, 2, 3];

# Mengubah semua data array dengan callback
# array_map() Cara 1 dengan arrow function dalam variable.
$functionModify = fn ($data) => $data * 2;
echo "\$functionModify = fn (\$data) => \$data * 2" . PHP_EOL;
echo "var_dump(array_map(\$functionModify, \$data))" . PHP_EOL;
var_dump(array_map($functionModify, $data));


# array_map() Cara 2 dengan arrow function langsung dalam function.
echo PHP_EOL . PHP_EOL . "var_dump(array_map(fn (\$data) => \$data * 2, \$data))" . PHP_EOL;
var_dump(array_map(fn ($data) => $data * 2, $data));

# Menampilkan isi Array.
echo PHP_EOL . PHP_EOL . "var_dump(\$data)" . PHP_EOL;
var_dump($data);


# Mengurutkan array terbalik
echo PHP_EOL . PHP_EOL . "rsort(\$data, SORT_NUMERIC)" . PHP_EOL;
rsort($data, SORT_NUMERIC);
echo "var_dump(\$data)" . PHP_EOL;
var_dump($data);


# Mengurutkan array terbalik cara 2.
echo PHP_EOL . PHP_EOL . "rsort(\$data)" . PHP_EOL;
rsort($data);
echo "var_dump(\$data)" . PHP_EOL;
var_dump($data);


# Mengurutkan array.
echo PHP_EOL . PHP_EOL . "sort(\$data)" . PHP_EOL;
sort($data);
echo "var_dump(\$data)" . PHP_EOL;
var_dump($data);


# array_keys() Mengambil semua keys milik array
echo PHP_EOL . PHP_EOL . "var_dump(array_keys(\$data))" . PHP_EOL;
var_dump(array_keys($data));


# array_keys() Mengambil semua value milik array
echo PHP_EOL . PHP_EOL . "var_dump(array_values(\$data))" . PHP_EOL;
var_dump(array_values($data));


$arief = [
    "firstName" => "Arief",
    "middleName" => "Karditya",
    "lastName" => "Hermawan",
];


echo PHP_EOL . PHP_EOL . "var_dump(array_keys(\$arief))" . PHP_EOL;
var_dump(array_keys($arief));


# array_keys() Mengambil semua value milik array
echo PHP_EOL . PHP_EOL . "var_dump(array_values(\$arief))" . PHP_EOL;
var_dump(array_values($arief));
