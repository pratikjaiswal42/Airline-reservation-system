<?php
$hostname='localhost';
$user='root';
$password='';
$db='jet';
//$connect=mysqli_connect($hostname,$user,$password,$db);

if(@mysql_connect($hostname,$user,$password) && mysql_select_db($db)){
	}else{
		?>
		<script type="text/javascript">
		alert("couldn't found server db please contact to developer for support !");
		</script>
		<?php
}


?>