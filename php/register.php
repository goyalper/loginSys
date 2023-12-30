<?php

include_once('conn.php');

function hashPassword($password) {
    return password_hash($password, PASSWORD_BCRYPT);
}

// Registration logic
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check if the username is available
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $error = "Username is already taken";
    } else {
        // Insert the new user into the database
        $hashedPassword = hashPassword($password);
        $stmt = $conn->prepare("INSERT INTO users (email, username, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $email, $username, $hashedPassword);
        $stmt->execute();

        // Redirect to login page or another page after successful registration
        header("Location: ../");
        exit();
    }

    $stmt->close();

$conn->close();
?>
