<?php
include_once('../../private/initialize.php');
?>
<span id="trails">
<?php
include_once(SHARED_PATH . '/admin_header.php');
$page_title = 'Admin Home';
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
