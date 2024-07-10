<?php

$name = "Arief"; # Global Scope Variable

function sayName()
{
    echo $name; # Warning, variable tidak bisa diakses karena diluar local Scope.
}

sayName();
