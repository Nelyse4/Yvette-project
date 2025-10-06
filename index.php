<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home | Le Congo au coeur d'Ottawa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="home-body">

  <?php include('includes/header.php'); ?>

  <main>   
     <img src="images/CW.png" alt="Congo Ribbon" class="ribbon-image">
     <div class="tcontainer">

  <div id="timer"></div>
  <h1 class="home-h1">Semaine du Congo Week Ottawa</h1>
  
</div>

  </main>

  <?php include('includes/footer.php'); ?>

  <script>
    //the start and end dates for the Congo Week
    const startDate = new Date(2025, 9, 19).getTime(); // October 19, 2025
    const endDate = new Date(2025, 9, 25).getTime();   // October 25, 2025

    // Countdown
    let timer = setInterval(function() {
        // today's date
        const today = new Date().getTime();

        let diff;

        // Calculating the difference for the start date
        if (today < startDate) {
            diff = startDate - today; // Countdown to the start date
            document.getElementById("timer").innerHTML = "<h2>Countdown to Semaine du Congo Week Ottawa:</h2>";
        } else {
            diff = endDate - today; // Calculate remaining time until the end of the event
            document.getElementById("timer").innerHTML = "<h2>Days remaining for Semaine du Congo Week Ottawa:</h2>";
        }

        // If the countdown is complete, check if the event has started
        if (diff < 0) {
            clearInterval(timer);
            document.getElementById("timer").innerHTML = "<h2>Semaine du Congo Week Ottawa has ended!</h2>";
            return;
        }

        // Math
        let days = Math.floor(diff / (1000 * 60 * 60 * 24));
        let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((diff % (1000 * 60)) / 1000);

        // Display
        document.getElementById("timer").innerHTML += 
            "<div class=\"days\"> \
                <div class=\"numbers\">" + days + "</div>days</div> \
            <div class=\"hours\"> \
                <div class=\"numbers\">" + hours + "</div>hours</div> \
            <div class=\"minutes\"> \
                <div class=\"numbers\">" + minutes + "</div>minutes</div> \
            <div class=\"seconds\"> \
                <div class=\"numbers\">" + seconds + "</div>seconds</div>";
    }, 1000);
</script>
</body>
</html>