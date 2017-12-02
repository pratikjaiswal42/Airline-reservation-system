<?php

//include('connect.php');
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
				}							
			}else{
				?>
				<script>
					alert('Unable to log you at moment !!!!');
				</script>
				<?php
			
			}
		}
	} 
}	
?>