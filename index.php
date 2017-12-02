<?php
 
session_start();					
include('script/connect.php');
include('script/login_script.php');					
									
?>


<!DOCTYPE html>
<html lang="en">
  <head>
	
    <!-- Required meta tags -->
	<title>Airline | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="airline.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 
 </head>
  <body>
  

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php">ZET_Airways</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="flights.php">Flights</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php" >Services</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="about.php">About</a>
      </li>
    </ul>
	<ul class="navbar-nav mr pull-right">
	
	<?php
		if(isset($_SESSION['username'])){
		?>
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" id="dropdownMenuButton" aria-haspopup="true" aria-expanded="false" >Welcome <?php echo $_SESSION['username'];  ?></a>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			<a class="dropdown-item" href="#">Profile</a>
			<a class="dropdown-item" href="#">Your orders</a>
			<a class="dropdown-item" href="#">Account settings</a>
			</div>
	   </li>
	   <li class="nav-item">
        <a class="nav-link " href="unset.php"  id="logout" >Logout</a>
	   </li>
	   
		<?php
		}
		else{  
	?>					
      <li class="nav-item">
        <a class="nav-link"  data-toggle="modal" data-target="#popup">Log In</a>
      </li>
	   <li class="nav-item">
        <a class="nav-link"   data-toggle="modal" data-target="#popup1">Sign Up</a>
      </li>
	  <?php
	  }	
	  ?>
	</ul>
    <form class="form-inline my-2 my-lg-0">
	
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	
  </div>
</nav>

<div class="modal fade" id="popup">
			<div class="modal-dialog">
				<div class="modal-content">
					<!--header  -->
					<div class="modal-header">
						<h3>Log in Window</h3>
						<button type="button" class="close" data-dismiss="modal">&times;
					</div>
					<!--body (model)  -->
					<div class="modal-body">
						<form method="POST"	id="login" >
						<input type="text" id="username" name="username"  placeholder="Enter Your Email Here" class="form-control"/>
					
						<br>
						<input type="password" id="password" name="password"  placeholder="Enter Your Password Here" class="form-control"/>
						<br>
						
						<input type="submit" name="login_button" id="login_button"  class="btn btn-info btn-lg btn-block" value="Login">  
					</form>
					</div>
				</div>
			
			</div>
		
		</div>
		
		
<div id="popup1" class="modal fade">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
	<h3>Sign Up Window</h3>
	<button type="button" class="close" data-dismiss="modal">&times;
   </div>
   <div class="modal-body">
    <form method="POST" id="insert_form">
    
     <input type="text" name="name" id="name" placeholder="Enter Your Name" Required="" class="form-control" />
     <br />
    
     <input type="email" name="email" id="email" placeholder="Enter Your Email" Required="" class="form-control" />
     <br />
     <label>Select Gender</label>
     <select name="gender" id="gender" class="form-control">
      <option value="Male">Male</option>  
      <option value="Female">Female</option>
     </select>
     <br />  
     
     <input type="password" name="pass" id="pass" placeholder="Enter password" Required="" class="form-control" />
     <br />  
    
     <input type="password" name="re_pass" id="re_pass" placeholder="Retype password" Required="" class="form-control" />
     <br />
     <input type="submit" name="register" id="register" value="register"  class="btn btn-info btn-lg btn-block" />

    </form>
   </div>
  
  </div>
 </div>
</div>

					 
					

<!--  
==================
SEARCH BAR 
==================
-->
<form class="form-inline form_set" method="POST" action="book_flight.php">
	<p style="color:white;">Book Domestic and International flights</p>
	
	<button type="button" id="btne" class="btn btn-outline-info btn-sm my-sm-0" >One Way</button>
	<button type="button" id="btne2" class="btn btn-outline-info btn-sm my-sm-0" >Round Trip</button>

  <div class="form-row">
    <div class="col">
		<select  name="origin" class="form-control">
		<option>Select Origin</option>
		<option>Mumbai</option>
		<option>kolkata</option>
		<option>Jaipur</option>
		<option>delhi</option>
		<option>Bangalore</option>
		<option>Kanpur</option>
		</select>
	</div>
	
	<div class="col">
	  <select class="form-control"  name="dest">
		<option>Select Destination</option>
		<option>Mumbai</option>
		<option>kolkata</option>
		<option>Jaipur</option>
		<option>delhi</option>
		<option>Bangalore</option>
		<option>Kanpur</option>
		</select>  
	</div>
   
	
	<div class="col">
      <input type="text" class="form-control" name="start" placeholder="Journey Date (dd/mm/yy)">
	</div>
	 
	<div class="col">
      <input type="text" class="form-control"  id="return_lake" name="end"placeholder="Return Date (dd/mm/yy)">
	</div>
	<div class="col">
	   <select title="inputState" class="form-control"  name="passengers"><option>Passengers</option>
	   <option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> 
	   </select>
	   
	</div>
	<div class="col">
		<select title="inputState" class="form-control"  name="class"><option >Class</option>
	    <option value="Economy">Economy</option> <option value="Premium Economy">Premium Economy</option> <option value="Bussiness">Bussiness</option>  
	    </select>
	</div>
	<div>
		<input class="btn btn-outline-success my-2 my-sm-0"  name="book" type="submit" value="Book Flight">
	</div>
  </div>
</form>
<!--  
==================
CAROUSEL
==================
-->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="air_slide1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="air_slide2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="air_slide3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<h1 id="h1">Discover Hot Deals</h1>
<!--  
==================
CARDS
==================
-->
<div class="container wreck">
	<div class="card-deck">
	  <div class="card">
		<img class="card-img-top" src="https://gos3.ibcdn.com/50122e147b7c11e481bd32e76f7e45c9.jfif" alt="Card image cap">
		<div class="card-body">
		  <h4 class="card-title">Jaipur | The Fern - An Ecotel Hotel</h4>
		  <p class="card-text">Weekend breaks | Affordable prices</p>
		</div>
		<div class="card-footer">
		  <small class="text-muted">Last updated 3 mins ago</small>
		</div>
	  </div>
	  <div class="card">
		<img class="card-img-top" src="https://gos3.ibcdn.com/05c232f8368711e481b8daf4768ad8d9.jfif" alt="Card image cap">
		<div class="card-body">
		  <h4 class="card-title">Jaipur | The Byke Grassfield Resort</h4>
		  <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
		</div>
		<div class="card-footer">
		  <small class="text-muted">Last updated 3 mins ago</small>
		</div>
	  </div>
	  <div class="card">
		<img class="card-img-top" src="https://gos3.ibcdn.com/e699ae263c6d11e692400022195573b9.jpg" alt="Card image cap">
		<div class="card-body">
		  <h4 class="card-title">Agra | The Taj Vilas</h4>
		  <p class="card-text">Weekend breaks | Affordable prices</p>
		</div>
		<div class="card-footer">
		  <small class="text-muted">Last updated 3 mins ago</small>
		</div>
	  </div>
	</div>

</div>

<div class="container wreck">
	<div class="card-deck">
	  <div class="card">
		<img class="card-img-top" src="https://gos3.ibcdn.com/431e6828266811e79a7c0a9df65c8753.jpg" alt="Card image cap">
		<div class="card-body">
		  <h4 class="card-title">Agra | Ramada Plaza</h4>
		  <p class="card-text">Weekend breaks | Affordable prices</p>
		</div>
		<div class="card-footer">
		  <small class="text-muted">Last updated 3 mins ago</small>
		</div>
	  </div>
	  <div class="card">
		<img class="card-img-top" src="https://gos3.ibcdn.com/a7c69644a24511e6abc802bf5ac07431.jpg" alt="Card image cap">
		<div class="card-body">
		  <h4 class="card-title">Agra | Four Points by Sheraton</h4>
		  <p class="card-text">Weekend breaks | Affordable prices</p>
		</div>
		<div class="card-footer">
		  <small class="text-muted">Last updated 3 mins ago</small>
		</div>
	  </div>
	  <div class="card">
		<img class="card-img-top" src="https://gos3.ibcdn.com/1b766d9c75ab11e7b63402755708f0b3.jpg" alt="Card image cap">
		<div class="card-body">
		  <h4 class="card-title">Jaipur | Regenta Central Jaipur</h4>
		  <p class="card-text">Weekend breaks | Affordable prices</p>
		</div>
		<div class="card-footer">
		  <small class="text-muted">Last updated 3 mins ago</small>
		</div>
	  </div>
	</div>

</div>

<div class="container wreck">
	<div class="card-deck">
	  <div class="card">
		<img class="card-img-top" src="https://gos3.ibcdn.com/a3f56b1afb3511e5b2ca0022195573b9.jpg" alt="Card image cap">
		<div class="card-body">
		  <h4 class="card-title">Jaipur | Souvenir Peppermint</h4>
		  <p class="card-text">Weekend breaks | Affordable prices</p>
		</div>
		<div class="card-footer">
		  <small class="text-muted">Last updated 3 mins ago</small>
		</div>
	  </div>
	  <div class="card">
		<img class="card-img-top" src="https://gos3.ibcdn.com/1q7ka219l931fc28pf3ni9ak006e.jpg" alt="Card image cap">
		<div class="card-body">
		  <h4 class="card-title">Jaipur | Park Ocean</h4>
		  <p class="card-text">Weekend breaks | Affordable prices</p>
		</div>
		<div class="card-footer">
		  <small class="text-muted">Last updated 3 mins ago</small>
		</div>
	  </div>
	  <div class="card">
		<img class="card-img-top" src="https://gos3.ibcdn.com/a4t4e0ih1l7chat46888e00r006u.jpg" alt="Card image cap">
		<div class="card-body">
		  <h4 class="card-title">Agra | Mansingh Palace</h4>
		  <p class="card-text">Few rooms left. Book Now!</p>
		</div>
		<div class="card-footer">
		  <small class="text-muted">Last updated 3 mins ago</small>
		</div>
	  </div>
	</div>

</div>
<!--
		==============
		  CONTACT 
		==============
		-->
		<div class="container  ">
			<div class="row">
				<div class=" col-sm-12 col-xs-12  ">
				
					<div id="contact">
						<h2 style=" font-weight:900;">CONTACT <span style="color:#49BD81; font-weight:900;">US</span></h2>
						
						<form id="form1">
							<fieldset class="form-group ">
								<input id="h1w" class="form-control " width="400" required="" name="contact_name" type="text" placeholder="Name*">
							</fieldset>
							<fieldset class="form-group">
								<input class="form-control " width="400" required="" type="email" name="contact_mail" placeholder="Email*">
							</fieldset>
							<fieldset class="form-group">
								<textarea class="form-control " required="" name="contact_msg" placeholder="Message*"></textarea>
							</fieldset>
							
								<button style="font-weight:700;" id="contact_but" class="btn btn-lg  btn-success">SEND MESSAGE</button>
							 
						</form>
						
					</div>
				</div>
			</div>
		
		</div>
		
		<footer class="panel-footer" id="footer">
			<div class="container">
				
				<div class="row section-separator">
					<div style="font-size:12px;color:#878A8E;" class="col-md-6">
					<h1 style="color:white;font-size:17px; margin-bottom:40px;margin-top:20px;">Product Offering</h1>
						<p>Flights, Flight+Hotel Deals, International Flights, Hotels, International Hotels, Holidays in India, International Holidays, Cabs, Cheap Tickets to India, Bus Tickets, Rail, Route Planner, Flight Status, Mobile Apps</p><br>
						<h1 style="color:white;font-size:17px; margin-bottom:40px;margin-top:20px;">ZET_Airways</h1>
						<p>About Us, Investor Relations, Testimonial, Reviews, Careers, Corporate Travel, Travel Guide, Travel Blog, Offers, Gift Vouchers, MakeMyTrip Coupons, My Trip Essentials, Deals, Stories, Trip Planner</p>
						<h1 style="color:white;font-size:17px; margin-bottom:40px;margin-top:20px;">About the Site</h1>
						<p>FAQs, Complaints, Contact Us, Payment Security, Privacy Policy, User Agreement, Visa Information, More Offices, File Rail TDR, Make A Payment, Submit Account Details, Report a defect/MMT Bug Bounty</p><br>
						
					</div>
					<div class="col-md-6" id="footer_part">
						<h1 style="color:white; margin-bottom:40px; margin-top:20px;">Pages</h1>
						<p style=" margin-bottom:20px;margin-top:20px;"><a style="color:#878A8E;font-size:20px;text-decoration:none;" href="about.php">About Us</a></p>
                        <p style=" margin-bottom:20px;margin-top:20px;"><a style="color:#878A8E;font-size:20px;text-decoration:none;" href="section.php">Flights</a></p>
						<p style=" margin-bottom:20px;margin-top:20px;"></p><a style="color:#878A8E;font-size:20px;text-decoration:none;" href="bussiness.php">Deals</a></p>
						<p style=" margin-bottom:20px;margin-top:20px;"><a style="color:#878A8E;font-size:20px;text-decoration:none;" href="index.php">Contact Us</a></p>
						<p style=" margin-bottom:20px;margin-top:20px;"><a style="color:#878A8E;font-size:20px;text-decoration:none;" href="bussiness.php">Service</a></p>
					</div>
				
				</div>
				<br><br><hr>
				<p class=" text-right" style="font-size:17px;color:#878A8E;">&copy;ZET_Airways copyright 2017 | All right reserved</p><br>
			
			</div>
		</footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
	
   
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	 <script src="js/bootstrap.min.js"></script>
	<script src="jquery.js"></script>
	<script src="verify1.js"></script>
	<script src="external.js"></script>
	<script>
		$('#btne').on('click',function(){
			
			$('#return_lake').attr("disabled","disabled");
		});
		$('#btne2').on('click',function(){
			
			$('#return_lake').attr("disabled",false);
		});
	</script>
	

 </body>
</html>