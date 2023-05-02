<?php
include_once('../private/initialize.php');
$page_title = 'Search Results';
include_once(SHARED_PATH . '/public_header.php');
check_member_login();
?>
<h2>Search Results</h2>

<?php
// Grab search from user submission
$search = mysqli_real_escape_string($database, $_GET['search']);

// Search database for username, first name, or last name based on user search
$sql = "SELECT * FROM member WHERE username LIKE '%$search%' OR first_name LIKE '%$search%' OR last_name LIKE '%$search%' OR date_joined LIKE '%$search%'";

$result = mysqli_query($database, $sql);
?> 
<button id='toggle'><a href='admin/admin_home.php' id='toggleA'>&lt; &lt; Back to full members list.</a></button>

<?php
// Table to display the members that match the criteria of what is searched
if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_assoc($result)) {
    if ($row['is_admin'] == 0) {
      $admin = "No";
    } else {
      $admin = "Yes";
    }
    ?>
    <table id="membersTable">
      <tr>
        <th>Username</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Date Joined</th>
        <th>Is Admin</th>
        <th>Toggle Admin</th>
      </tr>
      <?php
      $date = new DateTime(h($row['date_joined']));
      echo "<tr><td>" . h($row['username']) . "</td>";
      echo "<td>" . h($row['first_name']) . "</td>";
      echo "<td>" . h($row['last_name']) . "</td>";
      echo "<td>" . h($row['email']) . "</td>";
      echo "<td>" . $date->format('Y-m-d') . "</td>";
      echo "<td>" . h($admin) . "</td>";
      echo "<td><form method='post' action='admin/toggle_admin.php'>";
      echo "  <input type='hidden' name='id' value='" . h($row['member_id']) ."'>";
      echo "  <button type='submit' name='submit'>Toggle Admin</button>";
      echo "</form></td></tr>";
    echo "</table>";
  }
}
?>