<!DOCTYPE html>
<html>
<head>
	<title>Register now</title>
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style type="text/css">
	#register {
		width: 80%;
		margin-left: auto;
		margin-right: auto;
    padding-top: 5%;
	}
  #overlay {
    display:none;
    height:110%;
    width:100%;
    position:absolute;
    z-index:5;
  }
  #black-background {
    position:absolute;
    height:110%;
    width:100%;
    top:0;
    left:0;
    background-color: rgba(97,97,97,0.7);
    z-index:6;
  }
  #box {
    position: absolute;
    z-index: 7;
    height: 80%;
    width: 70%;
    background-color: rgb(255,255,255);
    margin-left: 15%;
    margin-right: 15%;
    margin-top: 10%;
    margin-bottom: 10%;
    text-align: center;

    padding-left: 5%;
    padding-right: 5%;
    font-family: 'PT Sans Caption', sans-serif;
  }

  #logo {
    margin-top: 5%;
    width: 100%;
    font-size: 20px;
    color: rgb(210,104,52);
  }
  #prompt {
    padding-top: 10%;
    padding-bottom: 7%;
    font-size: 35px;
  }
  p {
        color: gray;
        line-height: 0.5;
  }
  input {
    width: 80%;
    height: 50px;
    border-radius: 4px;
    align-self:center;
    padding: .375rem .75rem;
    line-height: 1.5;
    margin-bottom: 2%;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
  }
  .button {
  display: inline-block;
  border-radius: 4px;
  background-color: rgb(210,104,52);
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 5px;
  width: 20%;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.container {
  display: none;
}

</style>
</head>
<body>
  <div id="overlay"></div>
  <div id="black-background"></div>
  <div id="box"> 
    <div id="logo">RandRecipes</div>
    <div id="prompt">Log in to unlock recipes</div>
    <div id="question">


      <form id="input" name="password" action="*.php" method="GET">
        <input type="text" id="username" placeholder="username"></input>
        <input type="text" id="password" placeholder="password"></input>
        <br /><button class="button" type="submit">submit</button>
      </form>

    </div>


  </div>

<nav class="navbar navbar-expand-lg navbar-light bg-orange">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a id="brand" class="navbar-brand" href="#">RandRecipes</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="margin-zero active">
        <a class="nav-link" href="register.php">Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="margin-zero active">
        <a class="nav-link" href="login.php">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="margin-zero active">
        <a class="nav-link" href="register.html">About US <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>

  <script type="text/javascript">

    document.querySelector("#input").onsubmit = function(){
      
        /* leave for backend
        ajaxGet("register-confirm.php?username="+usernameInput,function(results){

        })
        */
        this.style.display = "none";
        document.querySelector("#prompt").innerHTML = "Succuessfully logged in!";
        return false;
    }

    function ajaxGet(endpointUrl, returnFunction){
      var xhr = new XMLHttpRequest();
      xhr.open('GET', endpointUrl, true);
      xhr.onreadystatechange = function(){
        if (xhr.readyState == XMLHttpRequest.DONE) {
          if (xhr.status == 200) {
            returnFunction( xhr.responseText );

            //convert JSON string into actual js object
            returnFunction( JSON.parse(xhr.responseText) );

          } else {
            alert('AJAX Error.');
            console.log(xhr.status);
          }
        }
      }
      xhr.send();
    };


  </script>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>