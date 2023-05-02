<div id="price">

<?php
include_once('../private/initialize.php');
$page_title = 'Prices';
include_once(SHARED_PATH . '/public_header.php');
check_member_login();

$resorts = array(
  array(), // Cataloochie
  array(), // Sugar
  array(), // Beech
  array(), // App
  array() // Wolf
);

// Retrieve pricing category and prices 
$sql = "SELECT resort_id, pricing_category, price FROM resort_pricing INNER JOIN pricing_category ON resort_pricing.pricing_category_id = pricing_category.pricing_category_id";
$result = mysqli_query($database, $sql);

foreach ($result as $row) {
  $resort_id = $row['resort_id'] - 1; // Subtract 1 to match array index
  $category = $row['pricing_category'];
  $price = $row['price'];
  $resorts[$resort_id][$category] = $price;
}

$sql = "SELECT resort_name, half_day_time, full_day_time, night_time, special_time, junior_age, adult_age FROM resort WHERE resort_id = 1 OR resort_id = 2 OR resort_id = 3 OR resort_id = 4 OR resort_id =5";
$result = mysqli_query($database, $sql);

$resortSpecifics = array();

if(mysqli_num_rows($result) > 0 ) {
  while($row = $result->fetch_assoc()) {
    $resort_name = $row["resort_name"];
    $half_day_time = $row["half_day_time"];
    $full_day_time = $row["full_day_time"];
    $night_time = $row["night_time"];
    $special_time = $row["special_time"];
    $junior_age = $row["junior_age"];
    $adult_age = $row["adult_age"];

    // Create an associative array for the resort data
    $resort_data = array(
      "half_day_time" => $half_day_time,
      "full_day_time" => $full_day_time,
      "night_time" => $night_time,
      "special_time" => $special_time,
      "junior_age" => $junior_age,
      "adult_age" => $adult_age
    );
    // Add the resort data to the array using the resort name as the key
    $resortSpecifics[$resort_name] = $resort_data;
  }
}
?>

<div id="intro">
  <h2><?php echo $page_title; ?></h2>
  <p>The prices for the five resorts are listed in the tables below. These prices are accurate as of the 2023 ski season. You can find the prices for adult/junior slope tickets, ski rental tickets, and snowboard rental tickets. Prices vary when it comes to length of time and age, and are divided this way below. Depending on the resort you visit the ages considered juniors and adults will differ. Please see the ages for each resort towards the bottom of the page. Many of the resorts also offer a special such as purchasing an extension for your ticket for a lower price or purchasing an all day ticket from open to close. These specials can be found towards the end of the page as well. </p>
</div>

<div class="tabs">
  <div class="tab1" onClick="Javascript:selectPriceTab(1);">Lift Tickets</div>
  <div class="tab2" onClick="Javascript:selectPriceTab(2);">Ski Rental Tickets</div>
  <div class="tab3" onClick="Javascript:selectPriceTab(3);">Snowboard Rental Tickets</div>
</div>

<div id="tables">
  <div id="tab1Content">
    <table>
      <caption>Adult Lift Tickets</caption>
      <thead>
        <tr>
          <th>Category</th>
          <th>Cataloochie Ski Area</th>
          <th>Sugar Mountain Resort</th>
          <th>Beech Mountain Resort</th>
          <th>Appalachian Ski Mtn</th>
          <th>Wolf Ridge Ski Resort</th>
        </tr>
      </thead>
      <?php
      // Create the table body with the categories as the rows
      echo "<tbody>";
      $categories = array_keys($resorts[0]);
      for ($i = 0; $i < 8; $i++) {
        echo "<tr>";
        echo "<td>" . $categories[$i] . "</td>";
        for ($j = 0; $j < 5; $j++) {
          if (isset($resorts[$j][$categories[$i]])) {
            echo "<td>" . $resorts[$j][$categories[$i]] . "</td>";
          } else {
              echo "<td>N/A</td>";
            }
          }
        echo "</tr>";
      }
      echo "</tbody>";
      ?>
    </table>
    <table>
      <caption>Junior Lift Tickets</caption>
      <thead>
        <tr>
          <th>Category</th>
          <th>Cataloochie Ski Area</th>
          <th>Sugar Mountain Resort</th>
          <th>Beech Mountain Resort</th>
          <th>Appalachian Ski Mtn</th>
          <th>Wolf Ridge Ski Resort</th>
        </tr>
      </thead>
      <?php
      // Create the table body with the categories as the rows
      echo "<tbody>";
      $categories = array_keys($resorts[0]);
      for ($i = 8; $i < 16; $i++) {
        echo "<tr>";
        echo "<td>" . $categories[$i] . "</td>";
        for ($j = 0; $j < 5; $j++) {
          if (isset($resorts[$j][$categories[$i]])) {
            echo "<td>" . $resorts[$j][$categories[$i]] . "</td>";
          } else {
              echo "<td>N/A</td>";
            }
        }
        echo "</tr>";
      }
      echo "</tbody>";
      ?>
    </table>
  </div>
  <div id="tab2Content">
    <table>
      <caption>Adult Ski Rentals</caption>
      <thead>
        <tr>
          <th>Category</th>
          <th>Cataloochie Ski Area</th>
          <th>Sugar Mountain Resort</th>
          <th>Beech Mountain Resort</th>
          <th>Appalachian Ski Mtn</th>
          <th>Wolf Ridge Ski Resort</th>
        </tr>
      </thead>
      <?php
      // Create the table body with the categories as the rows
      echo "<tbody>";
      $categories = array_keys($resorts[0]);
      for ($i = 16; $i < 24; $i++) {
        echo "<tr>";
        echo "<td>" . $categories[$i] . "</td>";
        for ($j = 0; $j < 5; $j++) {
          if (isset($resorts[$j][$categories[$i]])) {
            echo "<td>" . $resorts[$j][$categories[$i]] . "</td>";
          } else {
              echo "<td>N/A</td>";
            }
          }
        echo "</tr>";
      }
      echo "</tbody>";
      ?>
    </table>
    <table>
      <caption>Junior Ski Rentals</caption>
      <thead>
        <tr>
          <th>Category</th>
          <th>Cataloochie Ski Area</th>
          <th>Sugar Mountain Resort</th>
          <th>Beech Mountain Resort</th>
          <th>Appalachian Ski Mtn</th>
          <th>Wolf Ridge Ski Resort</th>
        </tr>
      </thead>
      <?php
      // Create the table body with the categories as the rows
      echo "<tbody>";
      $categories = array_keys($resorts[0]);
      for ($i = 24; $i < 32; $i++) {
        echo "<tr>";
        echo "<td>" . $categories[$i] . "</td>";
        for ($j = 0; $j < 5; $j++) {
          if (isset($resorts[$j][$categories[$i]])) {
            echo "<td>" . $resorts[$j][$categories[$i]] . "</td>";
          } else {
              echo "<td>N/A</td>";
            }
          }
        echo "</tr>";
      }
      echo "</tbody>";
      ?>
    </table>
  </div>
  <div id="tab3Content">
    <table>
      <caption>Adult Snowboard Rentals</caption>
      <thead>
        <tr>
          <th>Category</th>
          <th>Cataloochie Ski Area</th>
          <th>Sugar Mountain Resort</th>
          <th>Beech Mountain Resort</th>
          <th>Appalachian Ski Mtn</th>
          <th>Wolf Ridge Ski Resort</th>
        </tr>
      </thead>
      <?php
      // Create the table body with the categories as the rows
      echo "<tbody>";
      $categories = array_keys($resorts[0]);
      for ($i = 32; $i < 40; $i++) {
        echo "<tr>";
        echo "<td>" . $categories[$i] . "</td>";
        for ($j = 0; $j < 5; $j++) {
          if (isset($resorts[$j][$categories[$i]])) {
            echo "<td>" . $resorts[$j][$categories[$i]] . "</td>";
          } else {
              echo "<td>N/A</td>";
            }
          }
        echo "</tr>";
      }
      echo "</tbody>";
      ?>
    </table>
    <table>
      <caption>Junior Snowboard Rentals</caption>
      <thead>
        <tr>
          <th>Category</th>
          <th>Cataloochie Ski Area</th>
          <th>Sugar Mountain Resort</th>
          <th>Beech Mountain Resort</th>
          <th>Appalachian Ski Mtn</th>
          <th>Wolf Ridge Ski Resort</th>
        </tr>
      </thead>
      <?php
      // Create the table body with the categories as the rows
      echo "<tbody>";
      $categories = array_keys($resorts[0]);
      for ($i = 40; $i < 48; $i++) {
        echo "<tr>";
        echo "<td>" . $categories[$i] . "</td>";
        for ($j = 0; $j < 5; $j++) {
          if (isset($resorts[$j][$categories[$i]])) {
            echo "<td>" . $resorts[$j][$categories[$i]] . "</td>";
          } else {
              echo "<td>N/A</td>";
            }
          }
        echo "</tr>";
      }
      echo "</tbody>";
      ?>
    </table>
  </div>
  <div id="otherTables">
    <table id="times">
      <caption>Times</caption>
      <thead>
        <tr>
          <th>Resort</th>
          <th>Full Day Time</th>
          <th>Half-Day Time</th>
          <th>Night Time</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($resortSpecifics as $resort_name => $resort_data): ?>
        <tr>
          <th><?php echo $resort_name; ?></th>
          <td><?php echo $resort_data['full_day_time']; ?></td>
          <td><?php echo $resort_data['half_day_time']; ?></td>
          <td><?php echo $resort_data['night_time']; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <table id="specials">
      <caption>Specials</caption>
      <thead>
        <tr>
          <th>Resort</th>
          <th>The Special</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($resortSpecifics as $resort_name => $resort_data): ?>
        <tr>
          <th><?php echo $resort_name; ?></th>
          <td><?php echo $resort_data['special_time']; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    <table id="ages">
      <caption>Ages</caption>
      <thead>
        <tr>
          <th>Resort</th>
          <th>Junior Age</th>
          <th>Adult Age</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($resortSpecifics as $resort_name => $resort_data): ?>
        <tr>
          <th><?php echo $resort_name; ?></th>
          <td><?php echo $resort_data['junior_age']; ?></td>
          <td><?php echo $resort_data['adult_age']; ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>
<?php
include(SHARED_PATH . '/public_footer.php');
?>
