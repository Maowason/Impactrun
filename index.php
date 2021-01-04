<?php
include ('php/session.php');
include ('php/config.php');
?>
<noscript>
      <div style="border: 1px solid purple; padding: 10px; text-align: center;">
      <span style="color:red; text-align: center;">Hey! Javascript is disabled. Your Browser is no longer supported! Please enable Javascript.</span>
      <span> To learn how to enable javascript please <a href="https://www.whatismybrowser.com/guides/how-to-enable-javascript/chrome">click here</a></span>
      <p style="text-align:center"><img src="images/hack.jpg"></p>
      </div>
</noscript>
<?php
echo '<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Impactrun</title>

  <link rel="stylesheet" href="css/foundation.css" />
<style type="text/css">

  .boxed {
  border: 1px solid green ;
}
</style>
  <style type="text/css">

  footer {
    padding: 1em;
    color: #2cc1f3;
    background-color: white;
    clear: left;
    text-align: center;
    font-size: 10px;
}

.scrollit {
    overflow-x:scroll;
}

  table {
    table-layout: auto;
    border-collapse: collapse;
    width: 100%;
}
table td {
    border: 1px solid #ccc;
}
table .absorbing-column {
    width: 100%;
}
/* ----------- Non-Retina Screens ----------- */
@media screen 
  and (min-device-width: 1200px) 
  and (max-device-width: 1600px) 
  and (-webkit-min-device-pixel-ratio: 1) { 
    .float-container {
      padding: 20px;
    }
    
    .float-child {
      width: 50%;
      float: left;
      padding: 20px;
    }  
}

/* ----------- Retina Screens ----------- */
@media screen 
  and (min-device-width: 1200px) 
  and (max-device-width: 1600px) 
  and (-webkit-min-device-pixel-ratio: 2)
  and (min-resolution: 192dpi) { 
    .float-container {
      padding: 20px;
    }
    
    .float-child {
      width: 50%;
      float: left;
      padding: 20px;
    }  
}


</style>

<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}


.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}


.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}


.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}


.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}


.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}


.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #2cc1f3;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #2cc1f3;
}


.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4}
  to {opacity: 1}
}


@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body style="background-color:#f4f6f9;">

  <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php"><img src="images/s.png" alt="Impactrun" height="95" width="95"></a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">


      <ul class="right">';
       
			echo '<li><a href="images/img.jpg"></a></li>';

        echo '</ul>';
      echo '</section>';
    echo'</nav>';
?>

    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p align="center" style="color:#2cc1f3"><b>Impactrun</b></p>
<p>
<?php
                $result = $mysqli->query('SELECT * FROM users');
                if($result) {
                  $obj = $result->fetch_object();
                  echo '<div class="float-container">';
                  echo '<div class="float-child">';

                  echo'<div class="row"> <div class="small-3 columns">
            </div>
            <div class="small-8 columns end">';
                  echo '<img src="images/'.$obj->pic.'" style = "border-radius: 50%;"/>';
                  echo '</div>';
                  echo '</div>';

                  echo'<div class="row"> <div class="small-3 columns">
                  <label for="right-label" class="right inline">Name</label>
                </div>
                <div class="small-8 columns end">';
                      echo '<p><b>'.$obj->name.'</b></p>';
                      echo '</div>';
                      echo '</div>';

                  echo'<div class="row"> <div class="small-3 columns">
              <label for="right-label" class="right inline">Title</label>
            </div>
            <div class="small-8 columns end">';
                  echo '<p><b>'.$obj->title.'</b></p>';
                  echo '</div>';
                  echo '</div>';

                  echo'<div class="row"> <div class="small-3 columns">
              <label for="right-label" class="right inline">Amount Raised Till Now</label>
            </div>
            <div class="small-8 columns end">';
                  echo '<p> Rs. '.$obj->amount.'</p>';
                  echo '</div>';
                  echo '</div>';

                  echo'<div class="row"> <div class="small-3 columns">
              <label for="right-label" class="right inline">Workout</label>
            </div>
            <div class="small-8 columns end">';
                  echo '<p>'.$obj->workout.'</p>';
                  echo '</div>';
                  echo '</div>';

                  echo'<div class="row"> <div class="small-3 columns">
              <label for="right-label" class="right inline">Distance</label>
            </div>
            <div class="small-8 columns end">';
                  echo '<p>'.$obj->distance.'</p>';
                  echo '</div>';
                  echo '</div>';

                  echo'<div class="row"> <div class="small-3 columns">
              <label for="right-label" class="right inline">Current Streak</label>
            </div>
            <div class="small-8 columns end">';
                  echo '<p>'.$obj->curr_streak.'</p>';
                  echo '</div>';
                  echo '</div>';

                  echo'<div class="row"> <div class="small-3 columns">
              <label for="right-label" class="right inline">Maximum Streak</label>
            </div>
            <div class="small-8 columns end">';
                  echo '<p>'.$obj->max_streak.'</p>';
                  echo '</div>';
                  echo '</div>';
                  echo '</div>';
                  echo'
                    <div class="float-child">
                          <div class="slideshow-container" style="max-width: 400px; max-height: 600px;">

                          <div class="mySlides fade">
                            <div class="numbertext">1 / 2</div>
                            <img src="images/jockey.jpeg" style="width:100%">
                          </div>

                          <div class="mySlides fade">
                            <div class="numbertext">2 / 2</div>
                            <img src="images/download.jpg" style="width:100%">
                          </div>


                          <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                          <a class="next" onclick="plusSlides(1)">&#10095;</a>

                          </div>
                          <br>

                          <div style="text-align:center">
                            <span class="dot" onclick="currentSlide(1)"></span>
                            <span class="dot" onclick="currentSlide(2)"></span>
                          </div>
                  </div>';}
                            ?>
</p>

        <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
          showSlides(slideIndex += n);
        }

        function currentSlide(n) {
          showSlides(slideIndex = n);
        }

        function showSlides(n) {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          if (n > slides.length) {slideIndex = 1}
          if (n < 1) {slideIndex = slides.length}
          for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
          }
          for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
        }
        </script>
      </div>
    </div>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
  <footer> /Developed by Madhhav Wason/ </footer>
</html>
