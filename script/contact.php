<?php
$connect = mysqli_connect("localhost", "root", "", "jet");
if(!empty($_POST))
{
 
 $contact_name = mysqli_real_escape_string($connect, $_POST["contact_name"]);  
    $contact_mail = mysqli_real_escape_string($connect, $_POST["contact_mail"]);  
    $contact_msg = mysqli_real_escape_string($connect, $_POST["contact_msg"]);  
   
   $query = "
    INSERT INTO contact()  
     VALUES('','$contact_name', '$contact_mail', '$contact_msg')
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