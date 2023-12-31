<?php  

include 'dbconnection.php' ; 
session_start();


if (empty($_SESSION['loginStatus'])) {
	header("Location: login.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <script type="text/javascript" src="js/materialize.min.js"></script>

 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="css/flexslider.css">
 <link rel="stylesheet" href="css/swiper-bundle.min.css">

 <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <!-- <script src="https://unpkg.com/scrollreveal"></script> -->
<script src="https://unpkg.com/typed.js@2.0.132/dist/typed.umd.js"></script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">


 
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
      <script src="js/jquery.flexslider-min.js"></script>

 <script>
    // Can also be used with $(document).ready()
$(window).on('load',function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});
 </script>
</head>
<body>

        <nav class="navbar">
            <div class="nav-fixed">
              <a href="#!" class="brand-logo"><img src="images/HEALTH21.png" alt="LOGO" width="150px"></a>
              <ul class="right hide-on-med-and-down" style="text-align: center;">
                <li><a href="#">Home</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#doctor">Doctor</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="logout.php"><Button class="btn"> Logout </Button></a></li>
              </ul>
            </div>
          </nav>

          <section class="home" id="home ">
          <div class="slide">
          
          <!-- Place somewhere in the <body> of your page -->
<div class="flexslider">
        <ul class="slides"  style="direction:rtl">
        <li>
            <video width="100%" height="auto" src="images/Mental Healthv.mp4" autoplay loop="100" ></video>
            
                </li>
        <li>
    <!--       <img class="img-slide" src="images/upload.webp" /> -->
    <img class="img-slide" src="images/1.png" />
        
    </video>
        </li>
        <li>
          <img class="img-slide" src="images/2.png" />
        </li>
        <li>
            <img class="img-slide" src="images/4.png" />
        </li>
        <li>
          <img class="img-slide" src="images/Mental Health (3).png" />
        </li>
       </ul>
    </div>
          </div>
        </section>

        

        
           <!-- about section design -->
    <section class="about" id="about">
      <div class="about-img">
          <img src="images/hero.png" alt="">
      </div>

      <div class="about-content">
          <h2 class="heading">About <span style="color: orangered;">Us</span></h2>
          <h3>Doctor on your Finger Tips</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae exercitationem explicabo repellat in consequatur eveniet, vel ipsum ab repellendus itaque quibusdam sint voluptas reprehenderit nesciunt deleniti asperiores distinctio velit ipsam.</p>
          <a href="#" class="btn">Read More</a>
      </div>
  </section>

   <!-- service section design -->
   <section class="services" id="services">
    <h2 class="heading">Our <span style="color: orangered;">Services</span></h2>
          <div class="services-container">
            <span class="service-box">
              <a href="mental.html"><img src="images/3d-medical-background-with-male-figure-with-brain-highlighted-removebg-preview (1).png" alt="" class="slider-img"></a>
            </span>
            <span class="service-box">
              <a href="#"><img src="images/heart-disease-clipart-14-removebg-preview.png" alt="" class="slider-img"></a>
            </span>
             <span class="service-box">
              <a href="#"><img src="images/3189-removebg-preview.png" alt="" class="slider-img"></a>
            </span>
             <span class="service-box">
              <a href="#"><img src="images/8475477-removebg-preview.png" alt="" class="slider-img"></a>
            </span>
            <!-- <span class="service-box">
              <a href="#"><img src="/images/heart-disease-clipart-14-removebg-preview.png" alt="" class="slider-img"></a>
            </span>
            <span class="service-box">
              <a href="#"><img src="/images/mentalhealth.png" alt="" class="slider-img"></a>
            </span>
            <span class="service-box">
              <a href="#"><img src="/images/skincare.png" alt="" class="slider-img"></a>
            </span>  -->
           
          </div>
    </section>

          <!-- doctors section design -->

          <section class="doctor" id="doctor">
            <h2 class="heading">Our <span style="color:orangered;">Doctors</span></h2>
            
            <div class="slide-container swiper">
              <div class="slide-content">
                  <div class="card-wrapper swiper-wrapper">
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>
      
                              <div class="card-image">
                                  <img src="images/leo-mario.png" alt="" class="card-img">
                              </div>
                          </div>
      
                          <div class="card-content">
                              <h2 class="name">Satyam Tyagi</h2>
                              <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel neque sequi ab magnam iusto nesciunt voluptas impedit ducimus quisquam dolorum itaque quibusdam sit culpa obcaecati quidem ipsa, iure id reiciendis.</p>
                              
                              <button class="button">View More</button>
                          </div>
                      </div>
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>
      
                              <div class="card-image">
                                  <img src="images/jane.png" alt="" class="card-img">
                              </div>
                          </div>
      
                          <div class="card-content">
                              <h2 class="name">Isha Gupta</h2>
                              <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel neque sequi ab magnam iusto nesciunt voluptas impedit ducimus quisquam dolorum itaque quibusdam sit culpa obcaecati quidem ipsa, iure id reiciendis.</p>
                              
                              <button class="button">View More</button>
                          </div>
                      </div>
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>
      
                              <div class="card-image">
                                  <img src="images/leo-mario.png" alt="" class="card-img">
                              </div>
                          </div>
      
                          <div class="card-content">
                              <h2 class="name">Ayush Baghel</h2>
                              <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel neque sequi ab magnam iusto nesciunt voluptas impedit ducimus quisquam dolorum itaque quibusdam sit culpa obcaecati quidem ipsa, iure id reiciendis.</p>
                              
                              <button class="button">View More</button>
                          </div>
                      </div>
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>
      
                              <div class="card-image">
                                  <img src="images/anita.png" alt="" class="card-img">
                              </div>
                          </div>
      
                          <div class="card-content">
                              <h2 class="name">Bhavna</h2>
                              <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel neque sequi ab magnam iusto nesciunt voluptas impedit ducimus quisquam dolorum itaque quibusdam sit culpa obcaecati quidem ipsa, iure id reiciendis.</p>
                              
                              <button class="button">View More</button>
                          </div>
                      </div>
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>
      
                              <div class="card-image">
                                  <img src="images/jane.png" alt="" class="card-img">
                              </div>
                          </div>
      
                          <div class="card-content">
                              <h2 class="name">jane</h2>
                              <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel neque sequi ab magnam iusto nesciunt voluptas impedit ducimus quisquam dolorum itaque quibusdam sit culpa obcaecati quidem ipsa, iure id reiciendis.</p>
                              
                              <button class="button">View More</button>
                          </div>
                      </div>  
      
                      <div class="card swiper-slide">
                          <div class="image-content">
                              <span class="overlay"></span>
      
                              <div class="card-image">
                                  <img src="images/anita.png" alt="" class="card-img">
                              </div>
                          </div>
      
                          <div class="card-content">
                              <h2 class="name">anita</h2>
                              <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel neque sequi ab magnam iusto nesciunt voluptas impedit ducimus quisquam dolorum itaque quibusdam sit culpa obcaecati quidem ipsa, iure id reiciendis.</p>
                              
                              <button class="button">View More</button>
                          </div>
                      </div>
                  </div>
      
              </div>
      
              <div class="swiper-button-next swiper-navBtn"></div>
              <div class="swiper-button-prev swiper-navBtn"></div>
              <div class="swiper-pagination"></div>
          </div>
          
      
          
        </section>

        <!-- Contact section design -->

        <section class="contact" id="contact">
          <div class="contact-text">
            <h2 class="heading">Contact <span style="color:orangered;">Us!</span></h2>

              <h4>If you have any query</h4>
              <p> Feel free to send us your questions or queries
                
              </p>
              <div class="list">
                  <li><a href="#">9399682383</a></li>
                  <li><a href="#">ayushbaghel0143@gmail.com</a></li>
                  <li><a href="#">blah blah blah</a></li>
              </div>
              <div class="contact-icons">
                  <a href="#"><i class='bx bxl-facebook-circle' ></i></a>
                  <a href="#"><i class='bx bxl-twitter' ></i></a>
                  <a href="#"><i class='bx bxl-instagram' ></i></a>
                  <a href="#"><i class='bx bxl-youtube' ></i></a>
              </div>
          </div>
          <div class="contact-form">
              <form action="">
                  <input type="text" placeholder="Your Name" required>
                  <input type="email" placeholder="Your Email Address" required>
                  <input type="number" placeholder="Your Mobile Number" required>
              <textarea name="" id="" cols="35" rows="10" placeholder="How Can we Help You" required></textarea>
              <li><a class="waves-effect waves-light btn" style="align-items: center;">Send</a></li>

              </form>
      
          </div>
      </section>

 <!-- footer design -->
 <footer class="footer">
  <div class="footer-text">
      <p>Copyright &copy; 2023 by HealthON | All Rights Reserved</p>
  </div>

  <div class="footer-iconTop">
      <a href="#"><i class='bx bx-up-arrow-alt' ></i></a>
  </div>
</footer>



        
      </body>
      
      <script src="js/swiper-bundle.min.js"></script>
      
      <script src="js/script.js"></script>
</html>