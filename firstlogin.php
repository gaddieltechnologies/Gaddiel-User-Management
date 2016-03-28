<?php
session_start();
?>
<html>
	<head>
		<title>First Login</title>		
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">    
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="resources/css/alveolae.css">
        <link rel="stylesheet" href="resources/css/bootstrap.min.css">
		<link rel="stylesheet" href="resources/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="resources/css/font-awesome.css">
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
					<form action="" method="post">
						<div class="pull-right"><a href="login.php">Close</a></div>	
						<div class="row">
							<div class="span3">
								<label>Username</label>
							</div>	
						</div>
						<div class="row">
							<div class="span3">
								<input class="span3" type="text" disabled value="<?php echo $_SESSION['user'];?>"  name="txtusername" maxlength="30"  id="txtuserid">
							</div>	
						</div>
						<div class="row">
							<div class="span3">
								<label>New Password<font color="#FF0000"> *</font></label>
							</div>	
						</div>
						<div class="row">
							<div class="span3">
								<input class="span3" type="password" name="txtpasswordname" onblur ="password()" maxlength="60"  id="txtpasswordid">
								<span id="errPassword" class ="clr"></span>
							</div>	
						</div>
						<div class="row">
							<div class="span3">
								<label>Confirm Password<font color="#FF0000"> *</font></label>
							</div>	
						</div>
						<div class="row">
							<div class="span3">
								<input class="span3" type="password" name="txtcpasswordname"  onblur ="confirmpassword()" maxlength="60" id="txtcpasswordid">
								<span id="errCPassword" class ="clr"></span>
							</div>	
						</div>						
						<div style="text-align:center;" >
							<input class="btn" type="submit" name ="submit" value="Submit" onclick="return flogin()">
						</div>					
					</form>
				</div>
			</div>
		</div>		
	</body>
	<?php
		include "database_connect.php";
		function test_input($data) 
		{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}
		$Password=$Cpassword="";
		if(isset($_POST['submit']))
			{
			   if (!empty($_POST["txtpasswordname"])) {
					$Password=test_input($_POST['txtpasswordname']);
							   }
				if (!empty($_POST["txtcpasswordname"])) {
					$Cpassword=test_input($_POST['txtcpasswordname']);
							   }
				
				
				$Username=$_SESSION["user"];
				$changedate='Y';
				if(($Password !="")&&($Cpassword!=""))
			{	
				try{
				$pdo = Database::connect();
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "UPDATE jpb_ws_users  set PASS_WORD =?,DEFAULT_PASSWORD_CHANGED =? WHERE EMAIL = '$Username'";
				$q = $pdo->prepare($sql);
				$q->execute(array($Password,$changedate));					
				Database::disconnect();
				echo '<script type="text/javascript">
				window.location.href = "login.php";
				</script>';
			}	
			catch(Exception $e){
				echo "<center>Please contact jindalbuttons.com </center>";
			}
		}
			}
		?>
	<script src="resources/js/firstlogin.js"></script>
</html>