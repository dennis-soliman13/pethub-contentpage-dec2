<?php
// Include the existing database connection
include 'connection.php';  // Database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the bookmark data from the POST request
    $title = $_POST['title'];
    $content = $_POST['content'];
    $category = $_POST['category'];  // Get the category (e.g., "Cats", "Dogs", etc.)

    // Prepare SQL to insert bookmark into the database
    $sql = "INSERT INTO bookmarks (title, content, category) VALUES (?, ?, ?)";

    // Prepare and execute the query
    if ($stmt = $conn->prepare($sql)) {
        // Bind parameters to the query
        $stmt->bind_param("sss", $title, $content, $category);  // "sss" means three string parameters
        if ($stmt->execute()) {
            echo "Bookmark saved successfully!";
        } else {
            echo "Error saving bookmark.";
        }
        $stmt->close();
    } else {
        echo "Error preparing the query.";
    }

    // Close the database connection
    $conn->close();
}
?>
