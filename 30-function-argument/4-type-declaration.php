<?php

function showSumConsole(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

showSumConsole("100", "120");
showSumConsole(100, 120);
showSumConsole(true, false);
# Kode Baris 13 Errors.
# showSumConsole([], []);
