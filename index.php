<!DOCTYPE html>

<html lang="en">

  <head>
      <title>Home</title>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="description" content="">
      <meta name="author" content="">


      <!-- Bootstrap Core CSS -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/tempuserhome.css" rel="stylesheet">
      <!-- Custom CSS -->
      <link href="css/main.css" rel="stylesheet">

  </head>

  <body class = "index">
    <div id = "page-wrapper">

      <!-- Header -->
        <header id = "header" class = "alt" style="background-color:#f3f6fa;color:black;height:4%">
          <nav id = "nav">
            <ul>
              <li class = "current"><a href = "#">Home</a></li>
               <li class = "submenu">
                <a href = "">Users Login</a>
                <ul>
                  <li><a href = "admin/index.php">Admin</a></li>
                  <li><a href = "signatory/index.php">Signatory</a></li>
                  <li><a href = "student/index.php">Students</a></li>
                </ul>
              </li>
              <li><a href="contact.php">Contact Us</a>
              </li>
            </ul>
          </nav>
        </header>

        <!-- Banner -->
        <section id="test">
        <div class="slideshow-container">

        <div class="mySlides fade">
          <div class="numbertext">1 / 3</div>
          <img src="images/bg1.jpg">
          <div class="text">Scholarship Management System</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">2 / 3</div>
          <img src="images/bg2.jpg">
          <div class="text">Scholarship Management System</div>
        </div>

        <div class="mySlides fade">
          <div class="numbertext">3 / 3</div>
          <img src="images/bg3.jpg">
          <div class="text"><h1> Scholarship Management System </h1></div>
        </div>

        </div>
        <br>

        <div style="text-align:center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>

        <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
        </section>

        <article id = "main">
          <header class = "special container">
            <span class = "icon fa-bar-chart-o"></span>
            <h2>Online Library</h2>
            <p>The Online Library gives users instant online access to more than 275 million records in 470 languages from 112 counties. The Library Resources include 130,000 books in electronic format and over 15.9 million full text journals, articles, and periodicals.. </p>

          </header>

          <section class="wrapper style2 container special-alt">
            <div class="row 50%">
              <div class="8u 12u(narrower)">

                <header>
                  <h2>Student Publications</h2>
                </header>
                <p>Sharing knowledge is a vital component in the growth and advancement of our society in a sustainable and responsible way.</p>
                <footer>
                  <ul class="buttons">
                    <li><a href="#" class="button">Find Out More</a></li>
                  </ul>
                </footer>

              </div>
            </div>
          </section>

          <section class="wrapper style3 container special">

            <header class="major">
              <h2>Next look at this <strong>cool stuff</strong></h2>
            </header>

            <div class="row">
              <div class="6u 12u(narrower)">

                <section>
                  <a href="#" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
                  <header>
                    <h3>A Really Fast Train</h3>
                  </header>
                  <p>As an international university catering to a wide range of students with different needs, we have established partnerships with leading companies/institutions to help students find the assistance they need to further their education.</p>
                </section>

              </div>

              <div class="6u 12u(narrower)">

                <section>
                  <a href="#" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
                  <header>
                    <h3>Media Center</h3>
                  </header>
                  <p>There are some distinctive methods in the way the programs are carried out by AIU. For additional information please contact our representatives to give you the necessary guidance to complete your program with us.</p>
                </section>

              </div>
            </div>

            <div class="row">
              <div class="6u 12u(narrower)">

                <section>
                  <a href="#" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
                  <header>
                    <h3>Hyperspace Travel</h3>
                  </header>
                  <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                </section>

              </div>

              <div class="6u 12u(narrower)">

                <section>
                  <a href="#" class="image featured"><img src="images/pic04.jpg" alt="" /></a>
                  <header>
                    <h3>And Another Train</h3>
                  </header>
                  <p>OUR goal is to inspire its students to define their purpose in life, mission, and legacy while integrating the 17 UNESCO 2030 goals. We seek the evolution of each student through their .</p>
                </section>

              </div>
            </div>

            <footer class="major">
              <ul class="buttons">
                <li><a href="#" class="button">See More</a></li>
              </ul>
            </footer>

          </section>


        </article>

        <section id="cta">
          <header>
            <h2>You want <strong>get vin</strong>?</h2>
            <p>There are some distinctive methods in the way the programs are carried out. For additional information please contact our representatives to give you the necessary guidance to complete your program with us.</p>
          </header>
          <footer>
            <ul class="buttons">
              <li><a href="../tempAboutUs.php" class="button special">About Us</a></li>
            </ul>
          </footer>
        </section>

      <!-- Footer -->
        <footer id="footer">

          <ul class="icons">
            <li><a href="#" class="icon circle fa-twitter"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="icon circle fa-facebook"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="icon circle fa-google-plus"><span class="label">Google+</span></a></li>
            <li><a href="#" class="icon circle fa-github"><span class="label">Github</span></a></li>
          </ul>

          <ul class="copyright">
          <li>&copy; sms</li><li>Developed by: <a href="#">JM</a></li>
          </ul>

        </footer>


    </div>

    <!-- Scripts -->
      <script src="js/jquery.min.js"></script>
      <script src="js/jquery.dropotron.min.js"></script>
      <script src="js/jquery.scrolly.min.js"></script>
      <script src="js/jquery.scrollgress.min.js"></script>
      <script src="js/skel.min.js"></script>
      <script src="js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="js/main.js"></script>

  </body>
</html>
