<?php 	require_once('connect.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

  <title>Ongsa Transportation Hub</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!--icon-->
  <link rel="shortcut icon" href="https://www.flaticon.com/svg/static/icons/svg/3649/3649159.svg">

  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatedriver.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/lightbox.css">
  <!--

TemplateMo 557 Grad School

https://templatemo.com/tm-557-grad-school

-->
</head>

<body>


  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>ONGSA</em> transportation hub</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="#section1">Add route</a></li>
        <li><a href="#section2">Edit route</a></li>

      </ul>
    </nav>
  </header>


  <section class="section coming-soon1" data-section="section2">
    <div class="container">
      <div class="row">

        <div class="col-md-12">
          <div class="center-content">
            <div class="top-content">
              <h6>Edit route</h6>
            </div>
            <?php
  					$routeid = $_GET['route_id'];

  					$q="SELECT route.*, star.station_name as sa,des.station_name as de FROM route , station as star,station as des
             where route_id = $routeid and route.destination_station_id=des.station_id and star.station_id=route.start_station_id";
  					$result = $mysqli->query($q);
            while($row1=$result->fetch_array()){
              $start_station_name=$row1['sa'];
              $destination_station_name=$row1['de'];
              $departure_time = $row1['departure_time'];
              $estimated_time = $row1['estimated_time'];
              $distance = $row1['distance'];
              $cost = $row1['cost'];
              $transportation_type = $row1['transportation_type'];
              $route_id = $row1['route_id'];
            }
  					echo "<form id='contact' action='updateroute.php' method='post'>";

            echo"<div class='row'>";
            echo "<div class='col-md-12'>";
            echo "<fieldset>";
  					echo "<label> Starting point :</label>";
  					echo "<input name='start' type='text' class='form-control' id='start' required='' value= ".$start_station_name.">";
            echo "</fieldset>";
            echo "</div>";
            echo "<div class='col-md-12'>";
              echo "<fieldset>";
                echo "<label> Destination :</label>";
                echo "<input name='destination' type='text' class='form-control' id='destination' required=''value= ".$destination_station_name.">";
              echo "</fieldset>";
            echo "</div>";
            echo "<div class='col-md-6'>";
              echo "<fieldset>";
                echo "<label> Starting time :</label>";
                echo "<input name='starting_time' type='time' id='default-picker' class='form-control' value= ".$departure_time.">";
              echo "</fieldset>";
            echo "</div>";
            echo "<div class='col-md-6'>";
              echo "<fieldset>";
                echo "<label> Estimated time :</label>";
                echo "<input name='estimated_time' type='text' class='form-control' id='estimated_time'
                   required=''value= ".$estimated_time.">";
              echo "</fieldset>";
            echo "</div>";
            echo "<div class='col-md-6'>";
              echo "<fieldset>";
                echo "<label> Distance :</label>";
                echo "<input name='distance' type='text' class='form-control' id='distance' required=''value= ".$distance.">";
              echo "</fieldset>";
            echo "</div>";
            echo "<div class='col-md-6'>";
              echo "<fieldset>";
                echo "<label> Cost :</label>";
                echo "<input name='cost' type='text' class='form-control' id='cost' required='' value= ".$cost.">";
              echo "</fieldset>";
            echo "</div>";
            echo "<div class='col-md-6'>";
              echo "<fieldset>";
                echo "<label> Transportation type :</label>";
                echo "<input name='transportation_type' type='text' class='form-control' id='transportation_type' required=''value= ".$transportation_type.">";
              echo "</fieldset>";
            echo "</div>";
            echo "<input type='hidden' name='route_id' value=".$route_id." >";

            echo "<div class='col-md-6'>";
              echo "<label>";
              echo "</label>";
              echo "<fieldset>";
                echo "<button type='submit' name='sub' id='form-submit' class='button'>Submit</button>";
              echo "</fieldset>";

            echo "</div>";


            echo "</div>";
            echo "</form>";

  					?>












  <!--map section3-->

  <section class="section contact" data-section="section3">

  </section>


  <!--footer-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 20 by Grad School

            | Design: <a href="https://templatemo.com" rel="sponsored" target="_parent">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/lightbox.js"></script>
  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/video.js"></script>
  <script src="assets/js/slick-slider.js"></script>
  <script src="assets/js/custom.js"></script>
  <script>
    //according to loftblog tut
    $('.nav li:first').addClass('active');

    var showSection = function showSection(section, isAnimate) {
      var
        direction = section.replace(/#/, ''),
        reqSection = $('.section').filter('[data-section="' + direction + '"]'),
        reqSectionPos = reqSection.offset().top - 0;

      if (isAnimate) {
        $('body, html').animate({
          scrollTop: reqSectionPos
        },
          800);
      } else {
        $('body, html').scrollTop(reqSectionPos);
      }

    };

    var checkSection = function checkSection() {
      $('.section').each(function () {
        var
          $this = $(this),
          topEdge = $this.offset().top - 80,
          bottomEdge = topEdge + $this.height(),
          wScroll = $(window).scrollTop();
        if (topEdge < wScroll && bottomEdge > wScroll) {
          var
            currentId = $this.data('section'),
            reqLink = $('a').filter('[href*=\\#' + currentId + ']');
          reqLink.closest('li').addClass('active').
            siblings().removeClass('active');
        }
      });
    };

    $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
      if ($(e.target).hasClass('external')) {
        return;
      }
      e.preventDefault();
      $('#menu').removeClass('active');
      showSection($(this).attr('href'), true);
    });

    $(window).scroll(function () {
      checkSection();
    });
  </script>
</body>

</html>
