
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