
<?php include('includes/db.php'); ?>
<?php include('includes/functions.php'); ?>

<?php 

  if (isset($_GET['u_id'])) {
    $u_id = $_GET['u_id'];
  }

  $query = "SELECT * FROM users WHERE id = $u_id";
  $show_user_data = mysqli_query($connection, $query);

  if (!$show_user_data) {
    die("Query Failed!" . mysqli_error($connection));
  }
  else {
    while ($row = mysqli_fetch_assoc($show_user_data)) {
      $name     =   $row['name'];
      $email    =   $row['email'];
      
    }
  }

?>

<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/images.png">

    <title>User Profile | EASY BOOKING</title>

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
		        	<li class="nav-item active">
		            	<a class="nav-link active" href="index.php"> HOME</a>
		          	</li>
		          	
                <li class="nav-item active">
                  <a class="nav-link active" href="evntreg.php"> EVENT REGISTRATION</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link active"> USER PROFILE</a>
                </li>
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

    <div class="container">
    <div class="row">
      <div class="col-lg animated pulse">
        <div class="container" id="padtopuser">
          <div class="card">
            <h5 class="card-header" align="center"><strong>USER PROFILE</strong></h5>
            <div class="card-block">

              <div class="row">
                <div class="col-lg-12">

                  
                  <form action="" method="post">
                    <div class="form-group">
                      <label for="name">NAME:</label>
                      <input type="text" class="form-control" value="<?php echo $name; ?>" id="name" disabled>
                    </div>
                    <div class="form-group">
                      <label for="emailaddress">EMAIL ADDRESS:</label>
                      <input type="email" class="form-control" value="<?php echo $email; ?>" id="emailaddress" disabled>
                      <small class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                   
      

        </div>
      </div>
    </div>
    <hr>
      <footer>
        <p class=""><span><img src="images/images.png" height="22" width="25"></span>&nbsp; <strong>SRM University AP </strong> | Magnum Opus 2023</p>
      </footer>
    </div>


    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  </body>
</html>
