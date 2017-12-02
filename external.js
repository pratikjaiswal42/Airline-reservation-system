
$(document).ready(function(){
	 $('#form1').on("submit", function(event){  
  
  event.preventDefault();
	
 
   $.ajax({  
	 url:"script/contact.php",  
    method:"POST",  
    data:$('#form1').serialize(),  
    beforeSend:function(){  
	
     $('#contact_but').html('Sending....');  
    },  
    success:function(data){  
     $('#form1')[0].reset();  
     //$('#popup1').hide();
	alert('thanks for Your valuable feedback we will get back to you shortly...');
     location.reload(); 
    } 
	
   });  
  })  
 });


