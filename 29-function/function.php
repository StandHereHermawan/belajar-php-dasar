<?php

# Function.
function sayHello()
{
    echo "Hello in Function!" . PHP_EOL;
}

sayHello();
sayHello();


function sayHi($buat)
{
    if ($buat == true) :
        function hiFunction()
        {
            echo "Hi!" . PHP_EOL;
        }
    endif;
}

sayHi(true) . hiFunction();



$buat = false;

if ($buat == true) :
    function hi()
    {
        echo "Hi!" . PHP_EOL;
    }
else :
    goto label_end;
endif;

hi();

label_end:
