<?php

# Jika File Pada Include Tidak ada, program tetap berjalan.
include "1-myFunctionSalah.php";
# hanya berbeda Error.

echo "\tTest Before All Function after include syntax.\n\tTest Before All Function after include syntax.  " . PHP_EOL;
echo sayHello("Arief", "Karditya");
echo "\tTest After sayHello Function.\n\tTest After sayHello Function." . PHP_EOL;

# Jika File Pada Require Tidak ada, program tetap berjalan.
require "library/librarySalah.php";

echo sayGoodBye("Arief", "Karditya");

echo "\tTest After All Function." . PHP_EOL;
