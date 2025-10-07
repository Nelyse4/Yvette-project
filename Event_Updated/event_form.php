<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Congo Week Ottawa – Event Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 30px;
        }
        .form-container {
            background: white;
            padding: 25px;
            border-radius: 8px;
            max-width: 700px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        textarea {
            resize: vertical;
            height: 100px;
        }
        button {
            margin-top: 20px;
            padding: 12px 20px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .note {
            font-size: 0.9em;
            color: #555;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Submit Your Event for Congo Week Ottawa</h2>
        <form action="submit_event.php" method="POST">
            <label for="first_name">First Name:</label>
            <input type="text" name="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" name="last_name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

           <label for="is_member">Are you a member of Congo Week Ottawa?</label>
           <select name="is_member" required>
           <option value="Yes">Yes</option>
           <option value="No">No</option>
           </select>

<label for="venue">Event Location/Venue:</label>
<input type="text" name="venue"><br>


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

<label for="event_title">Event Title:</label>
  <input type="text" id="event_title" name="event_title" required>

<label for="event_time">Event Time:</label>
<input type="time" id="event_time" name="event_time" required>


  <label for="is_paid">Is this event free or paid?</label>
<select id="is_paid" name="is_paid" required>
  <option value="">--Select--</option>
  <option value="free">Free</option>
  <option value="paid">Paid</option>
</select>

<label for="price">If paid, how much?</label>
<input type="text" id="price" name="price" placeholder="e.g. $10" pattern="^\$?\d+(\.\d{2})?$">


  <label for="location">What is event location/venue?</label>
  <input type="text" id="location" name="location" required>

            <label for="description">Detailed Description:</label>
            <textarea name="description" required></textarea>

            <button type="submit">Submit Event</button>
            <p class="note">Deadline for submission: September 30, 2025. Once approved, your event will be featured in the official program and promoted on our website and communication channels.</p>
        </form>
    </div>
</body>
</html>
