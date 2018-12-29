<!doctype html>
<html lang="en">
  <head>
  <?php wp_head(); ?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>My WordPress site</title>
    
  </head>
  <body>

<nav class="navbar navbar-expand-lg">
  <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/')?>">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('/services')?>">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('portfolio')?>">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('about')?>">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('contact')?>">Contact</a>
      </li>
    </ul>
  </div>
</nav>