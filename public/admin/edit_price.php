<?php
include_once('../../private/initialize.php');
$page_title = 'Admin Edit Price';
include_once(SHARED_PATH . '/admin_header.php');
check_admin_login();

$table_name = 'resort_pricing';
$resort_table = 'resort';
?>

<h2>Edit Price</h2>

<?php
// get id from submit on which price to update
if(isset($_POST['submit'])) {
  $id = mysqli_real_escape_string($database, $_POST['id']);
  $category = mysqli_real_escape_string($database, $_POST['category']);
  $sql = "SELECT price FROM $table_name WHERE pricing_id=$id";
  $result = mysqli_query($database, $sql);
  
  
  if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $price = h($row['price']);
    }
  }
  ?>
  <form method="post" action="make_price_edits.php">
    <label for="price">Price for <?php echo $category; ?></label>
    <input type="text" name="new_price" id="new_price" value="<?php echo $price; ?>">
    <input type='hidden' name='category' value='<?php if(isset($category)) echo $category; ?>'>
  
    <input type='hidden' name='id' value='<?php if(isset($id)) echo $id; ?>'>
    <button type="submit" name="submit">Make Edits</button>
  </form>
  <?php
} elseif(isset($_POST['submitTimes'])) {
  $full_day_time = mysqli_real_escape_string($database, $_POST['full_day_time']);
  $half_day_time = mysqli_real_escape_string($database, $_POST['half_day_time']);
  $night_time = mysqli_real_escape_string($database, $_POST['night_time']);
  $resort_name = mysqli_real_escape_string($database, $_POST['resort_name']);
  $sql = "SELECT full_day_time, half_day_time, night_time FROM $resort_table WHERE resort_name = '$resort_name'";
  $result = mysqli_query($database, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $full_day_time = h($row['full_day_time']);
      $half_day_time = h($row['half_day_time']);
      $night_time = h($row['night_time']);
    }
    ?>
    <form method="post" action="make_price_edits.php">
      <label for="full_day_time">Price for full day time at <?php echo $resort_name;?> : </label>
      <input type="text" name="full_day_time" id="full_day_time" value="<?php echo $full_day_time; ?>">
      <br>
      <label for="half_day_time">Price for half day time at <?php echo $resort_name;?> : </label>
      <input type="text" name="half_day_time" id="half_day_time" value="<?php echo $half_day_time; ?>">
      <br>
      <label for="full_day_time">Price for night time at <?php echo $resort_name;?> : </label>
      <input type="text" name="night_time" id="night_time" value="<?php echo $night_time; ?>">
      <br>
      <input type="hidden" name="resort_name" id="resort_name" value="<?php echo $resort_name; ?>">
      <br>
      <button type="submit" name="submitTimes">Make Edits</button>
    </form>
<?php
  }
} elseif(isset($_POST['submitSpecial'])) {
  $resort_name = mysqli_real_escape_string($database, $_POST['resort_name']);
  $special_time = mysqli_escape_string($database, $_POST['special_time']);
  $sql = "SELECT special_time FROM $resort_table WHERE resort_name='$resort_name'";
  $result = mysqli_query($database, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $special_time = h($row['special_time']);
    }
    ?>
    <form method="post" action="make_price_edits.php">
      <label for="special_time">The special for <?php echo $resort_name;?> : </label>
      <textarea name="special_time" id="special_time" rows="4" cols="50"><?php if(isset($special_time)) echo $special_time; ?></textarea><br>
      <br>
      <input type="hidden" name="resort_name" id="resort_name" value="<?php echo $resort_name; ?>">
      <button type="submit" name="submitSpecial">Make Edits</button>
    </form>
    <?php
  }
} elseif(isset($_POST['submitAges'])) {
  $resort_name = mysqli_real_escape_string($database, $_POST['resort_name']);
  $junior_age = mysqli_real_escape_string($database, $_POST['junior_age']);
  $adult_age = mysqli_real_escape_string($database, $_POST['adult_age']);
  $sql = "SELECT junior_age, adult_age FROM $resort_table WHERE resort_name='$resort_name'";
  $result = mysqli_query($database, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $junior_age = h($row['junior_age']);
      $adult_age = h($row['adult_age']);
    }
    ?>
  <form method="post" action="make_price_edits.php">
    <label for="junior_age">Junior Age for <?php echo $resort_name; ?> : </label>
    <input type="text" id="junior_age" name="junior_age" value="<?php echo $junior_age; ?>">
    <br>
    <label for="adult_age">Adult Age for <?php echo $resort_name; ?> : </label>
    <input type="text" id="adult_age" name="adult_age" value="<?php echo $adult_age; ?>">
    <input type="hidden" name="resort_name" id="resort_name" value="<?php echo $resort_name; ?>">
    <br>
    <button type="submit" name="submitAges">Make Edits</button>
  </form>
    <?php
  }
} else {
  echo "No post submitted.";
}
?>




