<div id="price">

<?php
include_once('../private/initialize.php');
include_once(SHARED_PATH . '/public_header.php');
check_member_login();
$page_title = 'Prices';

?>

<div id="intro">
<h2><?php echo $page_title; ?></h2>
  <p>The prices for the five resorts are listed in the tables below. These prices are accurate as of the 2023 ski season. You can find the prices for adult/junior slope tickets, ski rental tickets, and snowboard rental tickets. Prices vary when it comes to length of time and age, and are divided this way below. Depending on the resort you visit the ages considered juniors and adults will differ. Please see the ages for each resort towards the bottom of the page. Many of the resorts also offer a special such as purchasing an extension for your ticket for a lower price or purchasing an all day ticket from open to close. These specials can be found towards the end of the page as well. </p>
</div>

<?php
$sqlResort = "SELECT resort_name, half_day_time, full_day_time, night_time, special_time, junior_age, adult_age FROM resort";
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
$fullDayTime = [];
$halfDayTime = [];
$nightTime = [];

if(mysqli_num_rows($resultsResort) > 0) {
  while($row = mysqli_fetch_array($resultsResort)) {
    array_push($nameRow, $row['resort_name']);
    array_push($fullDayTime, $row['full_day_time']);
    array_push($halfDayTime, $row['half_day_time']);
    array_push($nightTime, $row['night_time']);
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
<div class="tabs">
  <div id="tab1" onClick="Javascript:selectTab(1);">Lift Tickets</div>
  <div id="tab2" onClick="Javascript:selectTab(2);">Ski Rental Tickets</div>
  <div id="tab3" onClick="Javascript:selectTab(3);">Snowboard Rental Tickets</div>
</div>
<br>

<div id="tables">
    <div id="tab1Content">
      <table>
        <caption>Adult Lift Tickets</caption>
        <tr>
          <th>Adult</th>
          <th><?php echo $nameRow[0]; ?></th>
          <th><?php echo $nameRow[1]; ?></th>
          <th><?php echo $nameRow[2]; ?></th>
          <th><?php echo $nameRow[3]; ?></th>
          <th><?php echo $nameRow[4]; ?></th>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[3]; ?></th>
          <td><?php echo $priceRow1[3]; ?></td>
          <td><?php echo $priceRow2[3]; ?></td>
          <td><?php echo $priceRow3[3]; ?></td>
          <td><?php echo $priceRow4[3]; ?></td>
          <td><?php echo $priceRow5[3]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[1]; ?></th>
          <td><?php echo $priceRow1[1]; ?></td>
          <td><?php echo $priceRow2[1]; ?></td>
          <td><?php echo $priceRow3[1]; ?></td>
          <td><?php echo $priceRow4[1]; ?></td>
          <td><?php echo $priceRow5[1]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[5]; ?></th>
          <td><?php echo $priceRow1[5]; ?></td>
          <td><?php echo $priceRow2[5]; ?></td>
          <td><?php echo $priceRow3[5]; ?></td>
          <td><?php echo $priceRow4[5]; ?></td>
          <td><?php echo $priceRow5[5]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[7]; ?></th>
          <td><?php echo $priceRow1[7]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow3[7]; ?></td>
          <td><?php echo $priceRow4[6]; ?></td>
          <td><?php echo $priceRow5[7]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[2]; ?></th>
          <td><?php echo $priceRow1[2]; ?></td>
          <td><?php echo $priceRow2[2]; ?></td>
          <td><?php echo $priceRow3[2]; ?></td>
          <td><?php echo $priceRow4[2]; ?></td>
          <td><?php echo $priceRow5[2]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[0]; ?></th>
          <td><?php echo $priceRow1[0]; ?></td>
          <td><?php echo $priceRow2[0]; ?></td>
          <td><?php echo $priceRow3[0]; ?></td>
          <td><?php echo $priceRow4[0]; ?></td>
          <td><?php echo $priceRow5[0]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[4]; ?></th>
          <td><?php echo $priceRow1[4]; ?></td>
          <td><?php echo $priceRow2[4]; ?></td>
          <td><?php echo $priceRow3[4]; ?></td>
          <td><?php echo $priceRow4[4]; ?></td>
          <td><?php echo $priceRow5[4]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[6]; ?></th>
          <td><?php echo $priceRow1[6]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow3[6]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow5[6]; ?></td>
        </tr>
      </table>
      <table>
        <caption>Junior Lift Tickets</caption>
        <tr>
          <th>Junior</th>
          <th><?php echo $nameRow[0]; ?></th>
          <th><?php echo $nameRow[1]; ?></th>
          <th><?php echo $nameRow[2]; ?></th>
          <th><?php echo $nameRow[3]; ?></th>
          <th><?php echo $nameRow[4]; ?></th>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[11]; ?></th>
          <td><?php echo $priceRow1[11]; ?></td>
          <td><?php echo $priceRow2[9]; ?></td>
          <td><?php echo $priceRow3[11]; ?></td>
          <td><?php echo $priceRow4[10]; ?></td>
          <td><?php echo $priceRow5[11]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[9]; ?></th>
          <td><?php echo $priceRow1[9]; ?></td>
          <td><?php echo $priceRow2[7]; ?></td>
          <td><?php echo $priceRow3[9]; ?></td>
          <td><?php echo $priceRow4[8]; ?></td>
          <td><?php echo $priceRow5[9]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[13]; ?></th>
          <td><?php echo $priceRow1[13]; ?></td>
          <td><?php echo $priceRow2[11]; ?></td>
          <td><?php echo $priceRow3[13]; ?></td>
          <td><?php echo $priceRow4[12]; ?></td>
          <td><?php echo $priceRow5[13]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[15]; ?></th>
          <td><?php echo $priceRow1[15]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow3[15]; ?></td>
          <td><?php echo $priceRow4[13]; ?></td>
          <td><?php echo $priceRow5[15]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[10]; ?></th>
          <td><?php echo $priceRow1[10]; ?></td>
          <td><?php echo $priceRow2[8]; ?></td>
          <td><?php echo $priceRow3[10]; ?></td>
          <td><?php echo $priceRow4[9]; ?></td>
          <td><?php echo $priceRow5[10]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[8]; ?></th>
          <td><?php echo $priceRow1[8]; ?></td>
          <td><?php echo $priceRow2[6]; ?></td>
          <td><?php echo $priceRow3[8]; ?></td>
          <td><?php echo $priceRow4[7]; ?></td>
          <td><?php echo $priceRow5[8]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[12]; ?></th>
          <td><?php echo $priceRow1[12]; ?></td>
          <td><?php echo $priceRow2[10]; ?></td>
          <td><?php echo $priceRow3[12]; ?></td>
          <td><?php echo $priceRow4[11]; ?></td>
          <td><?php echo $priceRow5[12]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[14]; ?></th>
          <td><?php echo $priceRow1[14]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow3[14]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow5[14]; ?></td>
        </tr>
      </table>
    </div>
    <div id="tab2Content">
      <table>
        <caption>Adult Ski Rentals</caption>
        <tr>
          <th>Adult</th>
          <th><?php echo $nameRow[0]; ?></th>
          <th><?php echo $nameRow[1]; ?></th>
          <th><?php echo $nameRow[2]; ?></th>
          <th><?php echo $nameRow[3]; ?></th>
          <th><?php echo $nameRow[4]; ?></th>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[19]; ?></th>
          <td><?php echo $priceRow1[19]; ?></td>
          <td><?php echo $priceRow2[15]; ?></td>
          <td><?php echo $priceRow3[19]; ?></td>
          <td><?php echo $priceRow4[17]; ?></td>
          <td><?php echo $priceRow5[19]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[17]; ?></th>
          <td><?php echo $priceRow1[17]; ?></td>
          <td><?php echo $priceRow2[13]; ?></td>
          <td><?php echo $priceRow3[17]; ?></td>
          <td><?php echo $priceRow4[15]; ?></td>
          <td><?php echo $priceRow5[17]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[21]; ?></th>
          <td><?php echo $priceRow1[21]; ?></td>
          <td><?php echo $priceRow2[17]; ?></td>
          <td><?php echo $priceRow3[21]; ?></td>
          <td><?php echo $priceRow4[19]; ?></td>
          <td><?php echo $priceRow5[21]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[23]; ?></th>
          <td><?php echo $priceRow1[23]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow3[23]; ?></td>
          <td><?php echo $priceRow4[20]; ?></td>
          <td><?php echo $priceRow5[23]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[18]; ?></th>
          <td><?php echo $priceRow1[18]; ?></td>
          <td><?php echo $priceRow2[14]; ?></td>
          <td><?php echo $priceRow3[18]; ?></td>
          <td><?php echo $priceRow4[16]; ?></td>
          <td><?php echo $priceRow5[18]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[16]; ?></th>
          <td><?php echo $priceRow1[16]; ?></td>
          <td><?php echo $priceRow2[12]; ?></td>
          <td><?php echo $priceRow3[16]; ?></td>
          <td><?php echo $priceRow4[14]; ?></td>
          <td><?php echo $priceRow5[16]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[20]; ?></th>
          <td><?php echo $priceRow1[20]; ?></td>
          <td><?php echo $priceRow2[16]; ?></td>
          <td><?php echo $priceRow3[20]; ?></td>
          <td><?php echo $priceRow4[18]; ?></td>
          <td><?php echo $priceRow5[20]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[22]; ?></th>
          <td><?php echo $priceRow1[22]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow3[22]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow5[22]; ?></td>
        </tr>
      </table>
      <table>
        <caption>Junior Ski Rentals</caption>
        <tr>
          <th>Junior</th>
          <th><?php echo $nameRow[0]; ?></th>
          <th><?php echo $nameRow[1]; ?></th>
          <th><?php echo $nameRow[2]; ?></th>
          <th><?php echo $nameRow[3]; ?></th>
          <th><?php echo $nameRow[4]; ?></th>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[27]; ?></th>
          <td><?php echo $priceRow1[27]; ?></td>
          <td><?php echo $priceRow2[21]; ?></td>
          <td><?php echo $priceRow3[27]; ?></td>
          <td><?php echo $priceRow4[24]; ?></td>
          <td><?php echo $priceRow5[27]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[25]; ?></th>
          <td><?php echo $priceRow1[25]; ?></td>
          <td><?php echo $priceRow2[19]; ?></td>
          <td><?php echo $priceRow3[25]; ?></td>
          <td><?php echo $priceRow4[22]; ?></td>
          <td><?php echo $priceRow5[25]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[29]; ?></th>
          <td><?php echo $priceRow1[29]; ?></td>
          <td><?php echo $priceRow2[23]; ?></td>
          <td><?php echo $priceRow3[29]; ?></td>
          <td><?php echo $priceRow4[26]; ?></td>
          <td><?php echo $priceRow5[29]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[31]; ?></th>
          <td><?php echo $priceRow1[31]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow3[31]; ?></td>
          <td><?php echo $priceRow4[27]; ?></td>
          <td><?php echo $priceRow5[21]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[26]; ?></th>
          <td><?php echo $priceRow1[26]; ?></td>
          <td><?php echo $priceRow2[20]; ?></td>
          <td><?php echo $priceRow3[26]; ?></td>
          <td><?php echo $priceRow4[23]; ?></td>
          <td><?php echo $priceRow5[26]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[24]; ?></th>
          <td><?php echo $priceRow1[24]; ?></td>
          <td><?php echo $priceRow2[18]; ?></td>
          <td><?php echo $priceRow3[24]; ?></td>
          <td><?php echo $priceRow4[21]; ?></td>
          <td><?php echo $priceRow5[24]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[28]; ?></th>
          <td><?php echo $priceRow1[28]; ?></td>
          <td><?php echo $priceRow2[22]; ?></td>
          <td><?php echo $priceRow3[28]; ?></td>
          <td><?php echo $priceRow4[25]; ?></td>
          <td><?php echo $priceRow5[28]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[30]; ?></th>
          <td><?php echo $priceRow1[30]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow3[30]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow5[30]; ?></td>
        </tr>
      </table>
    </div>
    <div id="tab3Content">
      <table>
        <caption>Adult Snowboard Rentals</caption>
        <tr>
          <th>Adult</th>
          <th><?php echo $nameRow[0]; ?></th>
          <th><?php echo $nameRow[1]; ?></th>
          <th><?php echo $nameRow[2]; ?></th>
          <th><?php echo $nameRow[3]; ?></th>
          <th><?php echo $nameRow[4]; ?></th>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[35]; ?></th>
          <td><?php echo $priceRow1[35]; ?></td>
          <td><?php echo $priceRow2[27]; ?></td>
          <td><?php echo $priceRow3[35]; ?></td>
          <td><?php echo $priceRow4[31]; ?></td>
          <td><?php echo $priceRow5[35]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[33]; ?></th>
          <td><?php echo $priceRow1[33]; ?></td>
          <td><?php echo $priceRow2[25]; ?></td>
          <td><?php echo $priceRow3[33]; ?></td>
          <td><?php echo $priceRow4[29]; ?></td>
          <td><?php echo $priceRow5[33]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[37]; ?></th>
          <td><?php echo $priceRow1[37]; ?></td>
          <td><?php echo $priceRow2[29]; ?></td>
          <td><?php echo $priceRow3[37]; ?></td>
          <td><?php echo $priceRow4[33]; ?></td>
          <td><?php echo $priceRow5[37]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[39]; ?></td>
          <td><?php echo $priceRow1[39]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow3[39]; ?></td>
          <td><?php echo $priceRow4[34]; ?></td>
          <td><?php echo $priceRow5[39]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[34]; ?></th>
          <td><?php echo $priceRow1[34]; ?></td>
          <td><?php echo $priceRow2[26]; ?></td>
          <td><?php echo $priceRow3[34]; ?></td>
          <td><?php echo $priceRow4[30]; ?></td>
          <td><?php echo $priceRow5[34]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[32]; ?></th>
          <td><?php echo $priceRow1[32]; ?></td>
          <td><?php echo $priceRow2[24]; ?></td>
          <td><?php echo $priceRow3[32]; ?></td>
          <td><?php echo $priceRow4[28]; ?></td>
          <td><?php echo $priceRow5[32]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[36]; ?></th>
          <td><?php echo $priceRow1[36]; ?></td>
          <td><?php echo $priceRow2[28]; ?></td>
          <td><?php echo $priceRow3[36]; ?></td>
          <td><?php echo $priceRow4[32]; ?></td>
          <td><?php echo $priceRow5[36]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[38]; ?></th>
          <td><?php echo $priceRow1[38]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow3[38]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow5[38]; ?></td>
        </tr>
      </table>
      <table>
        <caption>Junior Snowboard Rentals</caption>
        <tr>
          <th>Junior</th>
          <td><?php echo $nameRow[0]; ?></th>
          <td><?php echo $nameRow[1]; ?></td>
          <td><?php echo $nameRow[2]; ?></td>
          <td><?php echo $nameRow[3]; ?></td>
          <td><?php echo $nameRow[4]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[43]; ?></th>
          <td><?php echo $priceRow1[43]; ?></td>
          <td><?php echo $priceRow2[33]; ?></td>
          <td><?php echo $priceRow3[43]; ?></td>
          <td><?php echo $priceRow4[38]; ?></td>
          <td><?php echo $priceRow5[43]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[41]; ?></th>
          <td><?php echo $priceRow1[41]; ?></td>
          <td><?php echo $priceRow2[31]; ?></td>
          <td><?php echo $priceRow3[41]; ?></td>
          <td><?php echo $priceRow4[36]; ?></td>
          <td><?php echo $priceRow5[41]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[45]; ?></th>
          <td><?php echo $priceRow1[45]; ?></td>
          <td><?php echo $priceRow2[35]; ?></td>
          <td><?php echo $priceRow3[45]; ?></td>
          <td><?php echo $priceRow4[40]; ?></td>
          <td><?php echo $priceRow5[45]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[47]; ?></th>
          <td><?php echo $priceRow1[47]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow3[47]; ?></td>
          <td><?php echo $priceRow4[41]; ?></td>
          <td><?php echo $priceRow5[47]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[42]; ?></th>
          <td><?php echo $priceRow1[42]; ?></td>
          <td><?php echo $priceRow2[32]; ?></td>
          <td><?php echo $priceRow3[42]; ?></td>
          <td><?php echo $priceRow4[37]; ?></td>
          <td><?php echo $priceRow5[42]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[40]; ?></th>
          <td><?php echo $priceRow1[40]; ?></td>
          <td><?php echo $priceRow2[30]; ?></td>
          <td><?php echo $priceRow3[40]; ?></td>
          <td><?php echo $priceRow4[35]; ?></td>
          <td><?php echo $priceRow5[40]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[44]; ?></th>
          <td><?php echo $priceRow1[44]; ?></td>
          <td><?php echo $priceRow2[34]; ?></td>
          <td><?php echo $priceRow3[44]; ?></td>
          <td><?php echo $priceRow4[39]; ?></td>
          <td><?php echo $priceRow5[44]; ?></td>
        </tr>
        <tr>
          <th><?php echo $categoryRow1[46]; ?></th>
          <td><?php echo $priceRow1[46]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow3[46]; ?></td>
          <td>N/A</td>
          <td><?php echo $priceRow5[46]; ?></td>
        </tr>
      </table>
    </div>
    <div id="otherTables">
      <table id="times">
        <caption>Times</caption>
        <tr>
          <th>Resort</th>
          <th>Full Day Time</th>
          <th>Half-Day Time</th>
          <th>Night Time</th>
        </tr>
        <tr>
          <th><?php echo $nameRow[0]; ?></th>
          <td><?php echo $fullDayTime[0]; ?></td>
          <td><?php echo $halfDayTime[0]; ?></td>
          <td><?php echo $nightTime[0]; ?></td>
        </tr>
        <tr>
          <th><?php echo $nameRow[1]; ?></th>
          <td><?php echo $fullDayTime[1]; ?></td>
          <td><?php echo $halfDayTime[1]; ?></td>
          <td><?php echo $nightTime[1]; ?></td>
        </tr>
        <tr>
          <th><?php echo $nameRow[2]; ?></th>
          <td><?php echo $fullDayTime[2]; ?></td>
          <td><?php echo $halfDayTime[2]; ?></td>
          <td><?php echo $nightTime[2]; ?></td>
        </tr>
        <tr>
          <th><?php echo $nameRow[3]; ?></th>
          <td><?php echo $fullDayTime[3]; ?></td>
          <td><?php echo $halfDayTime[3]; ?></td>
          <td><?php echo $nightTime[3]; ?></td>
        </tr>
        <tr>
          <th><?php echo $nameRow[4]; ?></th>
          <td><?php echo $fullDayTime[4]; ?></td>
          <td><?php echo $halfDayTime[4]; ?></td>
          <td><?php echo $nightTime[4]; ?></td>
        </tr>
      </table>
      <table id="specials">
        <caption>Specials</caption>
        <tr>
          <th>Resort</th>
          <th>The special</th>
        </tr>
        <tr>
          <th><?php echo $nameRow[0]; ?></th>
          <td><?php echo $specials[0]; ?></td>
        </tr>
        <tr>
          <th><?php echo $nameRow[1]; ?></th>
          <td><?php echo $specials[1]; ?></td>
        </tr>
        <tr>
          <th><?php echo $nameRow[2]; ?></th>
          <td><?php echo $specials[2]; ?></td>
        </tr>
        <tr>
          <th><?php echo $nameRow[3]; ?></th>
          <td><?php echo $specials[3]; ?></td>
        </tr>
        <tr>
          <th><?php echo $nameRow[4]; ?></th>
          <td><?php echo $specials[4]; ?></td>
        </tr>
      </table>
      <table id="ages">
        <caption>Ages</caption>
        <tr>
          <th>Resort</th>
          <th>Junior Age</th>
          <th>Adult Age</th>
        </tr>
        <tr>
          <th><?php echo $nameRow[0]; ?></th>
          <td><?php echo $juniorAge[0]; ?></td>
          <td><?php echo $adultAge[0]; ?></td>
        </tr>
        <tr>
          <th><?php echo $nameRow[1]; ?></th>
          <td><?php echo $juniorAge[1]; ?></td>
          <td><?php echo $adultAge[1]; ?></td>
        </tr>
        <tr>
          <th><?php echo $nameRow[2]; ?></th>
          <td><?php echo $juniorAge[2]; ?></td>
          <td><?php echo $adultAge[2]; ?></td>
        </tr>
        <tr>
          <th><?php echo $nameRow[3]; ?></th>
          <td><?php echo $juniorAge[3]; ?></td>
          <td><?php echo $adultAge[3]; ?></td>
        </tr>
        <tr>
          <th><?php echo $nameRow[4]; ?></th>
          <td><?php echo $juniorAge[4]; ?></td>
          <td><?php echo $adultAge[4]; ?></td>
        </tr>
      </table>
    </div>
</div>
<?php
  include(SHARED_PATH . '/public_footer.php');
  ?>
  </div>
  </div>
</body>
</html>


