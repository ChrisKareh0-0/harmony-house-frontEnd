<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require '../src/dotenv.php';
    require '../src/db_config.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username, email, phone, password) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    // Check if prepare() failed
    if ($stmt === false) {
        die("Prepare failed: " . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("ssss", $username, $email, $phone, $password);

    if ($stmt->execute()) {
        // Registration successful, set the session variable and redirect
        $_SESSION['username'] = $username;
        header("Location: ../home/index.php");
        exit();
    } else {
        // Error occurred, stay on the registration page
        $error = "Error: " . htmlspecialchars($stmt->error);
        // Redirect back to registration page with error message
        header("Location: register.php?error=" . urlencode($error));
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
