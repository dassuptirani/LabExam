<?php

	$myfile = fopen('abc.txt', 'w');
	fwrite($myfile, "ABCS");
	fclose($myfile);
	echo "done";

?>