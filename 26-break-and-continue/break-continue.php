<?php

// Break Keyword
{
    $counterBreak = 1;
    while (true) {
        # code...
        echo "Hello While Loop Break Ke-{$counterBreak}" . PHP_EOL;
        $counterBreak++;

        if ($counterBreak > 10) {
            break;
        }
    }
}

// Continue For Loop
{
    for ($counter = 0; $counter < 10; $counter++) {
        # code...
        if ($counter % 2 == 1) {
            // Jika Continue Terakses, maka Kode Program dibawah baris continue tidak akan dieksekusi.
            continue;
        }
        echo "Hello Continue For Loop Ke-{$counter}" . PHP_EOL;
    }
}

// Continue Do While Loop
{
    $counterDoWhile = 0;
    do {
        # code...
        ++$counterDoWhile;
        if ($counterDoWhile % 2 == 1) {
            // Jika Continue Terakses, maka Kode Program dibawah baris continue tidak akan dieksekusi.
            continue;
        }
        echo "Hello Continue Do While Loop Ke-{$counterDoWhile}" . PHP_EOL;
    } while ($counterDoWhile < 10);
}

// Continue While Loop
{
    $counterWhileLoop = 0;
    while ($counterWhileLoop < 10) {
        # code...
        ++$counterWhileLoop;
        if ($counterWhileLoop % 2 == 0) {
            // Jika Continue Terakses, maka Kode Program dibawah baris continue tidak akan dieksekusi.
            continue;
        }
        echo "Hello Continue While Loop Ke-{$counterWhileLoop}" . PHP_EOL;
    }
}
