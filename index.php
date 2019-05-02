<?php
  require 'config.php';  

?>

<html>
<head>
<title></title>	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="common.css">
<style type="text/css">

	#overlay {
		display:none;
		height:100%;
		width:100%;
		position:absolute;
		z-index:5;
	}
	#black-background {
		position:absolute;
		height:100%;
		width:100%;
		top:0;
		left:0;
		background-color: rgba(97,97,97,0.7);
		z-index:6;
	}
	#ingredients {
		position: absolute;
		z-index: 7;
		height: 100%;
		width: 40%;
		background-color: rgba(255,255,255,0.5);
		margin-left: 30%;
		margin-right: 30%;
		padding-top: 10%;
		padding-left: 5%;
		padding-right: 5%;
		font-family: 'PT Sans Caption', sans-serif;

	}
	#rolling {
		width: 100%;
		margin-top: 5%;
		display: flex;
		justify-content: center;
		flex-direction: column;
		text-align: center;
		display:none;
	}
	#not-rolling {
		width: 80%;
		margin-left: auto;
		margin-right: auto;
		margin-top: 10%;
		display: flex;
		justify-content: center;
		flex-direction: column;
		text-align: center;
		padding-bottom: 20%;
		border-bottom-style: solid;
		border-bottom-width: 1px;

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

	#stop {
		width: 60%;
		margin-left: auto;
		margin-right: auto;
		background-color: rgba(97,97,97,0.1);
		border-color: white;
		border-radius: 20px;
		color: black;
		line-height: 1;
		font-family: 'PT Sans Caption', sans-serif;

	}

	#rolling p{
		font-size: 30px;
		line-height: 10px;
	}
	#rolling big{
		font-size: 80px;
	}
	#rolling p2{
		font-size: 50px;
		line-height: 10px;
	}
	#more-link{
		text-align: center;
		margin-top: 5vh;
		 animation: arrow 700ms linear infinite;
	}

	#radio {
		line-height: 2;
		width: 85%;
		margin-left: auto;
		margin-right: auto;
		font-family: 'PT Sans Caption', sans-serif;

	}
	.options {
		width: 75%;
		margin-left: auto;
		margin-right: auto;
	}

	#section2{
		width: 80%;
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

	#identity {
		cursor: pointer;
	}
	#identity:hover {
		color:rgb(84,148,144);
	}

	#main-pic {
		width: 25%;
		margin-left: 32.5%;
		margin-right: 32.5%;
		padding-bottom: 20px;
		cursor: pointer;
	}

	#section2 {
		width: 80%;
		height: 80%;
		margin-top: 10%;
		margin-left:auto;
		margin-right: auto;
	}

	.brunch-area {
		display: flex;
	}
	.meal {
		width: 20%;
		/*/border-style: solid;*/
		float: left;
		margin:0;
		height: 40%;
		text-align: center;
	}
	.poster {
		width: 80%;
		margin-left: 10%;
		margin-right: 10%;
		border-radius: 20px;
		padding-bottom: 10px;
		cursor: pointer;
	}

	.captures {
		font-size:15px;
		cursor: pointer;
	}
	.captures:hover {
		color:rgb(84,148,144);
	}

	#more {
		width: 90%;
		padding-left: 5%;
		padding-bottom: 20px;
		font-family: 'PT Sans Caption', sans-serif;
		font-size: 18px;

	}

	#header {
		text-align: center;
		line-height: 50px;
		margin-bottom: 20px;
		width: 90%;
		margin-right: 5%;
		margin-left: 5%;
		color: black;
		font-family: 'PT Sans Caption', sans-serif;


	}
	#brunch {
		background-color: orange;
		border-radius: 5px;
		/*border-top-right-radius: 5px;
		border-bottom-right-radius: 5px;*/
		cursor: pointer;
	}

	#dinner {
		background-color: #FAD7A0;
		border-radius: 5px;
		cursor: pointer;

	}


	@media(max-width: 991px){
	.meal {
		width: 30%;
		margin-left:2%;
	}
	}

	@media(max-width: 767px){
	.meal {
		width: 45%;
		margin-left:2%;
	}
	#ingredients {
		width: 100%;
		margin:0;
	}

	}


</style>

</head>
<!-- ID: 3e327f96 -->
<!-- KEY: b5e7f5bbf288c60fa2f17db649d9ded0 -->
<!-- "https://api.edamam.com/search?q=chicken&app_id=3e327f96&app_key=b5e7f5bbf288c60fa2f17db649d9ded0&from=0&to=3&calories=591-722&health=alcohol-free" -->
<body>

<div id="overlay">
	<div id="black-background"></div>
	<div id="ingredients"> </div>
</div>
<div id="page1">
	<!-- header -->
<nav class="navbar navbar-expand-lg navbar-light bg-orange">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a id="brand" class="navbar-brand" href="index.php">Rand Recipes</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="margin-zero active">
      	<?php if ( isset($_SESSION['logged_in']) && $_SESSION['logged_in'] ) : ?>
        	<a class="nav-link" href="account.php">Account <span class="sr-only">(current)</span></a>
      	<?php else : ?>
        	<a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
    	<?php endif ; ?>
      </li>
      <li class="margin-zero active">
      	<?php if ( isset($_SESSION['logged_in']) && $_SESSION['logged_in'] ) : ?>
      		<a class="nav-link" href="logout.php">Logout <span class="sr-only">(current)</span></a>

      	<?php else : ?>
        	<a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>

        <?php endif; ?>
      </li>
      <li class="margin-zero active">
        <a class="nav-link" href="search.html">Search<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

	<div id="first-page">
		<div id="not-rolling">
			<h2>Rand Recipes</h2>
		</div>
		<div id="rolling">
			<h1>I want to eat</h1>
			<img id="main-pic" src="https://www.edamam.com/web-img/e12/e12b8c5581226d7639168f41d126f2ff.jpg" />
			<h3><h2 id="identity"></h2></h3> <br />
			<button type="button" id="stop" class="btn btn-outline-primary">Find out your recipe of the day...</button>
		</div>
		<!-- several radio boxes for choosing -->
		<div id="radio">

		<div class="options">
			Allergies options:&nbsp&nbsp
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" type="checkbox" value="dairy-free">
	  			<label class="form-check-label" for="inlineCheckbox1">dairy-free</label>
			</div>
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" type="checkbox" value="egg-free">
	  			<label class="form-check-label" for="inlineCheckbox2">egg-free</label>
			</div>
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" type="checkbox" value="gluten-free">
	  			<label class="form-check-label" for="inlineCheckbox2">gluten-free</label>
			</div>

			<div class="form-check form-check-inline">
	  			<input class="form-check-input" type="checkbox" value="peanut-free">
	  			<label class="form-check-label" for="inlineCheckbox2">peanut-free	</label>
			</div>

			<div class="form-check form-check-inline">
	  			<input class="form-check-input" type="checkbox" value="sesame-free">
	  			<label class="form-check-label" for="inlineCheckbox2">sesame-free</label>
			</div>

			<div class="form-check form-check-inline">
	  			<input class="form-check-input" type="checkbox" value="wheat-free">
	  			<label class="form-check-label" for="inlineCheckbox2">wheat-free</label>
			</div>

		</div>
		<form action="*" method="GET" id="option-form">
		<div class="options">
			Health choices:&nbsp&nbsp
			<div class="form-check form-check-inline">
	  			<input class="form-check-input" type="checkbox" value="wheat-free">
	  			<label class="form-check-label" for="inlineCheckbox2">high-fiber</label>
			</div> 

			<div class="form-check form-check-inline">
	  			<input class="form-check-input" type="checkbox" value="dairy-free">
	  			<label class="form-check-label" for="inlineCheckbox1">high-protein</label>
			</div>

			<div class="form-check form-check-inline">
	  			<input class="form-check-input" type="checkbox" value="dairy-free">
	  			<label class="form-check-label" for="inlineCheckbox1">low-fat</label>
			</div>

			<div class="form-check form-check-inline">
	  			<input class="form-check-input" type="checkbox" value="dairy-free">
	  			<label class="form-check-label" for="inlineCheckbox1">low-potassium</label>
			</div>

			<div class="form-check form-check-inline">
	  			<input class="form-check-input" type="checkbox" value="dairy-free">
	  			<label class="form-check-label" for="inlineCheckbox1">vegan</label>
			</div>

			<div class="form-check form-check-inline">
	  			<input class="form-check-input" type="checkbox" value="dairy-free">
	  			<label class="form-check-label" for="inlineCheckbox1">No-oil-added</label>
			</div>
		</div>
		  <br>
		  <button class="btn btn-primary" id="option-submit" type="submit">Start random</button>
		</form>

	</div>
 	<div id="more-link">
 		<!-- https://codepen.io/anon/pen/qwpeVw -->
 		<!-- https://codepen.io/manelroig/pen/rJMVRO -->
 		<a href="#page2"><img src="arrow.png"></a>
 	</div>


</div>

<div id="page2">
 	<div id="section2">
 		<div class="container">
 			 <div id="more">More for you </div>
  			<div class="row" id="header">
	   			 <div class="col-sm" id="brunch">
	     			 Brunch
	    		</div>
			    <div class="col-sm" id="dinner">
			      Dinner
			    </div>
		  </div>

		  <div id="brunch-area">

		  </div>

		  <div id="dinner-area">

		  </div>
		</div>
	</div>
</div>

</body>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script type="text/javascript">
	let words = [];
	let pics = [];
	let recipes = [];


	let counter = 0;
	let elem = document.getElementById("identity");
	var inst = setInterval(change, 100);

	var endpoint = "https://api.edamam.com/search?q=" + "chinese+chicken" + "&app_id=3e327f96&app_key=b5e7f5bbf288c60fa2f17db649d9ded0&health=" + "alcohol-free&from=0&to=30";
	ajax(endpoint,displayResults);

	var ran = Math.ceil(Math.random()*30+1);
	var endpointBrunch = "https://api.edamam.com/search?q=brunch&app_id=3e327f96&app_key=b5e7f5bbf288c60fa2f17db649d9ded0&from="+ran+"&to="+(ran+30);
	ajax(endpointBrunch,show);
	var endpointDinner = "https://api.edamam.com/search?q=" + "fried" + "&app_id=3e327f96&app_key=b5e7f5bbf288c60fa2f17db649d9ded0&from=0&to=30";
	ajax(endpointDinner,show);


	document.querySelector("#stop").onclick = function(){
		// document.querySelector("#not-rolling").style.display = "none";
		// document.querySelector("#rolling").style.display = "block";

		clearInterval(inst);
		document.querySelector("#stop").innerHTML = "Change one"
		if (document.querySelector("#stop").innerHTML == "Change one") {
			change();
		}
		
	};

	document.querySelector("#main-pic").onclick = function(){
		document.querySelector("#overlay").style.display = "block";
	}

	document.querySelector("#overlay").onclick = function(){
		this.style.display = "none";
	}

	document.querySelector("#identity").onclick = function(){
		window.location.href= "file:///Users/rachel/Desktop/What-to-eat/search.php?input="+this.innerHTML.trim();
		// 		console.log("here");

	};

	document.querySelector("#brunch").onclick = function(){
		this.style.backgroundColor = "orange";
		document.querySelector("#dinner-area").style.display = "none";
		document.querySelector("#dinner").style.backgroundColor = "#FAD7A0";
		document.querySelector("#brunch-area").style.display = "block";

	}

	document.querySelector("#dinner").onclick = function(){
		this.style.backgroundColor = "orange";
		document.querySelector("#brunch-area").style.display = "none";
		document.querySelector("#brunch").style.backgroundColor = "#FAD7A0";
		document.querySelector("#dinner-area").style.display = "block";

	}



	document.querySelector("#option-form").onsubmit = function(){
	 // 	let searchTermInput = document.querySelector("#search-id").value.trim();

						

		document.querySelector("#not-rolling").style.display = "none";
		document.querySelector("#rolling").style.display = "block";
		document.querySelector("#radio").style.display = "none";

			return false;

	 }

	$("#brunch-area").on("click",".meal",function(){
		window.location.href = "detail.php?id="+$(this).children("img").attr("id");
	});

	$("#dinner-area").on("click",".meal",function(){
		window.location.href = "detail.php?id="+$(this).children("img").attr("id");
	});


	 function change(){
		if (pics[counter] == "undefined"){
		}
		else {
			elem.innerHTML = "   "+ words[counter];
			document.querySelector("#main-pic").src = pics[counter];
			document.querySelector("#ingredients").innerHTML = "";
			for (var i = 0; i < 10; i++){
				if (recipes[counter][i] != "undefined" && recipes[counter][i] != null && recipes[counter][i] != "null"){
					document.querySelector("#ingredients").innerHTML += recipes[counter][i] + "<br />";
					if (i == 9 && recipes[counter].length > 10){
						document.querySelector("#ingredients").innerHTML += "and more...";
					}
				}
			}
		}
  		counter++;
  		if (counter >= words.length) {
   	 	counter = 0;
  		}
	}


	 function ajax(endpoint,display){
	 	// Use AJAX to start communicating with iTunes Search API!
			let xhr = new XMLHttpRequest();
			// "opening" a new connection to talk to iTunes - 2 params: method, endpoint
			xhr.open("GET", endpoint);
			xhr.send();

			// when some kind of response is given to us, run another function
			xhr.onreadystatechange = function() {
				if(this.readyState == this.DONE) {
					// Received some kind of response
					if(xhr.status == 200) {
						// Got a succesful response
						// Convert the responsText JSON string to JS objects
						let responseObjects = JSON.parse(xhr.responseText);
						display(responseObjects);

					}
					else {
						// Got a response, but it's an error
						console.log("Error!!!");
						console.log(xhr.status);
					}
				}
			}
	 }
	
	function displayResults(results) {
			console.log(results);
			console.log(results.hits.length);
			for (let i = 0; i < results.hits.length;i++){
				words.push(results.hits[i].recipe.label);
				pics.push(results.hits[i].recipe.image);
				//console.log(results.hits[i].recipe.ingredientLines);
				recipes.push(results.hits[i].recipe.ingredientLines);
			}

	}

	function show(results){
		if (results.q == "brunch"){
			var area = 	document.querySelector("#brunch-area");
		}
		else if (results.q == "fried"){
			var area = 	document.querySelector("#dinner-area");
		}
			//var count = 0;
			for (let i = 0; i < results.hits.length;i++){

				if (results.hits[i].recipe.image == "undefined"){
				}
				else{
					let divElement = document.createElement("div");
					//divElement.classList.add("col-sm");
					divElement.classList.add("meal");
					//http://www.edamam.com/ontologies/edamam.owl#recipe_aa2f033b5d5993bcf84959bca422377b

					area.appendChild(divElement);

					let imageElement = document.createElement("img");
					if (results.hits[i].recipe.image != "undefined"){
						imageElement.src = results.hits[i].recipe.image;
						imageElement.id = results.hits[i].recipe.uri.substring(51);
						imageElement.classList.add("poster");
					}

					divElement.appendChild(imageElement);

					let captionElement = document.createElement("h5");
					captionElement.classList.add("captures");
					captionElement.innerHTML = results.hits[i].recipe.label

					divElement.appendChild(captionElement);
				}

			}

	}




</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</html>