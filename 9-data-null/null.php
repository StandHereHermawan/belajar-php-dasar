<?php

// Data NULL
$name = "Arief Hermawan";
$name = NULL;

$age = null;

echo "Name\t: ";
echo $name;
echo ";\n";

echo "Age\t: ";
echo $age;
echo ";\n\n";

// Validasi variabel apakah NULL atau bukan.
$name = "Arief Hermawan";
$name = null;

echo "Validasi variabel \$name apakah NULL atau bukan.\n";
echo "var_dump(is_null(\$name)) = ";
$isNull = is_null($name);
var_dump($isNull);

echo "is_null(\$name) = ";
echo is_null($name); // 1 dalam hasil dari function isNull = true.
echo ";\n\n";

// Validasi variabel apakah NULL atau bukan Setelah Di Set Value-nya.
echo "Validasi variabel \$name apakah NULL atau bukan Setelah Di Set Value-nya.\n";
$name = "Arief Hermawan";
echo "var_dump(is_null(\$name)) = ";
$isNull = is_null($name);
var_dump($isNull);

echo "is_null(\$name) = ";
echo is_null($name); // jika hasil dari function isNull = ,(pada konsol kosong). artinya false.
echo ";\n";