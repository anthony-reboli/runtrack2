<?php
    $nombre = 0;

    for($nombre=1;$nombre<=100;$nombre++){
        if($nombre % 3 == 0 && $nombre % 5 == 0){
            echo "FizzBuzz";
            echo "</br>";
        }
        elseif($nombre % 3 == 0){
            echo "Fizz";
            echo "</br>";
        }
        elseif($nombre % 5 == 0){
            echo "Buzz";
            echo "</br>";
        }
        else{
            echo $nombre;
            echo "</br>";
        }
    }
?>