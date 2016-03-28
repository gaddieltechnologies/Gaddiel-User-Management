				
				var letters=' ABCÇDEFGHIJKLMNÑOPQRSTUVWXYZabcçdefghijklmnñopqrstuvwxyzàáÀÁéèÈÉíìÍÌïÏóòÓÒúùÚÙüÜ'
				var numbers='1234567890'
				
				function alpha(e,allow) 
					{
						var k;
						k=document.all?parseInt(e.keyCode): parseInt(e.which);
						return (allow.indexOf(String.fromCharCode(k))!=-1);
					}
				function email()
					{
						var email =document.getElementById("txtemailid").value;
							
						var ema =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;  
						if(email=="")
							{
						document.getElementById("errEmail").innerHTML = "Email Required";
							}
						else if(!email.match(ema))  
							{  
						document.getElementById("errEmail").innerHTML = "Not a valid email";
							}  
						else  
							{  
						document.getElementById("errEmail").innerHTML = "";
							
							}  

					}

				  function MobileNumber()
					{

						var mob =document.getElementById("txtmobileid").value;
						if(mob=="")
							{
						document.getElementById("errMobile").innerHTML = " Mobile Number Required";
							}
					
						 else  
							{  
						document.getElementById("errMobile").innerHTML = "";
							
							}  
					
					}
					
					function fpassword()
						{
							
							var Email =document.getElementById("txtemailid").value;

							var MobileNumber =document.getElementById("txtmobileid").value;
							
							var valid=true;

							if (Email=="")
								{
							document.getElementById("errEmail").innerHTML="Email Required";
							valid=false;
								}
							else
							   {
							valid=true;								
							document.getElementById("errEmail").innerHTML="";
								}

							if (MobileNumber=="")
								{
							document.getElementById("errMobile").innerHTML=" Mobile Number Required";
							valid=false;
								}
							else
							   {
							valid=true;								
							document.getElementById("errMobile").innerHTML="";
								}
						
									return valid;
															
						}	
						