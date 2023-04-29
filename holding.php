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
 <h2><?php echo $page_title; ?></h2>
<?php
// Retrieve trail name, open status, and trail difficulty color from database
$sql = "SELECT resort_id, trail_name, is_open, difficulty_level FROM trail INNER JOIN difficulty ON trail.difficulty_id = difficulty.difficulty_id";
$result = mysqli_query($database, $sql);

// Initialize variables - trail array for each resort
$trails1 = array();
$trails2 = array();
$trails3 = array();
$trails4 = array();
$trails5 = array();

// Initialize variables for resort 1 - number of trails for each difficulty and number of trails open/closed
$green1 = 0;
$blue1 = 0;
$black1 = 0;
$double_black1 = 0;
$terrain1 = 0;
$num_trails_open1 = 0;
$num_trails_closed1 = 0;

// Initialize variables for resort 2 - number of trails for each difficulty and number of trails open/closed
$green2 = 0;
$blue2 = 0;
$black2 = 0;
$double_black2 = 0;
$terrain2 = 0;
$num_trails_open2 = 0;
$num_trails_closed2 = 0;

// Initialize variables for resort 3 - number of trails for each difficulty and number of trails open/closed
$green3 = 0;
$blue3 = 0;
$black3 = 0;
$double_black3 = 0;
$terrain3 = 0;
$num_trails_open3 = 0;
$num_trails_closed3 = 0;

// Initialize variables for resort 4 - number of trails for each difficulty and number of trails open/closed
$green4 = 0;
$blue4 = 0;
$black4 = 0;
$double_black4 = 0;
$terrain4 = 0;
$num_trails_open4 = 0;
$num_trails_closed4 = 0;

// Initialize variables for resort 5 - number of trails for each difficulty and number of trails open/closed
$green5 = 0;
$blue5 = 0;
$black5 = 0;
$double_black5 = 0;
$terrain5 = 0;
$num_trails_open5 = 0;
$num_trails_closed5 = 0;

// Run through each resort and create an array of the list of trail names, open status, and difficulty level for each.
// Find number of trails for each difficulty level for each resort and get count of how many trails are open and closed.
if (mysqli_num_rows($result) > 0) {
  while ($row =mysqli_fetch_assoc($result)) {
    if ($row['is_open'] == 0) {
      $open = 'closed';
    } else {
      $open = 'open';
    }

    if ($row['resort_id'] == 1) {
      if ($open == 'open') {
        $num_trails_open1++;
      } else {
        $num_trails_closed1++;
      }
      if ($row['difficulty_level'] == 'green') {
        $green1++;
      } elseif ($row['difficulty_level'] == 'blue') {
        $blue1++;
      } elseif ($row['difficulty_level'] == 'black') {
        $black1++;
      } elseif ($row['difficulty_level'] == 'double black') {
        $double_black1++;
      } else {
        $terrain1++;
      }
      $trail1 = array(
        'trail_name' => $row['trail_name'],
        'is_open' => $open,
        'difficulty' => $row['difficulty_level'],
      );
      $trails1[] = $trail1;
    } elseif ($row['resort_id'] == 2) {
      if ($open == 'open') {
        $num_trails_open2++;
      } else {
        $num_trails_closed2++;
      }
      if ($row['difficulty_level'] == 'green') {
        $green2++;
      } elseif ($row['difficulty_level'] == 'blue') {
        $blue2++;
      } elseif ($row['difficulty_level'] == 'black') {
        $black2++;
      } elseif ($row['difficulty_level'] == 'double black') {
        $double_black2++;
      } else {
        $terrain2++;
      }
      $trail2 = array(
        'trail_name' => $row['trail_name'],
        'is_open' => $open,
        'difficulty' => $row['difficulty_level']
      );
      $trails2[] = $trail2;
    } elseif ($row['resort_id'] == 3) {
      if ($open == 'open') {
        $num_trails_open3++;
      } else {
        $num_trails_closed3++;
      }
      if ($row['difficulty_level'] == 'green') {
        $green3++;
      } elseif ($row['difficulty_level'] == 'blue') {
        $blue3++;
      } elseif ($row['difficulty_level'] == 'black') {
        $black3++;
      } elseif ($row['difficulty_level'] == 'double black') {
        $double_black3++;
      } else {
        $terrain3++;
      }
      $trail3 = array(
        'trail_name' => $row['trail_name'],
        'is_open' => $open,
        'difficulty' => $row['difficulty_level']
      );
      $trails3[] = $trail3;
    } elseif ($row['resort_id'] == 4) {
      if ($open == 'open') {
        $num_trails_open4++;
      } else {
        $num_trails_closed4++;
      }
      if ($row['difficulty_level'] == 'green') {
        $green4++;
      } elseif ($row['difficulty_level'] == 'blue') {
        $blue4++;
      } elseif ($row['difficulty_level'] == 'black') {
        $black4++;
      } elseif ($row['difficulty_level'] == 'double black') {
        $double_black4++;
      } else {
        $terrain4++;
      }
      $trail4 = array(
        'trail_name' => $row['trail_name'],
        'is_open' => $open,
        'difficulty' => $row['difficulty_level']
      );
      $trails4[] = $trail4;
    } elseif ($row['resort_id'] == 5) {
      if ($open == 'open') {
        $num_trails_open5++;
      } else {
        $num_trails_closed5++;
      }
      if ($row['difficulty_level'] == 'green') {
        $green5++;
      } elseif ($row['difficulty_level'] == 'blue') {
        $blue5++;
      } elseif ($row['difficulty_level'] == 'black') {
        $black5++;
      } elseif ($row['difficulty_level'] == 'double black') {
        $double_black5++;
      } else {
        $terrain5++;
      }
      $trail5 = array(
        'trail_name' => $row['trail_name'],
        'is_open' => $open,
        'difficulty' => $row['difficulty_level']
      );
      $trails5[] = $trail5;
    }
    
  }
}
?>

<!-- Javascript for creating tabs for each resort -->
<div class="tabs">
  <div id="tab1" onClick="Javascript:selectTab(1);">Cataloochie Ski Resort</div>
  <div id="tab2" onClick="Javascript:selectTab(2);">Sugar Mountain Resort</div>
  <div id="tab3" onClick="Javascript:selectTab(3);">Beech Mountain Resort</div>
  <div id="tab4" onClick="Javascript:selectTab(4);">Appalachian Ski MTN</div>
  <div id="tab5" onClick="Javascript:selectTab(5);">Wolf Ridge Ski Resort</div>
</div>

<!-- Display information for resort 1 -->
<div id="tab1Content">
  <h3>Cataloochie Ski Resort</h3>
  <table>
    <tr>
      <th>Green</th>
      <th>Blue</th>
      <th>Black/Blue</th>
      <th>Black</th>
      <th>Double Black</th>
      <th>Terrain Park</th>
      <th>Open Trails</th>
      <th>Closed Trails</th>
    </tr>
    <tr>
      <td><?php echo $difficulty[1][0]['green']; ?></td>
      <td><?php echo $difficulty[1][0]['blue']; ?></td>
      <td><?php echo $difficulty[1][0]['blue/black']; ?></td>
      <td><?php echo $difficulty[1][0]['black']; ?></td>
      <td><?php echo $difficulty[1][0]['double black']; ?></td>
      <td><?php echo $difficulty[1][0]['terrain']; ?></td>
      <td><?php echo $difficulty[1][0]['open']; ?></td>
      <td><?php echo $difficulty[1][0]['closed']; ?></td>
    </tr>
  </table>
  <?php
  $i = 0;
  echo '<div class="trailGrid"><p>Trail Name</p><p>Status</p><p>Difficulty</p></div>';
  while($i < count($trails1)) {
    echo '<div class="trailGrid">';
    echo "<p>" . $trails1[$i]['trail_name'] . "</p>";
    echo "<p>" . $trails1[$i]['is_open'] . "</p>";
    echo "<p>" . $trails1[$i]['difficulty'] . "</p>";
    echo "</div>";
    $i++;
  }
  ?>
</div>
<!-- Display information for resort 2 -->
<div id="tab2Content">
<h3>Sugar Mountain Resort</h3>
<table>
    <tr>
      <th>Green</th>
      <th>Blue</th>
      <th>Black</th>
      <th>Double Black</th>
      <th>Terrain Park</th>
      <th>Open Trails</th>
      <th>Closed Trails</th>
    </tr>
    <tr>
      <td><?php echo $green2; ?></td>
      <td><?php echo $blue2; ?></td>
      <td><?php echo $black2; ?></td>
      <td><?php echo $double_black2; ?></td>
      <td><?php echo $terrain2; ?></td>
      <td><?php echo $num_trails_open2; ?></td>
      <td><?php echo $num_trails_closed2; ?></td>
    </tr>
  </table>
  <?php
  $i = 0;
  echo '<div class="trailGrid"><p>Trail Name</p><p>Status</p><p>Difficulty</p></div>';
  while($i < count($trails2)) {
    echo '<div class="trailGrid">';
    echo "<p>" . $trails2[$i]['trail_name'] . "</p>";
    echo "<p>" . $trails2[$i]['is_open'] . "</p>";
    echo "<p>" . $trails2[$i]['difficulty'] . "</p>";
    echo "</div>";
    $i++;
  }
  ?>
</div>
<!-- Display information for resort 3 -->
<div id="tab3Content">
<h3>Beech Mountain Resort</h3>
<table>
  <tr>
    <th>Green</th>
    <th>Blue</th>
    <th>Black</th>
    <th>Double Black</th>
    <th>Terrain Park</th>
    <th>Open Trails</th>
    <th>Closed Trails</th>
  </tr>
  <tr>
    <td><?php echo $green3; ?></td>
    <td><?php echo $blue3; ?></td>
    <td><?php echo $black3; ?></td>
    <td><?php echo $double_black3; ?></td>
    <td><?php echo $terrain3; ?></td>
    <td><?php echo $num_trails_open3; ?></td>
    <td><?php echo $num_trails_closed3; ?></td>
  </tr>
</table>
  <?php
  $i = 0;
  echo '<div class="trailGrid"><p>Trail Name</p><p>Status</p><p>Difficulty</p></div>';
  while($i < count($trails3)) {
    echo '<div class="trailGrid">';
    echo "<p>" . $trails3[$i]['trail_name'] . "</p>";
    echo "<p>" . $trails3[$i]['is_open'] . "</p>";
    echo "<p>" . $trails3[$i]['difficulty'] . "</p>";
    echo "</div>";
    $i++;
  }
  ?>
</div>
<!-- Display information for resort 4 -->
<div id="tab4Content">
  <h3>Appalachian Ski MTN</h3>
  <table>
    <tr>
      <th>Green</th>
      <th>Blue</th>
      <th>Black</th>
      <th>Double Black</th>
      <th>Terrain Park</th>
      <th>Open Trails</th>
      <th>Closed Trails</th>
    </tr>
    <tr>
      <td><?php echo $green4; ?></td>
      <td><?php echo $blue4; ?></td>
      <td><?php echo $black4; ?></td>
      <td><?php echo $double_black4; ?></td>
      <td><?php echo $terrain4; ?></td>
      <td><?php echo $num_trails_open4; ?></td>
      <td><?php echo $num_trails_closed4; ?></td>
    </tr>
  </table>
  <?php
  $i = 0;
  echo '<div class="trailGrid"><p>Trail Name</p><p>Status</p><p>Difficulty</p></div>';
  while($i < count($trails4)) {
    echo '<div class="trailGrid">';
    echo "<p>" . $trails4[$i]['trail_name'] . "</p>";
    echo "<p>" . $trails4[$i]['is_open'] . "</p>";
    echo "<p>" . $trails4[$i]['difficulty'] . "</p>";
    echo "</div>";
    $i++;
  }
  ?>
</div>
<!-- Display information for resort 5 -->
<div id="tab5Content">
  <h3>Wolf Ridge Ski Resort</h3>
  <table>
    <tr>
      <th>Green</th>
      <th>Blue</th>
      <th>Black</th>
      <th>Double Black</th>
      <th>Terrain Park</th>
      <th>Open Trails</th>
      <th>Closed Trails</th>
    </tr>
    <tr>
      <td><?php echo $green5; ?></td>
      <td><?php echo $blue5; ?></td>
      <td><?php echo $black5; ?></td>
      <td><?php echo $double_black5; ?></td>
      <td><?php echo $terrain5; ?></td>
      <td><?php echo $num_trails_open5; ?></td>
      <td><?php echo $num_trails_closed5; ?></td>
    </tr>
  </table>
  <?php
  $i = 0;
  echo '<div class="trailGrid"><p>Trail Name</p><p>Status</p><p>Difficulty</p></div>';
  while($i < count($trails5)) {
    echo '<div class="trailGrid">';
    echo "<p>" . $trails5[$i]['trail_name'] . "</p>";
    echo "<p>" . $trails5[$i]['is_open'] . "</p>";
    echo "<p>" . $trails5[$i]['difficulty'] . "</p>";
    echo "</div>";
    $i++;
  }
  ?>
</div>

<?php
  include(SHARED_PATH . '/public_footer.php');
?>
</div>
</body>
</html>
<!-- breaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaak -->

<div id="trails">

<?php
include_once('../private/initialize.php');
$page_title = 'Trails';
include_once(SHARED_PATH . '/public_header.php');
check_member_login();
?>

<h2><?php echo $page_title; ?></h2>
<?php
// Retrieve trail name, open status, and trail difficulty color from database
$sql = "SELECT resort_id, trail_name, is_open, difficulty_level FROM trail INNER JOIN difficulty ON trail.difficulty_id = difficulty.difficulty_id";
$result = mysqli_query($database, $sql);

// Initialize variables - trail array for each resort
$trails1 = array();
$trails2 = array();
$trails3 = array();
$trails4 = array();
$trails5 = array();

// Initialize variables for resort 1 - number of trails for each difficulty and number of trails open/closed
$green1 = 0;
$blue1 = 0;
$black1 = 0;
$double_black1 = 0;
$terrain1 = 0;
$num_trails_open1 = 0;
$num_trails_closed1 = 0;

// Initialize variables for resort 2 - number of trails for each difficulty and number of trails open/closed
$green2 = 0;
$blue2 = 0;
$black2 = 0;
$double_black2 = 0;
$terrain2 = 0;
$num_trails_open2 = 0;
$num_trails_closed2 = 0;

// Initialize variables for resort 3 - number of trails for each difficulty and number of trails open/closed
$green3 = 0;
$blue3 = 0;
$black3 = 0;
$double_black3 = 0;
$terrain3 = 0;
$num_trails_open3 = 0;
$num_trails_closed3 = 0;

// Initialize variables for resort 4 - number of trails for each difficulty and number of trails open/closed
$green4 = 0;
$blue4 = 0;
$black4 = 0;
$double_black4 = 0;
$terrain4 = 0;
$num_trails_open4 = 0;
$num_trails_closed4 = 0;

// Initialize variables for resort 5 - number of trails for each difficulty and number of trails open/closed
$green5 = 0;
$blue5 = 0;
$black5 = 0;
$double_black5 = 0;
$terrain5 = 0;
$num_trails_open5 = 0;
$num_trails_closed5 = 0;

// Run through each resort and create an array of the list of trail names, open status, and difficulty level for each.
// Find number of trails for each difficulty level for each resort and get count of how many trails are open and closed.
if (mysqli_num_rows($result) > 0) {
  while ($row =mysqli_fetch_assoc($result)) {
    if ($row['is_open'] == 0) {
      $open = 'closed';
    } else {
      $open = 'open';
    }

    if ($row['resort_id'] == 1) {
      if ($open == 'open') {
        $num_trails_open1++;
      } else {
        $num_trails_closed1++;
      }
      if ($row['difficulty_level'] == 'green') {
        $green1++;
      } elseif ($row['difficulty_level'] == 'blue') {
        $blue1++;
      } elseif ($row['difficulty_level'] == 'black') {
        $black1++;
      } elseif ($row['difficulty_level'] == 'double black') {
        $double_black1++;
      } else {
        $terrain1++;
      }
      $trail1 = array(
        'trail_name' => $row['trail_name'],
        'is_open' => $open,
        'difficulty' => $row['difficulty_level'],
      );
      $trails1[] = $trail1;
    } elseif ($row['resort_id'] == 2) {
      if ($open == 'open') {
        $num_trails_open2++;
      } else {
        $num_trails_closed2++;
      }
      if ($row['difficulty_level'] == 'green') {
        $green2++;
      } elseif ($row['difficulty_level'] == 'blue') {
        $blue2++;
      } elseif ($row['difficulty_level'] == 'black') {
        $black2++;
      } elseif ($row['difficulty_level'] == 'double black') {
        $double_black2++;
      } else {
        $terrain2++;
      }
      $trail2 = array(
        'trail_name' => $row['trail_name'],
        'is_open' => $open,
        'difficulty' => $row['difficulty_level']
      );
      $trails2[] = $trail2;
    } elseif ($row['resort_id'] == 3) {
      if ($open == 'open') {
        $num_trails_open3++;
      } else {
        $num_trails_closed3++;
      }
      if ($row['difficulty_level'] == 'green') {
        $green3++;
      } elseif ($row['difficulty_level'] == 'blue') {
        $blue3++;
      } elseif ($row['difficulty_level'] == 'black') {
        $black3++;
      } elseif ($row['difficulty_level'] == 'double black') {
        $double_black3++;
      } else {
        $terrain3++;
      }
      $trail3 = array(
        'trail_name' => $row['trail_name'],
        'is_open' => $open,
        'difficulty' => $row['difficulty_level']
      );
      $trails3[] = $trail3;
    } elseif ($row['resort_id'] == 4) {
      if ($open == 'open') {
        $num_trails_open4++;
      } else {
        $num_trails_closed4++;
      }
      if ($row['difficulty_level'] == 'green') {
        $green4++;
      } elseif ($row['difficulty_level'] == 'blue') {
        $blue4++;
      } elseif ($row['difficulty_level'] == 'black') {
        $black4++;
      } elseif ($row['difficulty_level'] == 'double black') {
        $double_black4++;
      } else {
        $terrain4++;
      }
      $trail4 = array(
        'trail_name' => $row['trail_name'],
        'is_open' => $open,
        'difficulty' => $row['difficulty_level']
      );
      $trails4[] = $trail4;
    } elseif ($row['resort_id'] == 5) {
      if ($open == 'open') {
        $num_trails_open5++;
      } else {
        $num_trails_closed5++;
      }
      if ($row['difficulty_level'] == 'green') {
        $green5++;
      } elseif ($row['difficulty_level'] == 'blue') {
        $blue5++;
      } elseif ($row['difficulty_level'] == 'black') {
        $black5++;
      } elseif ($row['difficulty_level'] == 'double black') {
        $double_black5++;
      } else {
        $terrain5++;
      }
      $trail5 = array(
        'trail_name' => $row['trail_name'],
        'is_open' => $open,
        'difficulty' => $row['difficulty_level']
      );
      $trails5[] = $trail5;
    }
    
  }
}
?>

<!-- Javascript for creating tabs for each resort -->
<div class="tabs">
  <div id="tab1" onClick="Javascript:selectTab(1);">Cataloochie Ski Resort</div>
  <div id="tab2" onClick="Javascript:selectTab(2);">Sugar Mountain Resort</div>
  <div id="tab3" onClick="Javascript:selectTab(3);">Beech Mountain Resort</div>
  <div id="tab4" onClick="Javascript:selectTab(4);">Appalachian Ski MTN</div>
  <div id="tab5" onClick="Javascript:selectTab(5);">Wolf Ridge Ski Resort</div>
</div>

<!-- Display information for resort 1 -->
<div id="tab1Content">
  <h3>Cataloochie Ski Resort</h3>
  <table>
    <tr>
      <th>Green</th>
      <th>Blue</th>
      <th>Black</th>
      <th>Double Black</th>
      <th>Terrain Park</th>
      <th>Open Trails</th>
      <th>Closed Trails</th>
    </tr>
    <tr>
      <td><?php echo $green1; ?></td>
      <td><?php echo $blue1; ?></td>
      <td><?php echo $black1; ?></td>
      <td><?php echo $double_black1; ?></td>
      <td><?php echo $terrain1; ?></td>
      <td><?php echo $num_trails_open1; ?></td>
      <td><?php echo $num_trails_closed1; ?></td>
    </tr>
  </table>
  <?php
  $i = 0;
  echo '<div class="trailGrid"><p>Trail Name</p><p>Status</p><p>Difficulty</p></div>';
  while($i < count($trails1)) {
    echo '<div class="trailGrid">';
    echo "<p>" . $trails1[$i]['trail_name'] . "</p>";
    echo "<p>" . $trails1[$i]['is_open'] . "</p>";
    echo "<p>" . $trails1[$i]['difficulty'] . "</p>";
    echo "</div>";
    $i++;
  }
  ?>
</div>
<!-- Display information for resort 2 -->
<div id="tab2Content">
<h3>Sugar Mountain Resort</h3>
<table>
    <tr>
      <th>Green</th>
      <th>Blue</th>
      <th>Black</th>
      <th>Double Black</th>
      <th>Terrain Park</th>
      <th>Open Trails</th>
      <th>Closed Trails</th>
    </tr>
    <tr>
      <td><?php echo $green2; ?></td>
      <td><?php echo $blue2; ?></td>
      <td><?php echo $black2; ?></td>
      <td><?php echo $double_black2; ?></td>
      <td><?php echo $terrain2; ?></td>
      <td><?php echo $num_trails_open2; ?></td>
      <td><?php echo $num_trails_closed2; ?></td>
    </tr>
  </table>
  <?php
  $i = 0;
  echo '<div class="trailGrid"><p>Trail Name</p><p>Status</p><p>Difficulty</p></div>';
  while($i < count($trails2)) {
    echo '<div class="trailGrid">';
    echo "<p>" . $trails2[$i]['trail_name'] . "</p>";
    echo "<p>" . $trails2[$i]['is_open'] . "</p>";
    echo "<p>" . $trails2[$i]['difficulty'] . "</p>";
    echo "</div>";
    $i++;
  }
  ?>
</div>
<!-- Display information for resort 3 -->
<div id="tab3Content">
<h3>Beech Mountain Resort</h3>
<table>
  <tr>
    <th>Green</th>
    <th>Blue</th>
    <th>Black</th>
    <th>Double Black</th>
    <th>Terrain Park</th>
    <th>Open Trails</th>
    <th>Closed Trails</th>
  </tr>
  <tr>
    <td><?php echo $green3; ?></td>
    <td><?php echo $blue3; ?></td>
    <td><?php echo $black3; ?></td>
    <td><?php echo $double_black3; ?></td>
    <td><?php echo $terrain3; ?></td>
    <td><?php echo $num_trails_open3; ?></td>
    <td><?php echo $num_trails_closed3; ?></td>
  </tr>
</table>
  <?php
  $i = 0;
  echo '<div class="trailGrid"><p>Trail Name</p><p>Status</p><p>Difficulty</p></div>';
  while($i < count($trails3)) {
    echo '<div class="trailGrid">';
    echo "<p>" . $trails3[$i]['trail_name'] . "</p>";
    echo "<p>" . $trails3[$i]['is_open'] . "</p>";
    echo "<p>" . $trails3[$i]['difficulty'] . "</p>";
    echo "</div>";
    $i++;
  }
  ?>
</div>
<!-- Display information for resort 4 -->
<div id="tab4Content">
  <h3>Appalachian Ski MTN</h3>
  <table>
    <tr>
      <th>Green</th>
      <th>Blue</th>
      <th>Black</th>
      <th>Double Black</th>
      <th>Terrain Park</th>
      <th>Open Trails</th>
      <th>Closed Trails</th>
    </tr>
    <tr>
      <td><?php echo $green4; ?></td>
      <td><?php echo $blue4; ?></td>
      <td><?php echo $black4; ?></td>
      <td><?php echo $double_black4; ?></td>
      <td><?php echo $terrain4; ?></td>
      <td><?php echo $num_trails_open4; ?></td>
      <td><?php echo $num_trails_closed4; ?></td>
    </tr>
  </table>
  <?php
  $i = 0;
  echo '<div class="trailGrid"><p>Trail Name</p><p>Status</p><p>Difficulty</p></div>';
  while($i < count($trails4)) {
    echo '<div class="trailGrid">';
    echo "<p>" . $trails4[$i]['trail_name'] . "</p>";
    echo "<p>" . $trails4[$i]['is_open'] . "</p>";
    echo "<p>" . $trails4[$i]['difficulty'] . "</p>";
    echo "</div>";
    $i++;
  }
  ?>
</div>
<!-- Display information for resort 5 -->
<div id="tab5Content">
  <h3>Wolf Ridge Ski Resort</h3>
  <table>
    <tr>
      <th>Green</th>
      <th>Blue</th>
      <th>Black</th>
      <th>Double Black</th>
      <th>Terrain Park</th>
      <th>Open Trails</th>
      <th>Closed Trails</th>
    </tr>
    <tr>
      <td><?php echo $green5; ?></td>
      <td><?php echo $blue5; ?></td>
      <td><?php echo $black5; ?></td>
      <td><?php echo $double_black5; ?></td>
      <td><?php echo $terrain5; ?></td>
      <td><?php echo $num_trails_open5; ?></td>
      <td><?php echo $num_trails_closed5; ?></td>
    </tr>
  </table>
  <?php
  $i = 0;
  echo '<div class="trailGrid"><p>Trail Name</p><p>Status</p><p>Difficulty</p></div>';
  while($i < count($trails5)) {
    echo '<div class="trailGrid">';
    echo "<p>" . $trails5[$i]['trail_name'] . "</p>";
    echo "<p>" . $trails5[$i]['is_open'] . "</p>";
    echo "<p>" . $trails5[$i]['difficulty'] . "</p>";
    echo "</div>";
    $i++;
  }
  ?>
</div>

<?php
  include(SHARED_PATH . '/public_footer.php');
?>
</div>
</body>
</html>






