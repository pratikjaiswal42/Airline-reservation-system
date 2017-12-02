<?php
 
 session_start();  
 
include('script/connect.php');
if(isset($_POST['origin']) && isset($_POST['dest']) && isset($_POST['start']) && isset($_POST['end']) && 
	isset($_POST['passengers']) && isset($_POST['class']) &&  isset($_POST['book'])){
	
	$origin=$_POST['origin'];
	$dest=$_POST['dest'];
	$start=$_POST['start'];
	$end=$_POST['end'];
	$passengers=$_POST['passengers'];
	$class=$_POST['class'];
	//$book=$_POST['book'];
	
	if(!empty($origin) && !empty($dest) && !empty($start) && !empty($end) && !empty($passengers) && !empty($class)){
		/*$query="SELECT `users`.`email` FROM `jet`.`users`  
		WHERE `users`.`email` = '$user'  
		AND `users`.`password` = '$pass'";
		$query_run=mysql_query($query);
		*/
		
		?>
<?php
	//all required data
				$flight_code_1=array('WK','G8','ST4','ST8');
				$flight_code=$flight_code_1[rand(0,3)];
				$flight_code_2=rand(223,4444);
				$aircraft=rand(321,340);
				$base_fare=rand(3570,4750);
				$tax_fee=rand(1240,1440);
				$discount=rand(847,897);
				$total_swag=$base_fare+$tax_fee-$discount;
				?>
			
<!DOCTYPE html>
<html lang="en">
  <head>
	
    <!-- Required meta tags -->
	
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="airline.css">
	<link rel="stylesheet" href="book_flight_css.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
	<style type="text/css">
		input[type="text"],input[type="password"],input[type="email"],input[type="tel"],input[type="number"]{
				padding:15px;
				border-radius:5px;
				background:white;
				margin:5px;
			}
		input[type="checkbox"]{
			width:20px;
			height:20px;

		}	
		input[type="email"]{
			
		}
			
	</style>
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
	
    <form class="form-inline my-2 my-lg-0">
	
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	
  </div>
</nav>
<!-----------------------
window:1 // choose flight
------------------------->	
	<?php
		if(isset($_SESSION['username'])){
		?>
	<div class="row" id="book_flight">
		<div class="col-md-9" >
			<center><h1 style="font-weight:bolder;margin-top:100px;">Book Your Flight<h1></center>
			<br><br><br>
			<div class="progress bg-dark">
			 <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%; height:30px;">1 : Choose flight</div>
			</div><br><br>
			<table class="table">
				 <thead class="thead-default">
					<tr>
					  <th >Departure Time</th>
					  <th >Duration</th>
					  <th >Arrival Time</th>
					  <th >Economy</th>
					  <th >Bussiness</th>
					</tr>
				 </thead>
				<tbody>
					<tr class="table_row">
					<th class="on_time"> 06:05</th> <th>1h 30m</th> <th>07:45</th> <th><?php echo $base_fare.' INR'?></th> <th><?php echo ($base_fare+400).' INR'?></th>
					</tr>
					<tr class="table_row"> 
					<th>11:30</th> <th>3h 20m</th> <th>12:45</th> <th><?php echo $base_fare.' INR'?></th> <th><?php echo ($base_fare+400).' INR'?></th>
					</tr>
					<tr class="table_row">
					<th>13:45</th> <th>2h 02m</th> <th>15:00</th> <th><?php echo $base_fare.' INR'?></th> <th><?php echo ($base_fare+400).' INR'?></th>
					</tr>
					<tr class="table_row">
					<th>14:30</th> <th>1h 48m</th> <th>16:45</th> <th><?php echo $base_fare.' INR'?></th> <th><?php echo ($base_fare+400).' INR'?></th>
					</tr>
					<tr class="table_row">
					<th>20:55</th> <th>1h 18m</th> <th>22:35</th> <th><?php echo $base_fare.' INR'?></th> <th><?php echo ($base_fare+400).' INR'?></th>
					</tr>
					<tr  class="table_row">
					<th>22:40</th> <th>2h 05m</th> <th>00:45</th> <th><?php echo $base_fare.' INR'?></th> <th><?php echo ($base_fare+400).' INR'?></th>
					</tr>
				</tbody>
			
			</table>
		</div>
		<div class="col-md-3">
			<p style="font-weight:bolder;margin-top:50px;">Your flight details</p>
			<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th colspan="2">Your flight details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">From</th>
      <td><?php echo $origin?></td>
      
    </tr>
    <tr>
      <th scope="row">To</th>
      <td><?php echo $dest?></td>
     
    </tr>
    <tr>
      <th scope="row">Date</th>
      <td><?php echo $start?></td>
    </tr>
	<tr>
      <th scope="row">Flight</th>
      <td><?php echo $flight_code.' '.$flight_code_2; ?></td>
    </tr>
	<tr>
      <th scope="row">Departing</th>
      <td>06:05</td>
    </tr>
	<tr>
      <th scope="row">Arrival</th>
      <td>07:45</td>
    </tr>
	<tr>
      <th scope="row">Fare Type</th>
      <td><?php echo $class?></td>
    </tr>
	
  </tbody>
</table>

<table class="table">
  <thead class="thead-default">
    <tr>
      <th colspan="2">Return</th>
      
    </tr>
  </thead>
  <tbody>
     <tr>
      <th scope="row">From</th>
      <td><?php echo $dest?></td>
      
    </tr>
    <tr>
      <th scope="row">To</th>
      <td><?php echo $origin?></td>
     
    </tr>
    <tr>
      <th scope="row">Date</th>
      <td><?php echo $end?></td>
    </tr>
	<tr>
      <th scope="row">Flight</th>
      <td><?php echo $flight_code.' '.$flight_code_2; ?></td>
    </tr>
	<tr>
      <th scope="row">Departing</th>
      <td><?php echo $dest?></td>
    </tr>
	<tr>
      <th scope="row">Arrival</th>
      <td><?php echo $dest?></td>
    </tr>
	<tr>
      <th scope="row">Fare Type</th>
      <td><?php echo $class?></td>
    </tr>
	
  </tbody>
</table>
<table class="table">
  <thead class="thead-default">
    <tr>
      <th colspan="2">Passengers</th>
    </tr>
  </thead>
  <tbody>
     <tr>
      <th scope="row">Adult</th>
      <td><?php echo $passengers?></td>
      
    </tr>
    <tr>
      <th scope="row">Base Fare</th>
      <td><?php echo $base_fare.' ';?>INR</td>
    </tr>
  </tbody>
</table>
<table class="table">
  <thead class="thead-default">
    <tr>
      <th scope="row">Discounts</th>
	  <th>- <?php echo $discount.' '?>INR</th>
    </tr>
	<tr>
      <th scope="row">Taxes and Fees</th>
	  <th><?php echo $tax_fee.' ';?>INR</th>
    </tr>
	
  </thead>
  
  <thead class="thead-inverse">
	<tr>
      <th >Total</th>
	  <th><?php echo $total_swag.' ';?>INR</th>
    </tr>
	
  </thead>
  
</table>
<p style="text-decoration:underline;"><a href="#">Show full taxes and fees breakdowns</a></p>
<h4>By clicking "Continue" you agree to the Terms and Condition</h4>
<button class="btn btn-success btn-lg btn-block" id="continue">Continue</button>
	
	</div>
	
	</div>
<br><br>
<!-----------------------
window:2 // passenger info
------------------------->	

<div class="row" id="book_flight_pass">
		<div class="col-md-9">
			<center><h1 style="font-weight:bolder;margin-top:50px;">Book Your Flight<h1></center>
			<br><br><br>
			<div class="progress bg-dark">
			<div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%; height:30px;">1 : Choose flight</div>
			<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%; height:30px;">2 : Passenger Information</div>
			</div><br><br>
			<h2>Passengers Details</h2>
			<div class="form" id="passengerform" >
				<select name="" id="title" class="form-control  " title="id"><option value="" selected="selected">Title*</option>
				<option value="DR">Doctor</option>
				<option value="MISS">Miss</option>
				<option value="MR">Mr</option>
				<option value="MRS">Mrs</option>
				<option value="MS">Ms</option>
				<option value="MSTR">Master</option>
				</select>
				
				<div class="form-inline">
					<input type="text" id="fname" placeholder="First name*" class="form-control mr-sm-2">
					<input type="text" id="lname" placeholder="Last name*" class="form-control">
				</div>
				
				<div class="form-inline" style="margin:10px;">
					<select name="" id="gender" style="margin-right:10px;"class="form-control  " title="id"><option value="" selected="selected">Gender*</option>
						<option value="male">Male</option>
						<option value="female">Female</option>
						
					</select>
					 <select name="" id="nat" class="form-control  " title="id"><option value="" selected="selected">Nationality*</option>
						
					<option value="IN">India</option>
					<option value="AD">Andorra, Principality of</option>
					<option value="AE">United Arab Emirates</option>
					<option value="AF">Afghanistan</option>
					<option value="AG">Antigua and Barbuda</option>
					<option value="AI">Anguilla</option>
					<option value="AL">Albania, People&#39;s Socialist Republic of</option>
					<option value="AM">Armenia</option>
					<option value="AO">Angola, Republic of</option>
					<option value="AR">Argentina, Argentine Republic</option>
					<option value="AS">American Samoa</option>
					<option value="AT">Austria, Republic of</option>
					<option value="AU">Australia, Commonwealth of</option>
					<option value="AW">Aruba</option>
					<option value="AX">Aland Islands</option>
					<option value="AZ">Azerbaijan, Republic of</option>
					<option value="BA">Bosnia and Herzegovina</option>
					<option value="BB">Barbados</option>
					<option value="BD">Bangladesh, People&#39;s Republic of</option>
					<option value="BE">Belgium, Kingdom of</option>
					<option value="BF">Burkina Faso</option>
					<option value="BG">Bulgaria, People&#39;s Republic of</option>
					<option value="BH">Bahrain, Kingdom of</option>
					<option value="BI">Burundi, Republic of</option>
					<option value="BJ">Benin, People&#39;s Republic of</option>
					<option value="BL">Saint Barthelemy</option>
					<option value="BM">Bermuda</option>
					<option value="BN">Brunei Darussalam</option>
					<option value="BO">Bolivia, Republic of</option>
					<option value="BQ">Bonaire, Saint Eustatius and Saba</option>
					<option value="BR">Brazil, Federative Republic of</option>
					<option value="BS">Bahamas, Commonwealth of the</option>
					<option value="BT">Bhutan, Kingdom of</option>
					<option value="BW">Botswana, Republic of</option>
					<option value="BY">Belarus</option>
					<option value="BZ">Belize</option>
					<option value="CA">Canada</option>
					<option value="CC">Cocos (Keeling) Islands</option>
					<option value="CD">Congo, Democratic Republic of</option>
					<option value="CF">Central African Republic</option>
					<option value="CG">Congo, People&#39;s Republic of</option>
					<option value="CH">Switzerland, Swiss Confederation</option>
					<option value="CI">Cote D&#39;Ivoire, Ivory Coast, Republic of the</option>
					<option value="CK">Cook Islands</option>
					<option value="CL">Chile, Republic of</option>
					<option value="CM">Cameroon, United Republic of</option>
					<option value="CN">China, People&#39;s Republic of</option>
					<option value="CO">Colombia, Republic of</option>
					<option value="CR">Costa Rica, Republic of</option>
					<option value="CU">Cuba, Republic of</option>
					<option value="CV">Cape Verde, Republic of</option>
					<option value="CW">Curacao</option>
					<option value="CX">Christmas Island</option>
					<option value="CY">Cyprus, Republic of</option>
					<option value="CZ">Czech Republic</option>
					<option value="DE">Germany</option>
					<option value="DJ">Djibouti, Republic of</option>
					<option value="DK">Denmark, Kingdom of</option>
					<option value="DM">Dominica, Commonwealth of</option>
					<option value="DO">Dominican Republic</option>
					<option value="DZ">Algeria, People&#39;s Democratic Republic of</option>
					<option value="EC">Ecuador, Republic of</option>
					<option value="EE">Estonia</option>
					<option value="EG">Egypt, Arab Republic of</option>
					<option value="ER">Eritrea</option>
					<option value="ES">Spain, Spanish State</option>
					<option value="ET">Ethiopia</option>
					<option value="FI">Finland, Republic of</option>
					<option value="FJ">Fiji, Republic of the Fiji Islands</option>
					<option value="FK">Falkland Islands (Malvinas)</option>
					<option value="FM">Micronesia, Federated States of</option>
					<option value="FO">Faeroe Islands</option>
					<option value="FR">France, French Republic</option>
					<option value="GA">Gabon, Gabonese Republic</option>
					<option value="GB">United Kingdom of Great Britain &amp; N. Ireland</option>
					<option value="GD">Grenada</option>
					<option value="GE">Georgia</option>
					<option value="GF">French Guiana</option>
					<option value="GG">Guernsey</option>
					<option value="GH">Ghana, Republic of</option>
					<option value="GI">Gibraltar</option>
					<option value="GL">Greenland</option>
					<option value="GM">Gambia, Republic of the</option>
					<option value="GN">Guinea, Revolutionary People&#39;s Rep&#39;c of</option>
					<option value="GP">Guadeloupe</option>
					<option value="GQ">Equatorial Guinea, Republic of</option>
					<option value="GR">Greece, Hellenic Republic</option>
					<option value="GT">Guatemala, Republic of</option>
					<option value="GU">Guam</option>
					<option value="GW">Guinea-Bissau, Republic of</option>
					<option value="GY">Guyana, Republic of</option>
					<option value="HK">Hong Kong, Special Administrative Region of China</option>
					<option value="HN">Honduras, Republic of</option>
					<option value="HR">Hrvatska (Croatia)</option>
					<option value="HT">Haiti, Republic of</option>
					<option value="HU">Hungary, Hungarian People&#39;s Republic</option>
					<option value="ID">Indonesia, Republic of</option>
					<option value="IE">Ireland</option>
					<option value="IL">Israel, State of</option>
					<option value="IM">Isle Of Man</option>
					<option value="IQ">Iraq, Republic of</option>
					<option value="IR">Iran, Islamic Republic of</option>
					<option value="IS">Iceland, Republic of</option>
					<option value="IT">Italy, Italian Republic</option>
					<option value="JE">Jersey</option>
					<option value="JM">Jamaica</option>
					<option value="JO">Jordan, Hashemite Kingdom of</option>
					<option value="JP">Japan</option>
					<option value="KE">Kenya, Republic of</option>
					<option value="KG">Kyrgyz Republic</option>
					<option value="KH">Cambodia, Kingdom of</option>
					<option value="KI">Kiribati, Republic of</option>
					<option value="KM">Comoros, Union of the</option>
					<option value="KN">St. Kitts and Nevis</option>
					<option value="KP">Korea, Democratic People&#39;s Republic of</option>
					<option value="KR">Korea, Republic of</option>
					<option value="KW">Kuwait, State of</option>
					<option value="KY">Cayman Islands</option>
					<option value="KZ">Kazakhstan, Republic of</option>
					<option value="LA">Laos, People&#39;s Democratic Republic of</option>
					<option value="LB">Lebanon, Lebanese Republic</option>
					<option value="LC">St. Lucia</option>
					<option value="LI">Liechtenstein, Principality of</option>
					<option value="LK">Sri Lanka, Democratic Socialist Republic of</option>
					<option value="LR">Liberia, Republic of</option>
					<option value="LS">Lesotho, Kingdom of</option>
					<option value="LT">Lithuania</option>
					<option value="LU">Luxembourg, Grand Duchy of</option>
					<option value="LV">Latvia</option>
					<option value="LY">Libyan Arab Jamahiriya</option>
					<option value="MA">Morocco, Kingdom of</option>
					<option value="MC">Monaco, Principality of</option>
					<option value="MD">Moldova, Republic of</option>
					<option value="ME">Montenegro</option>
					<option value="MF">Saint Martin</option>
					<option value="MG">Madagascar, Republic of</option>
					<option value="MH">Marshall Islands</option>
					<option value="MK">Macedonia, the former Yugoslav Republic of</option>
					<option value="ML">Mali, Republic of</option>
					<option value="MM">Myanmar</option>
					<option value="MN">Mongolia, Mongolian People&#39;s Republic</option>
					<option value="MO">Macao, Special Administrative Region of China</option>
					<option value="MP">Northern Mariana Islands</option>
					<option value="MQ">Martinique</option>
					<option value="MR">Mauritania, Islamic Republic of</option>
					<option value="MS">Montserrat</option>
					<option value="MT">Malta, Republic of</option>
					<option value="MU">Mauritius</option>
					<option value="MV">Maldives, Republic of</option>
					<option value="MW">Malawi, Republic of</option>
					<option value="MX">Mexico, United Mexican States</option>
					<option value="MY">Malaysia</option>
					<option value="MZ">Mozambique, People&#39;s Republic of</option>
					<option value="NA">Namibia</option>
					<option value="NC">New Caledonia</option>
					<option value="NE">Niger, Republic of the</option>
					<option value="NF">Norfolk Island</option>
					<option value="NG">Nigeria, Federal Republic of</option>
					<option value="NI">Nicaragua, Republic of</option>
					<option value="NL">Netherlands, Kingdom of the</option>
					<option value="NO">Norway, Kingdom of</option>
					<option value="NP">Nepal, Kingdom of</option>
					<option value="NR">Nauru, Republic of</option>
					<option value="NU">Niue, Republic of</option>
					<option value="NZ">New Zealand</option>
					<option value="OM">Oman, Sultanate of</option>
					<option value="PA">Panama, Republic of</option>
					<option value="PE">Peru, Republic of</option>
					<option value="PF">French Polynesia</option>
					<option value="PG">Papua New Guinea</option>
					<option value="PH">Philippines, Republic of the</option>
					<option value="PK">Pakistan, Islamic Republic of</option>
					<option value="PL">Poland, Polish People&#39;s Republic</option>
					<option value="PM">St. Pierre and Miquelon</option>
					<option value="PR">Puerto Rico</option>
					<option value="PS">Palestinian Territory, Occupied</option>
					<option value="PT">Portugal, Portuguese Republic</option>
					<option value="PW">Palau</option>
					<option value="PY">Paraguay, Republic of</option>
					<option value="QA">Qatar, State of</option>
					<option value="RE">Reunion</option>
					<option value="RO">Romania, Socialist Republic of</option>
					<option value="RS">Serbia</option>
					<option value="RU">Russian Federation</option>
					<option value="RW">Rwanda, Rwandese Republic</option>
					<option value="SA">Saudi Arabia, Kingdom of</option>
					<option value="SB">Solomon Islands</option>
					<option value="SC">Seychelles, Republic of</option>
					<option value="SD">Sudan, Democratic Republic of the</option>
					<option value="SE">Sweden, Kingdom of</option>
					<option value="SG">Singapore, Republic of</option>
					<option value="SH">St. Helena</option>
					<option value="SI">Slovenia</option>
					<option value="SJ">Svalbard &amp; Jan Mayen Islands</option>
					<option value="SK">Slovakia (Slovak Republic)</option>
					<option value="SL">Sierra Leone, Republic of</option>
					<option value="SM">San Marino, Republic of</option>
					<option value="SN">Senegal, Republic of</option>
					<option value="SO">Somalia, Somali Republic</option>
					<option value="SR">Suriname, Republic of</option>
					<option value="SS">South Sudan</option>
					<option value="ST">Sao Tome and Principe, Democratic Republic of</option>
					<option value="SV">El Salvador, Republic of</option>
					<option value="SX">Sint Maarten</option>
					<option value="SY">Syrian Arab Republic</option>
					<option value="SZ">Swaziland, Kingdom of</option>
					<option value="TC">Turks and Caicos Islands</option>
					<option value="TD">Chad, Republic of</option>
					<option value="TG">Togo, Togolese Republic</option>
					<option value="TH">Thailand, Kingdom of</option>
					<option value="TJ">Tajikistan</option>
					<option value="TL">Timor-Leste, Democratic Republic of</option>
					<option value="TM">Turkmenistan</option>
					<option value="TN">Tunisia, Republic of</option>
					<option value="TO">Tonga, Kingdom of</option>
					<option value="TR">Turkey, Republic of</option>
					<option value="TT">Trinidad and Tobago, Republic of</option>
					<option value="TV">Tuvalu</option>
					<option value="TW">Taiwan, Province of China</option>
					<option value="TZ">Tanzania, United Republic of</option>
					<option value="UA">Ukraine</option>
					<option value="UG">Uganda, Republic of</option>
					<option value="UM">United States Minor Outlying Islands</option>
					<option value="US">United States of America</option>
					<option value="UY">Uruguay, Eastern Republic of</option>
					<option value="UZ">Uzbekistan</option>
					<option value="VC">St. Vincent and the Grenadines</option>
					<option value="VE">Venezuela, Bolivarian Republic of</option>
					<option value="VG">British Virgin Islands</option>
					<option value="VI">US Virgin Islands</option>
					<option value="VN">Vietnam</option>
					<option value="VU">Vanuatu</option>
					<option value="WF">Wallis and Futuna Islands</option>
					<option value="WS">Samoa, Independent State of</option>
					<option value="YE">Yemen</option>
					<option value="YT">Mayotte</option>
					<option value="ZA">South Africa, Republic of</option>
					<option value="ZM">Zambia, Republic of</option>
					<option value="ZW">Zimbabwe</option>

						
					</select>
				</div>
				<div class="form-inline">
					<p style="font-size:20px;">Date of birth :  </p><br>
					<select name="" id="" class="form-control  " title="id"><option value="" selected="selected">Day*</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>

						
					</select>
					 <select name="" id="" class="form-control  " title="id"><option value="" selected="selected">Month*</option>
						<option value="1">January</option>
						<option value="2">February</option>
						<option value="3">March</option>
						<option value="4">April</option>
						<option value="5">May</option>
						<option value="6">June</option>
						<option value="7">July</option>
						<option value="8">August</option>
						<option value="9">September</option>
						<option value="10">October</option>
						<option value="11">November</option>
						<option value="12">December</option>

						
					</select>
					</select>
					 <select name="" id="" class="form-control  " title="id"><option value="" selected="selected">Year*</option>
						<option value="2017">2017</option>
						<option value="2016">2016</option>
						<option value="2015">2015</option>
						<option value="2014">2014</option>
						<option value="2013">2013</option>
						<option value="2012">2012</option>
						<option value="2011">2011</option>
						<option value="2010">2010</option>
						<option value="2009">2009</option>
						<option value="2008">2008</option>
						<option value="2007">2007</option>
						<option value="2006">2006</option>
						<option value="2005">2005</option>
						<option value="2004">2004</option>
						<option value="2003">2003</option>
						<option value="2002">2002</option>
						<option value="2001">2001</option>
						<option value="2000">2000</option>
						<option value="1999">1999</option>
						<option value="1998">1998</option>
						<option value="1997">1997</option>
						<option value="1996">1996</option>
						<option value="1995">1995</option>
						<option value="1994">1994</option>
						<option value="1993">1993</option>
						<option value="1992">1992</option>
						<option value="1991">1991</option>
						<option value="1990">1990</option>
						<option value="1989">1989</option>
						<option value="1988">1988</option>
						<option value="1987">1987</option>
						<option value="1986">1986</option>
						<option value="1985">1985</option>
						<option value="1984">1984</option>
						<option value="1983">1983</option>
						<option value="1982">1982</option>
						<option value="1981">1981</option>
						<option value="1980">1980</option>
						
					</select>
				</div>
				<input type="checkbox" > I require a wheel chair
			</div>
			<br>
			<h2>Contact information</h2><br>
			<input type="checkbox" > I am the first passenger<br>
			<div class="form" id="passengerform">
				<select name="" id="title_field" class="form-control  " title="id"><option value="" selected="selected">Title*</option>
				<option value="DR">Doctor</option>
				<option value="MISS">Miss</option>
				<option value="MR">Mr</option>
				<option value="MRS">Mrs</option>
				<option value="MS">Ms</option>
				<option value="MSTR">Master</option>
				</select>
				
				<div class="form-inline">
					<input type="text"  placeholder="First name*" class="form-control mr-sm-2">
					<input type="text"  placeholder="Last name*" class="form-control">
				</div>
				<input type="email" id="emailto" placeholder="Email*"><br>
				Mobile Number*
				<div class="form-inline">
					<input type="number" id="isd_to" placeholder="ISD Code"  class="form-control mr-sm-2">
					<input type="tel" id="num_to" placeholder="Number" class="form-control">
					
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<p>Your flight details</p>
			<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th colspan="2">Your flight details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">From</th>
      <td><?php echo $origin?></td>
      
    </tr>
    <tr>
      <th scope="row">To</th>
      <td><?php echo $dest?></td>
     
    </tr>
    <tr>
      <th scope="row">Date</th>
      <td><?php echo $start?></td>
    </tr>
	<tr>
      <th scope="row">Flight</th>
      <td><?php echo $flight_code.' '.$flight_code_2; ?></td>
    </tr>
	<tr>
      <th scope="row">Departing</th>
      <td><?php echo $dest?></td>
    </tr>
	<tr>
      <th scope="row">Arrival</th>
      <td><?php echo $dest?></td>
    </tr>
	<tr>
      <th scope="row">Fare Type</th>
      <td><?php echo $class?></td>
    </tr>
	
  </tbody>
</table>

<table class="table">
  <thead class="thead-default">
    <tr>
      <th colspan="2">Return</th>
      
    </tr>
  </thead>
  <tbody>
     <tr>
      <th scope="row">From</th>
      <td><?php echo $dest?></td>
      
    </tr>
    <tr>
      <th scope="row">To</th>
      <td><?php echo $origin?></td>
     
    </tr>
    <tr>
      <th scope="row">Date</th>
      <td><?php echo $end?></td>
    </tr>
	<tr>
      <th scope="row">Flight</th>
      <td><?php echo $flight_code.' '.$flight_code_2; ?></td>
    </tr>
	<tr>
      <th scope="row">Departing</th>
      <td><?php echo $dest?></td>
    </tr>
	<tr>
      <th scope="row">Arrival</th>
      <td><?php echo $dest?></td>
    </tr>
	<tr>
      <th scope="row">Fare Type</th>
      <td><?php echo $class?></td>
    </tr>
	
  </tbody>
</table>
<table class="table">
  <thead class="thead-default">
    <tr>
      <th colspan="2">Passengers</th>
    </tr>
  </thead>
  <tbody>
     <tr>
      <th scope="row">Adult</th>
      <td><?php echo $passengers?></td>
      
    </tr>
    <tr>
      <th scope="row">Base Fare</th>
      <td><?php echo $base_fare.' ';?>INR</td>
    </tr>
  </tbody>
</table>
<table class="table">
  <thead class="thead-default">
    <tr>
      <th scope="row">Discounts</th>
	  <th>- <?php echo $discount.' '?>INR</th>
    </tr>
	<tr>
      <th scope="row">Taxes and Fees</th>
	  <th><?php echo $tax_fee.' ';?>INR</th>
    </tr>
	
  </thead>
  
  <thead class="thead-inverse">
	<tr>
      <th >Total</th>
	  <th><?php echo $total_swag.' ';?>INR</th>
    </tr>
	
  </thead>
  
</table>
<p style="text-decoration:underline;"><a href="#">Show full taxes and fees breakdowns</a></p>
<h4>By clicking "Continue" you agree to the Terms and Condition</h4>
<button class="btn btn-success btn-lg btn-block" id="window1">Continue</button>
	
	</div>
	
	</div>
<br><br>
<!------------------------
Window 2: payment gateway
------------------------->


<div class="row" id="payment_gateway">
		<div class="col-md-9">
			<center><h1>Book Your Flight<h1></center>
			<br><br><br>
			<div class="progress bg-dark ">
			<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%; height:30px;">1 : Choose flight</div>
			<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%; height:30px;">2 : Passenger Information</div>
			<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%; height:30px;">3 : Purchase Ticket</div>
			</div><br><br>
			<div class="container">
			<h2>Choose a payment type</h2>
			<div class="form" id="passengerform" >
				<select name="" id="" class="form-control" title="id"><option value="" selected="selected">Card Type</option>
				<option value="A1">Amex PayU</option>
				<option value="M1">Master Card PayU</option>
				<option value="V1">Visa PayU</option>
				</select>
				
				
				<input type="text" name="card number" placeholder="Card Number" class="form-control mr-sm-2" maxlength="16 ">
				
				
				<div class="form-inline">
					
					
					 <select name="" id="" class="form-control  " title="id"><option value="" selected="selected">Month*</option>
					<option value="1">January</option>
					<option value="2">February</option>
					<option value="3">March</option>
					<option value="4">April</option>
					<option value="5">May</option>
					<option value="6">June</option>
					<option value="7">July</option>
					<option value="8">August</option>
					<option value="9">September</option>
					<option value="10">October</option>
					<option value="11">November</option>
					<option value="12">December</option>					
					</select>
					
					<select name="" id="" class="form-control  " title="id"><option value="" selected="selected">Year*</option>
						<option value="2017">2017</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>
						<option value="2020">2020</option>
						<option value="2021">2021</option>
						<option value="2022">2022</option>
						<option value="2023">2023</option>
						<option value="2024">2024</option>
						<option value="2025">2025</option>
						<option value="2026">2026</option>
						<option value="2027">2027</option>
						<option value="2028">2028</option>
						<option value="2029">2029</option>
						<option value="2030">2030</option>
						<option value="2031">2031</option>
						<option value="2032">2032</option>
						<option value="2033">2033</option>
						<option value="2034">2034</option>
						<option value="2035">2035</option>
						<option value="2036">2036</option>
						<option value="2037">2037</option>
						<option value="2038">2038</option>
						<option value="2039">2039</option>
						<option value="2040">2040</option>
						<option value="2041">2041</option>
						<option value="2042">2042</option>
						<option value="2043">2043</option>
						<option value="2044">2044</option>
						<option value="2045">2045</option>
						<option value="2046">2046</option>
					</select>
					
					<input type="text" placeholder="Security Code" class="form-control mr-sm-2" maxlength="3">
					<div class="form-inline">
					<input type="text" id="fname_field" placeholder="First name*" class="form-control mr-sm-2">
					<input type="text" id="lname_field" placeholder="Last name*" class="form-control">
					</div>
					<input type="text" id="email_field" placeholder="Email" class="form-control">
					<input type="number" id="isd_field"placeholder="ISD Code" class="form-control" >
					<input type="tel" id="num_field" placeholder="Mobile" maxlength="10" class="form-control">
				</div>
				
			</div>
			
				<br><br><br>
				<input type="checkbox"> I confirm I read and accept Zet_Airways General <bold>Terms and Conditions</bold><br><br><br>
				<button type="button" class="btn btn-lg btn-secondary" id="pay_you">Pay 4,427</button>
				</div>
			</div>
			
		
		<div class="col-md-3">
		<div class="container">
			<p style="font-size:20px;font;font-weight:bolder;">Your flight details</p>
			<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th colspan="2">Your flight details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">From</th>
      <td><?php echo $origin?></td>
      
    </tr>
    <tr>
      <th scope="row">To</th>
      <td><?php echo $dest?></td>
     
    </tr>
    <tr>
      <th scope="row">Date</th>
      <td><?php echo $start?></td>
    </tr>
	<tr>
      <th scope="row">Flight</th>
      <td><?php echo $flight_code.' '.$flight_code_2; ?></td>
    </tr>
	<tr>
      <th scope="row">Departing</th>
      <td><?php echo $dest?></td>
    </tr>
	<tr>
      <th scope="row">Arrival</th>
      <td><?php echo $dest?></td>
    </tr>
	<tr>
      <th scope="row">Fare Type</th>
      <td><?php echo $class?></td>
    </tr>
	
  </tbody>
</table>

<table class="table">
  <thead class="thead-default">
    <tr>
      <th colspan="2">Return</th>
      
    </tr>
  </thead>
  <tbody>
     <tr>
      <th scope="row">From</th>
      <td><?php echo $dest?></td>
      
    </tr>
    <tr>
      <th scope="row">To</th>
      <td><?php echo $origin?></td>
     
    </tr>
    <tr>
      <th scope="row">Date</th>
      <td><?php echo $end?></td>
    </tr>
	<tr>
      <th scope="row">Flight</th>
      <td><?php echo $flight_code.' '.$flight_code_2; ?></td>
    </tr>
	<tr>
      <th scope="row">Departing</th>
      <td><?php echo $dest?></td>
    </tr>
	<tr>
      <th scope="row">Arrival</th>
      <td><?php echo $dest?></td>
    </tr>
	<tr>
      <th scope="row">Fare Type</th>
      <td><?php echo $class?></td>
    </tr>
	
  </tbody>
</table>
<table class="table">
  <thead class="thead-default">
    <tr>
      <th colspan="2">Passengers</th>
    </tr>
  </thead>
  <tbody>
     <tr>
      <th scope="row">Adult</th>
      <td><?php echo $passengers?></td>
      
    </tr>
    <tr>
      <th scope="row">Base Fare</th>
      <td><?php echo $base_fare.' ';?>INR</td>
    </tr>
  </tbody>
</table>
<table class="table">
  <thead class="thead-default">
    <tr>
      <th scope="row">Discounts</th>
	  <th>- <?php echo $discount.' '?>INR</th>
    </tr>
	<tr>
      <th scope="row">Taxes and Fees</th>
	  <th><?php echo $tax_fee.' ';?>INR</th>
    </tr>
	
  </thead>
  
  <thead class="thead-inverse">
	<tr>
      <th >Total</th>
	  <th><?php echo $total_swag.' ';?>INR</th>
    </tr>
	
  </thead>
  
</table>
<p style="text-decoration:underline;"><a href="#">Show full taxes and fees breakdowns</a></p>
<h4>By clicking "Continue" you agree to the Terms and Condition</h4>
<!--<form method="POST" action="book_flight.php">
	</form> -->
	<input type="submit" class="btn btn-success btn-lg btn-block" name="payment_pass32"  id="payment_pass" value="Continue">
</div>
	</div>
	
	</div>
<br><br>

<!-------------
purchase ticket
--------------->
<div class="row" id="final_ticket" style="margin-top:-50px;">
	<div class="col-md-12">
		
			<center><h1 style="font-size:40px;font-weight:bolder">Book Your Flight<h1></center>
			<br><br><br>
			<div class="progress bg-dark">
			 <div class="progress-bar progress-bar-striped progress-bar-animated " role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%; height:30px;" ><span style="font-size:15px;font-weight:bolder;">1 : Choose flight</span></div>
			<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%; height:30px;"><span style="font-size:15px;font-weight:bolder;">2 : Passenger Information</span></div>
			<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%; height:30px;"><span style="font-size:15px;font-weight:bolder;">3 : Purchase Ticket</span></div>
			<div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar"  aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%; height:30px;"><span style="font-size:15px;font-weight:bolder;">4 : Iternity</span></div>
			
			</div><br><br>
			<div class="container">
			<h2 style="font-size:40px;font-weight:bolder;background:-webkit-linear-gradient(right,#6E6E9E,#888888);padding:10px;text-align:right;color:white;">ZET_Airways</h2>
			<h3 style="text-align:center; font-size:33px;font-weight:bolder">Your Ticket Iternity</h3>
			<h4 style=" ">Your Booking Number : <?php echo rand(122,193);?></h4>
			<table class="table">
				<thead class="thead-inverse">
					<tr>
						<th >Flight</th>
						<th>From</th>
						<th>To</th>
						<th>Aircraft</th>
						<th>Class/Status</th>
					</tr>
				</thead>
				
				<thead class="thead-default">
					<tr>
						<th ><?php echo $flight_code.' '.$flight_code_2;?></th>
						<th><?php echo $origin?></th>
						<th><?php echo $dest?></th>
						<th><?php echo $aircraft?></th>
						<th><?php echo $class?></th>
					</tr>
				</thead>
				
			</table>
			<table class="table">
				<thead class="thead-inverse">
					<tr>
						<th >Passengers Name</th>
						<th>Ticket Number</th>
						<th>Frequent Flyer Number</th>
						<th>Special Needs</th>
						
					</tr>
				</thead>
				<?php 
				$ticket_ser_1=rand(3000,4000);
				$ticket_ser_2=rand(775623,800000);
				$fly_num_1=rand(118,223);
				$fly_num_2=rand(418,488);
				?>
				<thead class="thead-default">
						<tr>
							<th id="final_name1"><span id="final_name2"><span></th>
							<th>018-<?php echo $ticket_ser_1.'-'.$ticket_ser_2;?></th>
							<th>000-<?php echo $fly_num_1.'-'.$fly_num_2;?></th>
							<th>Meal:VGNL</th>
							
						</tr>
				</thead>
			</table>
			<div class="row">
				<div class="col-md-6">
					<table class="table">
						<thead class="thead-inverse">
							<tr>
								<th >Purchase Description</th>
								<th>Price</th>
								
							</tr>
						</thead>
					
						<thead class="thead-default">
								<tr>
									<th >Fare(LLXSOAR,LLXGSOAR)</th>
									<th><?php echo (52*$tax_fee)/100 ;?></th>
									
								</tr>
								<tr>
									<th ><?php echo $origin.'';?>- Airport Improvement Fee</th>
									<th><?php echo ((4.2)*$tax_fee)/100 ;?></th>
									
								</tr><tr>
									<th ><?php echo $origin.'';?>- Security Duty</th>
									<th><?php echo ((1.2)*$tax_fee)/100 ;?></th>
									
								</tr><tr>
									<th ><?php echo $origin.'';?>- GST #1234-5678</th>
									<th><?php echo ((1.6)*$tax_fee)/100 ;?></th>
									
								</tr><tr>
									<th ><?php echo $origin.'';?>- GST #12345-678-901</th>
									<th><?php echo ((1.1)*$tax_fee)/100 ;?></th>
									
								</tr><tr>
									<th ><?php echo $dest.'';?>- Airport Security Tax</th>
									<th><?php echo ((4.5)*$tax_fee)/100 ;?></th>
									
								</tr><tr>
									<th ><?php echo $dest.'';?>- Airport Service tax</th>
									<th><?php echo ((7.4)*$tax_fee)/100 ;?></th>
									
								</tr><tr>
									<th >Fuel Surcharge</th>
									<th><?php echo (28*$tax_fee)/100 ;?></th>
									
								</tr><tr>
									<th >Total Base Fare(Per Passenger)</th>
									<th><?php echo $base_fare ;?></th>
									
								</tr><tr>
									<th >Number of Passenger</th>
									<th><?php echo $passengers ;?></th>
									
								</tr><tr >
									<th id="t_f">Total Fare</th>
									<th id="t_f1"><?php echo $total_swag ;?></th>
									
								</tr>
						</thead>
					</table>
				</div>
				<div style="font-size:20px; font-weight:bolder;padding-top:100px;" id="ti-para" class="col-md-6 ">
					<p>Ticket is not endorsable,non refundable,Changes allowed,Subject to availability later than two hours before departure. please read carefully all 
					fare restrictions.</p>
					<br><p style="font-size:30px;">Have a pleasent flight!</p>
					<br><br><br>
					<p>Paid by credit card XXXX-XXXX-XXXX-1254</p>
				</div>
			</div>
			</div>
		</div>
	</div>
<!----------
FOOTER
------------>
	<footer class="panel-footer" id="footer">
			<div class="container">
				
				<div class="row section-separator">
					<div style="font-size:12px;color:#878A8E;" class="col-md-6">
					<h1 style="color:white;font-size:17px; margin-bottom:40px;margin-top:20px;">Product Offering</h1>
						<p>Flights, Flight+Hotel Deals, International Flights, Hotels, International Hotels, Holidays in India, International Holidays, Cabs, Cheap Tickets to India, Bus Tickets, Rail, Route Planner, Flight Status, Mobile Apps</p><br>
						<h1 style="color:white;font-size:17px; margin-bottom:40px;margin-top:20px;">JET_Airways</h1>
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

<?php
		}
		else{ 
?>		<div style="margin-top:200px;padding:40px;
border:none;box-shadow:0 0 12px rgba(110,110,110,.4);">
			<center><h1 >It Seems you are not logged in please logged in first to book your flight</h1></center>
			<center><h1>Now you will redirect to login page shortly</h1></center>
			</div>
			<?php
			header('Location: new_login.php');
		}
	?>	
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	
	
   
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="jquery.js"></script>
	<script src="verify1.js"></script>
	
	<script>
		$('document').ready(function(){
			//$('#book_flight').css('display','none');
			$('#book_flight_pass').css('display','none');
			$('#payment_gateway').css('display','none');
			$('#final_ticket').css('display','none');
			$('html,body').scrollTop(0);
			
		}); 
		$('#continue').on('click',function(){
			$('#book_flight').css('display','none'); 
			$('#payment_gateway').css('display','none');
			$('#final_ticket').css('display','none');
			$('#book_flight_pass').show();
			$('html,body').scrollTop(0);
		});
		
		$('#window1').on('click',function(){
			$('#book_flight').css('display','none'); 
			$('#book_flight_pass').css('display','none');
			$('#final_ticket').css('display','none');
			$('#payment_gateway').show();
			$('html,body').scrollTop(0);
		});
		
		$('#payment_pass').on('click',function(){
			$('#book_flight').css('display','none'); 
			$('#book_flight_pass').css('display','none');
			$('#payment_gateway').css('display','none');
			
			$('#final_ticket').show();
			$('html,body').scrollTop(0);
		});
		
			$('#pay_you').on('click',function(){
			alert('Payment successful!! please click Continue for next step');
			
		});
		
	</script>
	<script>
				$('#window1').on('click',function(){
					
					$('#fname_field').attr('value',$('#fname').val());
					$('#lname_field').attr('value',$('#lname').val());
					//$('#title_field').attr('value',$('#title').val());
					$('#isd_field').attr('value',$('#isd_to').val());
					$('#num_field').attr('value',$('#num_to').val());
					$('#email_field').attr('value',$('#emailto').val());
					
				});
				$('#payment_pass').on('click',function(){
					
					$('#final_name1').html($('#fname').val());
					$('#final_name2').html($('#lname').val());
					//$('#lname_field').attr('option',$('#lname').val());
					
					
					
				});
				
			</script> 
			<?php 
						/* $connect = mysqli_connect("localhost", "root", "", "jet");
						$t_flight =$flight_code.' '.$flight_code_2;  
						//$t_flight_from = mysqli_real_escape_string($connect, $_POST["email"]);  
						//$t_to = mysqli_real_escape_string($connect, $_POST["gender"]);  
						//$t_aircraft = mysqli_real_escape_string($connect, $_POST["pass"]);  
						//$t_class = mysqli_real_escape_string($connect, $_POST["email"]);  
						//$t_passenger_name = mysqli_real_escape_string($connect, $_POST["gender"]);  
						$t_fln = $ticket_ser_1.'-'.$ticket_ser_2;
						$t_ticket_no = $fly_num_1.'-'.$fly_num_2;  
						//$t_nop = mysqli_real_escape_string($connect, $_POST["gender"]);  
						//$t_total_fare = mysqli_real_escape_string($connect, $_POST["pass"]);  
						//$t_credit_card = mysqli_real_escape_string($connect, $_POST["pass"]);  
					   
					if(isset($_POST['passenger_pass23'])){
						
					$query3 = "INSERT INTO passenger_ticket()  
					VALUES('','$t_flight', '$origin', '$dest', '$aircraft', '$class', '', $t_fln', '$t_ticket_no', '$passengers',
					 '$total_swag', '')
					";
					mysql_query($query3);
					?>
						
						<script>alert('entered');
						$('#final_name1').html($('#fname').val());
					$('#final_name2').html($('#lname').val());
					//$('#lname_field').attr('option',$('#lname').val());
					</script>
						
					
						<?php
} */
					?>
  </body>
  </html>
  
			<?php
		}else{
			?>
			<script>alert('empty all fields');
			window.location.href="index.php";
			</script>
			<?php
			
			}
	
	}
	