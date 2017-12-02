
<?php
//insert.php  
$connect = mysqli_connect("localhost", "root", "", "jet");
if(!empty($_POST))
{
 ?>
	<script type="text/javascript">
	alert('whoooo script is working baby!');
	</script>
	<?php
 $name = mysqli_real_escape_string($connect, $_POST["name"]);  
    $email = mysqli_real_escape_string($connect, $_POST["email"]);  
    $gender = mysqli_real_escape_string($connect, $_POST["gender"]);  
    $pass = mysqli_real_escape_string($connect, $_POST["pass"]);  
   // $re_pass = mysqli_real_escape_string($connect, $_POST["re_pass"]);
    $query = "
    INSERT INTO users()  
     VALUES('','$name', '$gender', '$email', '$pass')
    ";
	
	
  if(mysqli_query($connect,$query)){
	  
  }else{
	  ?>
	<script type="text/javascript">
	alert('Error in script!');
	</script>
	<?php
  }
}else{
	  ?>
	<script type="text/javascript">
	alert('something wrongt!');
	</script>
	<?php
  }
?>
