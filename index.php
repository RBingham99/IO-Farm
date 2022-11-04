<?php

require_once 'vendor/autoload.php';

//$pig = new IoFarm\Entities\Pig();
//
//echo $pig->eat('truffles');

$data =[
    "message" => "Invalid route. Please check the API documentation.",
    "data" => []
];

echo json_encode($data, true);