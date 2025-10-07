<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["eventImage"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["eventImage"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["eventImage"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["eventImage"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["eventImage"]["name"])). " has been uploaded.";      

    //Save file and information to the database
    $conn = new mysqli("localhost", "your_username", "your_password", "your_database");

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $eventTitle = $conn->real_escape_string($_POST['eventTitle']);
        $eventDateTime = $conn->real_escape_string($_POST['eventDateTime']);
        $price = $conn->real_escape_string($_POST['price']);
        $location = $conn->real_escape_string($_Post['location']);
        $description = $conn->real_escape_string($_POST['description']);
        $imagePath = $conn->real_escape_string($target_file);

        $sql = "INSERT INTO events (event_title, event_date_time, price, location, description, image_path) 
                VALUES ('$eventTitle', '$eventDateTime', '$price', '$location', '$description', '$imagePath')";

        if ($conn->query($sql) === TRUE) {
            echo "<br>Event saved successfully!";
        } else {
            echo "<br>Error: " . $conn->error;
        }

        $conn->close();
  } 

  else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>