<?php

function loopRecursive(int $value)
{
    switch ($value) {
        case 0:
            # code...
            echo "Selesai";
            break;
        default:
            # code...
            echo "Loop-{$value}." . PHP_EOL;
            loopRecursive($value - 1);
            break;
    }
};

function loopForLoop(int $value)
{
    for ($iterate = 0; $iterate < $value; $iterate++) :
        $number = $iterate + 1;
        switch ($iterate < $value - 1):
            case true:
                echo "{$number}. For Loop Ke-{$number}." . PHP_EOL;
                break;
            case false:
                echo "{$number}. For Loop Ke-{$number}." . PHP_EOL;
                echo "For Loop Selesai." . PHP_EOL;
                break;
        endswitch;
    endfor;
};

loopForLoop(1_000_000);
loopRecursive(3_000_000);
