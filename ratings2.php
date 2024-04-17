<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate Professors/Classes - GW BookLink</title>
    <link rel="stylesheet" href="styling.css">
</head>
<body>
    <header>
        <h1>Rate Professors and Classes</h1>
        <p>Your feedback helps everyone make better decisions. Check out what others have said below!</p>
    </header>
    <main>
        <section class="form-section">
            <form action="ratings.php" method="post">
                <label for="name">Professor or Class Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="rating">Rating:</label>
                <select id="rating" name="rating" required>
                    <option value="">Select a rating</option>
                    <option value="1">1 - Poor</option>
                    <option value="2">2 - Fair</option>
                    <option value="3">3 - Good</option>
                    <option value="4">4 - Very Good</option>
                    <option value="5">5 - Excellent</option>
                </select>

                <label for="comments">Comments:</label>
                <textarea id="comments" name="comments" rows="4" required></textarea>

                <input type="submit" value="Submit Rating">
            </form>
        </section>
        <section class="ratings-section">
            <!-- PHP code will insert ratings here -->
            <?php include 'fetch_ratings.php'; ?>
        </section>
    </main>
    <footer>
        <p>© 2024 GW BookLink. All rights reserved.</p>
    </footer>
</body>
</html>
