<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = $_POST['id'];
    $productName = $_POST['name'];
    $productPrice = $_POST['price'];
    
    $cartItem = array(
        'id' => $productId,
        'name' => $productName,
        'price' => $productPrice,
        'quantity' => 1
    );

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    // Check if the product already exists in the cart
    $productExists = false;
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $productId) {
            $item['quantity']++;
            $productExists = true;
            break;
        }
    }

    if (!$productExists) {
        $_SESSION['cart'][] = $cartItem;
    }

    echo json_encode(array('status' => 'success'));
} else {
    echo json_encode(array('status' => 'error'));
}
?>
