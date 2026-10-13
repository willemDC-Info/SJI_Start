<?php

declare(strict_types=1);

// Simple CORS headers for local classroom use.
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) ?? '';
$route = str_ends_with($uri, '/tasks');

if (!$route) {
    http_response_code(404);
    echo json_encode(['error' => 'Route not found']);
    exit;
}

// In-memory "database" for starter purposes.
// Students can replace this with a real database later.
$tasks = [
    ['id' => 1, 'text' => 'Read the README exercise'],
    ['id' => 2, 'text' => 'Add your first feature']
];

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo json_encode(['tasks' => $tasks]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rawBody = file_get_contents('php://input');
    $payload = json_decode($rawBody ?: '{}', true);

    if (!is_array($payload) || !isset($payload['text']) || trim((string) $payload['text']) === '') {
        http_response_code(400);
        echo json_encode(['error' => 'Task text is required']);
        exit;
    }

    $tasks[] = [
        'id' => count($tasks) + 1,
        'text' => trim((string) $payload['text'])
    ];

    echo json_encode(['tasks' => $tasks]);
    exit;
}

http_response_code(405);
echo json_encode(['error' => 'Method not allowed']);
