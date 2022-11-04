<?php
require 'vendor/autoload.php';

header('Content-Type: application/json; charset=utf-8');

$data =[
    "message" => "Successfully retrieved pigs.",
    "data" => []
];

echo json_encode($data, true);