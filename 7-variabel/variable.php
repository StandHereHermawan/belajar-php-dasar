<?php

// Variable
$name = "Arief Karditya Hermawan";
$age = 30;

echo "Variable\n";
echo "Name\t: ";
echo $name;
echo "\n";

echo "Age\t: ";
echo $age;
echo "\n\n";

// Variable Variables
$nameHilmi = "HilmiAkbar";
$$nameHilmi = "Hilmi Akbar Muharrom";

echo "Variable Variables\n";
echo "\$name\t\t= ";
echo $nameHilmi;
echo "\n";

echo "\$HilmiAkbar\t= ";
echo $HilmiAkbar;
echo "\n";
