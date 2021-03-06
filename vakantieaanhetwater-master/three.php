<?php include "assets/php/functions.php"; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Vakantieaanhetwater</title>
  <link rel="stylesheet" href="assets/css/bulma.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="assets/css/lightbox.min.css">
  <link rel="stylesheet" href="assets/css/dateTimePicker.css">
  <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

  <meta name="description" content="Titel">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Titel">
  <meta property="og:url" content="Titel">
  <meta property="og:description" content="Titel">
  <meta property="og:image" content="Titel (full url)">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <meta name="twitter:card" content="summary">
  <meta name="twitter:site" content="@Titel">
  <meta name="twitter:title" content="Titel">
  <meta name="twitter:description" content="Titel">
  <meta name="twitter:creator" content="@Titel">
  <meta name="twitter:image" content="Titel (full url)">
</head>

<body class="main has-navbar-fixed-top">

  <script>
    document.body.className += " fade-out";
  </script>

  <?php include 'assets/partials/nav.php'; ?>

  <section class="hero feature three-feature is-large fadeIn">
    <div class="hero-body">
      <div class="container">
        <h1 class="title has-text-white heavy shadow">Oostmahorn</h1>
      </div>
    </div>
  </section>

  <section class="section is-medium">
    <div class="container">
      <div class="columns">
        <div class="column is-8">
          <div class="content">
            <h2>Oostmahorn</h2>
            <p>TODO</p>
          </div>
        </div>
        <div class="column is-4 has-text-centered">
          <div id="cal" data-toggle="calendar"></div>
        </div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="columns is-mobile is-multiline gallery">
        <?php gallery("three"); ?>
      </div>
    </div>
  </section>

  <section class="section is-small is-smaller">
    <div class="container">
      <div class="columns is-mobile is-multiline has-text-centered">
        <div class="column is-3-desktop is-6-touch">
          <p class="heading">Bedden</p>
          <p class="title">4</p>
        </div>
        <div class="column is-3-desktop is-6-touch">
          <p class="heading">Kamers</p>
          <p class="title">6</p>
        </div>
        <div class="column is-3-desktop is-6-touch">
          <p class="heading">Badkamers</p>
          <p class="title">2</p>
        </div>
        <div class="column is-3-desktop is-6-touch">
          <p class="heading">Prijs</p>
          <p class="title">€499</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section is-medium">
    <div class="container">
      <div class="columns">
        <div class="column is-half">
          <div class="content">
            <h2>Voorzieningen:</h2>
            <p>TODO</p>
          </div>
        </div>
        <div class="column is-half">
          <div class="content">
            <h2>Meer informatie</h2>
            <p>TODO</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
   include 'assets/partials/contact.php';
   include 'assets/partials/footer.php';
  ?>

  <div id="one-cache">hi</div>
  <div id="two-cache"></div>
  <div id="three-cache"></div>

  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/lightbox.min.js"></script>
  <script src="assets/js/dateTimePicker.min.js"></script>
  <script src="assets/js/scripts.js"></script>
  <script>
  var lightbox = $('.gallery a').simpleLightbox();
  $('#cal').calendar(
  {
    day_name: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
    month_name: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
    unavailable: ['*-*-9', '*-*-10', '2019-05-28'],
  });
  </script>

</body>

</html>
