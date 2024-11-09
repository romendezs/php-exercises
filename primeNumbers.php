<?php

    if($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST['primeNumbers'])){
        $n = intval($_POST['primeNumbers']);


       function isPrime($n){
        //declaring the returning variable
        $result = true;

        //declaring the divisor variable
        $d = 0; 


        //loop for finding out if the $n number is prime
        while($d < $n){
            $d++;

            if($n%$d==0 && $d!==1 && $d!==$n){
                //when finding a divisor different to $n or 1, 
                //breaks the loop and sets the result false
                $result = false;
                break;
            }
        }

        return $result;
       }

       echo isPrime($n) ? "Is prime" : "Is NOT prime";


    } else{
        echo "No input was received. Please go back and submit the form.";
    }

    ?>