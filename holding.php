<?php
include_once('../../private/initialize.php');
?>
<span id="trails">
<?php
include_once(SHARED_PATH . '/admin_header.php');
$page_title = 'Admin Trails';
check_admin_login();
?>
<main>
<h2><?php echo $page_title; ?></h2>
<div>
  <h3>Cataloochie Ski Resort</h3>
  <ul>
    <li>Open:</li>
    <ul>
  <?php
  $sql = "SELECT * FROM trail WHERE resort_id = 1";
  $open1 = array();
  $closed1 = array();

  $result = mysqli_query($database, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $trail_id = $row["trail_id"];
      if($row['is_open'] == 1) {
        $open1[$row["trail_id"]] = $row["trail_name"];
      } else {
        $closed1[$row["trail_id"]] = $row["trail_name"];
      }
    }
  }
  loop_trails($open1);
  ?>
    </ul>
    <li>Closed:</li>
    <ul>
      
  <?php
  loop_trails($closed1);
  ?>

  </ul>
</div>

<div>
  <h3>Sugar Mountain Resort</h3>
  <ul>
    <li>Open:</li>
    <ul>
  <?php
  $sql = "SELECT * FROM trail WHERE resort_id = 2";
  $open2 = array();
  $closed2 = array();

  $result = mysqli_query($database, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      if($row['is_open'] == 1) {
        $open2[$row["trail_id"]] = $row["trail_name"];
      } else {
        $closed2[$row["trail_id"]] = $row["trail_name"];
      }
    }
  }
  loop_trails($open2);
  ?>
    </ul>
    <li>Closed:</li>
    <ul>
      
  <?php
  loop_trails($closed2);
  ?>

  </ul>
</div>

<div>
  <h3>Beech Mountain Resort</h3>
  <ul>
    <li>Open:</li>
    <ul>
  <?php
  $sql = "SELECT * FROM trail WHERE resort_id = 3";
  $open3 = array();
  $closed3 = array();

  $result = mysqli_query($database, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      if($row['is_open'] == 1) {
        $open3[$row["trail_id"]] = $row["trail_name"];
      } else {
        $closed3[$row["trail_id"]] = $row["trail_name"];
      }
    }
  }
  loop_trails($open3);
  ?>
    </ul>
    <li>Closed:</li>
    <ul>
      
  <?php
  loop_trails($closed3);
  ?>

  </ul>
</div>

<div>
  <h3>Appalachian Ski Mtn</h3>
  <ul>
    <li>Open:</li>
    <ul>
  <?php
  $sql = "SELECT * FROM trail WHERE resort_id = 4";
  $open4 = array();
  $closed4 = array();

  $result = mysqli_query($database, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      if($row['is_open'] == 1) {
        $open4[$row["trail_id"]] = $row["trail_name"];
      } else {
        $closed4[$row["trail_id"]] = $row["trail_name"];
      }
    }
  }
  loop_trails($open4)
  ?>
    </ul>
    <li>Closed:</li>
    <ul>
      
  <?php
  loop_trails($closed4);
  ?>

  </ul>
</div>

<div>
  <h3>Wolf Ridge Ski Resort</h3>
  <ul>
    <li>Open:</li>
    <ul>
  <?php
  $sql = "SELECT * FROM trail WHERE resort_id = 5";
  $open5 = array();
  $closed5 = array();

  $result = mysqli_query($database, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      if($row['is_open'] == 1) {
        $open5[$row["trail_id"]] = $row["trail_name"];
      } else {
        $closed5[$row["trail_id"]] = $row["trail_name"];
      }
    }
  }
  loop_trails($open5);
  ?>
    </ul>
    <li>Closed:</li>
    <ul>
      
  <?php
  loop_trails($closed5);
  ?>

  </ul>
</div>
</div>
</body>
</html>


<!-- nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn -->
<h2><?php echo $page_title; ?></h2>
<div>
  <h3>Cataloochie Ski Resort</h3>
  <ul>
    <li>Open:</li>
    <ul>
  <?php
  $sql = "SELECT * FROM trail WHERE resort_id = 1";
  $open1 = [];
  $closed1 = [];

  $result = mysqli_query($database, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      if($row['is_open'] == 1) {
        // echo "<li>" . $row['trail_name'] . "</li><br>";
        array_push($open1, $row["trail_name"]);
      } else {
        array_push($closed1, $row["trail_name"]);
      }
    }
  }
  foreach($open1 as $item) {
    echo "<li>" . $item . "</li>";
  }
  ?>
    </ul>
    <li>Closed:</li>
    <ul>
      
  <?php
  foreach($closed1 as $item) {
    echo "<li>" . $item . "</li>";
  }
  ?>

  </ul>
</div>

<div>
  <h3>Sugar Mountain Resort</h3>
  <ul>
    <li>Open:</li>
    <ul>
  <?php
  $sql = "SELECT * FROM trail WHERE resort_id = 2";
  $open2 = [];
  $closed2 = [];

  $result = mysqli_query($database, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      if($row['is_open'] == 1) {
        // echo "<li>" . $row['trail_name'] . "</li><br>";
        array_push($open2, $row["trail_name"]);
      } else {
        array_push($closed2, $row["trail_name"]);
      }
    }
  }
  foreach($open2 as $item) {
    echo "<li>" . $item . "</li>";
  }
  ?>
    </ul>
    <li>Closed:</li>
    <ul>
      
  <?php
  foreach($closed2 as $item) {
    echo "<li>" . $item . "</li>";
  }
  ?>

  </ul>
</div>

<div>
  <h3>Beech Mountain Resort</h3>
  <ul>
    <li>Open:</li>
    <ul>
  <?php
  $sql = "SELECT * FROM trail WHERE resort_id = 3";
  $open3 = [];
  $closed3 = [];

  $result = mysqli_query($database, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      if($row['is_open'] == 1) {
        // echo "<li>" . $row['trail_name'] . "</li><br>";
        array_push($open3, $row["trail_name"]);
      } else {
        array_push($closed3, $row["trail_name"]);
      }
    }
  }
  foreach($open3 as $item) {
    echo "<li>" . $item . "</li>";
  }
  ?>
    </ul>
    <li>Closed:</li>
    <ul>
      
  <?php
  foreach($closed3 as $item) {
    echo "<li>" . $item . "</li>";
  }
  ?>

  </ul>
</div>

<div>
  <h3>Appalachian Ski Mtn</h3>
  <ul>
    <li>Open:</li>
    <ul>
  <?php
  $sql = "SELECT * FROM trail WHERE resort_id = 4";
  $open4 = [];
  $closed4 = [];

  $result = mysqli_query($database, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      if($row['is_open'] == 1) {
        // echo "<li>" . $row['trail_name'] . "</li><br>";
        array_push($open4, $row["trail_name"]);
      } else {
        array_push($closed4, $row["trail_name"]);
      }
    }
  }
  foreach($open4 as $item) {
    echo "<li>" . $item . "</li>";
  }
  ?>
    </ul>
    <li>Closed:</li>
    <ul>
      
  <?php
  foreach($closed4 as $item) {
    echo "<li>" . $item . "</li>";
  }
  ?>

  </ul>
</div>

<div>
  <h3>Wolf Ridge Ski Resort</h3>
  <ul>
    <li>Open:</li>
    <ul>
  <?php
  $sql = "SELECT * FROM trail WHERE resort_id = 5";
  $open5 = [];
  $closed5 = [];

  $result = mysqli_query($database, $sql);
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      if($row['is_open'] == 1) {
        // echo "<li>" . $row['trail_name'] . "</li><br>";
        array_push($open5, $row["trail_name"]);
      } else {
        array_push($closed5, $row["trail_name"]);
      }
    }
  }
  foreach($open5 as $item) {
    echo "<li>" . $item . "</li>";
  }
  ?>
    </ul>
    <li>Closed:</li>
    <ul>
      
  <?php
  foreach($closed5 as $item) {
    echo "<li>" . $item . "</li>";
  }
  ?>

  </ul>
</div>
  <?php
  include(SHARED_PATH . '/public_footer.php');
?>
</div>
</body>
</html>
 <!-- nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn -->
 <?php
include_once('../private/initialize.php'); ?>

<span id="reviews">
<?php
include_once(SHARED_PATH . '/public_header.php');
check_member_login();
$page_title = 'Reviews';
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

<h3>Cataloochi Ski Resort</h3>

<?php
$reviews1 = $data1['result']['reviews'];
foreach ($reviews1 as $review1) {
  $author_name = $review1['author_name'];
  $rating = $review1['rating'];
  $text = $review1['text'];
  $time = $review1['relative_time_description'];
  echo "<p><strong>$author_name</strong> rated Cataloochie Ski Area <span id='stars'>$rating stars</span> - $time</p>";
  echo "<p>$text</p>";
}
?>
<p>Want to see more reviews for Cataloochie Ski Resort? Click <a href='https://rb.gy/gq2h4s' target='_blank'>here</a>.</p>

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
  echo "<p><strong>$author_name</strong> rated Sugar Mountain Resort <span id='stars'>$rating stars</span> - $time</p>";
  echo "<p>$text</p>";
}
?>
<p>Want to see more reviews for Sugar Mountain Resort? Click <a href='https://rb.gy/ewfm3m' target='_blank'>here</a>.</p>

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
  echo "<p><strong>$author_name</strong> rated Beech Mountain Resort <span id='stars'>$rating stars</span> - $time</p>";
  echo "<p>$text</p>";
}
?>
<p>Want to see more reviews for Beech Mountain Resort Click <a href='https://rb.gy/h7jtuo' target='_blank'>here</a>.</p>

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
  echo "<p><strong>$author_name</strong> rated Appalachian Ski Mtn <span id='stars'>$rating stars</span> - $time</p>";
  echo "<p>$text</p>";
}
?>
<p>Want to see more reviews for Appalachian Ski Mtn Click <a href='https://rb.gy/qu1shx' target='_blank'>here</a>.</p>

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
  echo "<p><strong>$author_name</strong> rated Wolf Ridge Ski Resort <span id='stars'>$rating stars</span> - $time</p>";
  echo "<p>$text</p>";
}
?>
<p>Want to see more reviews for Wolf Ridge Ski Resort Click <a href='https://rb.gy/q9snwk' target='_blank'>here</a>.</p>

 <?php
  include(SHARED_PATH . '/public_footer.php');
?>
</div>
</span>
</body>
</html>