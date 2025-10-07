
<?php
$conn = new mysqli("localhost", "your_username", "your_password", "your_database");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT event_title, event_date_time, price, location, description, image_path FROM events ORDER BY created_at DESC"; //It has an order by, but I am unsure if it is needed.
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div style='margin-bottom:20px; border:1px solid #ddd; padding:10px;'>"; //it has some inline css can be changed and or taken out and added the eas it's supposed to be 
        echo "<h2>" . htmlspecialchars($row['event_title']) . "</h2>";
        echo "<p>" .htmlspecialchars($row['event_date_time']). "</p>";
        echo "<p>" .htmlspecialchars($row['price']). "</p>";
        echo "<p>" .htmlspecialchars($row['location']). "</p>";
        echo "<p>" . nl2br(htmlspecialchars($row['description'])) . "</p>";
        echo "<img src='" . htmlspecialchars($row['image_path']) . "' alt='Event Image' width='300'>"; //width I didn't set we can see how we want this when we do the set up.
        echo "</div>";
    }
} else {
    echo "No events found.";
}

$conn->close();
?>
