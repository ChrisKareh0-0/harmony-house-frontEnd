<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the product details from the POST request
    $productId = $_POST['id'];
    $productName = $_POST['name'];
    $productPrice = $_POST['price'];
    $quantity = $_POST['quantity'];

    // Initialize the cart if it doesn't exist
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    // Check if the product is already in the cart
    $productExists = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $productId) {
            // Update the quantity if the product already exists in the cart
            $item['quantity'] += $quantity;
            $productExists = true;
            break;
        }
    }

    // If the product is not in the cart, add it as a new item
    if (!$productExists) {
        $_SESSION['cart'][] = [
            'id' => $productId,
            'name' => $productName,
            'price' => $productPrice,
            'quantity' => $quantity
        ];
    }

    // Calculate the total price and total items
    $totalPrice = 0;
    $totalItems = 0;
    foreach ($_SESSION['cart'] as $item) {
        $totalPrice += $item['price'] * $item['quantity'];
        $totalItems += $item['quantity'];
    }

    // Create a response array
    $response = [
        'totalPrice' => $totalPrice,
        'totalItems' => $totalItems,
        'cart' => $_SESSION['cart']
    ];

    // Send the response back to the client
    echo json_encode($response);
}
?>
