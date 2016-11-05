<?php

try {
    $num = (int) file_get_contents("clicks.txt");
    $num++;
    $success = file_put_contents("clicks.txt", $num + "");
    if ($success) {
        echo $num + "";
    } else {
        echo "failure";
} catch (Exception $e) {
    echo "failure";
}