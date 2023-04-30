<?php
include_once('../../private/initialize.php');
?>
<span id="admin_home">
<?php
$page_title = 'Member List';
include_once(SHARED_PATH . '/admin_header.php');
check_admin_login();
?>

<?php
// Grab all members and their information from database
$sqlMember = "SELECT * FROM member";
$resultMember = mysqli_query($database, $sqlMember);
?>

<!-- Display all members and their information (other than passwords) in a table -->
<h2>Table of Members</h2>
<form method="get" action="../search.php">
  <label for="search">Search user:</label>
          <input type="text" name="search" id="search" placeholder="Search...">
          <button type="submit">Search</button>
</form>
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

if(mysqli_num_rows($resultMember) > 0) {
  while($row = mysqli_fetch_assoc($resultMember)) {
    if ($row['is_admin'] == 0) {
      $admin = "No";
    } else {
      $admin = "Yes";
    }
    $date = new DateTime($row['date_joined']);
    echo "<tr><td>" . $row['username'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $date->format('Y-m-d') . "</td>";
    echo "<td>" . $admin . "</td>";
    // Form for toggle admin button where admin users can change the status of any member
    echo "<td><form method='post' action='toggle_admin.php'>";
    echo "  <input type='hidden' name='id' value='" . $row['member_id'] ."'>";
    echo "  <button type='submit' name='submit'>Toggle Admin</button>";
    echo "</form></td>";
  }
}

?>

</table>
</span>