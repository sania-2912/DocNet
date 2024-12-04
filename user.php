<?php
include 'index.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); 
    $role = $_POST['role'];

    $sql = "INSERT INTO users (first_name, last_name, email, password, role) 
            VALUES ('$first_name', '$last_name', '$email', '$password', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "User registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

}
?>

<form method="POST" action="register.php">
    First Name: <input type="text" name="first_name" required><br>
    Last Name: <input type="text" name="last_name" required><br>
    Email: <input type="email" name="email" required><br>
    Password: <input type="password" name="password" required><br>
    Role: 
    <select name="role">
        <option value="doctor">Doctor</option>
        <option value="nurse">Nurse</option>
        <option value="intern">Intern</option>
        <option value="hospital">Hospital</option>
        <option value="supplier">Supplier</option>
    </select><br>
    <input type="submit" value="Register">
</form>
