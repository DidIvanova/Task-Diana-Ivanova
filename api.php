<?php
function getAccessToken() {
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.baubuddy.de/index.php/login",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode([
            "username" => "365",
            "password" => "1"
        ]),
        CURLOPT_HTTPHEADER => [
            "Authorization: Basic QVBJX0V4cGxvcmVyOjEyMzQ1NmlzQUxhbWVQYXNz",
            "Content-Type: application/json"
        ],
    ]);
    $response = curl_exec($curl);
    curl_close($curl);

    $responseData = json_decode($response, true);
    return $responseData["oauth"]["access_token"] ?? null;
}

function fetchTasks() {
    $token = getAccessToken();
    if (!$token) {
        http_response_code(500);
        echo json_encode(["error" => "Failed to get access token"]);
        return;
    }

    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.baubuddy.de/dev/index.php/v1/tasks/select",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_HTTPHEADER => [
            "Authorization: Bearer $token",
            "Content-Type: application/json"
        ],
    ]);
    $response = curl_exec($curl);
    curl_close($curl);

    $tasks = json_decode($response, true);

   
    foreach ($tasks as &$task) {
        if (empty($task['colorCode'])) {
            $task['colorCode'] = "#FFFFFF"; 
        }
    }

    echo json_encode($tasks);
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    fetchTasks();
}
?>
