<form action="upload.php" method="post" enctype="multipart/form-data">

    <label>Event Title: </label>
    <input type="text" name="eventTitle" required>

    <br>

    <!-- Date and time input -->
    <label for="event-datetime">Select Date and Time:</label>
    <input type="datetime-local" id="event-datetime" name="event-datetime" required>

    <br>

    <!-- To add event pricing is it free or paid and how much -->
    <label>This is event free or paid? If paid how much?</label>
    <input type="text" name="price" id="price" required>

    <br>

    <!-- Add an event loaction -->
    <label>What is event loaction/venue? </label>
    <input type="text" name="location" id="loaction" required>

    <br> 

    <!--To add event description -->
    <label>Description:</label>
    <textarea name="description" id="description" required></textarea>

    <br>

    <!-- Input to upload an image-->
    <label>upload an image to accompany your event</label>
    <input type="file" name="eventImage" id="eventImage">

    <br>

    <input type="submit" value="Submit Event" name="submit">
</form>
