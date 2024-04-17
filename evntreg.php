
<?php include("includes/db.php"); ?>
<?php include("includes/functions.php"); ?>
<?php ob_start(); ?>
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/images.png">

    <title>Book Ticket | EASY BOOKING</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>


    <link href="https://fonts.googleapis.com/css?family=Roboto|Ubuntu:400,700" rel="stylesheet">

   
    <link href="css/animate.css" rel="stylesheet">

    
    <link href="css/custom.css" rel="stylesheet">

    <style type="text/css">
      
      #map {
        height: 100%;
      }
      
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #origin-input,
      #destination-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 200px;
        height: 40px;
      }

      #origin-input:focus,
      #destination-input:focus {
        border-color: #4d90fe;
      }

      #mode-selector {
        color: #fff;
        background-color: #4d90fe;
        margin-left: 12px;
        padding: 5px 11px 0px 11px;
      }

      #mode-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }


    </style>

  </head>

  <body class="animated fadeIn">

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
                  $query = "SELECT * FROM users WHERE id = $user_id";
                  $show_user_data = mysqli_query($connection, $query);

                  if (!$show_user_data) {
                    die("Query Failed!" . mysqli_error($connection));
                  }
                  
                  
                  
                  echo
                      "<li class=\"nav-item active\">
                        <a class=\"nav-link active\" href='index.php'> HOME</a>
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

                if (isset($_SESSION['id'])) {
                  echo
                       '<div class="form-inline my-2 my-lg-0 text-uppercase">
                         <strong>Hello &nbsp;' . $_SESSION['username'] . ' ! &nbsp; &nbsp;</strong>
                        </div>
                        <form class="form-inline my-2 my-lg-0" action="" method="post">
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                              <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" name="logout" style="cursor: pointer;"><strong>LOGOUT</strong></button>
                            </li>
                          </ul>
                        </form>';
                }

                logout();

              ?>
            
		    </div>
		
    </nav>

    <br id="padtopuser">

    <div class="container animated fadeIn">
      <section id="padtop">
      <center>
        <div class="card">
          <h3 class="card-header">Register For Events Here ...</h3>
          <div class="card-block">
            <h6 class="card-title">Fill out the registration form.</h6>
            <hr>

            <?php 

              if (isset($_POST['registerforevnt'])) {

                $name     =  mysqli_real_escape_string($connection, $_POST['name']);
                $email    =  mysqli_real_escape_string($connection, $_POST['email']);
                $clgname  =  mysqli_real_escape_string($connection, $_POST['clgname']);
                $phn      =  mysqli_real_escape_string($connection, $_POST['phn']);
                $roll     =  mysqli_real_escape_string($connection, $_POST['roll']);
                $evnt     =  mysqli_real_escape_string($connection, $_POST['evnt']);
               

                
                insert_data_forevnt($name, $email, $clgname,$phn,$roll,$evnt);

              }

            ?>
            
            <form method="post" action="">
              <div class="form-group">
                <label for="name">NAME:</label>
                <input type="text" class="form-control" id="name" pattern="[a-zA-Z][a-zA-Z ]{2,}" title="Only letters allowed" placeholder="Enter your name" name="name" required="true">
              </div>
              <div class="form-group">
                <label for="emailaddress">EMAIL ADDRESS:</label>
                <input type="email" class="form-control" id="emailaddress" placeholder="Enter your email" name="email" required="true">
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
               <div class="form-group">
                <label for="clgname">COLLEGE NAME:</label>
                <input type="text" class="form-control" id="clgname"   placeholder="Enter your college name" name="clgname" required="true">
              </div>
               <div class="form-group">
                <label for="phn">PHONE NUMBER:</label>
                <input type="text" class="form-control" id="phn"  placeholder="Enter your phone number" name="phn" required="true">
              </div>
               <div class="form-group">
                <label for="roll">ROLL NUMBER:</label>
                <input type="text" class="form-control" id="roll"   placeholder="Enter your roll number" name="roll" required="true">
              </div>
              
              <div class="form-check">
                <label class="checkbox">
                <input type="checkbox" class="checkbox" required="true"> &nbsp;I accept all the Terms &amp; Conditions.</label>
              </div>
              <button type="submit" class="btn btn-primary" id="registerSubmit" name="registerforevnt">REGISTER</button>
            </form>
            <?php

                  if (isset($_POST['registerforevnt'])) {

                    header("Location: ticket.php");
                    

                    
                    
                    
                    


                  }

                ?>
          </div>
        </div>
      </center>
      </section>

      <section id="footer">
      <hr>
        <marquee><p class="" style="font-size: 14px;">SRM University AP Amaravthi Magnum Opus 2023</p></marquee>
      </section>
    </div> 
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

   

  </body>
</html>
