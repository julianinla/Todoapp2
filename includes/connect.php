<?php
	$mysqli = new mysqli('localhost', 'root', 'root', 'todo2');
	//opens up database w/ correct info
	if ($mysqli->connect_error) {
		die('Connect Error (' . $mysqli->connect_errno . ')'
			. $mysqli->connect_error);
		//kills page and gives error that occurred
	}
	//mysqli connect error, we want it to die and have message
	else {
		//echo "Connection Made.";
		//echoes that the connection was made
	}
	//if successful
	$mysqli->close();
	//closes link to database/server
?>