<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home | Le Congo au coeur d'Ottawa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="landing-page">

  <?php include('includes/header.php'); ?>

  <main class="main-content">
    <!-- Hero / poster area -->
    <section class="hero">
      <!-- blurred background poster -->
      <img class="background-image" src="images/eflyer.jpeg" alt="Congo Week poster blurred background" />
      <!-- centered poster card -->
      <div class="poster-card" role="img" aria-label="Congo Week poster">
        <img class="poster-image" src="images/eflyer.jpeg" alt="Congo Week poster" />
      </div>
    </section>

    <!-- Countdown (JS inserts content into #timer) -->
    <section class="countdown-section">
      <div class="countdown-title">CONGO WEEK — OCTOBER 19-25, 2025</div>
      <div id="timer" class="timer-container"></div>
      <p class="small-note">Justice • Memory • Dignity — Never Forget, Never Repeat, Begin to Heal</p>
    </section>

    <!-- Info card -->
    <section class="event-info">
      <h2>CONGO WEEK OTTAWA 2025</h2>
      <p>
        A week of awareness, remembrance, and action — screenings, panels, testimonies, and community healing events.
      </p>

      <h4>Program highlights</h4>
      <ul>
        <li>Documentaries and films</li>
        <li>Author talks and book presentations</li>
        <li>Panels on justice & gender-based violence</li>
        <li>Survivor testimonies and community workshops</li>
      </ul>

      <p class="contact">More info: <a href="mailto:info@cccottgat.ca">info@cccottgat.ca</a></p>
    </section>
  </main>

  <?php include('includes/footer.php'); ?>

  <script>
    // === Your original timer JS ===
    const startDate = new Date(2025, 9, 19).getTime(); // October 19, 2025
    const endDate = new Date(2025, 9, 25).getTime();   // October 25, 2025

    let timer = setInterval(function() {
        const today = new Date().getTime();
        let diff;

        if (today < startDate) {
            diff = startDate - today;
            document.getElementById("timer").innerHTML = "<h2></h2>";
        } else {
            diff = endDate - today;
            document.getElementById("timer").innerHTML = "<h2>Days remaining for Semaine du Congo Week Ottawa:</h2>";
        }

        if (diff < 0) {
            clearInterval(timer);
            document.getElementById("timer").innerHTML = "<h2>Semaine du Congo Week Ottawa has ended!</h2>";
            return;
        }

        let days = Math.floor(diff / (1000 * 60 * 60 * 24));
        let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((diff % (1000 * 60)) / 1000);

        document.getElementById("timer").innerHTML += 
            "<div class='timer-box'><span class='numbers'>" + days + "</span> Days</div> \
             <div class='timer-box'><span class='numbers'>" + hours + "</span> Hours</div> \
             <div class='timer-box'><span class='numbers'>" + minutes + "</span> Minutes</div> \
             <div class='timer-box'><span class='numbers'>" + seconds + "</span> Seconds</div>";
    }, 1000);

window.addEventListener("scroll", () => {
  const header = document.querySelector(".site-header");
  if (window.scrollY > 80) {
    // turn more solid and lighter for readability on light backgrounds
    header.style.background = "rgba(255, 255, 255, 0.85)";
    header.style.borderBottom = "1px solid rgba(0, 0, 0, 0.1)";
    header.querySelectorAll(".nav-links a, .site-title").forEach(el => el.style.color = "#000");
  } else {
    // return to transparent dark glass for hero background
    header.style.background = "rgba(30, 30, 30, 0.4)";
    header.style.borderBottom = "1px solid rgba(255, 255, 255, 0.2)";
    header.querySelectorAll(".nav-links a, .site-title").forEach(el => el.style.color = "#fff");
  }
});

  </script>
</body>
</html>
