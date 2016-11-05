<?php

// error handler
function customError($errno, $errstr) {
    echo "<b>Error:</b> [$errno] $errstr";
}

set_error_handler("customError");

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