<?php   
 session_start();  
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
	<title>Airline | Service</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="airline.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body style="background:#F4F5F6;">
   

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
        <a class="nav-link  " href="flights.php">Flights</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="service.php">Services</a>
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
Article 
==================
-->

 <div class="jumbotron about" >
           <h1 class="display-3">SERVICES</h1>
          
             </p>
 </div> 
		
		
<div class="container">
	<div class="row article" >
		<div class="col-md-3">
			<img src="http://www.goair.in/media/1366/menu.png">
		</div>
		<div class="col-md-9">
			<h2>In-Flight Menu</h2>
			<p>Now satiate your inner foodie even while flying! Introducing our brand new domestic in-flight menu to please your palate!</p>
			
			<P>Avail this amazing domestic flight offer and indulge in this scrumptious meal. Eating at 35,000 feet has never been more tempting!</P>
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Know more</button>
		</div>
	</div>
	
	<div class="row article" >
		
		<div class="col-md-9">
			<h2>SMS</h2>
			<P>Flight booking can be a tricky business, with additional charges sometimes appearing out of nowhere, which is why we would like to be as transparent as possible when it comes to airfare and our services. With our new SMS services, get updates on GoAir’s new moves and latest information. You can check your flight status, flight schedules, search for the lowest airfare and view latest promotions through the service.</P>
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Know more</button>
		</div>
		<div class="col-md-3">
			<img src="http://www.goair.in/media/1373/sms-service.png">
		</div>
	</div>
	
	<div class="row article" >
		<div class="col-md-3">
			<img src="http://www.goair.in/media/1367/prebookseats.png">
		</div>
		<div class="col-md-9">
			<h2>Pre-Book Seats</h2>
			
			<P>We want you to have the best domestic flight experience be it enjoying a view from the window at 30,000 feet height or be unencumbered along the aisle. Now choose a seat beforehand while making your online flight booking! Be it window seats, aisle seats or even seats with extra leg room, take your pick to stretch and get comfy on board at a nominal price.</P>
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Know more</button>
		</div>
	</div>
	
	<div class="row article" >
		
		<div class="col-md-9">
			<h2>Pre-Book Refreshments</h2>
			
			<P>Welcome to the GoAir cafe! Be ahead of time when it comes to food and pre-book snacks from our wide range of delicious veg, non-veg and Jain snacks. Now you can not only save on the airfare but also on the meals too with guaranteed meal availability on board because good food can’t wait.</P>
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Know more</button>
		</div>
		<div class="col-md-3">
			<img src="http://www.goair.in/media/1374/food.png">
		</div>
	</div>
	
	<div class="row article" >
		<div class="col-md-3">
			<img src="http://www.goair.in/media/1368/prioritycheckin.png">
		</div>
		<div class="col-md-9">
			<h2>Priority Check-In</h2>
			
			<P>We understand that time is invaluable, like you are to us. We give you the option of priority check-in and priority baggage at just Rs. 400 in addition to our extra reasonable flight tickets. Could it get any better? The answer is yes! Be among the passengers who check in first and also receive your baggage before others do.</P>
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Know more</button>
		</div>
	</div>
	
	<div class="row article" >
		
		<div class="col-md-9">
			<h2>Boarding Pass Privileges</h2>
			
			<P>When the flying ends, fun begins. With our domestic flight offer, you can now present your boarding pass at our associate restaurants, hotels and spas within 30 days of your travel and avail amazing discounts & offers. Kick-start the fun with GoAir domestic flights now!</P>
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Know more</button>
		</div>
		<div class="col-md-3">
			<img src="http://www.goair.in/media/1372/checkin-service.png">
		</div>
	</div>
	
	<div class="row article" >
		<div class="col-md-3">
			<img src="http://www.goair.in/media/1368/prioritycheckin.png">
		</div>
		<div class="col-md-9">
			<h2>Travel Insurance</h2>
			
			<P>Being a customer-centric airline, GoAir works the extra mile to make sure that you along with your belongings are insured and safe. Now be at peace while flying with our domestic flight at an absolutely nominal cost. It’s time to fly smart and fly stress free with our domestic travel insurance. We definitely offer more than just low airfares.</P>
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Know more</button>
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