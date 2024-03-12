<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Question08</title>
</head>
<body>
    <font face size = "5">
        <?php
           function person($age){
                if ($age >= 18) {
                    echo "You are able to cast your vote ";
                }
                else{
                    print "You are unable to cast your vote ";
                }
            }
            person(39);
        ?>
    </font>
    <hr>
</body>
</html>