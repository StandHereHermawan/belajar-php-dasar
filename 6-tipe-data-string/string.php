<?php

/**
 * Single Quote String.
 */
echo "Single Quote String. ";
echo 'Nama: ';
echo 'Arief Karditya Hermawan';

/**
 * Double Quote String.
 */
echo "\n\n";
echo "Double Quote String.";
echo "\n";
echo "Nama\t: ";
echo "Hilmi Akbar Muharrom";
echo "\n";
echo "Nama\t: Arief Karditya Hermawan\n";
echo "Prodi\t: Sistem Informasi\n";
echo "\n";

/**
 * Heredoc
 */
echo <<<ARIEF
"HereDoc"
Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Cum quis dolore non nesciunt, architecto a, 
porro ducimus consectetur ut et reiciendis! 
Magni ipsum exercitationem sint veniam ullam saepe iusto doloremque!
"Bisa quote" dan ENTER gak manual juga.


ARIEF;

/**
 * Nowdoc
 */
echo <<<'HILMI'
"NowDoc"
Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
Perferendis cumque aspernatur at quod doloremque architecto mollitia eius, 
error eos veritatis expedita aliquid quaerat rerum esse. 
Alias autem ipsum cumque mollitia?
"Bisa quote" dan ENTER gak manual juga.


HILMI;