<?php 
session_start();					
include('script/connect.php');

if(isset($_POST['username']) && isset($_POST['password'])){
	
	$user=$_POST['username'];
	$pass=$_POST['password'];
	
	if(!empty($user) && !empty($pass)){
		$query="SELECT `users`.`email` FROM `jet`.`users`  
		WHERE `users`.`email` = '$user'  
		AND `users`.`password` = '$pass'";
		$query_run=mysql_query($query);
		if($query_run){
			$mysql_num_rows=mysql_num_rows($query_run);
			if($mysql_num_rows == 1){
				$element=mysql_fetch_assoc($query_run);
			
				$findname=mysql_query("select `users`.`name` from `jet`.`users` where `users`.`email`='$user'");
				$_SESSION['username']= mysql_result($findname,0,'name');
				
				if(isset($_SESSION['username'])){
					?>
					<script>
						alert('Welcome <?php echo $_SESSION['username']; ?>');
					</script>
					<?php
					header('Location: index.php');
				}							
			}else{
				?>
				<script>
					alert('Unable to log you at moment !!!! please try again');
				</script>
				<?php
			
			}
		}
	} 
}	


?>
<!DOCTYPE html>
<html lang="en">
  <head>
	
    <!-- Required meta tags -->
	<title>Airline | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="airline.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
 
 </head>
  <body>
 
<div style="border:none;padding:100px;">
			<div >
<div class="modal-content">
					<!--header  -->
					<div class="modal-header">
						<h3>Log in Window</h3>
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
				
				</body></html>