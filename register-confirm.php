<?php

	//connect to the db to get the user's search result
	$host = "303.itpwebdev.com";
	$user = "wenbeiwa_db_user";
	$pass = "rachel990526";
	$db = "wenbeiwa_randRecipes";

	$mysqli = new mysqli($host, $user, $pass, $db);
	if ( $mysqli->errno ) {
		echo $mysqli->error;
		exit();
	}

	//Write SQL to aearch for user's search term
	$sql = "SELECT * FROM user WHERE username LIKE '%" . $_GET['email'] ."%';";

	$results = $mysqli->query($sql);
	if ( !$results ) {
		echo $mysqli->error;
		exit();
	}

	$mysqli->close();

	//send the results back to the front end
	//create an array to send to the frontend
	$results_array = [];


	while ($row = $results->fetch_assoc()){
		array_push($results_array, $row); 
	}

	echo json_encode($results_array);







?>