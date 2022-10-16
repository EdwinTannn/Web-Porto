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
   <a href="about.php" class="active">about</a>
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

<!-- about section starts  -->
<?php
   include "koneksi.php";
   
   $querySQL = "SELECT * FROM bio";
   $execQuerySQL = mysqli_query($koneksi, $querySQL);
   if (mysqli_num_rows($execQuerySQL) > 0){
      while($row = mysqli_fetch_assoc($execQuerySQL)){
?>
<div style="max-width: 900px; margin: auto;" class="mt-2">

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Hello everyone, thank you for visiting my website, feel free to know me better. Have a nice day everyone!</p>

      <!-- <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Edwin Tandira </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> edwintandita@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Tangerang, Indonesia </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +62 851-5690-1485 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 20 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> Still Learning </h3>
      </div> -->

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> <?= $row['nama'] ?> </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> <?= $row['email'] ?> </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> <?= $row['address'] ?> </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> <?= $row['phone'] ?> </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> <?= $row['age'] ?> years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> <?= $row['experience'] ?> </h3>
      </div>
      <?php
        }
    }
    ?>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"><span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <!-- <div class="box" data-aos="fade-right">
               <span>( 2008 - 2014 )</span>
               <h3>Elementary School</h3>
               <p>Studied in Ora et Labora elementary school for 6 years.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2014 - 2017 )</span>
               <h3>Junior High School</h3>
               <p>Continuing study at Ora et Labora for Junior Grade for 3 years</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2017 - 2020 )</span>
               <h3>Senior High School</h3>
               <p>Studied at SMAN 6 South Tangerang for about 3 years.</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2020 - now )</span>
               <h3>College</h3>
               <p>Majoring Informatics in Pembangunan Jaya University untill now.</p>
            </div> -->

            <?php
            $querySQL = "SELECT * FROM edu";
            $execQuerySQL = mysqli_query($koneksi, $querySQL);

            if (mysqli_num_rows($execQuerySQL) > 0){
               while($row = mysqli_fetch_assoc($execQuerySQL)){
            ?>

            <div class="box" data-aos="fade-right">
               <span>( <?= $row['tahun'] ?> )</span>
               <h3><?= $row['sekolah'] ?></h3>
               <p><?= $row['isi'] ?></p>
            </div>
            <?php
               }
            }
            ?>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">Certificate</h3>

            <!-- <div class="box" data-aos="fade-left">
               <span>( 2021 Certificate )</span>
               <h3>Cyber Security Essentials</h3>
               <p>Completing the Cisco Networking Academy® Cybersecurity Essentials course.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2021 Certificate )</span>
               <h3>Introduction Cyber Security</h3>
               <p>Completing the Cisco Networking Academy® Cybersecurity Essentials course.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 Certificate )</span>
               <h3>IT Support</h3>
               <p>Finishing IT Support material developed by google.</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 Certificate )</span>
               <h3>Mikrotik</h3>
               <p>Successfully completed the appropriate training and certification by MikroTik.</p>
            </div>-->

            <?php
            $querySQL = "SELECT * FROM exp";
            $execQuerySQL = mysqli_query($koneksi, $querySQL);

            if (mysqli_num_rows($execQuerySQL) > 0){
               while($row = mysqli_fetch_assoc($execQuerySQL)){
            ?>

            <div class="box" data-aos="fade-right">
               <span>( <?= $row['tahun'] ?> )</span>
               <h3><?= $row['sertif'] ?></h3>
               <p><?= $row['isi'] ?></p>
            </div>
            <?php
               }
            }
            ?>

         </div>

      </div>

   </div>

</section>
</div>
<!-- about section ends -->

<!-- Footer section starts -->

<footer class="footer-distributed">

<div class="footer-left">
 

   <p class="footer-links">
      <a href="index.php">Home</a>
      |
      <a href="#">About</a>
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