<?php
  function totalDigitsOfNumber($n){
    $total = 0;
    $number = $n;
    do{
        $total = $total + ($n % 10);
        $n = $n / 10;
    }while($n > 0);

    echo "Tổng của các chữ số của $number là: ".$total;
  }
  $a = 5678;
  totalDigitsOfNumber($a);
?>