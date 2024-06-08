<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require '../src/dotenv.php';
    require '../src/db_config.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) == 0 || strlen($password) == 0) {
        header("Location: ./login.html");
        exit;
    }
    
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

    // Check if prepare() failed
    if ($stmt === false) {
        die("Prepare failed: " . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();

        if (password_verify($password, $hashed_password)) {
            session_start();
            $_SESSION['username'] = $username;
            header("Location: ./home/index.php");
            exit;
        } else {
            echo "Invalid password.";
            header("Location: ./login.html");
            exit;
        }
    } else {
        echo "No user found with that username.";
        // header("Location: ./login.html?error=No user found with that username.");
    }

    $stmt->close();
    $conn->close();
}

?>
