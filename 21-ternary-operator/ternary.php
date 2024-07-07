<?php

// Bukan Ternary Operator
$tipeATM = "Debit";

$hi = null;
if ($tipeATM == "Debit") {
    # code...
    $hi = "Halo, Debit!";
} else {
    # code...
    $hi = "Halo, Credit!";
}

echo $hi . PHP_EOL;

// Ternary Operator
$gender = "WANITA";
$hi = $gender == "PRIA" ? "Halo, Pak!" : "Halo, Buk!";

echo $hi . PHP_EOL;
