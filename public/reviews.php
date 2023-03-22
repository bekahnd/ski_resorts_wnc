<?php
include_once('../private/initialize.php');
include_once(SHARED_PATH . '/public_header.php');
$page_title = 'Reviews';
?>

<h2>Reviews</h2>
<?php
$api_key = 'AIzaSyA6LefrzlhKHmkKApqOyu7UeQJwnN2RDfQ';
$place_id = 'https://goo.gl/maps/BBKCYaczuBfnmXSg8';
$num_reviews = 10;

$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$place_id&fields=name,rating,review&key=$api_key";
$response = file_get_contents($url);
$data = json_decode($response, true);

$reviews = $data['result']['reviews'];
foreach ($reviews as $review) {
  $author_name = $review['author_name'];
  $rating = $review['rating'];
  $text = $review['text'];
  echo "<div><strong>$author_name</strong rated it $rating stars</div>";
  echo "<div>$text</div>";
}
?>