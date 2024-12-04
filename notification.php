<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification List</title>
    <link rel="stylesheet" href="notification.css">
</head>
<body>
    <div class="container">
        <div class="tabs">
            <button class="tab active" onclick="showTab('all')">All</button>
            <button class="tab" onclick="showTab('jobs')">Jobs</button>
            <button class="tab" onclick="showTab('posts')">My posts</button>
            <button class="tab" onclick="showTab('mentions')">Mentions</button>
        </div>        
        <div class="notification-list" id="all">
            <div class="notification-item active">
                <div class="profile-pic"></div>
                <div class="notification-content">
                    <p><strong>Suggested for you:</strong> Check out new job opportunities.</p>
                    <span class="time">14h ago</span>
                </div>
            </div>

            <div class="notification-item">
                <div class="profile-pic"></div>
                <div class="notification-content">
                    <p><strong>John Doe</strong> liked your post.<br> 
                    <span class="connections">2 mutual connections</span></p>
                    <span class="time">2d ago</span>
                </div>
            </div>

            <div class="notification-item">
                <div class="profile-pic"></div>
                <div class="notification-content">
                    <p><strong>Jane Smith</strong> commented on your post.<br> 
                    <span class="connections">2 mutual connections</span></p>
                    <span class="time">3d ago</span>
                </div>
            </div>

            <div class="notification-item">
                <div class="profile-pic"></div>
                <div class="notification-content">
                    <p><strong>Company ABC</strong> posted a new job.<br> 
                    <span class="connections">5 applicants already applied</span></p>
                    <span class="time">4d ago</span>
                </div>
            </div>
        </div>
        <div class="notification-list" id="jobs" style="display: none;">
            <div class="notification-item">
                <div class="profile-pic"></div>
                <div class="notification-content">
                    <p><strong>Company XYZ</strong> posted a new job: UI/UX Designer.<br>
                    <span class="connections">3 mutual connections</span></p>
                    <span class="time">2h ago</span>
                </div>
            </div>
        </div>
        <div class="notification-list" id="posts" style="display: none;">
            <div class="notification-item">
                <div class="profile-pic"></div>
                <div class="notification-content">
                    <p><strong>You</strong> posted about a new design project.<br>
                    <span class="connections">5 reactions</span></p>
                    <span class="time">1d ago</span>
                </div>
            </div>
        </div>
        <div class="notification-list" id="mentions" style="display: none;">
            <div class="notification-item">
                <div class="profile-pic"></div>
                <div class="notification-content">
                    <p><strong>Mark Williams</strong> mentioned you in a comment.<br>
                    <span class="connections">2 mutual connections</span></p>
                    <span class="time">1w ago</span>
                </div>
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

    <script>
        function showTab(tabName) {
            const tabs = document.querySelectorAll('.notification-list');
            tabs.forEach(tab => tab.style.display = 'none');

            document.getElementById(tabName).style.display = 'block';

            const buttons = document.querySelectorAll('.tab');
            buttons.forEach(button => button.classList.remove('active'));

            document.querySelector(`button[onclick="showTab('${tabName}')"]`).classList.add('active');
        }
    </script>
</body>
</html>
