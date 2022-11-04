<?php

require 'vendor/autoload.php';

header('Content-Type: application/json; charset=utf-8');

// TODO: Validate $_GET['id]

try {
    $pigService = new IoFarm\Services\PigService();
    $pig = $pigService->getPig($_GET['id']);

    $data = [
        "message" => "Successfully retrieved pig.",
        "data" => $pig
    ];
} catch (InvalidArgumentException $e) {
    http_response_code(400);
    $data = [
        "message" => "Bad request",
        "data" => []
    ];
} catch (Exception $e) {
    http_response_code(500);
    $data = [
        "message" => "Server error",
        "data" => []
    ];
}
echo json_encode($data, true);