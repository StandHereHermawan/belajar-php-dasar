<?php

/**
 * Tipe Data Integer
 * */
echo "Decimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(0123);

echo "Hexadecimal :";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b11111111);

echo "UnderScore di number : ";
var_dump(1_234_567);

/**
 * Tipe Data Floating Point
 * */
echo "Floating Point";
var_dump(1.234);

echo "Floating Point dengan E notation Plus (1.2 X 1000) : ";
var_dump(1.2e3);

echo "Floating Point dengan E notation Minus (7 X 0.001) : ";
var_dump(7e-3);

echo "UnderScore di Floating Point : ";
var_dump(1_234_567.890);

// Integer Overflow
echo "Integer Overflow 32Bit : ";
var_dump(2147483648);

echo "Integer Limit 64Bit : ";
var_dump(9223372036854775807);

echo "Integer Overflow 64Bit : ";
var_dump(9223372036854775808);
