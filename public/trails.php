<div id="trails">

<?php
include_once('../private/initialize.php');
include_once(SHARED_PATH . '/public_header.php');
check_member_login();
$page_title = 'Trails';
?>

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
