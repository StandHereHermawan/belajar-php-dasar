<?php
# goto Operator.
echo "Hello Line 3" . PHP_EOL;

echo "Hello Line 5" . PHP_EOL;

echo "Hello Line 7" . PHP_EOL;

echo "goto label_a;" . PHP_EOL;
goto label_a;

# kode diskip sampai baris kode dibawah label a;
echo "Hello Line 13" . PHP_EOL;


label_a:
echo "Hello Line 17" . PHP_EOL . PHP_EOL;

/**
 * goto operator di while loop
 */
$counter = 1;
while (true) {
    echo "While Loop goto opt ke-{$counter}" . PHP_EOL;
    ++$counter;
    switch ($counter):
        case 11:
            goto end;
    endswitch;
}

end:
echo "End of Loop." . PHP_EOL;
