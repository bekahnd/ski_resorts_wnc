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
$sql = "SELECT resort_id, trail_name, is_open, difficulty_level FROM trail INNER JOIN difficulty ON trail.difficulty_id = difficulty.difficulty_id WHERE resort_id = 1 OR resort_id = 2 OR resort_id = 3 OR resort_id = 4 OR resort_id =5";
$result = mysqli_query($database, $sql);

foreach ($result as $row) {
  $resort_id = $row['resort_id'];
  $trail_name = $row['trail_name'];
  $is_open = $row['is_open'];
  $difficulty_level = $row['difficulty_level'];
  if ($is_open == '1') {
    $open = 'open';
  } else {
    $open = 'closed';
  }
  $trails[$resort_id][$trail_name] = array('is_open' => $open, 'difficulty_level' => $difficulty_level);
}

$difficulty = array();
foreach ($trails as $resort_id => $trail_names) {
    $count = 0;
    $greenCount = 0;
    $blueCount = 0;
    $blackCount = 0;
    $blueBlackCount = 0;
    $doubleBlackCount = 0;
    $terrainCount = 0;
    $openCount = 0;
    $closedCount = 0;
    foreach ($trail_names as $trail_name => $trail) {
        switch ($trail['difficulty_level']) {
            case 'green':
                $greenCount++;
                break;
            case 'blue':
                $blueCount++;
                break;
            case 'black':
                $blackCount++;
                break;
            case 'black/blue':
                $blueBlackCount++;
                break;
            case 'double black':
                $doubleBlackCount++;
                break;
            case 'terrain park':
                $terrainCount++;
                break;
            default:
                // ignore any other difficulty levels
                break;
        }
    }
    foreach ($trail_names as $trail_name => $trail) {
      switch ($trail['is_open']) {
        case 'open':
          $openCount++;
          break;
        case 'closed':
          $closedCount++;
          break;
        default:
          // ignore any other values
          break;
      }
    }
    $difficulty[$resort_id][$count] = array(
        'green' => $greenCount,
        'blue' => $blueCount,
        'black' => $blackCount,
        'blue/black' => $blueBlackCount,
        'double black' => $doubleBlackCount,
        'terrain' => $terrainCount,
        'open' => $openCount,
        'closed' => $closedCount
    );
    $count++;
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
  echo '<div class="trailGrid"><p>Trail Name</p><p>Status</p><p>Difficulty</p></div>';
  $trailList = array_keys($trails[1]);
  for ($i = 0; $i < 18; $i++) {
    echo '<div class="trailGrid">';
    echo "<p>" . $trailList[$i] . "</p>";
    echo "<p>" . $trails[1][$trailList[$i]]['is_open'];
    echo "<p>" . $trails[1][$trailList[$i]]['difficulty_level'];
    echo "</div>";
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
      <th>Black/Blue</th>
      <th>Black</th>
      <th>Double Black</th>
      <th>Terrain Park</th>
      <th>Open Trails</th>
      <th>Closed Trails</th>
    </tr>
    <tr>
      <td><?php echo $difficulty[2][0]['green']; ?></td>
      <td><?php echo $difficulty[2][0]['blue']; ?></td>
      <td><?php echo $difficulty[2][0]['blue/black']; ?></td>
      <td><?php echo $difficulty[2][0]['black']; ?></td>
      <td><?php echo $difficulty[2][0]['double black']; ?></td>
      <td><?php echo $difficulty[2][0]['terrain']; ?></td>
      <td><?php echo $difficulty[2][0]['open']; ?></td>
      <td><?php echo $difficulty[2][0]['closed']; ?></td>
    </tr>
  </table>
  <?php
  echo '<div class="trailGrid"><p>Trail Name</p><p>Status</p><p>Difficulty</p></div>';
  $trailList = array_keys($trails[2]);
  for ($i = 0; $i < 20; $i++) {
    echo '<div class="trailGrid">';
    echo "<p>" . $trailList[$i] . "</p>";
    echo "<p>" . $trails[2][$trailList[$i]]['is_open'];
    echo "<p>" . $trails[2][$trailList[$i]]['difficulty_level'];
    echo "</div>";
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
      <th>Black/Blue</th>
      <th>Black</th>
      <th>Double Black</th>
      <th>Terrain Park</th>
      <th>Open Trails</th>
      <th>Closed Trails</th>
    </tr>
    <tr>
      <td><?php echo $difficulty[3][0]['green']; ?></td>
      <td><?php echo $difficulty[3][0]['blue']; ?></td>
      <td><?php echo $difficulty[3][0]['blue/black']; ?></td>
      <td><?php echo $difficulty[3][0]['black']; ?></td>
      <td><?php echo $difficulty[3][0]['double black']; ?></td>
      <td><?php echo $difficulty[3][0]['terrain']; ?></td>
      <td><?php echo $difficulty[3][0]['open']; ?></td>
      <td><?php echo $difficulty[3][0]['closed']; ?></td>
    </tr>
  </table>
  <?php
echo '<div class="trailGrid"><p>Trail Name</p><p>Status</p><p>Difficulty</p></div>';
$trailList = array_keys($trails[3]);
for ($i = 0; $i < 17; $i++) {
  echo '<div class="trailGrid">';
  echo "<p>" . $trailList[$i] . "</p>";
  echo "<p>" . $trails[3][$trailList[$i]]['is_open'];
  echo "<p>" . $trails[3][$trailList[$i]]['difficulty_level'];
  echo "</div>";
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
      <th>Black/Blue</th>
      <th>Black</th>
      <th>Double Black</th>
      <th>Terrain Park</th>
      <th>Open Trails</th>
      <th>Closed Trails</th>
    </tr>
    <tr>
      <td><?php echo $difficulty[4][0]['green']; ?></td>
      <td><?php echo $difficulty[4][0]['blue']; ?></td>
      <td><?php echo $difficulty[4][0]['blue/black']; ?></td>
      <td><?php echo $difficulty[4][0]['black']; ?></td>
      <td><?php echo $difficulty[4][0]['double black']; ?></td>
      <td><?php echo $difficulty[4][0]['terrain']; ?></td>
      <td><?php echo $difficulty[4][0]['open']; ?></td>
      <td><?php echo $difficulty[4][0]['closed']; ?></td>
    </tr>
  </table>
  <?php
echo '<div class="trailGrid"><p>Trail Name</p><p>Status</p><p>Difficulty</p></div>';
$trailList = array_keys($trails[4]);
for ($i = 0; $i < 12; $i++) {
  echo '<div class="trailGrid">';
  echo "<p>" . $trailList[$i] . "</p>";
  echo "<p>" . $trails[4][$trailList[$i]]['is_open'];
  echo "<p>" . $trails[4][$trailList[$i]]['difficulty_level'];
  echo "</div>";
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
      <th>Black/Blue</th>
      <th>Black</th>
      <th>Double Black</th>
      <th>Terrain Park</th>
      <th>Open Trails</th>
      <th>Closed Trails</th>
    </tr>
    <tr>
      <td><?php echo $difficulty[5][0]['green']; ?></td>
      <td><?php echo $difficulty[5][0]['blue']; ?></td>
      <td><?php echo $difficulty[5][0]['blue/black']; ?></td>
      <td><?php echo $difficulty[5][0]['black']; ?></td>
      <td><?php echo $difficulty[5][0]['double black']; ?></td>
      <td><?php echo $difficulty[5][0]['terrain']; ?></td>
      <td><?php echo $difficulty[5][0]['open']; ?></td>
      <td><?php echo $difficulty[5][0]['closed']; ?></td>
    </tr>
  </table>
  <?php
  echo '<div class="trailGrid"><p>Trail Name</p><p>Status</p><p>Difficulty</p></div>';
  $trailList = array_keys($trails[5]);
  for ($i = 0; $i < 15; $i++) {
    echo '<div class="trailGrid">';
    echo "<p>" . $trailList[$i] . "</p>";
    echo "<p>" . $trails[5][$trailList[$i]]['is_open'];
    echo "<p>" . $trails[5][$trailList[$i]]['difficulty_level'];
    echo "</div>";
  }
  ?>
</div>

<?php
  include(SHARED_PATH . '/public_footer.php');
?>
</div>
</body>
</html>
