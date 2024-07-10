<?php

function createName()
{
    $name = "Arief"; # Local Scope Variable

}

createName();
echo $name; # Warning, variable tidak bisa diakses karena diluar Global Scope.
