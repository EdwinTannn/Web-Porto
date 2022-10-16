<?php
function substrwords($text, $maxchar, $end='...') {
    if (strlen($text) > $maxchar || $text == '') {
        $words = preg_split('/\s/', $text);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        }
        $output .= $end;
    } 
    else {
        $output = $text;
    }
    return $output; 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- aos css link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- link fontawesome4 -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="asset/style.css">
    <link rel="stylesheet" href="asset/footer.css">

</head>
<body>
<!-- header section starts  -->

<header class="header">

<div id="menu-btn" class="fas fa-bars"></div>

<a href="index.php" class="logo">Portofolio</a>

<nav class="navbar">
   <a href="index.php">home</a>
   <a href="about.php">about</a>
   <a href="service.php">services</a>
   <a href="portofolio.php" class="active">portofolio</a>
   <a href="contact.php">contact me</a>
</nav>

<div class="follow">
   <a href="https://www.facebook.com/nicolaus.edwin.5/" class="fab fa-facebook-f"></a>
   <a href="https://www.instagram.com/edwntndr/" class="fab fa-instagram"></a>
   <a href="https://github.com/EdwinTannn" class="fab fa-github"></a>
</div>

</header>

<!-- header section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">
   <?php
   include "koneksi.php";

   $querySQL = "SELECT * FROM porto";
   $execQuerySQL = mysqli_query($koneksi, $querySQL);
   if (mysqli_num_rows($execQuerySQL) > 0){
      while($row = mysqli_fetch_assoc($execQuerySQL)){
   ?>

      <!-- <div class="box" data-aos="zoom-in">
         <img src="images/img-1.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-2.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-3.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-4.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-5.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-6.jpg" alt="">
         <h3>web development</h3>
         <span>( 2020 - 2022 )</span>
      </div> -->

      <div class="box" data-aos="zoom-in">
         <img src="<?= $row['img_src'] ?>" alt="">
         <h3><?= $row['judul'] ?></h3>
         <span>( <?= $row['tahun'] ?> )</span>
      </div>

      <?php
         }
      }
      ?>
   </div>

</section>

<!-- portfolio section ends -->

<!-- Footer section starts -->

<footer class="footer-distributed">

<div class="footer-left">
 

   <p class="footer-links">
      <a href="index.php">Home</a>
      |
      <a href="about.php">About</a>
      |
      <a href="service.php">Service</a>
      |
      <a href="#">Portofolio</a>
      |
      <a href="contact.php">Contact</a>
   </p>

   <p class="footer-company-name">© 2022 Edwin Tandira</p>
</div>

<div class="footer-center">
   <div>
      <i class="fa fa-map-marker"></i>
        <p ><span style="color:white;"> CF2/17, Perum Villa Pamulang </span>
     South Tangerang City, Banten 15416</p>
   </div>

   <div>
      <i class="fa fa-phone"></i>
      <p>+62-851-5690-1485</p>
   </div>
   <div>
      <i class="fa fa-envelope"></i>
      <p><a href="#">edwintandita@gmail.com</a></p>
   </div>
</div>
<div class="footer-right">
   <p class="footer-company-about">
      <span>Connect With Me</span>
      My Social Media.</p>
   <div class="footer-icons">
        <a href="https://www.facebook.com/nicolaus.edwin.5/" class="fab fa-facebook-f"></a>
        <a href="https://www.instagram.com/edwntndr/" class="fab fa-instagram"></a>
        <a href="https://github.com/EdwinTannn" class="fab fa-github"></a>
   </div>
</div>
</footer>

<!-- Footer section ends -->


<!-- custom js file link  -->
<script src="asset/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
</body>
</html>