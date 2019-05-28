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

  <section class="hero feature one-feature is-large fadeIn">
    <div class="hero-body">
      <div class="container">
        <h1 class="title has-text-white heavy shadow">Amelanderkaap</h1>
      </div>
    </div>
  </section>

  <section class="section is-medium">
    <div class="container">
      <div class="content">
        <h2>Amelanderkaap</h2>
        <p>Cras augue dolor, blandit eu consectetur at, venenatis at sem. Pellentesque at dui dolor. Morbi molestie lacus in ante auctor, nec maximus tellus elementum. Pellentesque justo nulla, posuere eget elementum vel, egestas non sapien. Lorem
          ipsum dolor sit amet, consectetur adipiscing elit. Cras maximus dignissim molestie. Etiam imperdiet sit amet nibh a dapibus. Morbi sit amet justo ac justo scelerisque fringilla non facilisis nulla. Quisque in dolor ut justo malesuada
          ultricies ut et lorem. Nam interdum interdum tempor. Aenean malesuada ipsum vel elit commodo sagittis. Phasellus gravida, ligula vel tempus mattis, nibh lectus aliquam leo, non mollis sem mauris quis velit.</p>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container">
      <div class="columns is-mobile is-multiline huts">
        <div class="column is-6-desktop is-12-touch">
          <figure class="image is-square">
            <a href="./one2"><img src="assets/img/one/main.jpg"></a>
          </figure>
        </div>
        <div class="column is-6-desktop is-12-touch">
          <div class="content about">
            <a href="./one2"><p><span class="about-title heavy">2 PEOPLE</span><br>Cras augue dolor, blandit eu consectetur at, venenatis at sem. Pellentesque at dui dolor. Morbi molestie lacus in ante auctor, nec maximus tellus elementum. Pellentesque justo nulla,
              posuere eget elementum vel, egestas non sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p></a>
          </div>
        </div>
        <div class="column is-6-desktop is-hidden-desktop">
          <figure class="image is-square">
            <a href="./one4"><img src="assets/img/one/main.jpg"></a>
          </figure>
        </div>
        <div class="column is-6-desktop is-12-touch">
          <div class="content about has-text-right-desktop">
            <a href="./one4"><p><span class="about-title heavy">4 PEOPLE</span><br>Cras augue dolor, blandit eu consectetur at, venenatis at sem. Pellentesque at dui dolor. Morbi molestie lacus in ante auctor, nec maximus tellus elementum. Pellentesque justo nulla,
              posuere eget elementum vel, egestas non sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><a>
          </div>
        </div>

        <div class="column is-6-desktop is-12-touch is-hidden-touch">
          <figure class="image is-square">
            <a href="./one4"><img src="assets/img/one/main.jpg"></a>
          </figure>
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
  <script src="assets/js/scripts.js"></script>
  <script>
  var lightbox = $('.gallery a').simpleLightbox();
  </script>
</body>

</html>
