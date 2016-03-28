function password()
					{
						var Password=document.getElementById("txtpasswordid").value;
						var re = /.{8,}/;
    					if (Password=="")
							{
						document.getElementById("errPassword").innerHTML="New Password Required";
							}
						else if(Password.match(re))
							{
						document.getElementById("errPassword").innerHTML="";
				
							}	
						else
							{
						document.getElementById("errPassword").innerHTML="Minimum 8 Digit Required";
							}
					}
function confirmpassword()
				{
						var Password=document.getElementById("txtpasswordid").value;
						var CPassword = document.getElementById("txtcpasswordid").value;
    					if (CPassword=="")
						{
						document.getElementById("errCPassword").innerHTML="Confirm Password Required";
						}
						else if(!CPassword.match(Password))
						{
							document.getElementById("errCPassword").innerHTML = "Passwords  Do Not Match!";
						}
						else
						{
							document.getElementById("errCPassword").innerHTML = "";
						}
				}		
function flogin()
						{
						var Password=document.getElementById("txtpasswordid").value;
						var CPassword = document.getElementById("txtcpasswordid").value;
						var valid=true;
						if (Password=="")
								{
							document.getElementById("errPassword").innerHTML="Password Required";
							valid=false;
								}
							else
								{
							valid=true;								
							document.getElementById("errPassword").innerHTML="";
								 }
						if (CPassword=="")
								{
							document.getElementById("errCPassword").innerHTML="Confirm Password Required";
							valid=false;
								}
                                                 else if(!CPassword.match(Password))
							{
								document.getElementById("errCPassword").innerHTML =    "Passwords  Do Not Match!";
								valid=false;
							}
							else
								{
							valid=true;								
							document.getElementById("errCPassword").innerHTML="";
								 }
							return valid;
						}	