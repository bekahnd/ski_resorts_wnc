<?php
include_once('../private/initialize.php');
$page_title = 'Reviews';
include_once(SHARED_PATH . '/public_header.php');
?>

<h2><?php echo $page_title; ?></h2>
<?php
$api_key = 'AIzaSyA6LefrzlhKHmkKApqOyu7UeQJwnN2RDfQ';

//  For Cataloochie
$place_id1 = 'ChIJmcmzdUhlWYgRAxhRGkjMMI0';

$url1 = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$place_id1&fields=name,rating,review&key=$api_key";
$response1 = file_get_contents($url1);
$data1 = json_decode($response1, true);
?>

<!-- Javascript for creating tabs for each resort -->
<div class="tabs">
  <div id="tab1" onClick="Javascript:selectTab(1);">Cataloochie Ski Resort</div>
  <div id="tab2" onClick="Javascript:selectTab(2);">Sugar Mountain Resort</div>
  <div id="tab3" onClick="Javascript:selectTab(3);">Beech Mountain Resort</div>
  <div id="tab4" onClick="Javascript:selectTab(4);">Appalachian Ski MTN</div>
  <div id="tab5" onClick="Javascript:selectTab(5);">Wolf Ridge Ski Resort</div>
</div>
<div id="hide_tabs" class="tabs">
  <div id="tab1" onClick="Javascript:selectTab(1);">Cat</div>
  <div id="tab2" onClick="Javascript:selectTab(2);">Sugar</div>
  <div id="tab3" onClick="Javascript:selectTab(3);">Beech</div>
  <div id="tab4" onClick="Javascript:selectTab(4);">App</div>
  <div id="tab5" onClick="Javascript:selectTab(5);">Wolf</div>
</div>

<div id="tab1Content">
  <h3>Cataloochi Ski Resort</h3>

  <?php
  $reviews1 = $data1['result']['reviews'];
  foreach ($reviews1 as $review1) {
    $author_name = $review1['author_name'];
    $rating = $review1['rating'];
    $text = $review1['text'];
    $time = $review1['relative_time_description'];
    echo "<p><strong>$author_name</strong> rated Cataloochie Ski Area <span class='stars'>$rating stars</span> - $time</p>";
    echo "<p class='endReview'>$text</p>";
  }
  ?>
  <p>Want to see more reviews for Cataloochie Ski Resort? Click <a href='https://rb.gy/gq2h4s' target='_blank'>here</a>.</p>
</div>
<div id="tab2Content">
  <!-- For Sugar Mountain -->
  <h3>Sugar Mountain Resort</h3>
  <?php
  $place_id2 = 'ChIJS0CVeDDtUIgRWVxsoPWHT20';

  $url2 = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$place_id2&fields=name,rating,review&key=$api_key";
  $response2 = file_get_contents($url2);
  $data2 = json_decode($response2, true);

  $reviews2 = $data2['result']['reviews'];
  foreach ($reviews2 as $review2) {
    $author_name = $review2['author_name'];
    $rating = $review2['rating'];
    $text = $review2['text'];
    $time = $review2['relative_time_description'];
    echo "<p><strong>$author_name</strong> rated Sugar Mountain Resort <span class='stars'>$rating stars</span> - $time</p>";
    echo "<p class='endReview'>$text</p>";
  }
  ?>
  <p>Want to see more reviews for Sugar Mountain Resort? Click <a href='https://rb.gy/ewfm3m' target='_blank'>here</a>.</p>
</div>
<div id="tab3Content">
  <!-- For Beech Mountain -->
  <h3>Beech Mountain Resort</h3>

  <?php
  $place_id3 = 'ChIJQ4TGUyWNUIgR2hLCPRNmIs0';

  $url3 = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$place_id3&fields=name,rating,review&key=$api_key";
  $response3 = file_get_contents($url3);
  $data3 = json_decode($response3, true);

  $reviews3 = $data3['result']['reviews'];
  foreach ($reviews3 as $review3) {
    $author_name = $review3['author_name'];
    $rating = $review3['rating'];
    $text = $review3['text'];
    $time = $review3['relative_time_description'];
    echo "<p><strong>$author_name</strong> rated Beech Mountain Resort <span class='stars'>$rating stars</span> - $time</p>";
    echo "<p class='endReview'>$text</p>";
  }
  ?>
  <p>Want to see more reviews for Beech Mountain Resort Click <a href='https://rb.gy/h7jtuo' target='_blank'>here</a>.</p>
</div>
<div id="tab4Content">
 <!-- For Appalachian Ski Mtn -->
  <h3>Appalachian Ski Mtn</h3>

  <?php
  $place_id4 = 'ChIJK-1GHO_6UIgRDd1TE4S7M4Q';

  $url4 = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$place_id4&fields=name,rating,review&key=$api_key";
  $response4 = file_get_contents($url4);
  $data4 = json_decode($response4, true);

  $reviews4 = $data4['result']['reviews'];
  foreach ($reviews4 as $review4) {
    $author_name = $review4['author_name'];
    $rating = $review4['rating'];
    $text = $review4['text'];
    $time = $review4['relative_time_description'];
    echo "<p><strong>$author_name</strong> rated Appalachian Ski Mtn <span class='stars'>$rating stars</span> - $time</p>";
    echo "<p class='endReview'>$text</p>";
  }
  ?>
  <p>Want to see more reviews for Appalachian Ski Mtn Click <a href='https://rb.gy/qu1shx' target='_blank'>here</a>.</p>
</div>
<div id="tab5Content">
  <!--  For Wolf Ridge  -->
  <h3>Wolf Ridge Ski Resort</h3>

  <?php
  $place_id5 = 'ChIJbdVLazAUWogRqgSBSMDascg';

  $url5 = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$place_id5&fields=name,rating,review&key=$api_key";
  $response5 = file_get_contents($url5);
  $data5 = json_decode($response5, true);

  $reviews5 = $data5['result']['reviews'];
  foreach ($reviews5 as $review5) {
    $author_name = $review5['author_name'];
    $rating = $review5['rating'];
    $text = $review5['text'];
    $time = $review5['relative_time_description'];
    echo "<p><strong>$author_name</strong> rated Wolf Ridge Ski Resort <span class='stars'>$rating stars</span> - $time</p>";
    echo "<p class='endReview'>$text</p>";
  }
  ?>
  <p>Want to see more reviews for Wolf Ridge Ski Resort Click <a href='https://rb.gy/q9snwk' target='_blank'>here</a>.</p>
</div>

 <?php
  include(SHARED_PATH . '/public_footer.php');
?>
