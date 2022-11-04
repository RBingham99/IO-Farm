<?php

require 'vendor/autoload.php';

header('Content-Type: application/json; charset=utf-8');

$pigService = new IoFarm\Services\PigService();
$pigColl = $pigService->getPigColl();

$data =[
    "message" => "Successfully retrieved pigs.",
    "data" => $pigColl->getPigs()
];

echo json_encode($data, true);