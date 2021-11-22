<?php 
$name = $_POST["name"]; 
$pass = $_POST["pass"];
$i1 = $_POST["i1"];
$i2 = $_POST["i2"];
$i3 = $_POST["i3"];
$ship = $_POST["ship"];

echo "Welcome,  " . $name . "<br>";
echo "Your password is: " . $pass . "<br>";

echo "Your purchase: <br>";
echo "<table><tr><th></th><th>Quantity</th><th>Cost</th><th>Subtotal</th></tr>";
echo "<tr><th>Chocolate</th><td>$i1</td><td>$5</td><td>".($i1*5)."</td></tr>";
echo "<tr><th>Chocolate with nuts</th><td>$i2</td><td>$10</td><td>".($i2*10)."</td></tr>";
echo "<tr><th>Chocolate with peanut butter</th><td>$i3</td><td>$15</td><td>".($i3*15)."</td></tr>";
echo "</table><br>";
echo "Your shipping: $" . $ship . "<br>";
echo "Your total: $" . (($i1*5)+($i2*10)+($i3*15)+$ship) . "<br>";
?>