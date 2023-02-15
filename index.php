<?php
require_once('private/initialize.php');

?>

<h1>Welcome</h1>

<?php
if(!$database) {
  echo("Connection Failed.");
} else {
  echo("Connection Successful!<br>");
}

$sql = "SELECT resort_name FROM resort";

$results = mysqli_query($database, $sql);

if (mysqli_num_rows($results) > 0) {
echo ("<br>The five ski resorts in western North Carolina are:<br>");
  while($row = mysqli_fetch_array($results)) {
    echo ($row[0]. "<br>");
  }
  $row = mysqli_fetch_array($results);
}
