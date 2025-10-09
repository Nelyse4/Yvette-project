<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Home | Le Congo au coeur d'Ottawa</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/forall.css">
  <link rel="stylesheet" href="css/home.css">
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
      <h2 class="colorful-title">
        <span class="red">C</span><span class="blue">O</span><span class="yellow">N</span><span
          class="red">G</span><span class="blue">O</span>
        <span class="yellow"> </span>
        <span class="red">W</span><span class="blue">E</span><span class="yellow">E</span><span class="red">K</span>
        <span class="blue"> </span>
        <span class="black">OTTAWA 2025</span>
      </h2>

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

  <script src="script/index.js"></script>
</body>

</html>