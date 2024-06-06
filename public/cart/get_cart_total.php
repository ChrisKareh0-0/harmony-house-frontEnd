<?php
session_start();

$totalPrice = 0;
$totalItems = 0;

if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $item) {
        $totalPrice += $item['price'] * $item['quantity'];
        $totalItems += $item['quantity'];
    }
}

$response = [
    'totalPrice' => $totalPrice,
    'totalItems' => $totalItems
];

echo json_encode($response);
?>
