				function Firstname()
					{
						var Firstname=document.getElementById("txtfnameid").value;
						if (Firstname=="")
							{
						document.getElementById("errFirstname").innerHTML="First Name Required";
							}
						else
							{
						document.getElementById("errFirstname").innerHTML="";
							}				
					}
				function Designation()
					{
						var Designation=document.getElementById("txtdesignationid").value;
						if (Designation=="")
							{
						document.getElementById("errDesignation").innerHTML="Designation Required";
							}
						else
							{
						document.getElementById("errDesignation").innerHTML="";
							}				
					}
				function Company()
					{
						var Company=document.getElementById("txtcompanyid").value;
						if (Company=="")
							{
						document.getElementById("errCompany").innerHTML="Company Name Required";
							}
						else
							{
						document.getElementById("errCompany").innerHTML="";
							}				
					}

				var letters='ABCÇDEFGHIJKLMNÑOPQRSTUVWXYZabcçdefghijklmnñopqrstuvwxyzàáÀÁéèÈÉíìÍÌïÏóòÓÒúùÚÙüÜ'
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
							
				
				function address()
					{
						var Address=document.getElementById("txtaddressid").value;
						if (Address=="")
							{
						document.getElementById("errAddress").innerHTML="Address Required";
							}
						else
							{
						document.getElementById("errAddress").innerHTML="";
							}				
					}
				
				function City()
					{
						var City=document.getElementById("txtcityid").value;
						if (City=="")
							{
						document.getElementById("errCity").innerHTML="City Required";
							}
						else
							{
						document.getElementById("errCity").innerHTML="";
							}				
					}
				
				function State()
					{
						var State=document.getElementById("txtstateid").value;
						if (State=="")
							{
						document.getElementById("errState").innerHTML="State Required";
							}
						else
							{
						document.getElementById("errState").innerHTML="";
							}				
					}
				function Country()
					{
						var Country=document.getElementById("txtcountryid").value;
						if (Country=="")
							{
						document.getElementById("errCountry").innerHTML="Country Required";
							}
						else
							{	
						document.getElementById("errCountry").innerHTML="";
							}				
					}
				function Pincode()
					{

						var Pincode =document.getElementById("txtpincodeid").value;
						if(Pincode=="") 
							{
						
						document.getElementById("errPincode").innerHTML = "Pincode Required";
							}
						else
							{

						document.getElementById("errPincode").innerHTML = ""; 

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
					function Landline()
					{
						var Lan =document.getElementById("txtlandlineid").value;
						if(Lan=="")
							{
						document.getElementById("errLandline").innerHTML = "Landline Required";
							}
						 else  
							{  
						document.getElementById("errLandline").innerHTML = "";
							
							}  
					
					}
							
					function val()
						{
							var Firstname=document.getElementById("txtfnameid").value;
							var Designation =document.getElementById("txtdesignationid").value;
							var Email =document.getElementById("txtemailid").value;
							var Company =document.getElementById("txtcompanyid").value;
							var Address =document.getElementById("txtaddressid").value;
							var City =document.getElementById("txtcityid").value;
							var State =document.getElementById("txtstateid").value;
							var Country =document.getElementById("txtcountryid").value;
							var Pincode =document.getElementById("txtpincodeid").value;
							var MobileNumber =document.getElementById("txtmobileid").value;
							var Landline =document.getElementById("txtlandlineid").value;
							var valid=true;
							if (Firstname=="")
								{
							document.getElementById("errFirstname").innerHTML="First Name Required";
							valid=false;
								}
							else
								{
							valid=true;								
							document.getElementById("errFirstname").innerHTML="";
								 }
							
							if (Designation=="")
								{
							document.getElementById("errDesignation").innerHTML="Designation Required";
							valid=false;
								}
							else
								{
							valid=true;								
							document.getElementById("errDesignation").innerHTML="";
								}
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
							if (Company=="")
								{
							document.getElementById("errCompany").innerHTML="Company Required ";
							valid=false;
								}
							else
							   {
							valid=true;								
							document.getElementById("errCompany").innerHTML="";	
								}
							if (Address=="")
								{
							document.getElementById("errAddress").innerHTML=" Address Required";
							valid=false;
								}
							else
							   {
							valid=true;								
							document.getElementById("errAddress").innerHTML="";
								}
							if (City=="")
								{
							document.getElementById("errCity").innerHTML="City Required";
							valid=false;
								}
							else
							   {
							valid=true;								
							document.getElementById("errCity").innerHTML="";	
								}
							if (State=="")
								{
							document.getElementById("errState").innerHTML="State Required ";
							valid=false;
								}
							else
							   {
							valid=true;								
							document.getElementById("errState").innerHTML="";
								}
							if (Country=="")
								{
							document.getElementById("errCountry").innerHTML="Country Required";
							valid=false;
								}
							else
							   {
							valid=true;								
							document.getElementById("errCountry").innerHTML="";
								}
							if (Pincode=="")
								{
							document.getElementById("errPincode").innerHTML="Pincode Required ";
							valid=false;
								}
							else
							   {
							valid=true;								
							document.getElementById("errPincode").innerHTML="";	
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
							if (Landline=="")
								{
							document.getElementById("errLandline").innerHTML=" Landline Required";
							valid=false;
								}
							else
							   {
							valid=true;								
							document.getElementById("errLandline").innerHTML="";
								}
									return valid;
															
						}	
						