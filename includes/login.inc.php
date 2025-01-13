<?php
require_once "config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Check for empty fields
    if (empty($username) || empty($password)) {
        header("Location: ../index.php?error=nopass");
        exit();
    }

    // Prepare and execute query
    $stmt = $conn->prepare("SELECT id, username, email, password FROM users WHERE username = ?");
    if (!$stmt) {
        header("Location: ../pages/login.php?message=stmt_error");
        exit();
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    // Check if user exists
    if ($stmt->num_rows === 0) { 
      
        exit();
    }
   

    // Bind and fetch the results
    $stmt->bind_result($id, $db_username, $email, $hashed_password);
    $stmt->fetch();

    // Verify password
    if (password_verify($password, $hashed_password)) {
        session_start();
        $_SESSION['username'] = $db_username;
        $_SESSION['id'] = $id;
        $_SESSION['loggedin'] = true;
       
        header("Location: ../index.php");
        exit();
    } else {
      if ($stmt->num_rows > 0) {
        header("Location: ../pages/login.php");
    } else {
        header("Location: ../pages/login.php");
    }


        exit();
    }
}else {
    header("Location: ../index.php?error=notpost");
    exit();
}
?>