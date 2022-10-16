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
   <a href="index.php" class="active">home</a>
   <a href="about.php">about</a>
   <a href="service.php">services</a>
   <a href="portofolio.php">portofolio</a>
   <a href="contact.php">contact me</a>
</nav>

<div class="follow">
   <a href="https://www.facebook.com/nicolaus.edwin.5/" class="fab fa-facebook-f"></a>
   <a href="https://www.instagram.com/edwntndr/" class="fab fa-instagram"></a>
   <a href="https://github.com/EdwinTannn" class="fab fa-github"></a>
</div>

</header>

<!-- header section ends -->

<!-- home section starts  -->
<?php
   include "koneksi.php";
   
   $querySQL = "SELECT * FROM home";
   $execQuerySQL = mysqli_query($koneksi, $querySQL);
   if (mysqli_num_rows($execQuerySQL) > 0){
      while($row = mysqli_fetch_assoc($execQuerySQL)){
?>

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="<?= $row['gambar'] ?>" alt="">
   </div>

   <!-- <div class="content">
      <h3 data-aos="fade-up">hi, i am Edwin Tandira</h3>
      <span data-aos="fade-up">web designer & developer</span>
      <p data-aos="fade-up">I am a student of Pembangunan Jaya University majoring informatics. I'm currently in semester 5</p>
      <a data-aos="fade-up" href="about.php" class="btn">about me</a>
   </div> -->
   
   <div class="content">
      <h3 data-aos="fade-up">hi, i am <?= $row['nama'] ?></h3>
      <span data-aos="fade-up"><?= $row['profesi'] ?></span>
      <p data-aos="fade-up"><?= $row['desk_mahasiswa'] ?></p>
      <a data-aos="fade-up" href="about.php" class="btn">about me</a>
   </div>

   <?php
        }
    }
    ?>

</section>

<!-- home section ends -->

<!-- Footer section starts -->

<footer class="footer-distributed">

<div class="footer-left">
 

   <p class="footer-links">
      <a href="#">Home</a>
      |
      <a href="about.php">About</a>
      |
      <a href="service.php">Service</a>
      |
      <a href="portofolio.php">Portofolio</a>
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