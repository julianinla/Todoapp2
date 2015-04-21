+<?php

	$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
	if (mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ')'
			. $mysqli->connect_error);
	}
	//mysqli connect error, we want it to die and have message
	else {
		echo "Connection Made.";
	}

	$mysqli->close();

?>