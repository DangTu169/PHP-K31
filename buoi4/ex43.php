<?php
    $input = "[    vU    vaN thUoNg    ]";
    $strtolower = strtolower($input);
    $ucwords = ucwords($strtolower);
    $trim = trim($ucwords);
    echo "chuỗi đầu vào: ".$input;
    echo "<br>chuỗi sau khi xử lý: ".$trim;
    