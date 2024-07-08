<?php

# tanpa variabel argumen
function sumAll1(array $values)
{
    $total = 0;
    foreach ($values as $value) {
        # code...
        $total += $value;
    }
    echo "Total " . implode(" , ", $values) . " = $total" . PHP_EOL;
}

# dengan variabel argumen.
# disarankan posisi parameter pada function dengan variabel argumen ditempatkan pada posisi terakhir.
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        # code...
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

sumAll1([10, 20, 30, 40, 50, 60, 70, 80, 90]);

sumAll(10, 20, 30, 40, 50, 60, 70, 80, 90);
sumAll(1, 2, 3, 4, 5, 6, 7, 8, 9);

# Konversi Tipe data menggunakan "..."
sumAll(...[10, 20, 30, 40, 50, 60, 70, 80, 90]);
sumAll(...[1, 2, 3, 4, 5, 6, 7, 8, 9]);

# Konversi Tipe data menggunakan "..."
$values = [1, 3, 5, 7, 9, 11, 13, 15, 17, 19];
sumAll(...$values);
