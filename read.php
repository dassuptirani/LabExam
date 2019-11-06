<?php
	
	$myfile = fopen('abc.txt', 'r');
	$data = fgetc($myfile);
	fclose($myfile);

	echo $data;
?>