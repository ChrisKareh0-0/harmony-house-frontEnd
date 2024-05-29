<?php
require '../src/dotenv.php';
require '../src/db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    echo "username" . ": " . $username . "<br/>";
    echo "email" . ": " . $email . "<br/>";
    echo "phone" . ": " . $phone . "<br/>";
    echo "password" . ": " . $password . "<br/>";

    $sql = "INSERT INTO users (username, email, phone, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Check if prepare() failed
    if ($stmt === false) {
        die("Prepare failed: " . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("ssss", $username, $email, $phone, $password);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . htmlspecialchars($stmt->error);
    }

    $stmt->close();
    $conn->close();
}
?>
