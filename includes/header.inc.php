<?php
if(basename($_SERVER['PHP_SELF']) == "index.php") {
  $home = 'index.php';
  $events = 'pages/events.php';
  $contact = 'pages/contact.php';
  $shop = 'pages/shop.php';
  $about = 'pages/about.php';
  $logo = 'assets/simp_comp_circle_color_logo.png';
  $script = 'script.js';
  $style = 'styles.css';
} else {
  $home = '../index.php';
  $events = 'events.php';
  $contact = 'contact.php';
  $shop = 'shop.php';
  $about = 'about.php';
  $logo = '../assets/simp_comp_circle_color_logo.png';
  $script = '../script.js';
  $style = '../styles.css';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Buy ethically sourced crystals, mini llamas, and handmade clothing from a local midwest art shop. Visit the event page to find us in person!">
  <link rel="stylesheet" href="<?php echo $style?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="icon" href="<?php echo $logo?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kaisei+HarunoUmi:wght@400;500;700&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/56820fc43b.js" crossorigin="anonymous"></script>
  <script src="<?php echo $script ?>" defer></script>
  <title>Simply Complex Art Shop</title>
</head>
<body>
  <nav>
    <div>
      <img src="<?php echo $logo?>" alt="simply-complex-logo" class="nav-logo">
      <a href="<?php echo $home?>" class="home-link">Simply Complex Art Shop</a>
    </div>
    <div>
      <a href="<?php echo $shop?>" class="nav-link">Shop</a>
      <a href="<?php echo $about?>" class="nav-link">About</a>
      <a href="<?php echo $events?>" class="nav-link">Events</a>
      <a href="<?php echo $contact?>" class="nav-link">Contact</a>
      <!-- ##Hidden until ecommerce is up and running##
        <span class="material-symbols-outlined">shopping_cart_checkout</span>
      <span class="material-symbols-outlined">menu</span> -->
    </div>
    
  </nav>
