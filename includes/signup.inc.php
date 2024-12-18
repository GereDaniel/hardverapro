<?php
require_once "config.php";

if (isset($_POST['submit'])) {
    $uname = trim($_POST['username']);
    $email = trim($_POST['email']);
    $upass = trim($_POST['password']);
    $password = password_hash($upass, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows == 0) {
        $stmts = $conn->prepare("INSERT INTO users(username, email, password) VALUES(?, ?, ?)");
        $stmts->bind_param("sss", $uname, $email, $password);
        $res = $stmts->execute();
        $stmts->close();

        if ($res) {
            $user_id = $conn->insert_id;
            if ($user_id > 0) {
                $_SESSION['username'] = $user_id;
                header("Location: ../index.php");
                exit;
            }
        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again";
        }
    } else {
        $errTyp = "warning";
        $errMSG = "Username is already taken";
    }
}
?>