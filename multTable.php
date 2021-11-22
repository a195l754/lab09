<?php
function mult($x, $y)
{
	$z = $x * $y;
	return $z;
}
echo "<table>";
echo "<thead>";
echo "<tr>";


// To explain this, my for loop farther down was
// skipping every other column, and I'm not sure
// why so I made the header also skip

$ev = true;
for($i=0;$i<=200;$i++)
{
	if($ev == false)
	{
	       echo "<th>" . ($i+1)/2 . "</th>";
	       $ev = true;
	}
	else
	{
		echo "<th></th>";
		$ev = false;
	}
}
echo "</tr>";
echo "<thead>";
echo "<tbody>";
for($i=1;$i<=100;$i++)
{
	echo "<tr>";
	echo "<th>" . $i . "</th>";
	
	// This is the for loop that skips columns
	for($j=1;$j<=100;$j++)
	{
		echo "<td>" . mult($i, $j) . "<td/>";
	}
	echo "</tr>";
}
echo "</tbody>";
echo "</table>";
?>