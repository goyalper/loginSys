<?php
include_once('conn.php');

function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

// Function to verify password
function verifyPassword($password, $hashedPassword) {
    return password_verify($password, $hashedPassword);
}

// Login logic
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($userId, $dbUsername, $dbPassword);
    $stmt->fetch();
    $stmt->close();

    if ($dbUsername && verifyPassword($password, $dbPassword)) {
        // Successful login
        $_SESSION["user_id"] = $userId;
        $_SESSION["username"] = $dbUsername;
        header("Location: ../dashboard.php"); // Redirect to dashboard or another page
        exit();
    } 
    else {
        // Invalid credentials
        $error = "Invalid username or password";
    }

$conn->close();
?>
