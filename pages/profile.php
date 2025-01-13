
<?php
session_start();
require_once '../includes/config.php'; // Include your database configuration file

// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

// Fetch user data
$user_id = $_SESSION['id'];
$query = $conn->prepare("SELECT * FROM users WHERE id = ?");
$query->bind_param("i", $user_id);
$query->execute();
$result = $query->get_result();
$user = $result->fetch_assoc();

// Update user data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $bio = $_POST['bio'];

    $update_query = $conn->prepare("UPDATE users SET username = ?, email = ?, bio = ? WHERE id = ?");
    $update_query->bind_param("sssi", $username, $email, $bio, $user_id);

    if ($update_query->execute()) {
        $_SESSION['success'] = "Profile updated successfully!";
        header('Location: profile.php');
        exit();
    } else {
        $_SESSION['error'] = "Failed to update profile.";
    }
}
?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Edit Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-800">
    <h1>Edit Profile</h1>
    <?php
    if (isset($_SESSION['success'])) {
        echo "<p style='color: green;'>".$_SESSION['success']."</p>";
        unset($_SESSION['success']);
    }
    if (isset($_SESSION['error'])) {
        echo "<p style='color: red;'>".$_SESSION['error']."</p>";
        unset($_SESSION['error']);
    }
    ?>
    <form method="post" action="profile.php">

    <div class="flex w-11/12 h-40 bg-black mx-auto mt-8">
        <div class="flex-1 w-1/2 h-full bg-slate-500 rounded-lg">
            <input type="text" name="nev" id="nev" value="Sáskarák" class="mt-8 w-5/6 mx-auto flex"><br>
            <input type="text" name="email" id="email" value="sask@gmail.com" class="mt-8 w-5/6 mx-auto flex"><br>

        </div>
        <div class="flex-1 w-1/2 h-full bg-slate-600 rounded-lg">
            <input type="text" name="jelszo" id="jelszo" value="NIGGER123nigger!" class="mt-8 w-5/6 mx-auto flex"><br>
            <div class="mt-8 w-5/6 h-6 mx-auto flex bg-red-700 " ><p class="text-center w-full">DELETE</p></div>
        </div>
    </div>
    <!--   <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required><br>
-->
     
        <a href="pass_change.php">Change Password</a><br>

        <input type="submit" value="Update Profile">
    </form>

</body>
</html>