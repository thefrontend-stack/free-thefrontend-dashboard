<?php
header('Content-Type: application/json');

// Arquivo mock JSON persistente em disco para simular o DB
$storageFile = __DIR__ . '/users_mock.json';

if (!file_exists($storageFile)) {
    $initialData = [
        [
            "id" => 1,
            "name" => "Ethan Vance",
            "email" => "ethan.vance@domain.com",
            "phone" => "+1 (555) 234-5678",
            "created_at" => "2026-01-14",
            "status" => "Active",
            "avatar" => "https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80",
            "notes" => "Premium partner account manager."
        ],
        [
            "id" => 2,
            "name" => "Marcus Brody",
            "email" => "m.brody@archive.org",
            "phone" => "+1 (555) 876-5432",
            "created_at" => "2026-03-22",
            "status" => "Pending",
            "avatar" => "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=facearea&facepad=2&w=256&h=256&q=80",
            "notes" => "Awaiting verification compliance logs."
        ]
    ];
    file_put_contents($storageFile, json_encode($initialData, JSON_PRETTY_PRINT));
}

$currentUsers = json_decode(file_get_contents($storageFile), true);

// Execuções das requisições baseadas no verbo HTTP
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (isset($_GET['action']) && $_GET['action'] === 'list') {
        echo json_encode($currentUsers);
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (isset($input['action'])) {
        if ($input['action'] === 'create') {
            $newUser = [
                "id" => time(), // ID único temporário
                "name" => htmlspecialchars($input['name']),
                "email" => htmlspecialchars($input['email']),
                "phone" => htmlspecialchars($input['phone']),
                "created_at" => date('Y-m-d'),
                "status" => htmlspecialchars($input['status']),
                "avatar" => htmlspecialchars($input['avatar']),
                "notes" => htmlspecialchars($input['notes'])
            ];
            $currentUsers[] = $newUser;
        } 
        
        if ($input['action'] === 'update') {
            foreach ($currentUsers as &$user) {
                if ($user['id'] == $input['id']) {
                    $user['name'] = htmlspecialchars($input['name']);
                    $user['email'] = htmlspecialchars($input['email']);
                    $user['phone'] = htmlspecialchars($input['phone']);
                    $user['status'] = htmlspecialchars($input['status']);
                    $user['avatar'] = htmlspecialchars($input['avatar']);
                    $user['notes'] = htmlspecialchars($input['notes']);
                    break;
                }
            }
        }

        file_put_contents($storageFile, json_encode($currentUsers, JSON_PRETTY_PRINT));
        echo json_encode(["status" => "success"]);
        exit;
    }
}