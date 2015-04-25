<?php

	require_once(__DIR__ . "/controller/login-verify.php");
	require_once(__DIR__ . "/model/config.php");
	require_once(__DIR__ . "/view/header.php");
	require_once(__DIR__ . "/view/links.php");
	if(authenticateUser()) {
        require_once(__DIR__ . "/view/task-list.php");
    }
    else {
    	echo "<p>You must be logged in to access todo list.</p>";
    }
	require_once(__DIR__ . "/view/footer.php");

?>
