<?php
session_start();

if (isset($_POST['id'])) {
    $productId = $_POST['id'];
    if (isset($_SESSION['cart'][$productId])) {
        unset($_SESSION['cart'][$productId]);
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['error' => 'Item not found in cart']);
    }
} else {
    echo json_encode(['error' => 'No product ID provided']);
}
?>
