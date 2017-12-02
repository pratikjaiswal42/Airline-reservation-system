<?php   
 session_start();  
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
	<title>Airline | Flights</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="airline.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
   

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="index.php">ZET_Airways</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link  active" href="flights.php">Flights</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php">Services</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link " href="about.php">About</a>
      </li>
    </ul>
	
	<?php
		if(isset($_SESSION['username'])){
		?>
		<ul class="navbar-nav mr pull-right">
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
	   </ul>
		<?php
		}
		else{  
		
		}
	?>			
	
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!--  
==================
SEARCH BAR 
==================
-->


<!--  
==================
Flights 
==================
-->
 <div class="jumbotron about" >
           <h1 class="display-3">FLIGHTS</h1>
          
          
 </div>
		
		
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
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	 <script src="js/bootstrap.min.js"></script>
	<script src="jquery.js"></script>
		<script>
		$('#btne').on('click',function(){
			
			$('#return_lake').attr("disabled","disabled");
		});
		$('#btne2').on('click',function(){
			
			$('#return_lake').attr("disabled",false);
		});
	</script>