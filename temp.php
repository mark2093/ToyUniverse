<html>
  <body>
    <?php
    $numbers = array(123,66,23,54,12,55,76,43,67,32,45,64,24,32,56,75,43,67,43,78,43,12,56,53,66,23,54,67,65,67);
    sort($numbers);
      for($x = 0; $x < 5; $x++) {
    echo $numbers[$x];
    echo "<br>";
}
  echo "<br>";
$numbers = array(123,66,23,54,12,55,76,43,67,32,45,64,24,32,56,75,43,67,43,78,43,12,56,53,66,23,54,67,65,67);
rsort($numbers);
  for($x = 0; $x < 5; $x++) {
echo $numbers[$x];
echo "<br>";
}
     ?>
  </body>
</html>
