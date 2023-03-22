<?php
include_once('../private/initialize.php');
include_once(SHARED_PATH . '/public_header.php');
check_member_login();
$page_title = 'Prices';

?>

<div id="intro">
  <h2>Pricing</h2>
  <p>The prices for the five resorts are listed in the tables below. These prices are accurate as of 3/7/2023. You can find the prices for adult/junior slope tickets, ski rental tickets, and snowboard rental tickets. Prices vary when it comes to length of time and age, and are divided this way below. Depending on the resort you visit the ages considered juniors and adults will differ. Please see the ages for each resort towards the bottom of the page. Many of the resorts also offer a special such as purchasing an extension for your ticket for a lower price or purchasing an all day ticket from open to close. These specials can be found towards the end of the page as well. </p>
</div>

<?php
$sqlResort = "SELECT resort_name, special_time, junior_age, adult_age FROM resort";
$resultsResort = mysqli_query($database, $sqlResort);
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
$specials = [];
$juniorAge = [];
$adultAge = [];

if(mysqli_num_rows($resultsResort) > 0) {
  while($row = mysqli_fetch_array($resultsResort)) {
    array_push($nameRow, $row['resort_name']);
    array_push($specials, $row['special_time']);
    array_push($juniorAge, $row['junior_age']);
    array_push($adultAge, $row['adult_age']);
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
  <div>
    <table id="specials">
      <caption>Specials</caption>
      <tr>
        <th>Resort</th>
        <th>The special</th>
      </tr>
      <tr>
        <td><?php echo $nameRow[0]; ?></td>
        <td><?php echo $specials[0]; ?></td>
      </tr>
      <tr>
        <td><?php echo $nameRow[1]; ?></td>
        <td><?php echo $specials[1]; ?></td>
      </tr>
      <tr>
        <td><?php echo $nameRow[2]; ?></td>
        <td><?php echo $specials[2]; ?></td>
      </tr>
      <tr>
        <td><?php echo $nameRow[3]; ?></td>
        <td><?php echo $specials[3]; ?></td>
      </tr>
      <tr>
        <td><?php echo $nameRow[4]; ?></td>
        <td><?php echo $specials[4]; ?></td>
      </tr>
    </table>
    <table>
      <caption>Ages</caption>
      <tr>
        <th>Resort</th>
        <th>Junior Age</th>
        <th>Adult Age</th>
      </tr>
      <tr>
        <td><?php echo $nameRow[0]; ?></td>
        <td><?php echo $juniorAge[0]; ?></td>
        <td><?php echo $adultAge[0]; ?></td>
      </tr>
      <tr>
        <td><?php echo $nameRow[1]; ?></td>
        <td><?php echo $juniorAge[1]; ?></td>
        <td><?php echo $adultAge[1]; ?></td>
      </tr>
      <tr>
        <td><?php echo $nameRow[2]; ?></td>
        <td><?php echo $juniorAge[2]; ?></td>
        <td><?php echo $adultAge[2]; ?></td>
      </tr>
      <tr>
        <td><?php echo $nameRow[3]; ?></td>
        <td><?php echo $juniorAge[3]; ?></td>
        <td><?php echo $adultAge[3]; ?></td>
      </tr>
      <tr>
        <td><?php echo $nameRow[4]; ?></td>
        <td><?php echo $juniorAge[4]; ?></td>
        <td><?php echo $adultAge[4]; ?></td>
      </tr>
    </table>
  </div>
</div>


