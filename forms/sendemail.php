<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sandra Picarra Portfolio</title>
  <meta content="Portfolio de Sandra Picarra" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon_io/favicon.png" rel="icon">
  <link href="assets/img/favicon_io/apple-touch-icon.png" rel="apple-touch-icon"-->

<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image.png" sizes="32x32" href="assets/img/favicon_io/favicon-32x32.png">
<link rel="icon" type="image.png" sizes="16x16" href="assets/img/favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

<?php

//create Variables to store form data
$name = $_POST["name"];
$contact = $_POST["contact"];
$subject = $_POST["subject"];
$email = $_POST["email"];
$query = $_POST["query"];
$comments = $_POST["comments"];
$message = $_POST["message"];
$textarea = $_POST["textarea"];

//compose email = texto
$to = "sandranmanuel@gmail.com";
$subject = "contact from smcreative.ie/portfolio";
$message = "You have received a new email from $name  
Email: $email $subject
Subject: $query 
Message: $message
";

$from = $email;
$subject = $subject;
$query = $query;
$headers = $email;

//send email
mail($to,$subject,$message,$headers);

//Redirect to page query_confirmed.php
//header('Location: thanks.php') ;
?>


  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>