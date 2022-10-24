<?php
    function kiemTraChuoi($string){
        if($string == strrev($string)){
                echo $string." là chuỗi đối xứng";
        }else{
            echo $string." không phải là chuỗi đối xứng";
        }
    }
    kiemTraChuoi(" ZenttneZss");