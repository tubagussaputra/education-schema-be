<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php


$data = array(1, 2, 4, 3, 10, 11, 20, 5, 100, 200);


foreach ($data as $value) {
    if ($value%5==0 && $value%11==0){
       echo "FizzBuzz";
    } 
    else if ($value %5 ==0) {
        echo "Fizz";
    } 
    else if ($value %11 ==0){
         echo "Buzz";
    } 
    else {
        echo $value ;
    }

    echo '<br>';
  }



?>



</body>
</html>


