<?php
session_start();
header('Content-Type: application/json');

error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rawInput = file_get_contents('php://input');
    $input = json_decode($rawInput, true) ?: $_POST;

    $name = isset($input['name']) ? trim($input['name']) : '';
    $phone = isset($input['phone']) ? preg_replace('/\D/', '', $input['phone']) : '';
    $address = isset($input['address']) ? trim($input['address']) : '';
    $product = isset($input['product']) ? trim($input['product']) : 'Horse Fire Tablets - ₹1199 (60 Tablets)';

    if (empty($name) || empty($address)) {
        echo json_encode([
            'success' => false,
            'message' => 'कृपया पूरा नाम और पूरा पता दर्ज करें।'
        ]);
        exit;
    }

    // Strict 10-Digit Mobile Number Validation
    if (strlen($phone) !== 10) {
        echo json_encode([
            'success' => false,
            'message' => 'कृपया 10-अंकों का सही मोबाइल नंबर दर्ज करें'
        ]);
        exit;
    }

    // Generate unique order ID
    $orderId = 'HF-' . rand(100000, 999999);
    $timestamp = date('Y-m-d H:i:s');

    $newOrder = [
        'orderId' => $orderId,
        'name' => $name,
        'phone' => $phone,
        'address' => $address,
        'product' => $product,
        'createdAt' => $timestamp
    ];

    // 1. Save to local orders.json file database
    $dataFile = __DIR__ . '/orders.json';
    $existingOrders = [];

    if (file_exists($dataFile)) {
        $jsonContent = file_get_contents($dataFile);
        $decoded = json_decode($jsonContent, true);
        if (is_array($decoded)) {
            $existingOrders = $decoded;
        }
    }

    array_unshift($existingOrders, $newOrder);
    file_put_contents($dataFile, json_encode($existingOrders, JSON_PRETTY_PRINT));

    /*
    |--------------------------------------------------------------------------
    | 2. REAL-TIME GOOGLE SHEETS AUTOMATIC SYNC VIA WEBHOOK
    |--------------------------------------------------------------------------
    | Automatically appends every completed order as a new row in your
    | Google Sheet in real-time!
    |--------------------------------------------------------------------------
    */
    $googleSheetWebhookUrl = "https://script.google.com/macros/s/AKfycbzybzmTLY09UbelTrWGuQonMQA-KaIJsDiq8C07eDuPDQBMPYVHBJleFL5NIORBwZYCZQ/exec";

    if (!empty($googleSheetWebhookUrl)) {
        $postData = json_encode([
            'orderId' => $orderId,
            'name' => $name,
            'phone' => $phone,
            'address' => $address,
            'product' => $product,
            'date' => $timestamp
        ]);

        $ch = curl_init($googleSheetWebhookUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 8);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        @curl_exec($ch);
        curl_close($ch);
    }

    echo json_encode([
        'success' => true,
        'orderId' => $orderId,
        'data' => $newOrder
    ]);
    exit;
}

echo json_encode([
    'success' => false,
    'message' => 'Invalid request method.'
]);
