<?php
include_once('../../private/initialize.php');

$page_title = 'Admin Home';
include_once(SHARED_PATH . '/admin_header.php');
check_admin_login();
?>
  <main>
      <div id="intro">
        <h2 id="home">Welcome to <abbr title="Western North Carolina">WNC</abbr> Ski Resorts!</h2>
        <p>Are you living in or planning to visit western North Carolina? Are you looking for somewhere to ski or snowboard but are not sure of what the area has to offer? You have come to the right place! We have five ski resorts in the area ranging from Waynesville, <abbr title="North Carolina">NC</abbr> to Blowing Rock, <abbr title="North Carolina">NC</abbr>. This website offers a lot of information regarding the five resorts to help guide you in choosing the right place for you. Below is a brief description of each resort and what it has to offer. There is so much to consider before planning the <strong>perfect</strong> ski vacation and we want to help!</p>
        <p><strong>Create an account to compare the resorts in different areas including:</strong></p>
        <ul>
          <li>Trails - difficulty and what's open</li>
          <li>Prices - lift tickets and rentals, prices vary depending on length of time and days of the week</li>
          <li>Gallery - check out pictures uploaded by other people enjoying the slopes, just like you will</li>
          <li>Reviews - check out what people are saying about the resorts and maybe find some tips on how to best enjoy your time there</li>
        </ul>
      </div>

      <?php
      // Get resort information from database
      $sql = "SELECT resort_id, resort_name, address, city, zip, phone, trail_number, opening_hour_weekend, opening_hour_weekday, closing_hour_weekend, closing_hour_weekday, description FROM resort LIMIT 5";
      $result = mysqli_query($database, $sql);

      foreach ($result as $row) {
        $resort_id = h($row['resort_id']);
        $resort_name = h($row['resort_name']);
        $address = h($row['address']);
        $city = h($row['city']);
        $zip = h($row['zip']);
        $phone = h($row['phone']);
        $trail_number = h($row['trail_number']);
        $opening_hour_weekend = h($row['opening_hour_weekend']);
        $opening_hour_weekday = h($row['opening_hour_weekday']);
        $closing_hour_weekend = h($row['closing_hour_weekend']);
        $closing_hour_weekday = h($row['closing_hour_weekday']);
        $description = h($row['description']);
        $resorts[$resort_id] = array('resort_id' => $resort_id, 'resort_name' => $resort_name, 'address' => $address, 'city' => $city, 'zip' =>$zip, 'phone' => $phone, 'trail_number' => $trail_number, 'opening_hour_weekend' => $opening_hour_weekend, 'opening_hour_weekday' =>$opening_hour_weekday, 'closing_hour_weekend' => $closing_hour_weekend, 'closing_hour_weekday' => $closing_hour_weekday, 'description' => $description);
      }
      ?>

      <!-- Display Cataloochie information -->
      <div id="resortDescriptions">
        <div class="resortDesc">
          <h3><?php echo $resorts[1]['resort_name']; ?></h3>
          <p class="description"><?php echo $resorts[1]['description']; ?></p>
          <p class="address"><?php echo $resorts[1]['address'] . "<br>" . $resorts[1]['city'] . ", " . $resorts[1]['zip']; ?></p>
          <p class="phone">Phone: <?php echo $resorts[1]['phone']; ?></p>
          <p class="hours">Weekend hours of operation: <?php echo $resorts[1]['opening_hour_weekend'] . "-" . $resorts[1]['closing_hour_weekend'] . "."; ?></p>
          <p class="hours">Weekday hours of operation: <?php echo $resorts[1]['opening_hour_weekday'] . "-" . $resorts[1]['closing_hour_weekday'] . "."; ?></p>
          <p class="trail_number">Number of trails: <?php echo $resorts[1]['trail_number'] . "."; ?></p>
          <!-- Form for edit description button where admin can edit resort information and update database -->
          <form method="post" action="edit_description.php">
            <?php
            echo "<input type='hidden' name='id' value='" . $resorts[1]['resort_id'] . "'>";
            ?>
            <button type="submit" name="submit">Edit Description</button>
          </form>
        </div>

        <!-- Display Sugar information -->
        <div class="resortDesc">
          <h3><?php echo $resorts[2]['resort_name']; ?></h3>
          <p class="description"><?php echo $resorts[2]['description']; ?></p>
          <p class="address"><?php echo $resorts[2]['address'] . "<br>" . $resorts[2]['city'] . ", " . $resorts[2]['zip']; ?></p>
          <p class="phone">Phone: <?php echo $resorts[2]['phone']; ?></p>
          <p class="hours">Weekend hours of operation: <?php echo $resorts[2]['opening_hour_weekend'] . "-" . $resorts[2]['closing_hour_weekend'] . "."; ?></p>
          <p class="hours">Weekday hours of operation: <?php echo $resorts[2]['opening_hour_weekday'] . "-" . $resorts[2]['closing_hour_weekday'] . "."; ?></p>
          <p class="trail_number">Number of trails: <?php echo $resorts[2]['trail_number'] . "."; ?></p>
          <!-- Form for edit description button where admin can edit resort information and update database -->
          <form method="post" action="edit_description.php">
            <?php
            echo "<input type='hidden' name='id' value='" . $resorts[2]['resort_id'] . "'>";
            ?>
            <button type="submit" name="submit">Edit Description</button>
          </form>
        </div>

        <!-- Display Beech information -->
        <div class="resortDesc">
          <h3><?php echo $resorts[3]['resort_name']; ?></h3>
          <p class="description"><?php echo $resorts[3]['description']; ?></p>
          <p class="address"><?php echo $resorts[3]['address'] . "<br>" . $resorts[3]['city'] . ", " . $resorts[3]['zip']; ?></p>
          <p class="phone">Phone: <?php echo $resorts[3]['phone']; ?></p>
          <p class="hours">Weekend hours of operation: <?php echo $resorts[3]['opening_hour_weekend'] . "-" . $resorts[3]['closing_hour_weekend'] . "."; ?></p>
          <p class="hours">Weekday hours of operation: <?php echo $resorts[3]['opening_hour_weekday'] . "-" . $resorts[3]['closing_hour_weekday'] . "."; ?></p>
          <p class="trail_number">Number of trails: <?php echo $resorts[3]['trail_number'] . "."; ?></p>
          <!-- Form for edit description button where admin can edit resort information and update database -->
          <form method="post" action="edit_description.php">
            <?php
            echo "<input type='hidden' name='id' value='" . $resorts[3]['resort_id'] . "'>";
            ?>
            <button type="submit" name="submit">Edit Description</button>
          </form>
        </div>

        <!-- Display App information -->
        <div class="resortDesc">
          <h3><?php echo $resorts[4]['resort_name']; ?></h3>
          <p class="description"><?php echo $resorts[4]['description']; ?></p>
          <p class="address"><?php echo $resorts[4]['address'] . "<br>" . $resorts[4]['city'] . ", " . $resorts[4]['zip']; ?></p>
          <p class="phone">Phone: <?php echo $resorts[4]['phone']; ?></p>
          <p class="hours">Weekend hours of operation: <?php echo $resorts[4]['opening_hour_weekend'] . "-" . $resorts[4]['closing_hour_weekend'] . "."; ?></p>
          <p class="hours">Weekday hours of operation: <?php echo $resorts[4]['opening_hour_weekday'] . "-" . $resorts[4]['closing_hour_weekday'] . "."; ?></p>
          <p class="trail_number">Number of trails: <?php echo $resorts[4]['trail_number'] . "."; ?></p>
          <!-- Form for edit description button where admin can edit resort information and update database -->
          <form method="post" action="edit_description.php">
            <?php
            echo "<input type='hidden' name='id' value='" . $resorts[4]['resort_id'] . "'>";
            ?>
            <button type="submit" name="submit">Edit Description</button>
          </form>
        </div>

        <!-- Display Wolf information -->
        <div class="resortDesc">
          <h3><?php echo $resorts[5]['resort_name']; ?></h3>
          <p class="description"><?php echo $resorts[5]['description']; ?></p>
          <p class="address"><?php echo $resorts[5]['address'] . "<br>" . $resorts[5]['city'] . ", " . $resorts[5]['zip']; ?></p>
          <p class="phone">Phone: <?php echo $resorts[5]['phone']; ?></p>
          <p class="hours">Weekend hours of operation: <?php echo $resorts[5]['opening_hour_weekend'] . "-" . $resorts[5]['closing_hour_weekend'] . "."; ?></p>
          <p class="hours">Weekday hours of operation: <?php echo $resorts[5]['opening_hour_weekday'] . "-" . $resorts[5]['closing_hour_weekday'] . "."; ?></p>
          <p class="trail_number">Number of trails: <?php echo $resorts[5]['trail_number'] . "."; ?></p>
          <!-- Form for edit description button where admin can edit resort information and update database -->
          <form method="post" action="edit_description.php">
            <?php
            echo "<input type='hidden' name='id' value='" . $resorts[5]['resort_id'] . "'>";
            ?>
            <button type="submit" name="submit">Edit Description</button>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
