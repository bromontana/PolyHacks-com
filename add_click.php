<?php

$filename = "clicks.txt";
$failure = "failure";

try {
	$fileData = file_get_contents($filename);
	$num = (int) $fileData;
	if ($fileData != (string)$num) {
		die($failure . "1");
	}
	if ($fileData == "") {
		die($failue . "2");
	}
	$num++;
	if (is_writeable($filename)) {
		if (file_put_contents($filename, $num . "")) {
			die($num . "");
		} else {
			die($failure . "3");
		}
	} else {
		die($failure . "4");
	}
} catch (Exception $e) {
	die($failure . "5");
}
