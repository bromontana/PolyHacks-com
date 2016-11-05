<?php

$filename = "clicks.txt";
$failure = "failure";

try {
	$num = file_get_contents($filename);
	$num++;
	if (is_writeable($filename)) {
		if (file_put_contents($filename, $num . "")) {
			echo $num . "";
		} else {
			echo $failure;
		}
	} else {
		echo $failure;
	}
} catch (Exception $e) {
	echo $failure;
}