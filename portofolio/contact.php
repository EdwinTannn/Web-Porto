<?php

require "koneksi.php";

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($koneksi, $_POST['name']);
   $email = mysqli_real_escape_string($koneksi, $_POST['email']);
   $number = mysqli_real_escape_string($koneksi, $_POST['number']);
   $msg = mysqli_real_escape_string($koneksi, $_POST['message']);

   $select_message = mysqli_query($koneksi, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($koneksi, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
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
   <a href="portofolio.php">portofolio</a>
   <a href="contact.php" class="active">contact me</a>
</nav>

<div class="follow">
   <a href="https://www.facebook.com/nicolaus.edwin.5/" class="fab fa-facebook-f"></a>
   <a href="https://www.instagram.com/edwntndr/" class="fab fa-instagram"></a>
   <a href="https://github.com/EdwinTannn" class="fab fa-github"></a>
</div>

</header>

<!-- header section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

</section>

<!-- contact section ends -->

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
      <a href="portofolio.php">Portofolio</a>
      |
      <a href="#">Contact</a>
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