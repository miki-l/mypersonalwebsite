<?php

	// connect to the database
	$conn = mysqli_connect('localhost', 'Miki', 't8tc4AwT5CpOwqdo', 'sfg');

	// check connection
	if(!$conn){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>