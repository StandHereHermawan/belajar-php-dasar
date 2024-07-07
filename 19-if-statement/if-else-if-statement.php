<?php

// if-else-if statement.
$nilai = 51;
$absen = 100;

if ($nilai >= 81 && $absen >= 81) {
    echo "Nilai Anda A." . PHP_EOL;
} elseif ($nilai >= 71 && $absen >= 71) {
    echo "Nilai Anda AB." . PHP_EOL;
} elseif ($nilai >= 61 && $absen >= 61) {
    echo "Nilai Anda B." . PHP_EOL;
} elseif ($nilai >= 51 && $absen >= 51) {
    echo "Nilai Anda BC." . PHP_EOL;
} elseif ($nilai >= 41 && $absen >= 41) {
    echo "Nilai Anda C." . PHP_EOL;
} elseif ($nilai >= 21 && $absen >= 21) {
    echo "Nilai Anda D." . PHP_EOL;
    echo "Anda Tidak Lulus." . PHP_EOL;
} else {
    echo "Anda Tidak Lulus." . PHP_EOL;
}
