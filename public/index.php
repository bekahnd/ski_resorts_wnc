<?php
require_once('../private/initialize.php');
include(SHARED_PATH . '/public_header.php');
$page_title = 'Home';
?>
    <main>
      <div id="intro">
        <h2>Welcome to <abbr title="Western North Carolina">WNC</abbr> Ski Resorts!</h2>
        <p>Are you living in or planning to visit western North Carolina? Are you looking for somewhere to ski or snowboard but are not sure of what the area has to offer? You have come to the right place! We have five ski resorts in the area ranging from Waynesville, <abbr title="North Carolina">NC</abbr> to Blowing Rock, <abbr title="North Carolina">NC</abbr>. This website offers a lot of information regarding the five resorts to help guide you in choosing the right place for you. Below is a brief description of each resort and what it has to offer. Please register with us and create an account to explore more information such as trail info, price info, Google reviews, and more!</p>
      </div>

        <?php
        $sql = "SELECT * FROM resort WHERE resort_id = 1";

        $results = mysqli_query($database, $sql);

        if (mysqli_num_rows($results) > 0) {
          while($row = mysqli_fetch_assoc($results)) {
            $name1 = $row['resort_name'];
            $address1 = $row['address'];
            $city1 = $row['city'];
            $zip1 = $row['zip']; 
            $phone1 = $row['phone'];
            $trailNum1 = $row['trail_number'];
            $weekendOpening1 = $row['opening_hour_weekend'];
            $weekendClosing1 = $row['closing_hour_weekend'];
            $weekdayOpening1 = $row['opening_hour_weekday'];
            $weekdayClosing1 = $row['closing_hour_weekday'];
            $description1 = $row['description'];
          }
          $row = mysqli_fetch_assoc($results);
        }

        $sql = "SELECT * FROM resort WHERE resort_id = 2";

        $results = mysqli_query($database, $sql);

        if (mysqli_num_rows($results) > 0) {
          while($row = mysqli_fetch_assoc($results)) {
            $name2 = $row['resort_name'];
            $address2 = $row['address'];
            $city2 = $row['city'];
            $zip2 = $row['zip']; 
            $phone2 = $row['phone'];
            $trailNum2 = $row['trail_number'];
            $weekendOpening2 = $row['opening_hour_weekend'];
            $weekendClosing2 = $row['closing_hour_weekend'];
            $weekdayOpening2 = $row['opening_hour_weekday'];
            $weekdayClosing2 = $row['closing_hour_weekday'];
            $description2 = $row['description'];
          }
          $row = mysqli_fetch_assoc($results);
        }

        $sql = "SELECT * FROM resort WHERE resort_id = 3";

        $results = mysqli_query($database, $sql);

        if (mysqli_num_rows($results) > 0) {
          while($row = mysqli_fetch_assoc($results)) {
            $name3 = $row['resort_name'];
            $address3 = $row['address'];
            $city3 = $row['city'];
            $zip3 = $row['zip']; 
            $phone3 = $row['phone'];
            $trailNum3 = $row['trail_number'];
            $weekendOpening3 = $row['opening_hour_weekend'];
            $weekendClosing3 = $row['closing_hour_weekend'];
            $weekdayOpening3 = $row['opening_hour_weekday'];
            $weekdayClosing3 = $row['closing_hour_weekday'];
            $description3 = $row['description'];
          }
          $row = mysqli_fetch_assoc($results);
        }

        $sql = "SELECT * FROM resort WHERE resort_id = 4";

        $results = mysqli_query($database, $sql);

        if (mysqli_num_rows($results) > 0) {
          while($row = mysqli_fetch_assoc($results)) {
            $name4 = $row['resort_name'];
            $address4 = $row['address'];
            $city4 = $row['city'];
            $zip4 = $row['zip']; 
            $phone4 = $row['phone'];
            $trailNum4 = $row['trail_number'];
            $weekendOpening4 = $row['opening_hour_weekend'];
            $weekendClosing4 = $row['closing_hour_weekend'];
            $weekdayOpening4 = $row['opening_hour_weekday'];
            $weekdayClosing4 = $row['closing_hour_weekday'];
            $description4 = $row['description'];
          }
          $row = mysqli_fetch_assoc($results);
        }

        $sql = "SELECT * FROM resort WHERE resort_id = 5";

        $results = mysqli_query($database, $sql);

        if (mysqli_num_rows($results) > 0) {
          while($row = mysqli_fetch_assoc($results)) {
            $name5 = $row['resort_name'];
            $address5 = $row['address'];
            $city5 = $row['city'];
            $zip5 = $row['zip']; 
            $phone5 = $row['phone'];
            $trailNum5 = $row['trail_number'];
            $weekendOpening5 = $row['opening_hour_weekend'];
            $weekendClosing5 = $row['closing_hour_weekend'];
            $weekdayOpening5 = $row['opening_hour_weekday'];
            $weekdayClosing5 = $row['closing_hour_weekday'];
            $description5 = $row['description'];
          }
          $row = mysqli_fetch_assoc($results);
        }
        ?>

      <div id="resortDescriptions">
        <div id="resortDesc">
          <h3><?php echo $name1; ?></h3>
          <p id="description"><?php echo $description1; ?></p>
          <p id="address"><?php echo $address1 . "<br>" . $city1 . ", " . $zip1; ?></p>
          <p id="phone">Phone: <?php echo $phone1; ?></p>
          <p hours="hours">Weekend hours of operation: <?php echo $weekendOpening1 . "-" . $weekendClosing1 . "."; ?></p>
          <p hours="hours">Weekday hours of operation: <?php echo $weekdayOpening1 . "-" . $weekdayClosing1 . "."; ?></p>
          <p id="trail_number">Number of trails: <?php echo $trailNum1 . "."; ?></p>
        </div>

        <div id="resortDesc">
          <h3><?php echo $name2; ?></h3>
          <p id="description"><?php echo $description2; ?></p>
          <p id="address"><?php echo $address2 . "<br>" . $city2 . ", " . $zip2; ?></p>
          <p id="phone">Phone: <?php echo $phone2; ?></p>
          <p hours="hours">Weekend hours of operation: <?php echo $weekendOpening2 . "-" . $weekendClosing2 . "."; ?></p>
          <p hours="hours">Weekday hours of operation: <?php echo $weekdayOpening2 . "-" . $weekdayClosing2 . "."; ?></p>
          <p id="trail_number">Number of trails: <?php echo $trailNum2 . "."; ?></p>
        </div>

        <div id="resortDesc">
          <h3><?php echo $name3; ?></h3>
          <p id="description"><?php echo $description3; ?></p>
          <p id="address"><?php echo $address3 . "<br>" . $city3 . ", " . $zip3; ?></p>
          <p id="phone">Phone: <?php echo $phone3; ?></p>
          <p hours="hours">Weekend hours of operation: <?php echo $weekendOpening3 . "-" . $weekendClosing3 . "."; ?></p>
          <p hours="hours">Weekday hours of operation: <?php echo $weekdayOpening3 . "-" . $weekdayClosing3 . "."; ?></p>
          <p id="trail_number">Number of trails: <?php echo $trailNum2 . "."; ?></p>
        </div>

        <div id="resortDesc">
          <h3><?php echo $name4; ?></h3>
          <p id="description"><?php echo $description4; ?></p>
          <p id="address"><?php echo $address4 . "<br>" . $city4 . ", " . $zip4; ?></p>
          <p id="phone">Phone: <?php echo $phone4; ?></p>
          <p hours="hours">Weekend hours of operation: <?php echo $weekendOpening4 . "-" . $weekendClosing4 . "."; ?></p>
          <p hours="hours">Weekday hours of operation: <?php echo $weekdayOpening4 . "-" . $weekdayClosing4 . "."; ?></p>
          <p id="trail_number">Number of trails: <?php echo $trailNum4 . "."; ?></p>
        </div>

        <div id="resortDesc">
          <h3><?php echo $name5; ?></h3>
          <p id="description"><?php echo $description5; ?></p>
          <p id="address"><?php echo $address5 . "<br>" . $city5 . ", " . $zip5; ?></p>
          <p id="phone">Phone: <?php echo $phone5; ?></p>
          <p hours="hours">Weekend hours of operation: <?php echo $weekendOpening5 . "-" . $weekendClosing5 . "."; ?></p>
          <p hours="hours">Weekday hours of operation: <?php echo $weekdayOpening5 . "-" . $weekdayClosing5 . "."; ?></p>
          <p id="trail_number">Number of trails: <?php echo $trailNum5 . "."; ?></p>
        </div>
      </div>
    </main>
  </body>
</html>