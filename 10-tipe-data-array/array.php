<?php

// Membuat Array.
{
    // Cara Pertama Membuat Array.
    echo "Membuat Array.\n";
    $values = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15);
    echo "var_dump(\$values) = ";
    var_dump($values);
    echo "\n\n";

    echo "Membuat Array.\n";
    $valuesOther = array(1, 2, 3, 4, 5.5, 6, 7, 8, 9.9, 9.9, 10, 11, 12, 13, 14, 15, 19.9);
    echo "var_dump(\$values) = ";
    var_dump($valuesOther);
    echo "\n\n";

    // Cara Kedua Membuat Array.
    $names = ["Arief", "Karditya", "Hermawan"];
    echo "var_dump(\$names) = ";
    var_dump($names);
    echo "\n\n";
}

// Operasi Array.
{
    echo "Operasi Array.\n";
    $names = ["Arief Karditya", "Erlang Anggara", "Fatan Basyari"];
    var_dump($names);
    echo "\n\n";

    // Mengakses Array dengan index default berupa Integer.
    echo "var_dump(\$names[0]) = ";
    var_dump($names[0]);
    echo "\n\n";

    echo "\$names[0] = \"Indra Julia\";\n";
    $names[0] = "Indra Julia";
    echo "var_dump(\$names) = ";
    var_dump($names);
    echo "\n\n";

    echo "unset(\$names[1]);\n";
    unset($names[1]);
    echo "var_dump(\$names) = ";
    var_dump($names);
    echo "\n\n";

    // Menambah Data ke Array.
    echo "\$names[] = \"Hilmi Akbar\";\n";
    $names[] = "Hilmi Akbar";
    echo "var_dump(\$names) = ";
    var_dump($names);
    echo "\n\n";

    // Menghitung Jumlah Data Dalam Array.
    echo "var_dump(count(\$names)) = ";
    var_dump(count($names));
    echo "\n\n";
}

// Array sebagai Map, Membuat Map
{
    echo "Array sebagai Map, Membuat Map.\n";
    $arief = array(
        "id" => "arief",
        "name" => "Arief Karditya Hermawan",
        "age" => 21
    );
    echo "var_dump(\$arief) = ";
    var_dump($arief);
    echo "\n\n";

    // Mengakses Array dengan index string.
    echo "var_dump(\$arief[\"name\"]) = ";
    var_dump($arief["name"]);
    echo "\n\n";

    $hilmi = [
        "id" => "hilmi",
        "name" => "Hilmi Akbar Muharrom",
        "age" => 20
    ];
    var_dump($hilmi);
    echo "\n\n";
}

// Array Didalam Array
{
    echo "Array Didalam Array.\n";
    $arief = array(
        "id" => "arief",
        "name" => "Arief Karditya Hermawan",
        "age" => 21,
        "address" => [
            "district" => "Rancaekek",
            "city" => "Kabupaten Bandung",
            "province" => "Jawa Barat"
        ]
    );
    echo "var_dump(\$arief) = ";
    var_dump($arief);
    echo "\n\n";

    // Mengakses Array didalam array dengan index string.
    echo "var_dump(\$arief[\"address\"][\"district\"]) = ";
    var_dump($arief["address"]["district"]);
}
