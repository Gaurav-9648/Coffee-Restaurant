<?php
session_start();
include(__DIR__ . "/../config/db.php");

$error = "";

if(isset($_POST['login'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $sql = "SELECT * FROM admins WHERE username='$username' LIMIT 1";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
        $admin = $result->fetch_assoc();

        // ✅ Correct password verify
        if(password_verify($password, $admin['password'])){
            $_SESSION['admin'] = $admin['username'];
            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid Password!";
        }

    } else {
        $error = "Invalid Username!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" href="/coffee_restaurant/assets/css/admin_style.css">
</head>
<body class="admin-auth">

<div class="login-box">
    <h2>Admin Login</h2>

    <?php if($error!=""){ ?>
        <p class="error-msg"><?php echo $error; ?></p>
    <?php } ?>

    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Login</button>
    </form>
</div>

</body>
</html>