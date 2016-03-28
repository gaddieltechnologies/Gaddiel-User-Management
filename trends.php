<?php   include "header.php";   ?>
<html>
	<head>
	<title></title>		
	    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">  
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="resources/css/alveolae.css">
        <link rel="stylesheet" href="resources/css/bootstrap.min-us.css">
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
                 pading-top:20px;
	}

	.inner {
		margin-left: auto;
		margin-right: auto; 
		width: 50%;		
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
		<body style="overflow-y: hidden;">
			<div class="outer">
				<div class="middle">
					<div class="inner">						
						<form action="" method="post">								
                             <div style="text-align:center;" >
							<?php $role=$_SESSION["role"]; 
							if($role=="ADMIN"){ ?>							
								<input button class="btn" id="divShowId" type="submit"name ="Approval" value="Trends Users" onclick="return val()">
							<?php }?>
								   <a href="logout.php" class="btn">Logout</a>
                                                             <h3> Welcome To Trends Page </h3><br />
 Mood Boards<br />
 Summer Spring Collections<br />
							</div>
                                                 
						</form>
		</div>
				
			</div>
			</div>
		</body>
		
</html>
<?php
if(isset($_POST['Approval']))
					{
						
echo '<script type="text/javascript">
				window.location.href = "grid2.php";
				</script>';

					}
?>