<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Congo Week Ottawa – Event Submission</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include('includes/header.php'); ?>
    <div class="form-econtainer">
        <h2>Submit Your Event for Congo Week Ottawa</h2>
        <form action="submit_event.php" method="POST">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="membership">Are you a member of Congo Week Ottawa?</label>
            <select name="membership" required>
                <option value="">-- Select --</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>

            <label for="representation">Are you representing any of the mentioned?</label>
            <select name="representation">
                <option value="">-- Select --</option>
                <option value="Community Organization">Community Organization</option>
                <option value="Student Group">Student Group</option>
                <option value="Faith-Based Group">Faith-Based Group</option>
                <option value="Other">Other</option>
            </select>

            <label for="activity_type">What is the type of activity?</label>
            <select name="activity_type" required>
                <option value="">-- Select --</option>
                <option value="Workshop">Workshop</option>
                <option value="Panel Discussion">Panel Discussion</option>
                <option value="Art Showcase">Art Showcase</option>
                <option value="Film Screening">Film Screening</option>
                <option value="Other">Other</option>
            </select>

            <label for="start_date">Start Date:</label>
            <input type="date" name="start_date" required>

            <label for="end_date">End Date:</label>
            <input type="date" name="end_date" required>

            <label for="description">Detailed Description:</label>
            <textarea name="description" required></textarea>

            <button class= "ebutton" type="submit">Submit Event</button>
            <p class="note">Deadline for submission: September 30, 2025. Once approved, your event will be featured in the official program and promoted on our website and communication channels.</p>
        </form>
    </div>
    <?php include('includes/footer.php'); ?>
</body>
</html>