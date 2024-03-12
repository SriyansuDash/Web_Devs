<?php
echo(time);
$name = Sriyansu Dash;
$value = 234;
$expiration = time() + (60*60*24*30);
setcookie($name, $value, $expiration);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($cookie['Sriyansu Dash'])){
        $var = $_COOKIE['Sriyansu Dash'];
        echo $var;
    }
    else{
        echo ("That named cookie is not available here");
    }
    ?>
</body>
</html>