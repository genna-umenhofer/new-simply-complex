<?php
if(basename($_SERVER['PHP_SELF']) == "index.php") {
  $home = 'index.php';
  $events = 'pages/events.php';
  $contact = 'pages/contact.php';
  $shop = 'pages/shop.php';
  $about = 'pages/about.php';
  $logo = 'assets/simp_comp_circle_color_logo.png';
} else {
  $home = '../index.php';
  $events = 'events.php';
  $contact = 'contact.php';
  $shop = 'shop.php';
  $about = 'about.php';
  $logo = '../assets/simp_comp_circle_color_logo.png';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="icon" href="<?php echo $logo?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:ital@0;1&family=Satisfy&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/56820fc43b.js" crossorigin="anonymous"></script>
  <title>Simply Complex Art Shop</title>
</head>
<body>
  <nav>
    <div>
      <img src="<?php echo $logo?>" alt="simply-complex-logo">
      <h1>Simply Complex Art Shop</h1>
    </div>
    <div>
      <a class="button" href="https://www.etsy.com/shop/SimplyComplexArtShop" target="_blank">Shop on Etsy</a>
      <!-- ##Hidden until ecommerce is up and running##
        <span class="material-symbols-outlined">shopping_cart_checkout</span>
      <span class="material-symbols-outlined">menu</span> -->
    </div>
  </nav>
