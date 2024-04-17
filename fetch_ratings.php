<?php
// Set database connection variables
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to fetch ratings
$sql = "SELECT name, rating, comments FROM ratings ORDER BY id DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<div class='rating-entry'>";
        echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
        echo "<p>Rating: " . htmlspecialchars($row['rating']) . "/5</p>";
        echo "<p>Comments: " . nl2br(htmlspecialchars($row['comments'])) . "</p>";
        echo "</div>";
    }
} else {
    echo "<p>No ratings yet. Be the first to submit one!</p>";
}

// Close database connection
$conn->close();
?>
