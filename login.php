
<?php include("includes/db.php"); ?>
<?php include("includes/functions.php"); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/images.png">

    <title>Login | EASY BOOKING</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

	
    <link href="https://fonts.googleapis.com/css?family=Roboto|Ubuntu:400,700" rel="stylesheet">

   
    <link href="css/animate.css" rel="stylesheet">

    
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-faded">
    	
		    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		    </button>
	    	<a class="navbar-brand"><span><img src="images/images.png" height="30" width="33"></span>&nbsp; <strong> Magnum Opus 2023</strong></a>

		    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
		      	<ul class="navbar-nav mr-auto">
		        	<li class="nav-item active">
		            	<a class="nav-link active" href="index.php"> HOME</a>
		          	</li>
		          	
		        </ul>
		        <form class="form-inline my-2 my-lg-0">
             <ul class="navbar-nav mr-auto">
               <li class="nav-item">
                  <a class="btn btn-outline-primary" href="register.php" role="button"><strong>REGISTER</strong></a>
               </li>
             </ul>
		        </form>
		    </div>
		
    </nav>

    <div class="container animated fadeIn">
    	<section id="padtop">
    	<hr><br>
    	<center>
	    	<div class="card">
	  			<h3 class="card-header">Login Here...</h3>
	  			<div class="card-block">
	    			<h6 class="card-title">Enter your username and password.</h6>
	    			<hr>

	    			<?php login(); ?>

	    			<form action="" method="post">
		              <div class="form-group">
		                <label for="name">USERNAME:</label>
		                <input type="text" pattern="[a-zA-Z][a-zA-Z ]{2,}" title="Enter your registered username" class="form-control" id="name" placeholder="Enter your username" required="true" name="username">
		              </div>
		              <div class="form-group">
		                <label for="password">PASSWORD:</label>
		                <input type="password" class="form-control" id="password" placeholder="Enter your password" required="true" name="password">
		              </div>
		              
		              <button type="submit" class="btn btn-primary" id="registerSubmit" name="login">LOGIN</button>
		            </form>
	  			</div>
			</div>
		</center>
		</section>
		<br>
   		<section id="footer">
	  		<hr>
	  		<marquee><p class="" style="font-size: 14px;">SRM University AP Amaravthi  Magnum Opus 2023</p></marquee>
	  	</section>
    </div> 
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </body>
</html>