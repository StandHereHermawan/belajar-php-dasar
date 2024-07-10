<?php

$name = "Arief";

$otherName = "Joko";
echo $otherName . PHP_EOL;

$otherName = $name;
echo $otherName . PHP_EOL;

$otherName = "Anjas";
echo $otherName . PHP_EOL;
echo $name . PHP_EOL;


$otherName = &$name; # Membuat variable $otherName menjadi referensi dari variable $name. apabila $otherName Berubah, $name juga ikut berubah.
echo $otherName . PHP_EOL;

$otherName = "Budi"; # Mengubah Value dari $name karena $otherName adalah Shortcut atau alias dari $name.
echo $otherName . PHP_EOL;
echo $name . PHP_EOL;
