<?php

// Unset dan Isset.
$value = 100_000;
echo "\$value = ";
echo $value;
echo ";\n";

unset($value);
// $value is unset.
echo "unset(\$value);\n";

echo "var_dump(isset(\$value)) = ";
var_dump(isset($value));

$value = 100_000;
// $value is set to 100_000.
echo "\$value = ";
echo $value;
echo ";\n";
echo "var_dump(isset(\$value)) = ";
var_dump(isset($value));

// Gunakan unset jika ingin menghapus value dari variabel dan juga menghapus varibelnya.