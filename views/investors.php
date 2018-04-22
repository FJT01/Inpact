<?php


// invoke autoload to get access to the propel generated models
require_once '../vendor/autoload.php';

// require the config file that propel init created with your db connection information
require_once '../generated-conf/config.php';

// now this script can access the database through the propel models!

// retreive a person by id and print their name
// note that the getters were generated based on the db col names first_name and last_name

$investors = InvestorsQuery::create()->find();

?>


<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Pact (Or a better title)</title>
    <!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS & JQuery -->
    	<link rel="stylesheet" href="https://bootswatch.com/4/lux/bootstrap.min.css">
    	<script src="/Pact/js/jquery-3.2.1.js"></script>
    	<script src="/Pact/js/toggle.js"></script>

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
		<link rel="stylesheet" type="text/css" href="/Pact/css/content-investors.css">

  </head>
  <body>
	<div id="nav-container sticky" class="container nopadding">
	<!-- START: NAVIGATION BAR -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  

		  <a href="#">
  			<img src="/Pact/img/logo.png" alt="UVAL_logo" id="mylogo"></a>

		  <button class="navbar-toggler untoggled" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarColor03">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="/Pact/views/home.php">Home</span></a>
		      </li>
		      <li class="nav-item">
				<a class="nav-link " href="/Pact/views/communities.php">Communities</a>
			  </li>
		     <li class="nav-item">
				<a class="nav-link active" href="/Pact/views/investors.php">Investors</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="/Pact/views/projects.php">Projects</a>
			  </li>		  
			 
			  <li class="nav-item">
				<a class="nav-link" href="/Pact/views/about.php">About</a>
			  </li>
		    </ul>
		    
		  </div>

		</nav>
		<div class="bottom-border"> </div>
	<!-- END: NAVIGATION BAR -->
	</div>


	<!-- START: CONTENT -->
	<div class="container">
		<div class="content">
			<section class="investors-out">
				<!-- INVESTORS -->
				<div class="investors-in">
					<div id="investors-grid" class="grid-container custom-grid-container custom-grid">
						<div class="container">
							<header class="section-header divider custom-grid">
								<h4>Investors</h4>
							</header>
						</div>
						<!-- ENTRIES-->
						<div class="grid">
						  
						  <div class="entry">
						    <div class="box"><a href='#'>
                                    <div class="photo">
                                         <img alt='Warren' src='/Pact/img/investors/1.jpg' class="image">
                                    </div>
                        			<div class="titles">
               							 <div class="title">Warren Buffet</div>
                                    </div>
                                </a>
                            </div>
						  </div>
						  
						  <div class="entry">
						    <div class="box">
						    	<a href='#'>
                                    <div class="photo">
                                         <img alt='Warren' src='/Pact/img/investors/1.jpg' class="image">
                                    </div>
                        			<div class="titles">
               							 <div class="title">Warren Buffet</div>
                                    </div>
                                </a>
                            </div>
						  </div>

						  <div class="entry">
						    <div class="box">
						    	<a href='#'>
                                    <div class="photo">
                                         <img alt='Warren' src='/Pact/img/investors/1.jpg' class="image">
                                    </div>
                        			<div class="titles">
               							 <div class="title">Warren Buffet</div>
                                    </div>
                                </a>
                            </div>
						  </div>

						  <div class="entry">
						    <div class="box">
						    	<a href='#'>
                                    <div class="photo">
                                         <img alt='Warren' src='/Pact/img/investors/1.jpg' class="image">
                                    </div>
                        			<div class="titles">
               							 <div class="title">Warren Buffet</div>
                                    </div>
                                </a>
                            </div>
						  </div>

						  <<div class="entry">
						    <div class="box">
						    	<a href='#'>
                                    <div class="photo">
                                         <img alt='Warren' src='/Pact/img/investors/1.jpg' class="image">
                                    </div>
                        			<div class="titles">
               							 <div class="title">Warren Buffet</div>
                                    </div>
                                </a>
                            </div>
						  </div>

						  <div class="entry">
						    <div class="box">
						    	<a href='#'>
                                    <div class="photo">
                                         <img alt='Warren' src='/Pact/img/investors/1.jpg' class="image">
                                    </div>
                        			<div class="titles">
               							 <div class="title">Warren Buffet</div>
                                    </div>
                                </a>
                            </div>
						  </div>

						  <div class="entry">
						    <div class="box">
						    	<a href='#'>
                                    <div class="photo">
                                         <img alt='Warren' src='/Pact/img/investors/1.jpg' class="image">
                                    </div>
                        			<div class="titles">
               							 <div class="title">Warren Buffet</div>
                                    </div>
                                </a>
                            </div>
						  </div>

						  <div class="entry" style="display: none;">
						    <div class="box"> </div>
						  </div>

						 

	    <?php  //Generating Rows Based On Recipes	
			foreach( $investors as $investor ){

				 $myId = $investor->getid();
				 $mySrc = $investor->geturl();       
				 $myfname = $investor->getfname();
	             $mylname = $investor->getlname();
				
	    ?>

		 <div class="entry">
						    <div class="box">
						    	<a href='#'>
                                    <div class="photo">
                                         <img alt='Warren' src=<?= $mySrc ?> class="image">
                                    </div>
                        			<div class="titles">
               							 <div class="title"><?= $myfname ?> <?= $mylname ?></div>
                                    </div>
                                </a>
                            </div>
							  </div>
					<?php
					 }
					?>

					  
						</div>

							<!-- BEGIN: First Entry, Invisible, Used For Cloning-->
							<div class='entry' style="display: none;">
                                <a href='#'>
                                    <div class="placeholder">
                                    	<div class="image">
                                            <img alt='Warren Buffet' src='/Pact/img/investors/1.jpg' class="rollover-image-out">
                                        </div>
                                    </div>
                        			<span class="titles">
               							 <div class="title">Warren Buffet</div>
                           				 <span class="subtitle">Berkshire</span>
                                         <span class="date">956 E 11th ST | SINCE DEC 8, 2012</span>
                                    </span>
                                </a>        
                            </div>
                            <!-- END: First Entry, Invisible, Used For Cloning-->
                 	 </div> 
                 </div>   
			</section>


							<div class="entry" style="display: none;">
						    <div class="box"></div>
						  </div>

						  <div class="past">
						  	<a href='/Pact/form.php' class="past">
						  		<button type="button" class="btn btn-primary past-button">ADD INVESTOR</button>
						  	</a> 
						  </div>

		</div>
			<!-- Experimental Grid, invisible -->
			<div style="display:none";>
				<div style="width: 100%;">
					 <div style="float: left; width: 10%; border-style:solid; border-color: red;"> 
					 	<img alt='Warren Buffet' src='/Pact/img/investors/1.jpg' class="image">
					 	WARREN
					 </div>

					 <div style="float: left; width: 10%;border-style:solid; border-color: red;">Middle Stuff</div>
					 <div style="float: left; width: 10%;border-style:solid; border-color: red;">Right Stuff</div>
					 <br style="clear: left;" />
				</div>
			</div>
		
	</div>			

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" ></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  </body>

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
</html>