<?php
	function isPrime($n){
        if($n < 2){
            return false;
        }

        $squareRoot = sqrt($n);

        for($i = 2; $i <= $squareRoot; $i++){
            if($n % $i == 0 ){
                return false;
            }
        }
        return true;
    }
    for($i = 0; $i <=100 ; $i++){
        if(isPrime($i)){
            echo "$i";
        }
    }
?>