<?php

// Tanpa Null Coalescing Operator.
$data = [];

if (isset($data["action"])) {
    $action = $data["action"];
} else {
    $action = "Nothing";
}

echo $action . PHP_EOL;

// Null Coalescing Operator.
$data = [
    "action" => "Watch Youtube",
];
$action = $data["action"] ?? "Nothing";

echo $action . PHP_EOL;
