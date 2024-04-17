<?php
// Assuming you've created a database connection $conn

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];

    // SQL to insert data
    $sql = "INSERT INTO ratings (names, rating, comments) VALUES (?, ?, ?)";

    // Prepare statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sis", $name, $rating, $comments);

    if ($stmt->execute()) {
        echo "Thank you for your rating!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
