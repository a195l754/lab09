<?php 
$q1 = $_POST["Q1"];
$q2 = $_POST["Q2"];
$q3 = $_POST["Q3"];
$q4 = $_POST["Q4"];
$q5 = $_POST["Q5"];
$correct = 0;

echo "Question 1: 9+10<br>";
echo "You answered: " . $q1 . "<br>";
echo "Correct answer: 19<br><br>";
if($q1==19)
{
	$correct++;
}

echo "Question 2: 7*5<br>";
echo "You answered: " . $q2 . "<br>";
echo "Correct answer: 35<br><br>";
if($q2==35)
{
	$correct++;
}

echo "Question 3: 19-3<br>";
echo "You answered: " . $q3 . "<br>";
echo "Correct answer:16 <br><br>";
if($q3==16)
{
	$correct++;
}

echo "Question 4: 20/4<br>";
echo "You answered: " . $q4 . "<br>";
echo "Correct answer: 5<br><br>";
if($q4==5)
{
	$correct++;
}

echo "Question 5: Capital of Assyria<br>";
echo "You answered: " . $q5 . "<br>";
echo "Correct answer: Assur<br><br>";
if($q5==Assur)
{
	$correct++;
}

echo "You got " . $correct . " question(s) correct<br>";
echo "Score: " . ($correct/5)*100 . "%<br>";
?>