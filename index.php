<head><title>Escape From Italy</title></head>

<p id="container">
    <div class="field">
        <div class="number" id="days"></div>
        <div class="description">DAYS</div>
    </div>
    <div class="field">
        <div class="number" id="hours"></div>
        <div class="description">HOURS</div>
    </div>
    <div class="field">
        <div class="number" id="minutes"></div>
        <div class="description">MINUTES</div>
    </div>
    <div class="field">
        <div class="number" id="seconds"></div>
        <div class="description">SECONDS</div>
    </div>
</p>

<p class="credits">
    Made with <span style="color: red;"><3</span> by <a href="https://federicogerardi.it">Gieri</a>
</p>

<script>
var countDownDate = new Date("Sep 10, 2023 12:00:00").getTime();

var x = setInterval(function() {

  var now = new Date().getTime();

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  document.getElementById("days").innerHTML = days;
  document.getElementById("hours").innerHTML = hours;
  document.getElementById("minutes").innerHTML = minutes;
  document.getElementById("seconds").innerHTML = seconds;

  if (distance < 0) {
    clearInterval(x);
    document.getElementById("container").innerHTML = "HAPPY SLAPSGIVING BY MARSHALL :)";
  }
}, 1000);
</script>

<style>
    body {
        font-family: Arial;
        background-color: black;
        color: white;
        text-align: center;
    }

    .container {
        margin-top: 10vh;
    }

    .field {
        display: inline-block;
        margin: 3rem;
    }

    .number {
        color: red;
        font-size: 3rem;
        margin-bottom: 10px;
    }

    .description {
        font-size: 1.3rem;

    }

    a {
        color: white;
        text-decoration: none; /* no underline */
    }

    a:hover {
        text-decoration: underline;
    }

    .credits {
        margin-top: 35%;
    }
</style>
