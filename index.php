<?php

require 'vendor/autoload.php';

//$pig = new IoFarm\Entities\Pig();
//
//echo $pig->eat('truffles');

header('Content-Type: application/json; charset=utf-8');

$data =[
    "message" => "Invalid route. Please check the API documentation.",
    "data" => []
];

echo json_encode($data, true);