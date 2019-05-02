<?php

var_dump($_GET);
echo sizeof($_GET);
require 'config.php';

//delete all matches first
if (!isset($_GET['userID']) || empty($_GET['userID']) ){
	echo "INVALID USERID";
	exit();
}
else {
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	if($mysqli->connect_errno) {
		       echo $mysqli->connect_error;
		       exit();
	}

	$sqlDelete = "DELETE FROM Matches WHERE 
			userID = " . $_GET['userID'] .";";


	$results = $mysqli->query($sqlDelete);

	if(!$results) {
		echo $mysqli->error;
		exit();
	}


	if (sizeof($_GET) > 1){
		$first = true;
		$sql = "INSERT INTO Matches(allergyID,userID) VALUES ";

		if (isset($_GET["1"]) && !empty($_GET["1"])){
			if ($first){
				$first = false;
			}
			$sql = $sql . "(1, ". $_GET['userID'] . ")";
		}
		if (isset($_GET["2"]) && !empty($_GET["2"])){
			if ($first){
				$sql = $sql . "(2," .$_GET['userID'] . ")";
				$first = false;
			}
			else {
				$sql = $sql . ",(2," .$_GET['userID'] . ")";
			}
		}
		if (isset($_GET["3"]) && !empty($_GET["3"])){
			if ($first){
				$sql = $sql . "(3," .$_GET['userID'] . ")";
				$first = false;
			}
			else {
				$sql = $sql . ",(3," .$_GET['userID'] . ")";
			}
		}
		if (isset($_GET["4"]) && !empty($_GET["4"])){
			if ($first){
				$sql = $sql . "(4," .$_GET['userID'] . ")";
				$first = false;
			}
			else {
				$sql = $sql . ",(4," .$_GET['userID'] . ")";
			}
		}
		if (isset($_GET["5"]) && !empty($_GET["5"])){
			if ($first){
				$sql = $sql . "(5," .$_GET['userID'] . ")";
				$first = false;
			}
			else {
				$sql = $sql . ",(5," .$_GET['userID'] . ")";
			}
		}
		if (isset($_GET["6"]) && !empty($_GET["6"])){
			if ($first){
				$sql = $sql . "(6," .$_GET['userID'] . ")";
				$first = false;
			}
			else {
				$sql = $sql . ",(6," .$_GET['userID'] . ")";
			}
		}
		$sql = $sql . ";";


		echo "<hr>" . $sql. "<hr>";

		$results = $mysqli->query($sql);

		if(!$results) {
			echo $mysqli->error;
			exit();
		}
	}

	header('Location: index.php');
	exit();



}














?>