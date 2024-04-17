
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

    <title>Home | EASY BOOKING</title>

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
	    	<a class="navbar-brand"> <strong>EASY BOOKING </strong></a>

		    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
		      	<ul class="navbar-nav mr-auto">
              
              <?php 

                if (isset($_SESSION['id'])) {
                  $user_id = $_SESSION['id'];
                  echo
                      "<li class=\"nav-item active\">
                        <a class=\"nav-link active\" href=''> HOME</a>
                       </li>
                       <li class=\"nav-item active\">
                        <a class=\"nav-link active\" href=\"evntreg.php\"> EVENT REGISTRATION</a>
                       </li>
                       <li class=\"nav-item active\">
                        <a class=\"nav-link active\" href='user.php?u_id=$user_id'> USER PROFILE</a>
                       </li>";
                }

              ?>

		        </ul>

            <?php

              navbar_login();
              logout();

            ?>

		    </div>
		
    </nav>

  
    <div class="jumbotron" id="back">
      <div class="container">
        <h1 class="display-3 animated fadeInDown">#EASY BOOKING!!!!</h1>
        <h1 class="display-5 animated fadeInDown"></h1>
        <h1 class="display-5 animated fadeInDown">SRM University AP</h1>
       
        <p><h2>Magnum Opus 2023 </h2> Where Creativity Ascends to its Masterpiece. An Extravaganza of Talent, Innovation, and Limitless Possibilities, Celebrating the Fusion of Arts, Technology, and Culture."</p>
       
      </div>
    </div>

    <div class="container">
      <hr>
      
      <div class="row">
		<div class="col-sm-12">
			<h2 align="center" class="animated fadeIn">Oh Yeah! You heard it right...</h2><br>
		</div>      	
      </div>
      <center>
      <div class="row">
        	<div class="col-lg-4 col-xs-6">
                <div class="thumbnail">
                    <img src="images/treasure hunt.png" height="200" width="200" style="margin-top: 20px; margin-bottom: 7%;" class="animated fadeIn">
                    <a href="evntreg.php" <h3 style="font-size: 23px; margin-top: 10px;" class="animated fadeIn"><strong><br>TREASURE HUNT</strong></h3></a>
                    <p style="font-size: 18px;" class="animated fadeIn">"Uncover the Untold: Dive into a Thrilling Treasure Hunt and Unleash the Adventure of a Lifetime!"</p>
                    <span>Date and Time :20-05-2023 10-12PM</span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail img-responsive">
                    <img src="images/standup comedy.png" height="200" width="200" style="margin-top: 20px; margin-bottom: 7%;" class="animated fadeIn">
                    <a href="evntreg.php"<h3 style="font-size: 23px; margin-top: 10px;" class="animated fadeIn"><strong><br>STAND UP COMEDY</strong></h3></a>
                    <p style="font-size: 18px;" class="animated fadeIn">"Laughs Unleashed: Get Ready to ROFL with the Hilarious Standup Comedy Show that Guarantees Non-stop Laughter!" </p>
                    <span>Date and Time :20-05-2023 5-6PM </span>
                </div>
            </div>    
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail">
                    <img src="images/music band.png" height="200" width="200" style="margin-top: 20px; margin-bottom: 7%;" class="animated fadeIn">
                    <a href="evntreg.php"<h3 style="font-size: 23px; margin-top: 10px;" class="animated fadeIn"><strong><br>MUSIC BAND</strong></h3></a>
                    <p style="font-size: 18px;" class="animated fadeIn">"Unleash the Beat: Witness the Phenomenal Music Band that will Rock Your World and Ignite Your Senses!"</p>
                    <span>Date and Time :20-05-2023 6-9PM</span>

                </div>
            </div>

            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail img-responsive">
                    <img src="images/Hackathon.png" height="200" width="200" style="margin-top: 20px; margin-bottom: 7%;" class="animated fadeIn">
                    <a href="evntreg.php"<h3 style="font-size: 23px; margin-top: 10px;" class="animated fadeIn"><strong><br>HACKATHON<br></strong></h3></a>
                    <p style="font-size: 18px;" class="animated fadeIn">"Code, Innovate, Conquer: Join the Ultimate Hackathon Challenge and Unleash Your Skills to Create Technological Marvels!" </p>
                    <span>Date and Time :21-05-2023 10-12PM </span>
                </div>
            </div> 
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail img-responsive">
                    <img src="images/dance and music 0.png" height="200" width="200" style="margin-top: 20px; margin-bottom: 7%;" class="animated fadeIn">
                    <a href="evntreg.php"<h3 style="font-size: 23px; margin-top: 10px;" class="animated fadeIn"><strong><br>DANCE AND MUSIC COMPETATION</strong></h3></a>
                    <p style="font-size: 18px;" class="animated fadeIn">"Dance to the Rhythm: Witness the Electrifying Fusion of Dance and Music as Talented Performers Battle for Supremacy!" </p>
                    <span>Date and Time :21-05-2023 2-5PM </span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="thumbnail img-responsive">
                    <img src="images/Haunted house.png" height="200" width="200" style="margin-top: 20px; margin-bottom: 7%;" class="animated fadeIn">
                    <a href="evntreg.php"<h3 style="font-size: 23px; margin-top: 10px;" class="animated fadeIn"><strong><br>HAUNTED HOUSE</strong></h3></a>
                    <p style="font-size: 18px;" class="animated fadeIn">"Enter the Abyss: Brace Yourself for a Bone-Chilling Haunted House Experience that Will Haunt Your Dreams Forever!" </p>
                    <span>Date and Time :21-05-2023 5-8PM </span>
                </div>
            </div>
                         
                      
        </div>
        </center>
      <hr>
      <br>
    </div> 

    
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </body>
</html>
