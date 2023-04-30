<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Ski Resorts WNC <?php if(isset($page_title)) {
      echo '- ' . $page_title; } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../private/stylesheets/main.css">
    <script src="../private/JS/ski.js" defer></script>
  </head>

  <body>
    <div id="banner">
      <header>
        <div id="links">
          <?php check_logged_in(); ?>
        </div>     
        <a href="../public/index.php"><img src="../private/images/logo.png" id="logo" alt="WNC Ski Resorts logo" width="150" height="150"></a>
        <h1><abbr title="Western North Carolina">WNC</abbr> Ski Resorts <?php if(isset($page_title)) { echo " - " . $page_title; }?></h1>
        
          <nav role="navigation">
            <label for="nav-checkbox" id="nav-trigger">Menu</label>
            <input type="checkbox" id="nav-checkbox">
            <ul id="nav-li">
              <li><a href="<?php echo url_for('/public/index.php'); ?>">Home</a></li>
              <li><a href="<?php echo url_for('/public/trails.php'); ?>">Trails</a></li>
              <li><a href="<?php echo url_for('/public/prices.php'); ?>">Prices</a></li>
              <li><a href="<?php echo url_for('/public/gallery.php'); ?>">Gallery</a></li>
              <li><a href="<?php echo url_for('/public/reviews.php'); ?>">Reviews</a></li>
            </ul>
          </nav>
      </header>
