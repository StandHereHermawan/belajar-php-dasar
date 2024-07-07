<?php

$nilai = "A";

switch ($nilai) {
    case "A":
        echo "Nilai anda A. Anda Lulus dengan Sangat Baik." . PHP_EOL;
        break;
    case "AB":
        echo "Nilai anda AB. Anda Lulus dengan Sangat Baik." . PHP_EOL;
        break;
    case "B":
        echo "Nilai anda B. Anda Lulus dengan Baik." . PHP_EOL;
        break;
    case "BC":
        echo "Nilai anda BC. Anda Lulus dengan Baik." . PHP_EOL;
        break;
    case "C":
        echo "Nilai anda C. Anda Lulus." . PHP_EOL;
        break;
    case "D":
        echo "Nilai anda D. Anda Tidak Lulus." . PHP_EOL;
        break;
    default:
        echo "Nilai anda E. Anda Tidak Lulus dengan Sangat Baik." . PHP_EOL;
        break;
}
