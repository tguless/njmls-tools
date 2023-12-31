<?php

   $mysqli = new mysqli("localhost", "root", "haig24", "besmartamerica");


	if (mysqli_connect_errno()) {
	   printf("Connect failed: %s\n", mysqli_connect_error());
	   exit();
	}

?>