const startDate = new Date(2025, 9, 19).getTime(); // October 19, 2025
    const endDate = new Date(2025, 9, 25).getTime();   // October 25, 2025

    let timer = setInterval(function () {
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

