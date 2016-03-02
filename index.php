<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>What's the Weather?</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

    	html, body{
    		height: 100%;
    	}

    	.container{
    		background-image:url("snow.jpg");
    		width: 100%;
    		height: 100%;
    		background-size: cover;
    		background-position: center;
    	}

    	#title{
    		font-size: 60px;
    		text-align: center;
    		color: white;
    		padding-top: 20%;
    	}

    	.lead{
    		color: white;
    		text-align: center;
    	}

    	#f{
    		margin-bottom: 10px;
    	}

    	#weatherBox{
    		display: none;
    	}


    </style>

  </head>
  <body>

 	<div class = "container">
 		<div class = "row">
 			<div class = "col-md-6 col-md-offset-3">
 				<h1 id = "title">What's the Weather?</h1>
 				<p class = "lead">Enter a city and I'll forecast the weather for you!</p>
 				<div class = "input-group" id = "f">
 					<input type = "text" class = "form-control" name = "city" id = "city" placeholder="Eg. Ferrara, Ann Arbor, San Francisco">
 					<span class = "input-group-btn">
 						<button class = "btn btn-success" id = "wb">Get My Forecast!</button>
 					</span>
 				</div>
 				<div class = "alert alert-success" id = "weatherBox">No weather data found</div>
 			</div>
 		</div>
 	</div


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script>
    	
    	$("#wb").click(function(event){

    		event.preventDefault();

    		if($("#city").val() == ""){
    			alert("Please enter a city");
    		}
    		else{
    			$.get("scraper.php?city="+$("#city").val(), function(data){
    				if (data == ""){
    					$(".alert").html("No weather data found").fadeIn();
    				}
    				else{
    					$(".alert").html(data).fadeIn();
    				}
    			});
    		}
    	});

    </script>
  </body>
</html>