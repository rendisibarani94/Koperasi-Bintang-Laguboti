<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/fontawesome/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap-5.1.3-dist/css/bootstrap.css">
    <link rel="icon" href="images/logo_new.png">
    <link rel="stylesheet" href="css/style.css">
    <title>Bintang Laguboti </title>                           
    </style>
</head>
<body>
    <header class="container">
        <div class="navbar">
            <div class="container">
                <div class="page-header">
                    <nav class="navbar">
                        <img src="images/KBL.png" width="230" height="100" class="d-inline-block align-top" alt="">
                    </nav>
                </div>
                <nav class="navigation">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Account</a></li>

                    </ul>
                </nav> 
            </div>
            
        </div>
    </header>
    
    @yield('content')
          
    </center>    
<footer class="text-center text-lg-start" style="background-color: #0B094B; color: white;">
    <!-- Section: Social media -->
  
    <!-- Section: Social media -->
  
    <!-- Section: Links  -->
    <section class="" style="padding-top: 10px;">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              KOPERASI BINTANG LAGUBOTI
            </h6>
            <p>
              © 2022 Koperasi Bintang Laguboti
            </p>
          </div>
    </section>
    <!-- Section: Links  -->
    
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
  </footer>
</body>
</html>