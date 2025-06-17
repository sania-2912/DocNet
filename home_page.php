<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="home_page.css">
</head>
<body>
    <div class="container">
        <header>
            <img src="Background.jpg" alt="Profile Banner">
        </header>
        <section class="profile-section">
            <div class="profile-pic">
                <img src="profile.jpg" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <h1>Username</h1>
                <p>Profession</p>
                <p>Description</p>
            </div>
        </section>
        
        <div class="general-info">
            <h2>General Information</h2>
            <p>Information</p>
        </div>
        
        <div class="posts">
            <h2>Posts</h2>
            <p>Your Posts</p>
        </div>
        
        <div class="experience">
            <h2>Experience</h2>
            <div class="experience-item">
                <div>
                    <h3>MD-Homeopath</h3>
                    <p>Jun 2022 - Present | 1 yr 4 mos</p>
                    <p>Description</p>
                </div>
            </div>
            <div class="experience-item">
                <div>
                    <h3>MBBS-Orthopedic</h3>
                    <p>Jun 2022 - Present | 3 mos</p>
                    <p>Description</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="nav-bar">
        <div class="icon-container">
        <a href="home_page.php"><img src="Home.jpg" alt="Home" class="nav-icon"></a>
            <a href="jobpost.php"><img src="jobs.jpg" alt="Jobs" class="nav-icon"></a>
            <a href="messages_page.php"><img src="chat.jpg" alt="Chat" class="nav-icon"></a>
            <a href="notification.php"><img src="notification.jpg" alt="Notifications" class="nav-icon"></a>
            <a href="profile.php" class="profile-link"><img src="profile.jpg" alt="Profile" class="nav-icon"></a>
        </div>
    </div>
</body>
</html>