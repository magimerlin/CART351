<html>
<head>
<title>Hello world example in php</title>
<style>
#divWithSpecificStyle
{
  width: 200px;
  height: 200px;
  margin: 2px;
  padding: 4px;
  border-width:2px;
  border-style:solid;
  border-color:#ccc;
  background-color:#3ad7ff;
  font-size:14px;
  color:#333333;
  font-family:arial;
 }
</style>
</head>
<body>
<?php
// fill the array with the values
$math201grades["Mary"] = "B";
$math201grades["John"] = "A-";
$math201grades["Steve"] = "B+";
$math201grades["Gina"] = "B-";
// output
echo "Mary's MATH 201 final grade: " . $math201grades["Mary"] . "<br />";
echo "John's MATH 201 final grade: " . $math201grades["John"] . "<br />";
echo "Steve's MATH 201 final grade: " . $math201grades["Steve"] . "<br />";
echo "Gina's MATH 201 final grade: ". $math201grades["Gina"] ."<br />";

$keys = array_keys($math201grades);
// var_dump() function outputs the contents of the array to the screen...
var_dump($keys);
echo "<br />";

$values = array_values($math201grades);
var_dump($values);
echo "<br />";

$keysArr = array_keys($math201grades);
for($i=0; $i<count($keysArr); $i++)
{
  echo" the value at index: ". $i . " is " . $math201grades[$keysArr[$i]]. " for the key: ".$keysArr[$i]. "<br />";
}

foreach($math201grades as $entry)
{
    echo("the value using an associative array:: ".$entry."<br />");
}

foreach ($math201grades as $key => $entry)
{
    echo "Key: $key; Value: $entry<br />";
}
?>
</body>
</html>
