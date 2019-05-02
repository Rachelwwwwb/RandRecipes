<?php
	require 'config.php';
   	$_SESSION['logged_in'] = true;

	if ((!isset($_POST['email']) || empty($_POST['email'])) && (!isset($_SESSION['userEmail']) || empty($_SESSION['userEmail']) ) ){
		$error = "CANNOT GET DATA";
	}
	else{
		if (isset($_POST['email']) && !empty($_POST['email'])){
			$_SESSION['userEmail'] = $_POST['email'];
		}
		//need to create the new user
		if (isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['username']) && !empty($_POST['username'])){

			$username = $_POST['username'];
			$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		    if($mysqli->connect_errno) {
		       echo $mysqli->connect_error;
		       exit();
		    }

		    $usernameInput = $_POST['username'];
		    $emailInput = $_POST['email'];
		    $passwordInput = hash('sha256', $_POST['password']);

		    $sql = "INSERT INTO user (userName,userPassword,userEmail)
		            VALUES('" .$usernameInput ."', '". $passwordInput ."', '". $emailInput . "');";
		            		     
		    $results = $mysqli->query($sql);

		    if(!$results) {
		        echo $mysqli->error;
		        exit();
		    }

		    $sql = "SELECT COUNT(userID) FROM user";
		    $resultscount = $mysqli->query($sql);

		    if(!$resultscount) {
		        echo $mysqli->error;
		        exit();
		    }
		    $count = $resultscount->fetch_assoc();
		    $userid = $count['COUNT(userID)'];


		}
		else{
		  $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

		   if($mysqli->connect_errno) {
	       echo $mysqli->connect_error;
	      	exit();
	      }
	      if (isset($_SESSION['userEmail']) && !empty($_SESSION['userEmail'])){
	      	$email = $_SESSION['userEmail'];
	      }
	      else{
	      	$email = $_POST['email'];
	      }
	      $sql = "SELECT * FROM user
	            WHERE userEmail = '" . $email . "';";
	      
	      $results = $mysqli->query($sql);
	      if ($results->num_rows > 0){
	        //if the password is found
	        $row = $results->fetch_assoc();
	        $username = $row['userName'];
	        $userid = $row['userID'];
	      }

	      if(!$results) {
	        echo $mysqli->error;
	        exit();
	      }

	      $sql = "SELECT * FROM Matches
	            WHERE userID = '" . $userid . "';";

	       $resultAllergy = $mysqli->query($sql);
	        //if the password is found

	        while($rowAllergy = $resultAllergy->fetch_assoc() ){
	        	$aID = $rowAllergy['allergyID'];
	        	if ($aID == 1) {
	        		$daily = true;
	        	}
	        	else if ($aID == 2){
	        		$egg = true;
	        	}
	        	else if ($aID == 3){
	        		$gluten = true;
	        	}
	        	else if ($aID == 4){
	        		$peanut = true;
	        	}
	        	else if ($aID == 5){
	        		$sesame = true;
	        	}
	        	else if ($aID == 6){
	        		$wheat = true;
	        	}
	        }
	       

	      if(!$results) {
	        echo $mysqli->error;
	        exit();
	      }


		}

	}
?>

<html>
<head>
<title></title>	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="common.css">
<style type="text/css">
	#user {
		font-size: 30px;
	}
	#info-box {
		width: 80%;
		padding-top: 30px;
		margin-left: auto;
		margin-right: auto;
		padding-bottom: 30px;
	}
	#about {
		width: 60%;
		border-style: none;
		padding-top: 10px;
		padding-bottom: 10px;
		padding-left: 10px;
	}
	#brand {
		padding-right: 70%;
		font-family: "Comic Sans MS";
	}
	#not-rolling h2 {
		font-family: "Comic Sans MS";
		font-size: 50px;
		font-weight: 1px;
	}
	#pic {
		float: left;
		padding-left: 15%;
		padding-right: 10%;
	}

	#fav {
		width: 80%;
		margin-left: auto;
		margin-right: auto;
	}
	.options {
		width: 75%;
		margin-left: auto;
		margin-right: auto;
	}

	#option-submit {
		width: 20%;
		margin-left: 40%;
		margin-right: 40%;
		background-color: rgba(97,97,97,0.1);
		border-color: white;
		border-radius: 20px;
		color: black;
		line-height: 1;
	}
	#recipes {
		width: 80%;
		height: 40%;
		margin-left: auto;
		margin-right: auto;
		border-radius: 50px;
		border-style: solid;
		border-width: 1px;
		border-color: gray;
	}
	@media(max-width: 991px){
		#brand {
			display: none;
		}
	}
</style>

</head>
<!-- ID: 3e327f96 -->
<!-- KEY: b5e7f5bbf288c60fa2f17db649d9ded0 -->
<!-- "https://api.edamam.com/search?q=chicken&app_id=3e327f96&app_key=b5e7f5bbf288c60fa2f17db649d9ded0&from=0&to=3&calories=591-722&health=alcohol-free" -->
<body>


	<!-- header -->
<nav class="navbar navbar-expand-lg navbar-light bg-orange">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a id="brand" class="navbar-brand" href="index.php">Rand Recipes</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="margin-zero active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="margin-zero active">
        <a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>
      </li>
      <li class="margin-zero active">
        <a class="nav-link" href="register.html">About US <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
	<?php if(isset($error) && !empty($error)) : ?>
		<div class="text-danger font-italic"><?php echo $error?></div>
	<?php else : ?>
		<div id="info-box">
			<div id="pic">
				<img id="headshot" src="https://x.yummlystatic.com/s/b86057d25/img/avatar.png" />
			</div>

			<h2 id="user">
				<?php echo $username ?>
			</h2>
			<form id="about-you">
				<input id="about" type="text" placeholder="Tell us something about you!">
			</form>
		</div>
		<div id="fav">
			<hr />
			<h5>My favourite recipes</h5>
			<br />
			<div id="recipes">
				<br /><br /><br /><br />
				<h5 style="font-size: 20px; text-align: center;">It is empty for now.</h5>

			</div>
		</div>
		<div id="allergy">

		<form action="allergy.php" method="GET" id="option-form">
			<div class="options">
			<hr />
			<h5>My allergies:&nbsp&nbsp</h5>
			<?php if(isset($daily) && !empty($daily)) : ?>
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" name="1" type="checkbox" checked="checked" id="dairy-free">
	  			<label class="form-check-label" for="inlineCheckbox1">dairy-free</label>
			</div>
			<?php else : ?>
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" name="1" type="checkbox" id="dairy-free">
	  			<label class="form-check-label" for="inlineCheckbox1">dairy-free</label>
			</div>
			<?php endif ; ?>

			<?php if(isset($egg) && !empty($egg)) : ?>
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" name="2" type="checkbox" checked="checked">
	  			<label class="form-check-label" for="inlineCheckbox1">egg-free</label>
			</div>
			<?php else : ?>
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" name="2" type="checkbox">
	  			<label class="form-check-label" for="inlineCheckbox1">egg-free</label>
			</div>
			<?php endif ; ?>


			<?php if(isset($gluten) && !empty($gluten)) : ?>
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" name="3" type="checkbox" checked="checked">
	  			<label class="form-check-label" for="inlineCheckbox1">gluten-free</label>
			</div>
			<?php else : ?>
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" name="3" type="checkbox">
	  			<label class="form-check-label" for="inlineCheckbox1">gluten-free</label>
			</div>
			<?php endif ; ?>

			<?php if(isset($peanut) && !empty($peanut)) : ?>
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" name="4" type="checkbox" checked="checked">
	  			<label class="form-check-label" for="inlineCheckbox1">peanut-free</label>
			</div>
			<?php else : ?>
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" name="4" type="checkbox">
	  			<label class="form-check-label" for="inlineCheckbox1">peanut-free</label>
			</div>
			<?php endif ; ?>

			<?php if(isset($sesame) && !empty($sesame)) : ?>
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" name="5" type="checkbox" checked="checked">
	  			<label class="form-check-label" for="inlineCheckbox1">sesame-free</label>
			</div>
			<?php else : ?>
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" name="5" type="checkbox">
	  			<label class="form-check-label" for="inlineCheckbox1">sesame-free</label>
			</div>
			<?php endif ; ?>

			<?php if(isset($wheat) && !empty($wheat)) : ?>
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" name="6" type="checkbox" checked="checked">
	  			<label class="form-check-label" for="inlineCheckbox1">wheat-free</label>
			</div>
			<?php else : ?>
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" name="6" type="checkbox">
	  			<label class="form-check-label" for="inlineCheckbox1">wheat-free</label>
			</div>
			<?php endif ; ?>

			 <input type="hidden" name="userID" class="hiddenField" value="<?php echo $userid ?>"/>


			<br>
		  <button class="btn btn-primary" id="option-submit" type="submit"> Update my allergies</button>
		</div>
		  
		</form>
		</div>
	<?php endif ; ?>


</body>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		document.querySelector("#about-you").onsubmit = function(){
			this.innerHTML = document.querySelector("#about").value;
			return false;
		}

		document.querySelector("#headshot").onclick = function(){
			//document.querySelector("#upload")
		}




	</script>









<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</html>