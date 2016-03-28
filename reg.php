<html lang="en">
	<head>
		<title>Registration</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">    
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="resources/css/alveolae.css">
        <link rel="stylesheet" href="resources/css/bootstrap.min-us.css">
		<link rel="stylesheet" href="resources/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="resources/css/font-awesome.css">
		<script src="resources/js/validation.js"></script>
		<script src="resources/js/formValidation.js"></script>
	</head>
		<style>
	.outer {
    display: table;
    position: absolute;
    height: 100%;
    width: 100%;
}

.middle {
    display: table-cell;
    vertical-align: top;
     padding:20px;
}

.inner {
    margin-left: auto;
    margin-right: auto; 
    width: 60%;
	border:1px solid #fff;
	border-radius: 25px;
	padding:20px;
}
	.line-border {
		width:260px;
		margin: 20px;
		border:1px solid #fff;
		padding:20px;
		border-radius: 25px;
		
}
.clr{
	color: #ff0000;	
}
	</style>
	<body>
		<div class="outer">
			<div class="middle">
				<div class="inner">
					<div class="main-content">
						<form action="" method="post">
							
									<h4>Sign up to get the latest Trends</h4>
									<label>Please fill out all the fields marked with <font color="#FF0000"> *</font></label>								
								<div class="row">
									<div class="span10">
										<div class="span2">
											<label>First Name<font color="#FF0000"> *</font></label>
										</div>
										<div class="span2">
											<input type="text" class="span2" maxlength="30" placeholder ="Enter First Name" name="txtfnamename" onkeypress="return AlphaOnly(event);" onblur="Firstname();" id="txtfnameid" tabindex="1" autofocus>
											<span id="errFirstname" class ="clr"></span>	
										</div>												
										<div class="span1">
											<label>Last Name</label>
										</div>
										<div class="span3">
											<input class="span2" type="text" onkeypress="return AlphaOnly(event);" maxlength="30" placeholder ="Enter Last Name" name="txtlnamename" id="txtlnameid" tabindex="2">
										</div>											
									</div>	
								</div>									
								<div class="row">
									<div class="span10">
										<div class="span2">
											<label>Designation<font color="#FF0000"> *</font></label>
										</div>
										<div class="span3">
											<input class="span5" type="text" name="txtdesignationname" placeholder ="Enter Designation"  maxlength="30" onblur ="Designation()" id="txtdesignationid" tabindex="3">
											<span id="errDesignation" class ="clr"></span>	
										</div>
																		
									</div>	
								</div>
								<div class="row">
									<div class="span10">
										<div class="span2">
											<label>Email Address<font color="#FF0000"> *</font></label>
										</div>
										<div class="span3">
											<input class="span5" type="text" name="txtemailname" placeholder ="Enter Email" maxlength="30" onblur ="email()"  id="txtemailid" tabindex="4">
											<span id="errEmail" class ="clr"></span>	
										</div>										
									</div>	
								</div>
								<div class="row">
									<div class="span10">
										<div class="span2">
											<label>Company<font color="#FF0000"> *</font></label>
										</div>
										<div class="span3">
											<input class="span5"  type="text" name="txtcompanyname" placeholder ="Enter Company"  maxlength="160" onblur ="Company()" id="txtcompanyid" tabindex="5">
											<span id="errCompany" class ="clr"></span>	
										</div>									
									</div>	
								</div>
								<div class="row">
									<div class="span10">
										<div class="span2">
											<label>Street Address<font color="#FF0000"> *</font></label>
										</div>
										<div class="span3">
											<input class="span5" type="text" name="txtaddressname"  placeholder ="Enter Address" onblur ="address()" maxlength="60" id="txtaddressid" tabindex="6">
											<span id="errAddress" class ="clr"></span>
										</div>										
									</div>	
								</div>
								<div class="row">
									<div class="span10">
										<div class="span2">
											<label>City<font color="#FF0000"> *</font></label>
										</div>
										<div class="span3">
											<input  class="span5" type="text" name="txtcityname" placeholder ="Enter City" maxlength="30" onblur ="City()"  id="txtcityid" tabindex="7">
											<span id="errCity" class ="clr"></span>	
										</div>																			
									</div>	
								</div>
								<div class="row">
									<div class="span10">
										<div class="span2">
											<label>State<font color="#FF0000"> *</font></label>
										</div>
										<div class="span3">
											<input class="span5" type="text" name="txtstatename" placeholder ="Enter State" maxlength="30" onblur ="State()" id="txtstateid" tabindex="8">
											<span id="errState" class ="clr"></span>	
										</div>										
									</div>	
								</div>
								<div class="row">
									<div class="span10">
										<div class="span2">
											<label>Country<font color="#FF0000"> *</font></label>
										</div>
										<div class="span3">
											<input class="span5" type="text" name="txtcountryname" placeholder ="Enter Country" maxlength="30" onblur ="Country()" id="txtcountryid" tabindex="9">
											<span id="errCountry" class ="clr"></span>
										</div>											
									</div>	
								</div>
								<div class="row">
									<div class="span10">
										<div class="span2">
											<label>Pincode<font color="#FF0000"> *</font></label>
										</div>
										<div class="span3">
											<input class="span5" type="text" name="txtpincodename" placeholder ="Enter Pincode" onblur ="Pincode()" maxlength="15" id="txtpincodeid" tabindex="10">
												<span id="errPincode" class ="clr"></span>	
										</div>											
									</div>	
								</div>
								<div class="row">
									<div class="span10">
										<div class="span2">
											<label>Mobile Number<font color="#FF0000"> *</font></label>
										</div>
										<div class="span3">
											<input class="span5" type="text" name="txtmobilename" placeholder ="Enter Mobile Number" maxlength="30" onblur ="MobileNumber()" id="txtmobileid" tabindex="11">
											<span id="errMobile" class ="clr"></span>	
										</div>												
									</div>	
								</div>
								<div class="row">
									<div class="span10">
										<div class="span2">
											<label>Landline<font color="#FF0000"> *</font></label>
										</div>
										<div class="span3">
											<input class="span5" type="text" name="txtlandlinename" placeholder ="Enter Landline" maxlength="30" onblur ="Landline()"  id="txtlandlineid" tabindex="12">
											<span id="errLandline" class ="clr"></span>	
										</div>										
									</div>	
								</div>
							
							<div style="text-align:center;" >
								<input type="submit" class="btn primary" name ="Register" value="Register" onclick="return val()" style=" margin-top: 5px;">
							</div>
							<?php
								include "database_connect.php";
								function test_input($data) 
								{
								   $data = trim($data);
								   $data = stripslashes($data);
								   $data = htmlspecialchars($data);
								   return $data;
								}
								$FirstName = $LastName= $Designation= $email= $company= $address= $city= $state= $country= $pin=  $mob= $phone="";
								include "mail1.php"; 
									if(isset($_POST['Register']))
									{
										 if (!empty($_POST["txtfnamename"])) 
										 { 
												$FirstName = test_input($_POST["txtfnamename"]);
								         }
										
									     $LastName = test_input($_POST["txtlnamename"]);
									  if (!empty($_POST["txtlnamename"])) 
										 { 
												$LastName = test_input($_POST["txtlnamename"]);
								         }
										if (!empty($_POST["txtdesignationname"])) {
								        $Designation=$_POST['txtdesignationname'];
								 
								   }
									if (!empty($_POST["txtemailname"])) {     
										if(filter_var($_POST["txtemailname"], FILTER_VALIDATE_EMAIL)) {
										 $email = test_input($_POST["txtemailname"]);
									   }
									   }
								   if (!empty($_POST["txtcompanyname"])) {
									$company=test_input($_POST['txtcompanyname']);
									 
								   }
									if (!empty($_POST["txtaddressname"])) {
									$address=test_input($_POST['txtaddressname']);
									 
								   }
									if (!empty($_POST["txtcityname"])) {
									$city=test_input($_POST['txtcityname']);
									 
								   }	
									if (!empty($_POST["txtstatename"])) {
									$state=test_input($_POST['txtstatename']);
									 
								   }	
									if (!empty($_POST["txtcountryname"])) {
									$country=test_input($_POST['txtcountryname']);
									 
								   }	
									if (!empty($_POST["txtpincodename"])) {
									$pin=test_input($_POST['txtpincodename']);
									 
								   }
								   if (!empty($_POST["txtmobilename"])) {
									$mob=test_input($_POST['txtmobilename']);
									 
								   }	
									if (!empty($_POST["txtlandlinename"])) {
									$phone=test_input($_POST['txtlandlinename']);
									 
								   }	
											$role="User";
											$email1="info@jindalbuttons.com";
								if(($FirstName !="")&&($LastName!="")&&($Designation!="")&&($email!="")&&($company!="")&&($address!="")&&($city!="")&&($state!="")&&($pin!="")&&($mob!="")&&($phone!=""))
										{	
											$pdo = Database::connect();
				$sql = "SELECT * FROM jpb_ws_users WHERE EMAIL = '$email'";
				$query =  $pdo->prepare( $sql );
				$query->execute();
				$row = $query->fetch();
				
						if($row > 0) 
							{
								echo "<center><font color='#FF0000'>You are already Registered.   Please contact info@jindalbuttons.com for your password.</font></center>";
							}
											else
											{
											try{
											$pdo = Database::connect();
											$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$sql = "INSERT INTO jpb_ws_users(FIRSTNAME,LASTNAME,DESIGNATION,EMAIL,ROLE,COMPANY,ADDRESS,CITY,STATES,COUNTRY,PINCODE,MOBILE,LANDLINE) values(?, ?, ?, ?,?, ?, ?, ?,?, ?, ?,?,?)";
											$q = $pdo->prepare($sql);
											$q->execute(array($FirstName,$LastName,$Designation,$email,$role,$company,$address,$city,$state,$country,$pin,$mob,$phone));
											Database::disconnect();
											echo "<center><font color='#33CC33'>You have successfully registered.<br>Thank you for the registration ,we will get in touch with you on your email in next 24 hours</font></center>";
											if($email)
											{
												$FromEmail	=	'info@jindalbuttons.com'; 
												$Subject	=	'Trends User Registration - Testing ';  
												$Message	=	'You have successfully registered. <br>Thank you for the registration ,we will get in touch with you on your email in next 24 hours.<br>';
												$FromName	=	'Jindal Poly Buttons Pvt Ltd'; 
												
												sendEmail($FromEmail,$Subject,$Message,$FromName,$email);
											}
											if($email1)
											{
												$FromEmail	=	'info@jindalbuttons.com'; 
												$Subject	=	'Trends User Registration  - Testing';  
												 $Message1="A request for access to trends page is received from the following person.<br>
															<table border=0>
															<tr><td>First Name</td><td>$FirstName</td></tr>
															<tr><td>Last Name</td><td>$LastName</td></tr>
															<tr><td>Designation</td><td>$Designation</td></tr>
															<tr><td>Email Address</td><td>$email</td></tr>
															<tr><td>Company</td><td> $company</td></tr>
															<tr><td>Street Address</td><td> $address</td></tr>
															<tr><td>City</td><td> $city</td></tr>
															<tr><td>State</td><td> $state</td></tr>
															<tr><td>Country</td><td>$country</td></tr>
															<tr><td>Pincode</td><td> $pin</td></tr>
															<tr><td>Mobile Number</td><td>$mob</td></tr>
															<tr><td>Landline</td><td>$phone</td></tr></table>
															This is for your informaiton and necessary approval.";
												$FromName	=	'Jindal Poly Buttons Pvt Ltd'; 
												
												sendEmail($FromEmail,$Subject,$Message1,$FromName,$email1);
											}
										}
											
											catch(Exception $e){
												echo "<center><font color='#FF0000'>Please contact info@jindalbuttons.com </font></center>";
											}
								             }
									}}
								?>
					</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>