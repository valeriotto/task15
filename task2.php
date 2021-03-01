<?php
    $a = readline();
    $b = readline();
    $c = readline();
    $result=$a;
    if ($result < $b) {
        $result = $b;
    }
    if($result < $c) {
        $result = $c;
    }
    echo $result;
?>