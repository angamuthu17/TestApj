<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Vignesh Arumugam">
    <title>APJ - A Purposeful Journey</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/lib/slider/slideWiz.css" />

    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6Lcl5akZAAAAABwN3d-P6ClqwvlNTB4diNV9piel"></script>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    <script>
      var currentPage = '<?php echo esc($current_page) ?>';
      
      function setActiveElementInNav ()
      {
        $('#nav-head > li').each(function() {

          if (currentPage === $( this ).attr('id'))
          {
            $( this ).addClass( "active" );
          }
          else
          {
            $( this ).removeClass( "active" );
          }
        });
      }

    </script>

  </head>
  <body onload="setActiveElementInNav();">
    <header>
  <nav class="navbar navbar-expand-xl navbar-light fixed-top" style="background-color: white; border-bottom: 2px solid #4473c5;">
    <a class="navbar-brand" href="home">
        <img src="assets/brand/logo.png" height="50px;" width="50px;"/>
        <span class="brand-text">A Purposeful Journey</span>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul id="nav-head" class="navbar-nav ml-auto mr-4">
        <li id="home" class="nav-item active">
          <a class="nav-link" href="home">Home</a>
        </li>
        <li id="journey" class="nav-item">
          <a class="nav-link" href="journey">Our Journey</a>
        </li>
        <li id="initiatives" class="nav-item">
          <a class="nav-link" href="initiatives">Our Initiatives</a>
        </li>
        <li id="joinUs" class="nav-item">
          <a class="nav-link" href="joinUs">Join Us</a>
        </li>
        <li id="contact" class="nav-item">
          <a class="nav-link" href="contact">Contact</a>
        </li>
        <li id="faq" class="nav-item">
          <a class="nav-link" href="faq">FAQ</a>
        </li>
        <li id="fefa" class="nav-item nav-divider">
          <a class="nav-link nav-highlight font-weight-bold font-italic" href="fefa">#FreeTraining</a>
        </li>
      </ul>
    </div>
  </nav>
  
</header>