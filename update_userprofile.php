<?php
include 'db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    die("You need to be logged in to update your profile.");
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $bio = $_POST['bio'];
    $user_id = $_SESSION['user_id'];

    $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', bio = '$bio'
            WHERE user_id = '$user_id'";

    if ($conn->query($sql) === TRUE) {
        echo "Profile updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<form method="POST" action="update_profile.php">
    First Name: <input type="text" name="first_name" value="<?php echo $_SESSION['first_name']; ?>" required><br>
    Last Name: <input type="text" name="last_name" value="<?php echo $_SESSION['last_name']; ?>" required><br>
    Bio: <textarea name="bio"><?php echo $_SESSION['bio']; ?></textarea><br>
    <input type="submit" value="Update Profile">
</form>
