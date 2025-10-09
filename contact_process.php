<?php
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $first_name = $_POST['first-name'] ?? '';
  $last_name  = $_POST['last-name'] ?? '';
  $email      = $_POST['email'] ?? '';
  $message    = $_POST['message'] ?? '';

  $stmt = $conn->prepare("INSERT INTO contact_messages (first_name, last_name, email, message) VALUES (?, ?, ?, ?)");
  $stmt->bind_param("ssss", $first_name, $last_name, $email, $message);

    if ($stmt->execute()) {
    header("Location: contact.php?success=1&name=" . urlencode($first_name));
    exit;
  } else {
    header("Location: contact.php?error=" . urlencode($stmt->error));
    exit;
  }

    $stmt->close();
    $conn->close();
}
?>
