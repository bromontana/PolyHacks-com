<?php

try {
    $num = (int) file_get_contents("clicks.txt");
    $num++;
    file_put_contents("clicks.txt", $num + "");
    echo $num + "";
} catch (Exception $e) {
    echo "failure";
}