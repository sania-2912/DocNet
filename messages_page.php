<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Interface</title>
    <link rel="stylesheet" href="messages_page.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="search">
                <input type="text" placeholder="Search">
            </div>
            <div class="chat-list">
                <div class="chat-item">Person 1</div>
                <div class="chat-item">Person 2</div>
                <div class="chat-item">Person 3</div>
            </div>
            <button class="new-chat-btn">Start New Chat</button>
        </div>
        <div class="chat-window">
            <div class="chat-header">
                <h3>Chat with Person 1</h3>
                <div class="shared-media">Shared Media</div>
            </div>
            <div class="chat-footer">
                <input type="text" placeholder="Write your message">
                <button class="send-btn">Send</button>
            </div>
        </div>
    </div>
    <div class="nav-bar">
        <div class="icon-container">
        <a href="home_page.php"><img src="Home.jpg" alt="Home" class="nav-icon"></a>
            <a href="jobs_page.php"><img src="jobs.jpg" alt="Jobs" class="nav-icon"></a>
            <a href="messages_page.php"><img src="chat.jpg" alt="Chat" class="nav-icon"></a>
            <a href="notification.php"><img src="notification.jpg" alt="Notifications" class="nav-icon"></a>
            <a href="profile.php" class="profile-link"><img src="profile.jpg" alt="Profile" class="nav-icon"></a>
        </div>
    </div>
</body>
</html>