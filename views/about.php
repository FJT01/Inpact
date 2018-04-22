<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Patc</title>
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
		      <li class="nav-item">
				<a class="nav-link" href="/Pact/views/communities.php">Communities</a>
			  </li>
		     <li class="nav-item">
				<a class="nav-link" href="/Pact/views/investors.php">Investors</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="/Pact/views/projects.php">Projects</a>
			  </li>		  
			  <li class="nav-item">
				<a class="nav-link active" href="/Pact/views/about.php">About</a>
			  </li>
		    </ul>
		    
		  </div>

		</nav>
		<div class="bottom-border"> </div>
	<!-- END: NAVIGATION BAR -->
	</div>   			

    <div class="container" id="info">
			<div class="page-header">
				<div class="titles">
	     			<h4> LOCATION </h4>	        
	            </div>
			</div>

			<div class="entry" id="entry1">
				<div class="info" style="color: #222";>
					<div  id="info1">
						<div class="date" id="address">Some City Development Center</div>
						<div class="date" id="address">956 E 11th ST MISSION TX 78572</div>
				    </div>					
				</div>

				<div class="map"  onClick="style.pointerEvents='none'">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.5319332599033!2d-98.31359918496982!3d26.21190038343448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8665a877a88ef595%3A0x25433dee2ebf53d7!2s801+N+Bryan+Rd%2C+Mission%2C+TX+78572!5e0!3m2!1sen!2sus!4v1524390322659">
					</iframe>
				</div>
			</div>

			<div class="page-header">
				<div class="titles">
	     			<h4> HOURS </h4>	              
	            </div>
			</div>

			<div class="entry" id="entry2">
				<div class="info" style="color: #222";>
					<div id="info3">
						<div class="date" id="hours">MON - FRI </div>
						<span class="date" id="hours"> 9 AM - 5 PM </span><br><br>

						<div class="date" id="hours">SAT - SUN </div>
						<span class="date" id="hours"> CLOSED </span><br>
						
					</div>
				</div>
			</div>


			<div class="page-header">
				<div class="titles">
	     			<h4> CONTACT </h4>	               
	            </div>
			</div>

			<div class="entry" id="entry2">
				<div class="info" style="color: #222";>
					<div id="info3">
						<div class="date" id="days">TEL </div><span class="date"> <a href="956-123-4567">956 123 4567</a></span><br>
						<div class="date" id="days">EMAIL </div><span class="date"> <a href="#">EMAIL.EMAIL@EMAIL.COM</a></span><br>
					</div>
				</div>
			</div>

			<div class="page-header">
				<div class="titles">
	     			<h4> BOARD OF DIRECTORS </h4>	              
	            </div>
			</div>

			<div class="entry" id="entry2">
				<div class="info" style="color: #222";>
					<div id="info3">
						<div class="date" id="names">PRESIDENT </div><span class="date" id="hours">JANE DOE</span><br>
						<div class="date" id="names">Vice President </div><span class="date" id="hours"> JOHN DOE</span><br>
						<div class="date" id="names">Secretary </div><span class="date" id="hours">  Firstname Lastname</span><br>
					</div>
				</div>
			</div>

			<div class="page-header">
				<div class="titles">
	     			<h4> ABOUT </h4>	              
	            </div>
			</div>

			<div class="about" id="entry2">
				<div class="info" style="color: #222";>
					<div id="info3">
						<div class="info4" style="color: #222";>
								Impact ivestment is not terrible news. It is definately good, but much more can be done. Currently the power to make decisions pertaining to fund allocation rests in the hands of investmnet committes, and advisory firms. Our goal is to shift decision making to the community organizers which benefit from impact investment, so they may prioritize what really matters to them, giving them a voice in the process.

								Therefore our main goal is to democratize the decision making process of fund allocation, and reduce collution and conflicts of interests on the part of the investors. This way we may achieve economic development that is sustainable, inclusive and equitable.
						</div>
					</div>
				</div>
			</div>

			<div class="page-header">
				<div class="titles">
	     			<h4> Motto </h4>	              
	            </div>
			</div>

			<div class="about" id="entry2">
				<div class="info" style="color: #222";>
					<div id="info3">
						<div class="info4" style="color: #222";>
							Just Say NO To Displacement
						</div>
					</div>
				</div>
			</div>

	
			
	</div>	
	<!-- END: Home Content -->
	
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
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