<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My first web page</title>
</head>
<body>
    <?php
echo "An array in php contain any type of variable ";
$numbers = array(1000,10,99,"Sriyansu","<h1>Sriyansu</h1>"); 
echo "<br>";
echo $numbers[0];
echo "<br>";
echo $numbers[1];
echo "<br>";
echo $numbers[4];
echo "<br>";
print_r($numbers);
echo "We will see new associative array";
echo "<br>";
$ assocArray = array ("Name "=>"Sriyansu","Age"=>"19");
print_r($assocArray);
echo "<br>";
echo "<br>";
$assocArray["Name"];
?>
</body>
</html>