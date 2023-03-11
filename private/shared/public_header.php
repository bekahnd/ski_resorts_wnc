<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Ski Resorts<abbr title="Western North Carolina">WNC <?php if(isset($page_title)) {
      echo '- ' . $page_title; } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../public/stylesheets/public.css">
  </head>

  <body>
    <h1><?php if(isset($page_title))  echo $page_title; ?></h1>    


    <nav role="navigation">
      <ul>
        <li><a href="<?php echo url_for('/public/index.php'); ?>">Home</a></li>
        <li><a href="<?php echo url_for('/public/trails.php'); ?>">Trails</a></li>
        <li><a href="<?php echo url_for('/public/prices.php'); ?>">Prices</a></li>
        <li><a href="<?php echo url_for('/public/gallery.php'); ?>">Gallery</a></li>
        <li><a href="<?php echo url_for('/public/reviews.php'); ?>">Reviews</a></li>
        <li><a href="<?php echo url_for('/public/login.php'); ?>">Login</a></li>
        <li><a href="<?php echo url_for('/public/logout.php'); ?>">Logout</a></li>

      </ul>
    </nav>
