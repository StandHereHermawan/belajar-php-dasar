<?php

# Tanpa Foreach
$names = ["Arief", "Hilmi", "Bagus"];

for ($index = 0; $index < count($names); $index++) {
    # code...
    echo "Hello {$names[$index]}!"  . PHP_EOL;
}

# Variabel.
$names = ["Arief", "Hilmi", "Bagus"];

# Dengan Foreach
foreach ($names as $name) {
    echo "Hello {$name}!" . PHP_EOL;
}

# Foreach Dengan Key.
foreach ($names as $key => $value) {
    echo "{$key} : {$value}" . PHP_EOL;
}

$person = [
    "first_name"=> "Arief",
    "middle_name"=> "Karditya",
    "last_name"=> "Hermawan",
];

foreach ($person as $key => $value) {
    echo "{$key} : {$value}" . PHP_EOL;
}