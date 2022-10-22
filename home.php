<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">GBV</a>

   <nav class="navbar">
      <a href="about.php">About</a>
      <a href="package.php">Report</a>
      <a href="book.php" style=" color:red; font-weight:900;" >Help</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/g1.jpg) no-repeat">
            <div class="content">
              
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/self.png) no-repeat">

            <div class="content">
               
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/girls.png) no-repeat">

            <div class="content">
               
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->


<!-- home about section starts  -->


<section class="home-offer">
   <div class="content">
      <h3>Who are we</h3>
      <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Iure tempora assumenda, debitis aliquid nesciunt maiores quas! Magni cumque quaerat saepe!</p>
      <a href="book.php" class="btn">Learn More</a>
   </div>
</section>




<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our Services </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/stop.jfif" alt="">
         </div>
         <div class="content">
            
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">Report</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
         <img src="images/stats.png" alt="">

         </div>
         <div class="content">
          
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">About</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
         <img src="images/hands.jpg" alt="">

         </div>
         <div class="content">
           
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos, sint!</p>
            <a href="book.php" class="btn">Follow Up</a>
         </div>
      </div>

   </div>


</section>


<!-- footer section starts  -->

<section class="footer" style="color: #292E49;">

   <div class="box-container">

   <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone" style="color: white;"></i>12345 </a>
         <a href="#"> <i class="fas fa-envelope" style="color: white;" ></i> GBV@gmail.com </a>
      </div>


      <div class="box">
         <h3>Explore</h3>
         <a href="#">  About us</a>
         <a href="#">  Report</a>
         <a href="#">  Help</a>

      </div>

      <div class="box">
          </div>

      

   </div>


</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>