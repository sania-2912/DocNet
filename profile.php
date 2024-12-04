<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docnet Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <div class="cover-photo"></div>
            <div class="profile-details">
                <div class="profile-photo">
                    <img src="profile.jpg" alt="Profile Picture">
                </div>
                <div class="profile-info">
                    <h2>Dmitry Kargiev</h2>
                    <p>Freelancer UX/UI Designer</p>
                    <button class="connect-btn">Link</button>
                    <button class="message-btn">Message</button>
                </div>
            </div>
        </div>
        <div class="profile-body">
            <div class="about-section">
                <h3>About</h3>
                <p>I'm experienced in eCommerce web projects and mobile banking apps, with a passion for creating beautiful, user-centric digital experiences.</p>
            </div>
            <div class="skills-section">
                <h3>Skills & Endorsements</h3>
                <div class="skill">
                    <p>User Experience (UX)</p>
                    <span class="endorsement-count">7</span>
                </div>
                <div class="skill">
                    <p>User Interface (UI)</p>
                    <span class="endorsement-count">3</span>
                </div>
                <div class="skill">
                    <p>Brand Identity</p>
                    <span class="endorsement-count">5</span>
                </div>
            </div>
            <div class="experience-section">
                <h3>Experience</h3>
                <div class="experience-item">
                    <h4>Freelance UX/UI Designer</h4>
                    <p>Created user-centered designs for eCommerce and mobile banking projects.</p>
                </div>
                <div class="experience-item">
                    <h4>UX/UI Designer</h4>
                    <p>Worked with cross-functional teams to improve product user experience.</p>
                </div>
            </div>
            <div class="education-section">
                <h3>Education</h3>
                <div class="education-item">
                    <h4>Moscow State Linguistic University</h4>
                    <p>Bachelor's in Design</p>
                </div>
            </div>
        </div>
        <div class="sidebar">
            <div class="profile-stats">
                <h4>Your Dashboard</h4>
                <p>367 profile views</p>
                <p>15 posts</p>
                <p>9 connections</p>
            </div>
            <div class="profiles-section">
                <div class="header">
                    <span>MORE PROFILES FOR YOU</span>
                    <a href="#" class="view-all">VIEW ALL</a>
                </div>
                
                <div class="profile-card">
                    <img src="profile.jpg" alt="Profile Picture" class="profile-img">
                    <div class="profile-info">
                        <h4>Darlene Black</h4>
                        <p>Job description</p>
                        <a href="#" class="link-btn">Link</a>
                    </div>
                </div>
            
                <div class="profile-card">
                    <img src="profile.jpg" alt="Profile Picture" class="profile-img">
                    <div class="profile-info">
                        <h4>Audrey Alexander</h4>
                        <p>Job description</p>
                        <a href="#" class="link-btn">Link</a>
                    </div>
                </div>
            
                <div class="profile-card">
                    <img src="profile.jpg" alt="Profile Picture" class="profile-img">
                    <div class="profile-info">
                        <h4>Kyle Fisher</h4>
                        <p>Job description</p>
                        <a href="#" class="link-btn">Link</a>
                    </div>
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
</body>
</html>