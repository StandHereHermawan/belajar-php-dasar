<?php

# join() / implode()
# Menggabungkan array menjadi string
var_dump(join(",", [1, 2, 3, 4, 5, 6, 7]));
var_dump(implode(",", [1, 2, 3, 4, 5, 6, 7]));

# explode()
# Memecah string menjadi array
var_dump(explode(" ", "Arief Karditya Hermawan"));

# strtolower() 
# Mengubah string menjadi lowercase
var_dump(strtolower("Arief Karditya Hermawan"));

# strtoupper()
# Mengubah string menjadi uppercase
var_dump(strtoupper("Arief Karditya Hermawan"));

# trim()
# Menghapus whitespace di depan dan belakang string
var_dump(trim("    Arief   "));
var_dump(trim("    Arief    Karditya    Hermawan   "));

# substr()
# Mengambil sebagian string
var_dump(substr("Arief Karditya Hermawan", 0, 5));
var_dump(substr("Arief Karditya Hermawan", 6));
