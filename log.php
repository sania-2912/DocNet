<?php
include 'index.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {

            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['role'] = $row['role'];

            header("Location: home_page.php");
            exit();
        } else {
            $error_message = "Invalid password.";
        }
    } else {
        $error_message = "No user found with this email.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login_page.css">
</head>
<body>
    <div class="login-container">
        <h2>Login here</h2>

      
        <?php if (isset($error_message)): ?>
            <div class="error-message">
                <p><?php echo $error_message; ?></p>
            </div>
        <?php endif; ?>

       
        <form method="POST" action="log.php">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <a href="#" class="forgot-password">Forgot your password?</a>
            <button type="submit" class="sign-in-btn">Sign in</button>
        </form>

        <button type="button" class="create-account-btn" onclick="window.location.href='reg.php';">Create new account</button>
    </div>
</body>
</html>
