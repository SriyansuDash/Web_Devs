<?php
if(isset($_POST['submit'])){
   $user=$_POST['username'];
  $pass=$_POST['password'];
  $connection=mysqli_connect('localhost','root','','logindb');
    if($connection){
        echo "We are connected";

    }
    else{
        echo "Not connect it";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <div class="col-xs-6">
            <form action="p1.php" method="post">
                <div class="form-group">
                    <label for="username">UserName</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="PassWord">PassWord</label>
                    <input type="text" name="password" class="form-control">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
            </form>
        </div>
    </div>
</body>
</html>