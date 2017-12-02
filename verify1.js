 
$(document).ready(function(){
	 $('#insert_form').on("submit", function(event){  
  
  event.preventDefault();
	
  if($('#name').val() == "")  
  {  
   alert("Name is required");  
  }  
  else if($('#email').val() == '')  
  {  
   alert("email is required");  
  }  
  else if($('#pass').val() == '')
  {  
   alert("password is required");  
  }
  else if($('#re_pass').val() == '')
  {  
   alert("repass is required");  
  }
  else if($('#re_pass').val() != $('#pass').val())
  {  
   alert("pass and repass must match");  
  }
   
  else  
  {  
   $.ajax({  
    url:"register_script.php",  
    method:"POST",  
    data:$('#insert_form').serialize(),  
    beforeSend:function(){  
     $('#register').val("Please wait....");  
    },  
    success:function(data){  
     $('#insert_form')[0].reset();  
     $('#popup1').hide();
	alert('thanks for register u will be redirected to login page shortly...');
     location.reload(); 

    }  
   });  
  }  
 });



}); 