<?php
include_once('../private/initialize.php');
include_once(SHARED_PATH . '/public_header.php');
$page_title = 'Prices';
?>

<p>The prices for the five resorts are listed in the tables below. These prices are accurate as of 3/7/2023. You can find the prices for adult/junior slope tickets, ski rental tickets, and snowboard rental tickets. Prices vary when it comes to length of time and age, and are divided this way below.</p>

<?php
$sqlName = "SELECT resort_name FROM resort";
$resultsName = mysqli_query($database, $sqlName);
$nameRow = [];
$priceRow1 = [];
$categoryRow1 = [];
$priceRow2 = [];
$categoryRow2 = [];
$priceRow3 = [];
$categoryRow3 = [];
$priceRow4 = [];
$categoryRow4 = [];
$priceRow5 = [];
$categoryRow5 = [];

if(mysqli_num_rows($resultsName) > 0) {
  while($row = mysqli_fetch_array($resultsName)) {
    array_push($nameRow, $row['resort_name']);
  }
}

$sqlPrice = "SELECT * FROM pricing_category pc, resort_pricing rp WHERE pc.pricing_category_id=rp.pricing_category_id";
$resultPrice = mysqli_query($database, $sqlPrice);
while($row = mysqli_fetch_array($resultPrice)) {
  if($row['resort_id'] == 1) {
  array_push($priceRow1, $row['price']);
  array_push($categoryRow1, $row['pricing_category']);
  } elseif ($row['resort_id'] == 2) {
    array_push($priceRow2, $row['price']);
    array_push($categoryRow2, $row['pricing_category']);
  } elseif ($row['resort_id'] == 3) {
    array_push($priceRow3, $row['price']);
    array_push($categoryRow3, $row['pricing_category']);
  } elseif ($row['resort_id'] == 4) {
    array_push($priceRow4, $row['price']);
    array_push($categoryRow4, $row['pricing_category']);
  } elseif ($row['resort_id'] == 5) {
    array_push($priceRow5, $row['price']);
    array_push($categoryRow5, $row['pricing_category']);
  }
}

?>
<div id="tables">
  <table>
    <caption><?php echo $nameRow[0]; ?></caption>
    <tr>
      <th>Price for</th>
      <th>Price</th>
    </tr>
      <?php
      foreach(array_combine($categoryRow1, $priceRow1) as $category => $price) {
        echo "<tr><td>" . $category . "</td><td>" . $price . "</td></tr>";
      }
      ?>
  </table>

  <table>
    <caption><?php echo $nameRow[1]; ?></caption>
    <tr>
      <th>Price for</th>
      <th>Price</th>
    </tr>
      <?php
      foreach(array_combine($categoryRow2, $priceRow2) as $category => $price) {
        echo "<tr><td>" . $category . "</td><td>" . $price . "</td></tr>";
      }
      ?>
  </table>

  <table>
    <caption><?php echo $nameRow[2]; ?></caption>
    <tr>
      <th>Price for</th>
      <th>Price</th>
    </tr>
      <?php
      foreach(array_combine($categoryRow3, $priceRow3) as $category => $price) {
        echo "<tr><td>" . $category . "</td><td>" . $price . "</td></tr>";
      }
      ?>
  </table>

  <table>
    <caption><?php echo $nameRow[3]; ?></caption>
    <tr>
      <th>Price for</th>
      <th>Price</th>
    </tr>
      <?php
      foreach(array_combine($categoryRow4, $priceRow4) as $category => $price) {
        echo "<tr><td>" . $category . "</td><td>" . $price . "</td></tr>";
      }
      ?>
  </table>

  <table>
    <caption><?php echo $nameRow[4]; ?></caption>
    <tr>
      <th>Price for</th>
      <th>Price</th>
    </tr>
      <?php
      foreach(array_combine($categoryRow5, $priceRow5) as $category => $price) {
        echo "<tr><td>" . $category . "</td><td>" . $price . "</td></tr>";
      }
      ?>
  </table>
</div>


