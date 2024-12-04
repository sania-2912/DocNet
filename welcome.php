<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal</title>
    <link rel="stylesheet" href="welcome_page.css">
</head>
<body>
    <div class="container">
        <div class="text-section">
            <h2>Discover Your <br> Dream Job here</h2>
            <p>Explore all the existing job roles based on your interest and study major</p>
            <div class="button-container">
                <!-- Login and Register buttons redirect to PHP pages -->
                <button class="login-btn" onclick="window.location.href='log.php';">Login</button>
                <button class="register-btn" onclick="window.location.href='reg.php';">Register</button>
            </div>
        </div>
        <div class="image-section">
            <img src="woman.jpg" alt="Woman at computer" class="illustration">
        </div>
    </div>
</body>
</html>
