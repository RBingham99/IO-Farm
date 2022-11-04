<?php

require 'vendor/autoload.php';

header('Content-Type: application/json; charset=utf-8');

use IoFarm\Validators\IdValidator;

if (!isset($_GET['id']) || !IdValidator::valid($_GET['id'])) {
        http_response_code(500);

        $data = [
            "message" => "Bad request",
            "data" => []
        ];

        echo json_encode($data, true);

        exit;
}

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