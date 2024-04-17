
<?php include("includes/db.php"); ?>
<?php include("includes/functions.php"); ?>

<?php session_start(); ?>

<?php 
  
  $query = "SELECT * FROM regusers ORDER BY id DESC LIMIT 1";
  $show_user_data = mysqli_query($connection, $query);

  if (!$show_user_data) {
    die("Query Failed!" . mysqli_error($connection));
  }
  else {
    while ($row = mysqli_fetch_assoc($show_user_data)) {
      $id = $row['id'];
      $name = $row['name'];
      $email1  = $row['email'];
      $clgname = $row['clgname'];
      $phn = $row['phn'];
      $roll = $row['roll'];
      $evnt = $row['evnt'];
    }
  }

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/images.png">

    <title>Ticket | Magnum Opus 2023</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

	
    <link href="https://fonts.googleapis.com/css?family=Roboto|Ubuntu:400,700" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    
    <link href="css/animate.css" rel="stylesheet">

    
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-toggleable-md navbar-light fixed-top bg-faded">
    	
		    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		    </button>
	    	<a class="navbar-brand"><span><img src="images/images.png" height="30" width="33"></span>&nbsp; <strong> Magnum Opus 2023 </strong></a>

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
                  else {
                    while ($row = mysqli_fetch_assoc($show_user_data)) {
                     
                      
                    }
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

    <div class="container">

      <br>
      <hr id="padtopuser">
      <br>
      <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-10 animated flipInX">
          <div class="container">
            <div class="card">
              <h5 class="card-header" style="background-color: #858585; color: white;">
                <center><strong>TICKET</strong></center>
              </h5>
              <div class="card-block" style="background-color: #f0f0f0;">
                <h4 class="card-title"><i class="fa fa-id-card-o" aria-hidden="true"></i> &nbsp;<b> Magnum Opus 2023</b></h4>
                <hr>
                <div class="row">
                  

                  <div class="col-lg-6">
                    To
                    <address>
                      <address>
                       
                        
                        <strong><?php echo $email1; ?></strong><br>
                        <strong><?php echo $clgname; ?></strong><br>
                        <strong><?php echo $phn; ?></strong><br>
                        <strong></strong><br>
                        
                        
                      </address>
                    </address>
                    
                  </div>
                
                  <div class="col-lg-6">

                    <div class="table-responsive">
                      <table class="table table-striped table-hover">
                        <thead>
                          <th>Ticket id</th>
                          <th>Name</th>
                          

                          <th>Event</th>
                          <th>Roll Number </th>
                        </thead>
                        <tbody>
                          <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $name; ?></td>
                            <td><?php echo $evnt; ?></td>
                            <td><b><?php echo $roll; ?></b></td>
                          </tr>
                        </tbody>
                      </table>
                      <br>
                    </div>

                  </div>

                </div>
                <hr>

                <p class="" style="font-size: 14px;">Thank you for registering for the event and please take the screenshot for ticket and note the ticket id.</p>

                <hr>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-1"></div>
      </div>
      <br>
    <hr>
      <footer class="">
        <p><span><img src="images/images.png" height="22" width="25"></span>&nbsp; <strong>Magnum Opus 2023</strong> | SRM University AP</p>
      </footer>
    </div>


   
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>
