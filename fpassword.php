<?php
session_start();
?>
<html>
	<head>
		<title>Forgot Password</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">    
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="resources/css/alveolae.css">
        <link rel="stylesheet" href="resources/css/bootstrap.min.css">
		<link rel="stylesheet" href="resources/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="resources/css/font-awesome.css">
		<script type="text/javascript" src="resources/js/fpassword.js"></script>
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
    width: 260px;
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
					<form action="" method="post"  >
						<div class="pull-right"><a href="login.php" >Close</a></div>								
						<div class="row">
							<div class="span3">
								<label>Email Address <font color="#FF0000"> *</font></label>
							</div>	
						</div>
						<div class="row">
							<div class="span3">
								<input class="span3" type="text" onblur="email()" maxlength="30"  name="txtusername"  id="txtemailid">
							</div>	
						</div>
						<div class="row">
							<div class="span3">
									<span id="errEmail" class ="clr"></span>
							</div>	
						</div>
						<div class="row">
							<div class="span3">
								<label>Mobile Number<font color="#FF0000"> *</font></label>
							</div>	
						</div>
						<div class="row">
							<div class="span3">
								<input class="span3" type="text" onblur="MobileNumber()"  name="txtmobilename" maxlength="30" id="txtmobileid">
							</div>	
						</div>
						<div class="row">
							<div class="span3">
								<span id="errMobile" class ="clr"></span>
							</div>	
						</div>
						<div class="row">
							<div class="span3">
								<input class="btn span3" type="submit" name ="submit" value="Submit" onclick="return fpassword()">
							</div>	
						</div>
					</form>
				
<?php
	require 'database_connect.php';
	include "mail1.php"; 
	function test_input($data) 
	{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}
	$username= $mob= "";
	if(isset($_POST['submit']))
		{
			if (!empty($_POST["txtusername"])) {
				if(filter_var($_POST["txtusername"], FILTER_VALIDATE_EMAIL)) {
					$username=test_input($_POST['txtusername']);
				}
			   }
			if (!empty($_POST["txtmobilename"])) {
				$mob=test_input($_POST['txtmobilename']);
				 
			   }
			if(($username !="")&&($mob!=""))
				{
					try{
			$pdo = Database::connect();
			$sql = "SELECT PASS_WORD FROM jpb_ws_users WHERE EMAIL = '$username' and MOBILE= '$mob'";
			$query =  $pdo->prepare( $sql );
			$query->execute();
			$row = $query->fetch();
			$pass  =  $row['PASS_WORD'];
					if($row > 0) 
					{
						$FromEmail="info@jindalbuttons.com";
						$Subject="Trends User Forgot Password";
						$Message="Jindal Poly Button Pvt Ltd To access our website Trends Page  password=$pass Thank you";
						$FromName="Jindal Poly Buttons Pvt Ltd";
						$ToEmail=$username;
						sendEmail($FromEmail,$Subject,$Message,$FromName,$ToEmail);
						echo "<div class='alert alert-info'>We send your password to your registered mail id</div>";
					}
				
					else
					{
						echo "<div style='color:#FF0000'>  Invalid EmailAddress, MobileNumber.   Please contact info@jindalbuttons.com </div>";}
					
					}
				
					catch(Exception $e){
										echo "<center><font color='#FF0000'>Please contact info@jindalbuttons.com</font> </center>";
									   }
							        }
						    	}
			?>
			</div>
			</div>
		</div>				
	</body>
</html>