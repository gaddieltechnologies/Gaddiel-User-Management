<?php
	session_start();		
	?>
<html>
	<head>
		<title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">    
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="resources/css/alveolae.css">
        <link rel="stylesheet" href="resources/css/bootstrap.min.css">
		<link rel="stylesheet" href="resources/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="resources/css/font-awesome.css">
		<script src="resources/js/login.js"></script>
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
    padding-top:15px;
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
	</style>
	<!--style="text-align: center"-->
		<body>
					<div class="outer">	
					    <div class="middle">					
							<div class="inner">							  
								<form method="post" action="" >
								<center>
								<div class="row">
									<div class="span3">
										<label>Username</label>
									</div>	
								</div>	
								<div class="row">									
									<div class="span3">
										<input type="text" name="txtemailname" value=""  class="span3" autofocus>
									</div>
								</div>	
								<div class="row">
									<div class="span3">
										<label>Password</label>
									</div>	
								</div>	
								<div class="row">									
									<div class="span3">
										<input type="password" name="txtpasswordname" value=""   class="span3">
									</div>
								</div>
								<div class="row">									
									<div class="span3">								
										<p class="remember_me">
											<label class="checkbox">
												<input type="checkbox" name="remember_me" id="remember_me">Remember me
											</label>
										</p>										
									</div>
								</div>	
								<div class="row">									
									<div class="span3">
										<input type="submit" name="commit" onclick="return checkemail();"  value="Sign In" class="btn  span2">
									</div>
							    </div>	

								</form>	
								<div class="pull-left"><a href="reg.php" >New User Sign Up</a></div><div class="pull-right"> <a href="fpassword.php">Forgot password</a>	</div></center>								
					
				
<?php
		require 'database_connect.php';
		function test_input($data) 
		{
		   $data = trim($data);
		   $data = stripslashes($data);
		   $data = htmlspecialchars($data);
		   return $data;
		}

		if(isset($_POST['commit']))		
			{
				$username= $password="";
				if (!empty($_POST["txtemailname"])) { 			
				if(filter_var($_POST["txtemailname"], FILTER_VALIDATE_EMAIL)) {			

				 $username = $_POST["txtemailname"];
				 $username =strtolower($username);
			   }
			   }
				if (!empty($_POST["txtpasswordname"])) {
					$password=$_POST['txtpasswordname'];
				 
						}
					if(($username !="")&&($password!=""))
						{	
					try{
				$pdo = Database::connect();
				$sql = "SELECT * FROM jpb_ws_users WHERE EMAIL = '$username' and PASS_WORD= '$password'";
				$query =  $pdo->prepare( $sql );
				$query->execute();
				$count = $query->rowCount();
				if($count<2)
				{
					$pdo = Database::connect();
				$sql = "SELECT * FROM jpb_ws_users WHERE EMAIL = '$username' and PASS_WORD= '$password'";
				$query =  $pdo->prepare( $sql );
				$query->execute();
				$row = $query->fetch();
				$role = $row['ROLE'];
				$user = $row['EMAIL'];
				$_SESSION["user"]=$user;
				$_SESSION["role"]=$role;
				$active_flag = $row['ACTIVE_FLAG'];
				$change_pwd = $row['DEFAULT_PASSWORD_CHANGED'];
				
			if($row > 0) 
			{
				if($active_flag == 1)
				{
					if($change_pwd == 'Y')
					{
						echo '<script type="text/javascript">
				window.location.href = "moodboards/index.php";
				</script>';
					}
					else
					{
						echo '<script type="text/javascript">
				window.location.href = "firstlogin.php";
				</script>';
					}
				}
				else{
					echo "<div style='color:red;'>  Invalid username password.   Please contact  info@jindalbuttons.com
</div>";
				}
				
			}

		else
		{
			echo "<div style='color:red;'> Invalid username password.  <br /> Please contact info@jindalbuttons.com </div>";}
			
		}
				
				
		else{
			echo "System Error.  Please contact  info@jindalbuttons.com";
		}	
					}		
	catch(Exception $e){
		echo "<center>Please contact  info@jindalbuttons.com </center>";
		}
   }
   
			}
?>					</div>
			</div>
		</div>
		</body>
</html>

