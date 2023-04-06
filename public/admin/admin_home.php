<?php
include_once('../../private/initialize.php');
?>
<span id="admin_home">
<?php
include_once(SHARED_PATH . '/admin_header.php');
$page_title = 'Admin Home';
?>

<?php
$sqlMember = "SELECT * FROM member";
$resultMember = mysqli_query($database, $sqlMember);
?>

<h2>Table of Members</h2>
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
    echo "<tr><td>" . $row['username'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "<td>" . $row['date_joined'] . "</td>";
    echo "<td>" . $admin . "</td>";
    echo "<td><form method='post' action='toggle_admin.php'>";
    echo "  <input type='hidden' name='id' value='" . $row['member_id'] ."'>";
    echo "  <button type='submit' name='submit'>Toggle Admin</button>";
    echo "</form></td>";
  }
}

?>

</table>
</span>