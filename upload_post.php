if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['post_text'];
    $fileName = $_FILES['post_media']['name'];
    $targetDir = 'uploads/';
    $targetFile = $targetDir . basename($fileName);

    if (move_uploaded_file($_FILES['post_media']['tmp_name'], $targetFile)) {
        echo "<h2>Post submitted successfully!</h2>";
        echo "<p><strong>Text:</strong> $text</p>";

        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        if (in_array($fileExt, ['jpg', 'jpeg', 'png'])) {
            echo "<p><strong>File Preview:</strong></p>";
            echo "<img src='$targetFile' style='max-width:300px;' />";
        } elseif ($fileExt === 'pdf') {
            echo "<p><a href='$targetFile' target='_blank'>View uploaded file</a></p>";
        } else {
            echo "<p>File uploaded but preview not supported.</p>";
        }
    } else {
        echo "Error uploading file.";
    }
    // upload_post.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $text = $_POST['post_text'];
    $fileName = $_FILES['post_media']['name'];
    $targetDir = 'uploads/';
    $targetFile = $targetDir . basename($fileName);

    if (move_uploaded_file($_FILES['post_media']['tmp_name'], $targetFile)) {
        // You can optionally save the post to a database here

        // ✅ Redirect back to profile page
        header("Location: profile.php?status=success");
        exit;
    } else {
        // ✅ Redirect back with error
        header("Location: profile.php?status=error");
        exit;
    }
}

}
