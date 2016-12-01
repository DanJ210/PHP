<html>
<?php
  $price = 95;
  echo "<table border = 1 align = left>";
  echo "<tr><th> Quanity </th>";
  echo "<th> Price </th></tr>";
  for ($credit = 3; $credit <= 63; $credit += 3)
  {
    echo "<tr><td>";
    echo $credit;
    echo "</td><td>";
    echo $price * $credit;
    echo "</td></tr>";
  }
  echo "</table>"
?>


<h2>Changing the same code to a while loop</h2>
<?php
  $price = 95;
  $credit = 3;
  echo "<table border = 1 align = center>";
  echo "<tr><th> Quanity </th>";
  echo "<th> Price </th></tr>";
  while ($credit <= 63)
  {
    echo "<tr><td>";
    echo $credit;
    echo "</td><td>";
    echo $price * $credit;
    echo "</td></tr>";

    $credit += 3;
  }
  echo "</table>"
?>
</div>
