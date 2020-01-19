$(document).ready(function(){
		  $flag=1;
    	$("#firstname").focusout(function(){
    	if($(this).val()==''){
        	 $(this).css("border-color", "#FF0000");
        	 $('#submit').attr('disabled',true);
        	 $("#error_firstname").text("* You have to enter your First name!");
       }
       else
       {
        	 $(this).css("border-color", "#2eb82e");
        	 $('#submit').attr('disabled',false);
        	 $("#error_firstname").text("");
       }
       });
			 $("#lastname").focusout(function(){
			if($(this).val()==''){
					 $(this).css("border-color", "#FF0000");
					 $('#submit').attr('disabled',true);
					 $("#error_lastname").text("* You have to enter your Last name!");
			 }
			 else
			 {
					 $(this).css("border-color", "#2eb82e");
					 $('#submit').attr('disabled',false);
					 $("#error_lastname").text("");
			 }
			 });
			 $("#username").focusout(function(){
     	 if($(this).val()==''){
         		$(this).css("border-color", "#FF0000");
         		$('#submit').attr('disabled',true);
         		$("#error_username").text("* You have to enter your username!");
       }
       else
       {
         		$(this).css("border-color", "#2eb82e");
         		$('#submit').attr('disabled',false);
         		$("#error_username").text("");
       }
       });
			 $("#password").focusout(function(){
			 if($(this).val()==''){
					 $(this).css("border-color", "#FF0000");
					 $('#submit').attr('disabled',true);
					 $("#error_password").text("* You have to enter your password!");
			 }
			 else
			 {
					 $(this).css("border-color", "#2eb82e");
					 $('#submit').attr('disabled',false);
					 $("#error_password").text("");
			 }
			});
      $("#email").focusout(function(){
    	if($(this).val()==''){
        	 $(this).css("border-color", "#FF0000");
        	 $('#submit').attr('disabled',true);
        	 $("#error_email").text("* You have to enter your email!");
      }
      else if (!filter_var($(this).val(), FILTER_VALIDATE_EMAIL)) {
				   $(this).css("border-color", "#FF0000");
					 $('#submit').attr('disabled',true);
					 $("#error_email").text("");
			}else{
        	 $(this).css("border-color", "#2eb82e");
        	 $('#submit').attr('disabled',false);
        	 $("#error_email").text("");
       }
       });
       $("#gender").focusout(function(){
       $(this).css("border-color", "#2eb82e");
       });
       $("#age").focusout(function(){
    	 if($(this).val()==''){
        	 $(this).css("border-color", "#FF0000");
        	 $('#submit').attr('disabled',true);
        	 $("#error_age").text("* You have to enter your Age!");
       }
       else
       {
        	 $(this).css({"border-color":"#2eb82e"});
        	 $('#submit').attr('disabled',false);
        	 $("#error_age").text("");
       }
       });

   		$( "#submit" ).click(function() {
   		if($("#firstname" ).val()=='')
   		{
        	 $("#firstname").css("border-color", "#FF0000");
        	 $('#submit').attr('disabled',true);
        	 $("#error_firstname").text("* You have to enter your first name!");
      }
      if($("#lastname" ).val()=='')
   	  {
        	 $("#lastname").css("border-color", "#FF0000");
        	 $('#submit').attr('disabled',true);
        	 $("#error_lastname").text("* You have to enter your Last name!");
      }
			if($("#username" ).val()=='')
			{
					 $("#username").css("border-color", "#FF0000");
					 $('#submit').attr('disabled',true);
					 $("#error_username").text("* You have to enter your Username!");
			}
			if($("#password" ).val()=='')
			{
					 $("#password").css("border-color", "#FF0000");
					 $('#submit').attr('disabled',true);
					 $("#error_password").text("* You have to enter your Password!");
		  }
   		if($("#email" ).val()=='')
   		{
        	 $("#email").css("border-color", "#FF0000");
        	 $('#submit').attr('disabled',true);
        	 $("#error_email").text("* You have to enter your Email!");
       }
   		 if($("#age" ).val()=='')
   		 {
        		$("#age").css("border-color", "#FF0000");
        		$('#submit').attr('disabled',true);
        		$("#error_age").text("* You have to enter your Age!");
       }
			});
	});
