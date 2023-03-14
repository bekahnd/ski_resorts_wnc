<!DOCTYPE html>

<html lang="en">
  <head>
    <title>Ski Resorts<abbr title="Western North Carolina">WNC <?php if(isset($page_title)) {
      echo '- ' . $page_title; } ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../private/stylesheets/main.css">
  </head>

  <body>
    <div id="banner">
      <header>
        <div id="links">
          <?php check_logged_in(); ?>
        </div>     
        <a href="https://www.flaticon.com/free-icons/skier" title="skier icons"><img src="../../private/images/6435116.png" id="icon" alt="Skier icons created by Freepik - Flaticon" width="50" height="50"></a>
        <h1><abbr title="Western North Carolina">WNC</abbr> Ski Resorts - Admin View</h1>

          <nav role="navigation">
            <ul>
              <li><a href="<?php echo url_for('/public/admin/admin_index.php'); ?>">Home</a></li>
              <li><a href="<?php echo url_for('/public/admin/admin_trails.php'); ?>">Trails</a></li>
              <li><a href="<?php echo url_for('/public/admin/admin_prices.php'); ?>">Prices</a></li>
              <li><a href="<?php echo url_for('/public/admin/admin_gallery.php'); ?>">Gallery</a></li>
              <li><a href="<?php echo url_for('/public/admin/admin_reviews.php'); ?>">Reviews</a></li>
              <li><a href="<?php echo url_for('/public/admin/admin_home.php'); ?>">Admin Home</a></li>
            </ul>
          </nav>
      </header>
