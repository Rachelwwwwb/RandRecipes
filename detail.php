
<!-- https://api.edamam.com/search?app_id=3e327f96&app_key=b5e7f5bbf288c60fa2f17db649d9ded0&r=http%3A%2F%2Fwww.edamam.com%2Fontologies%2Fedamam.owl%23recipe_aa2f033b5d5993bcf84959bca422377b -->
<?php

?>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
	$.ajax({
			method:"GET",
			url:"https://api.edamam.com/search?app_id=3e327f96&app_key=b5e7f5bbf288c60fa2f17db649d9ded0&r=http%3A%2F%2Fwww.edamam.com%2Fontologies%2Fedamam.owl%23recipe_"+"<?php echo $_GET["id"] ?>"
			}).done(function(results){
				console.log(results);
				$("#name").html(results[0].label);
				$("#name-backup").html(results[0].label);
				$("#food-pic").attr("src",results[0].image);
				$("#food-pic").attr("alt",results[0].label);
				$("#numGredient").html(results[0].ingredients.length);
				if (results[0].totalTime != "0"){
					$("#timeSpent").html(results[0].totalTime);
				}
				else{
					$("#timeSpent").html("N/A");
				}
				var fatNum = results[0].calories.toFixed(0);
				$("#fat").html(fatNum);
				for (let i = 0; i < results[0].ingredients.length;i++){
					$("#ingredients").append("<h5>"+results[0].ingredients[i].text+"</h5>");
					$("#ingredients").append("<h6 style='color:gray;'>&nbsp&nbsp&nbsp"+results[0].ingredients[i].weight.toFixed(2)+" gram </h6><br />");

				}
				
				$("#Nutrition").append("<h5>Fat</h5><h6 style='color:gray;'>"+results[0].digest[0].daily+"&nbsp&nbsp"+results[0].digest[0].unit+"</h6>");

				$("#Nutrition").append("<h5>Sodium</h5><h6 style='color:gray;'>"+results[0].digest[4].daily+"&nbsp&nbsp"+results[0].digest[4].unit+"</h6>");

				$("#Nutrition").append("<h5>Fat</h5><h6 style='color:gray;'>"+results[0].digest[0].daily+"&nbsp&nbsp"+results[0].digest[0].unit+"</h6>");
				
				$("#Nutrition").append("<h5>Vitamin C</h5><h6 style='color:gray;'>"+results[0].digest[12].daily+"&nbsp&nbsp"+results[0].digest[12].unit+"</h6>");

				

				for (let i = 0; i < results[0].healthLabels.length;i++){
					$("#tags").append("<button style='width:20%; margin-left:3%; border-radius:20px;pointer:cursor;background-color: rgba(195,217,216,0.5);color:rgb(74,133,129);border-color:rgb(74,133,129);line-height:40px;' > "+results[0].healthLabels[i]+"</button>");
				}
					
				
			}).fail(function(results){
				console.log("errors");
			});
	
	$ .urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return results[1] || 0;
	}

</script>

<!DOCTYPE html>
<html>
<style type="text/css">
	#header {
		padding-top: 5%;
		padding-left: 10%;
		width: 45%;
		float: left;

	}
	#food-pic {
		padding-top: 5%;
		width: 35%;
		padding-left: 5%;
		display: inline;
	}
	.num {
		font-size: 30px;
/*		line-height: 0.5px;
*/	}
	.summary-item {
		font-size: 14px;
	}
	.one-summary{
		float: left;
		border-right-style: solid;
		width: 20%;
		margin-left: 2%;
		border-right-width: 1px;
		border-right-color: gray;
		color: gray;

	}
	#last-summary{
		float: left;
		width: 20%;
		margin-left: 2%;
		color: gray;
	}

	#main-text {
		clear: both;
	}
	#like {
		clear: both;
		float: left;
		padding-top: 5px;
	}
	.fa {
  		cursor: pointer;
  		user-select: none;
  		color: black;
	}

	.toOrange {
		color: orange;
	}

	#main-text {
		width: 80%;
		margin-left: auto;
		margin-right: auto;
	}

	#ingredients h3{
		padding-bottom: 5px;
	}

	#addComment {
		width: 80%;
		height: 70px;
		padding-left: 10px;
		margin-bottom: 10px;
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

	@media(max-width: 991px){
		#brand {
			display: none;
		}
		.one-summary{
			width: 30%;
		}
		#last-summary{
		float: left;
		width: 30%;
		margin-left: 2%;
		color: gray;
		}
	}

	@media(max-width: 767px){
		#brand {
			display: none;
		}
		.one-summary{
			width: 30%;
		}
		#last-summary{
			float: left;
			width: 30%;
			margin-left: 2%;
			color: gray;
		}
		#header {
			width: 100%;
		}
		#food-pic {
			width: 60%;
			margin-left:20%;
			margin-right: 20%; 
		}
	}


</style>
<head>
	<title>Detail</title>
	<meta name="viewport" content="width=device-width, internal-scale=1">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=ZCOOL+KuaiLe |Josefin+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="common.css">

</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-orange">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a id="brand" class="navbar-brand" href="home.html">Rand Recipes</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="margin-zero active">
        <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="margin-zero active">
        <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="margin-zero active">
        <a class="nav-link" href="register.html">Search <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
		<div id="header">
			<h1 id="name" style="padding-bottom:50px; padding-top:50px;">Test</h1>
			<div id="property" >
			<div id="summary">
				<div class="one-summary">
					<p id="numGredient" class="num">16</p>
					<p class="summary-item">Ingredients</p>
				</div>
				<div class="one-summary">
					<p class="num" id="timeSpent">16</p>
					<p class="summary-item">Minutes</p>
				</div>
				<div id="last-summary">
					<p class="num" id="fat">16</p>
					<p class="summary-item">Calories</p>
				</div>
			</div>
			</div>
			<div id="like">
				<p style="display: inline;">Add to my favourite &nbsp&nbsp&nbsp</p>
				<i style="display: inline;" onclick="myFunction(this)" class="fa fa-star"></i>
			</div>

		</div>
		</div>

		<div id="mainpic">
			<img id="food-pic" src="image/main.jpg">
		</div>
	<div class="info">

		
		<div id="main-text">
			<hr>

			<div id="ingredients">
				<h3> Ingredients </h3>

			</div>
			<hr>
			<div id="Nutrition">
				<h3> Nutrients </h3>
			</div>
			<hr>
			<div id="tags">
				<h3> Health Tags</h3>
			</div>
			<hr>
			<div id="comment">
				<h3> Comment</h3>
				<p>Trojan: The recipe is too hard to follow.</p>
				<p>Yo: Added homemade whipped cream on top to make it better!</p>
				<p>Joann: it's a winner!! will be making it for Easter</p>
				<form method="GET" action="comment.php">
					<input type="text" id="addComment">
					<br />
					<input type="submit" placeholder="submit">
				</form>
			</div>

		</div>
	</div>



</body>
<script>
function myFunction(x) {
  x.classList.toggle("toOrange");
}
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</html>