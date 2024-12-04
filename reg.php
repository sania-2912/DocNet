<?php

include 'index.php';
session_start();
$error_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $start_time = microtime(true);

    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    error_log("Preparing SQL query...");

   
    $check_email_sql = "SELECT * FROM users WHERE email = ?";
    if ($stmt = $conn->prepare($check_email_sql)) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            $error_message = "Email already registered. Please use a different email.";
        } else {
         
            $sql = "INSERT INTO users (email, password) VALUES (?, ?)";
            if ($stmt = $conn->prepare($sql)) {
                $stmt->bind_param("ss", $email, $hashed_password);

                if ($stmt->execute()) {
                    error_log("User registered successfully.");
                    $_SESSION['message'] = "Registration successful! Please log in.";
                    header("Location: log.php");
                    exit();
                } else {
                    $error_message = "Error: Unable to create account. Please try again.";
                }
                
                $stmt->close();
            } else {
                $error_message = "Error: Could not prepare the statement.";
            }
        }
        $stmt->close();
    }
    $conn->close();
    $execution_time = microtime(true) - $start_time;
    error_log("Total execution time: " . $execution_time . " seconds.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="register_page.css">
</head>
<body>
    <div class="login-container">
        <h2>Create Account</h2>

        <?php if (!empty($error_message)): ?>
            <div class="error-message">
                <p><?php echo $error_message; ?></p>
            </div>
        <?php endif; ?>
        <form method="POST" action="reg.php">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <a href="#" class="forgot-password">Forgot your password?</a>
            <button type="submit" class="sign-in-btn" id="signUpBtn">Sign up</button>
        </form>

        <button type="button" class="create-account-btn" onclick="window.location.href='log.php';">Already have an account?</button>
    </div>
</body>
</html>
