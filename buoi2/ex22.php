<?php
	echo "Viết chương trình giải phương trình bậc 2: ax2 + bx + c = 0. <br>";
    $a = 10;
    $b = 4;
    $c = 4;
    $delta = ($b * $b) - (4 * $a * $c);
    echo "Hằng số a là: $a <br>";
    echo "Hằng số b là: $b <br>";
    echo "Hằng số c là: $c <br>";
    echo "Delta = $delta <br>";
    if ($delta < 0){
        echo "Phương trình vô nghiệm";
    }
    else if ($delta == 0){
        echo "Phương trình nghiệm kép x1 = x2 = " . (-$b/2*$a);
    }
    else {
        echo 'Phương trình có hai nghiệm phân biệt, x1 = ' . ((-$b + sqrt($delta))/2*$a);
        echo ',x2 = ' . ((-$b - sqrt($delta))/2*$a);
    }
?>