<?php
include_once('../../private/initialize.php');
?>
<span id="price">
<?php
$page_title = 'Admin Prices';
include_once(SHARED_PATH . '/admin_header.php');
check_admin_login();
?>

<div id="intro">
<h2><?php echo $page_title; ?></h2>
  <p>The prices for the five resorts are listed in the tables below. These prices are accurate as of the 2023 ski season. You can find the prices for adult/junior slope tickets, ski rental tickets, and snowboard rental tickets. Prices vary when it comes to length of time and age, and are divided this way below. Depending on the resort you visit the ages considered juniors and adults will differ. Please see the ages for each resort towards the bottom of the page. Many of the resorts also offer a special such as purchasing an extension for your ticket for a lower price or purchasing an all day ticket from open to close. These specials can be found towards the end of the page as well. </p>
</div>

<?php

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

// Create the table
echo "<table>";
echo "<caption>Adult Lift Tickets</caption>";

// Create the table header with the resorts as the columns
echo "<thead><tr><th>Category</th><th>Cataloochie Ski Area</th><th>Sugar Mountain Resort</th><th>Beech Mountain Resort</th><th>Appalachian Ski Mtn</th><th>Wolf Ridge Ski Resort</th></tr></thead>";


// Create the table body with the categories as the rows
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

echo "</table>";


