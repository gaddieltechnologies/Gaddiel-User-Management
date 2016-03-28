
function email()
					{
					var valid=true;	
						var email =document.getElementById("txtemailid").value;
							
						var ema =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;  
						if(email=="")
							{
						document.getElementById("errEmail").innerHTML = "Enter valid email id";
						valid=false;
							}
						else if(!email.match(ema))  
							{  
						document.getElementById("errEmail").innerHTML = "Enter valid email id";
						valid=false;
							}  
						else  
							{  
						document.getElementById("errEmail").innerHTML = "";
							valid=true;
							}  
return valid;
					}