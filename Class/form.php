<!-- \
// if(isset($_POST['submit'])){
// echo "yes submit button is pressed";
// $username = $_POST['username'];
// $password = $_POST['password'];
// echo "Hello " . $username . " Welcome to the Website";
// }
// 
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form</title>
</head>
<body>
<form action = "form.php" method = "post">
Enter name :<input type = "text" name = "username"placeholder ="Enter username "> <br>
Enter password :<input type = "password" name ="password" placeholder="Enter password"><br>
<input type = "submit" name = "submit">
</body>
</html> -->


<?php
if(isset($_POST['submit'])){
    echo "yes Submit button is pressed";
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo "Hello ". $username."Welcome to the website";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background-color : black ">
    <form action="form.php" method = "post">
        <font face = "Courier new" color = "Skyblue" size = "5">Enter name : <input type ="text" name = "username" value = "" placeholder = "Type here"> </font>
        <br>
        <font face = "Courier new " color = "yellow" size = "5">Enter password : <input type="password" name ="password" value ="Password" placeholder = "Password"></font>
        <input type="submit" name = "submit">
    </form>
</body>
</html>