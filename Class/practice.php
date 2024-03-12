<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page</title>
</head>
<body>
   <?php 
   if(5 != '5'){
    echo "I am inside if Condition <br>";
   }
   else{
    echo "I am outside if Condition <br>";
   }
   $number=54;
   switch($number)
   {
    case 32:
          echo "The first case was satisfied<br>";
     case 32:
        echo "The second case was satisfied<br>";
        case 12:
        echo "The third case was satisfied<br>";
        case 52: 
            echo "The fourth case was satisfied<br>";
        default:
        echo "I was the default case since none was satisfied<br>";
   }
      //loops
      //while loop
      $var=10;
      while($var<20){
    echo "I am in loop<br>" ;
   $var++;
      }

      //for loop
      for($counter=0;$counter<10;$counter++){ 
        echo "I am inside for loop for $counter times<br>";
      }
          
     $num = array(5,4,67,87,23,45,65,76,90);
     foreach($num as $nums)
     {
        echo $nums . "<br>";
     }
     write_Something();


     function sum ($x,$y){
        return $x+$y;
     }
     $z=sum(8,9);
     echo $z;

   ?>
      

</body>
</html>