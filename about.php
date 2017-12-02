<?php   
 session_start();  
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
	<title>Airline | About</title>
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
        <a class="nav-link" href="flights.php">Flights</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="service.php" >Services</a>
      </li>
	  <li class="nav-item ">
        <a class="nav-link active" href="about.php">About</a>
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
ABOUT SECTIOM 
==================
-->    
      
        <div class="jumbotron about" >
           <h1 class="display-3">ABOUT</h1>
          
          <!--  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> -->
         
        </div>
	
     
    <div class="container">
        <h1 id="abt">Corporate Information</h1>
        <p>Go Airlines (India) Ltd. is an aviation foray of the Wadia Group. It operates under the brand GoAir. In November 2005, GoAir launched its operations as a low-fare carrier to commoditize air travel and offer airline seats at a marginal premium to train fares across India. The airline currently operates over 170 daily flights and approximately 975 weekly flights across 23 destinations.</p>
        <p>The GoAir route network spans across prominent business metros as well as key leisure destinations across the Indian subcontinent. GoAir currently renders its services at the airports in Ahmedabad, Bagdogra, Bengaluru, Bhubaneswar, Chandigarh, Chennai, Delhi, Goa, Guwahati, Hyderabad, Jaipur, Jammu, Kochi, Kolkata, Leh, Lucknow, Mumbai, Nagpur, Patna, Port Blair, Pune, Ranchi, and Srinagar. Through this route network GoAir ensures a smart value-for-money option for both business and leisure travellers, without compromising on either safety or service factors.</p>
        <p>GoAir's distribution network has been well-researched. Following a thorough evaluation of the available mediums, the airline has introduced a gamut of options, specially designed to make tickets very accessible to its passengers. GoAir hosts convenient online booking options on its website www.GoAir.in wherein a passenger or his associate can book GoAir tickets anytime round the clock, 365 days a year from the comfort of their home. For those passengers who do not have a credit or a debit card or access to a web networked computer, tickets can be booked from other distribution mediums including Travel Agents or via GoAir’s Call Centres. Tickets can also be booked from GoAir airport counters.

       </p>
        <p>GoAir is positioned as 'the Smart People's Airline'. Its captivating theme, 'Fly Smart' is aimed at offering passengers a consistent, quality-assured, and time-efficient service through 'pocket-friendly' fares. The airline uses a state-of-the-art Airbus A320 aircraft fleet.</p>
      <p>GoAir executes its business model on the basic three-tier principle - 'punctuality, affordability, and convenience'. The airline has recently partnered with Navitaire, a leading technology provider of automated aviation and travel-related software solutions, for its Passenger Service System . By adopting such technology solutions, GoAir is equipped with superior process efficiency, thereby enabling its passengers to save great amount of time.</p>
       <p>Adding a milestone to its journey, in October 2016, GoAir passed the International Air Transport Association's Operational Safety Audit (IOSA).</p>
      
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