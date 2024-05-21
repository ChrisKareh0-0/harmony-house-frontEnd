<?php
require '../backend/database/dotenv.php';
require '../backend/database/db_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            echo "Login successful!";
            session_start();
            $_SESSION['username'] = $username;
            header("Location: protected_page.php");
        } else {
            echo "Invalid password.";
            header("Location: ./login.html")
        }
    } else {
        echo "No user found with that username.";
    }

    $stmt->close();
    $conn->close();
} 
?>
