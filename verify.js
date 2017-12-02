$(document).ready(function(){  
      $('#login_button').click(function(){  
           var username = $('#username').val();  
           var password = $('#password').val();  
           if(username != '' && password != '')  
           {  
                $.ajax({  
                     url:"login_script.php",  
                     method:"POST",  
                     data: {username:username, password:password}, 
					 beforeSend:function(){  
					 $('#login_button').val("please wait");  
					},  
                     success:function(data)  
                     {  
                          //alert(data);  
                          if(data == 'No')  
                          {  
                               alert("Wrong Data");  
                          }  
                          else  
							  
                          {  	
						  							   
						  alert("Right Data");
                               $('#popup').hide(); 

                               location.reload();  
                          }  
                     }  
                });  
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  
      }); 

  }); 	  