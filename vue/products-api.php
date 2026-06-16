<?php
header('Content-Type: application/json');

$storageFile = __DIR__ . '/products_mock.json';

if (!file_exists($storageFile)) {
    $initialData = [
        [
            "id" => 101,
            "name" => "Logitech MX Master 3S",
            "sku" => "PER-LOG-MX3",
            "category" => "Peripherals",
            "price" => 99.99,
            "cost" => 45.00,
            "stock" => 42,
            "sold" => 128,
            "returned" => 2,
            "status" => "Active",
            "image" => "https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?auto=format&fit=crop&w=256&h=256&q=80"
        ],
        [
            "id" => 102,
            "name" => "Mechanical Keyboard Keychron K2",
            "sku" => "PER-KEY-K2",
            "category" => "Peripherals",
            "price" => 79.50,
            "cost" => 35.00,
            "stock" => 0,
            "sold" => 340,
            "returned" => 15,
            "status" => "Active",
            "image" => "https://images.unsplash.com/photo-1595225476474-87563907a212?auto=format&fit=crop&w=256&h=256&q=80"
        ],
        [
            "id" => 103,
            "name" => "UltraWide Monitor Mount",
            "sku" => "ACC-MNT-UW",
            "category" => "Accessories",
            "price" => 129.00,
            "cost" => 60.00,
            "stock" => 8,
            "sold" => 45,
            "returned" => 0,
            "status" => "Draft",
            "image" => ""
        ]
    ];
    file_put_contents($storageFile, json_encode($initialData, JSON_PRETTY_PRINT));
}

$currentProducts = json_decode(file_get_contents($storageFile), true);

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['action']) && $_GET['action'] === 'list') {
    echo json_encode($currentProducts);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    
    if (isset($input['action'])) {
        if ($input['action'] === 'create') {
            $newProduct = [
                "id" => time(),
                "name" => htmlspecialchars($input['name']),
                "sku" => htmlspecialchars($input['sku']),
                "category" => htmlspecialchars($input['category']),
                "price" => floatval($input['price']),
                "cost" => floatval($input['cost']),
                "stock" => intval($input['stock']),
                "sold" => intval($input['sold']),
                "returned" => intval($input['returned']),
                "status" => htmlspecialchars($input['status']),
                "image" => htmlspecialchars($input['image'])
            ];
            array_unshift($currentProducts, $newProduct); // Adds to the top
        } 
        
        if ($input['action'] === 'update') {
            foreach ($currentProducts as &$product) {
                if ($product['id'] == $input['id']) {
                    $product['name'] = htmlspecialchars($input['name']);
                    $product['sku'] = htmlspecialchars($input['sku']);
                    $product['category'] = htmlspecialchars($input['category']);
                    $product['price'] = floatval($input['price']);
                    $product['cost'] = floatval($input['cost']);
                    $product['stock'] = intval($input['stock']);
                    $product['sold'] = intval($input['sold']);
                    $product['returned'] = intval($input['returned']);
                    $product['status'] = htmlspecialchars($input['status']);
                    $product['image'] = htmlspecialchars($input['image']);
                    break;
                }
            }
        }

        file_put_contents($storageFile, json_encode($currentProducts, JSON_PRETTY_PRINT));
        echo json_encode(["status" => "success"]);
        exit;
    }
}