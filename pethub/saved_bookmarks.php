<?php
// Include the existing connection to your pethubdb database
include 'connection.php';  // Connection to the database

// SQL query to select all saved bookmarks
$sql = "SELECT * FROM bookmarks ORDER BY date_added DESC";  // Get bookmarks in descending order (latest first)

// Execute the query
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display bookmarks
    echo "<h2>Saved Bookmarks</h2>";
    echo "<ul>";
    
    // Loop through the results and display each bookmark
    while ($row = $result->fetch_assoc()) {
        // Display the category before the title
        echo "<li>";
        echo "<strong>For " . htmlspecialchars($row['category']) . ":</strong> ";  // Category displayed (e.g., For Dogs)
        echo "<strong>" . htmlspecialchars($row['title']) . "</strong>: " . htmlspecialchars($row['content']);
        echo "</li>";
    }
    
    echo "</ul>";
} else {
    echo "No bookmarks found.";
}

// Close the connection
$conn->close();
?>
