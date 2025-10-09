<?php
include 'db_connect.php';

$first_name     = $_POST['first_name'];
$last_name      = $_POST['last_name'];
$email          = $_POST['email'];
$is_member      = $_POST['is_member'];
$representation = $_POST['representation'];
$activity_type  = $_POST['activity_type'];
$start_date     = $_POST['start_date'];
$end_date       = $_POST['end_date'];
$event_title    = $_POST['event_title'];
$event_time     = $_POST['event_time'];
$is_paid        = $_POST['is_paid'];
$price          = $_POST['price'] ?: NULL;
$venue          = $_POST['venue'];
$description    = $_POST['description'];

$stmt = $conn->prepare("INSERT INTO event_submissions (
  first_name, last_name, email, is_member, representation, activity_type,
  start_date, end_date, event_title, event_time, is_paid, price, venue, description
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->bind_param("ssssssssssssss",
  $first_name, $last_name, $email, $is_member, $representation, $activity_type,
  $start_date, $end_date, $event_title, $event_time, $is_paid, $price, $venue, $description
);

if ($stmt->execute()) {
  echo "✅ Event submitted successfully!";
} else {
  echo "❌ Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
