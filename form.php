<?php


// invoke autoload to get access to the propel generated models
require_once 'vendor/autoload.php';

// require the config file that propel init created with your db connection information
require_once 'generated-conf/config.php';

// now this script can access the database through the propel models!

// retreive a person by id and print their name
// note that the getters were generated based on the db col names first_name and last_name


?>


<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Pact</title>
    <!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS & JQuery -->
    	<link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    	<script src="/Pact/js/jquery-3.2.1.js"></script>

	<!-- Required for FlexSlider -->
		<link rel="stylesheet" href="/Pact/css/flexslider.css" type="text/css">
		<script src="/Pact/js/jquery.flexslider.js"></script>

		<script type="text/javascript" charset="utf-8">
		  $( document ).ready(function() {
			  $('.flexslider').flexslider({
			    animation: "fade"   
			  });
			});
		</script>

	<!-- icon library -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- MY CSS -->
		<link rel="stylesheet" type="text/css" href="/Pact/css/header.css">
		<link rel="stylesheet" type="text/css" href="/Pact/css/footer.css">
		<link rel="stylesheet" type="text/css" href="/Pact/css/content-about.css">


  </head>
  <body>
	<div id="nav-container" class="container nopadding">
	<!-- START: NAVIGATION BAR -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">

		  <a href="#">
  			<img src="/Pact/img/logo.png" alt="pact_logo" id="mylogo"></a>

		  <button class="navbar-toggler untoggled" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarColor03">
		    <ul class="navbar-nav mr-auto">
		    	 <li class="nav-item ">
		        <a class="nav-link" href="/Pact/views/home.php">Home</a>
		      </li>
		      <li class="nav-item active">
		        <a class="nav-link" href="/Pact/views/form.php">Form</a>
		      </li>
		    </ul>
		    
		  </div>

		</nav>
		<div class="bottom-border"> </div>
	<!-- END: NAVIGATION BAR -->
	</div>   			
		
		<form method="POST" action="Manage.php">

		    <div class="container" id="info">
					<div class="page-header">
						<div class="titles">
			     			<h4> First Name </h4>
			    		<div class="form-group">
		      				<label for="examplefname"></label>
		     				 <input  type="text" name="add_fname" class="form-control" id="examplefname" aria-describedby="fnameHelp" placeholder="Enter First Name">
		      				<small id="fnameHelp" class="form-text text-muted">PROVIDE FIRST NAME.</small>
		    			</div>

			            </div>
					</div>
					<div class="entry" id="entry1"></div>	
			</div>

			 <div class="container" id="info">
			<div class="page-header">
				<div class="titles">
	     			<h4> Last Name </h4>
	    		<div class="form-group">
      				<label for="examplelname"></label>
     				 <input  type="text" name="add_lname"  class="form-control" id="examplelname" aria-describedby="lnameHelp" placeholder="Enter Last Name">
      				<small id="emailHelp" class="form-text text-muted">PROVIDE LAST NAME.</small>
    			</div>

	            </div>
			</div>
			<div class="entry" id="entry1"></div>	
			</div>

			<div class="container" id="info">
			<div class="page-header">
				<div class="titles">
	     			<h4> URL </h4>
	    		<div class="form-group">
      				<label for=""></label>
     				 <input  type="text" name="add_url"  class="form-control" id="" aria-describedby="" placeholder="Enter Photo URL">
      				<small id="" class="form-text text-muted">PROVIDE PHOTO URL</small>
    			</div>

	            </div>
			</div>
			<div class="entry" id="entry1"></div>	
			</div>

			 <button type="submit" class="btn btn-primary" style="display:block;margin-left: auto; margin-right: auto; margin-bottom: 20px;"
				}>Submit</button>

</form>	
	<!-- END: Home Content -->
	
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

  <div class="container">
	  <footer id="footer">
	  	<div class="icons">
			<a href="#" class="fa fa-facebook"></a>
			<a href="#" class="fa fa-twitter"></a>
			<a href="#" class="fa fa-youtube"></a>
			<a href="#" class="fa fa-instagram"></a>
		</div>

		<div id="page-footer" class="clearfix">	
			<p>
			COPYRIGHT &copy; 2018 PACT <br />
			Site by <a href="http://www.google.com" target="_blank" id="myname">Fernando Torres</a>	
			</p>
	    </div>
	  </footer>
   </div>
  </body>
</html>
