<?php
include 'index.php';
session_start();

// Handle job POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $job_title = $_POST['job_title'];
    $job_description = $_POST['job_description'];

    if (!empty($job_title) && !empty($job_description)) {
        $job_title = $conn->real_escape_string($job_title);
        $job_description = $conn->real_escape_string($job_description);

        $sql = "INSERT INTO job_postings (title, description) VALUES ('$job_title', '$job_description')";
        if ($conn->query($sql) === TRUE) {
            echo "<p>New job added successfully.</p>";
        } else {
            echo "<p>Error: " . $sql . "<br>" . $conn->error . "</p>";
        }
    } else {
        echo "<p>Please fill all fields.</p>";
    }
}

// Handle search
$searchTerm = isset($_GET['search']) ? trim($_GET['search']) : '';

if ($searchTerm != '') {
    $stmt = $conn->prepare("SELECT title, description FROM job_postings WHERE title LIKE ? OR description LIKE ?");
    $likeSearch = '%' . $searchTerm . '%';
    $stmt->bind_param("ss", $likeSearch, $likeSearch);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
    $sql = "SELECT title, description FROM job_postings";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Listings</title>
    <link rel="stylesheet" href="jobs.css">
</head>
<body>
    <div class="container">
        <div class="add-job-section">
            <h2>Add a Job</h2>
            <form method="POST" action="">
                <input type="text" name="job_title" placeholder="Job Title" required>
                <textarea name="job_description" rows="4" placeholder="Job Description" required></textarea>
                <button type="submit" class="add-job-btn">Add Job</button>
            </form>
        </div>

        <div class="search-section">
            <h2>Search Jobs</h2>
            <form method="GET" action="">
                <input 
                type="text" 
                name="search" 
                placeholder="Search job title or description..." 
                value="<?php echo htmlspecialchars($searchTerm); ?>" 
                />
                <button type="submit">Search</button>
            </form>
        </div>


        <div class="jobs-section">
            <h2>Jobs For You</h2>
            <div class="jobs-container">
                <?php
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<div class="job-card">';
                        echo '<div class="job-info">';
                        echo '<h3>' . htmlspecialchars($row["title"]) . '</h3>';
                        echo '<p>' . htmlspecialchars($row["description"]) . '</p>';
                        echo '</div>';
                        echo '<button class="more-btn">Learn More</button>';
                        echo '</div>';
                    }
                } else {
                    echo "<p>No jobs found.</p>";
                }
                ?>
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

<?php
$conn->close();
?>
