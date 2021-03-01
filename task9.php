<?php
    function power ($num, $pow){
        if ($pow == 0) return 1;
        $result = $num * power ($num, $pow - 1);
        return $result;
    }

    $a = readline();
    $n = readline();

    echo power($a, $n);
?>