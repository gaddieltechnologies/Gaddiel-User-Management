<?php   include "header.php";   ?>
<html lang="en">

    <head>
        <title>Approval</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes">   
 <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="resources/css/alveolae.css">
        <link rel="stylesheet" href="resources/css/bootstrap.min-us.css">
		<link rel="stylesheet" href="resources/css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="resources/css/font-awesome.css">
		<script src="resources/js/validation.js"></script>
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
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
		<?php
					$id = $_GET["id"];
					require 'database_connect.php';
						if(!empty($id))
							{	
								$pdo = Database::connect();
								$sql = "SELECT * FROM jpb_ws_users WHERE ID = '$id'";
								$query =  $pdo->prepare( $sql );
								$query->execute();
							for($i=0; $row = $query->fetch(); $i++)
								{
									$FirstName = $row['FIRSTNAME'];
									$LastName =  $row['LASTNAME'];
									$Designation = $row['DESIGNATION'];
									$email = $row['EMAIL'];
									$company = $row['COMPANY'];
									$address = $row['ADDRESS'];
									$city = $row['CITY'];
									$state = $row['STATES'];
									$country = $row['COUNTRY'];
									$pin = $row['PINCODE'];
									$mob = $row['MOBILE'];
									$phone = $row['LANDLINE'];
									$active_flag = $row['ACTIVE_FLAG'];
									$approve_date = $row['APPRV_REJ_DATE'];
									$reject_date = $row['APPRV_REJ_DATE'];
									$terminate_date = $row['TERMINATED_DATE'];
									$status=$row['ACTIVE_FLAG'];
										if($status==1){
											$stats="Approved";
										} elseif($status==2){
											$stats="Rejected";
										} elseif($status==3){
											$stats="Terminated";
										} else{
											$stats="New";
										}
										
								}
							}
		?>		
		<div class="outer">	
			<div class="middle">					
				<div class="inner">		
                    <form action="" method="post" class="form-horizontal" >
					
					   	<h4><?php echo $stats ?> User </h4>
						<div class="row">
							<div class="span10">
								<div class="span2">
									<label>First Name</label>
								</div>
								<div class="span2">
									<input type="text" disabled class="span2" name="txtFirstNameName" value="<?php echo $FirstName ?>" id="txtfnameid">
									<span id="errFirstname" class ="clr"></span>	
								</div>												
								<div class="span1">
									<label>Last Name</label>
								</div>
								<div class="span3">
									<input class="span2" disabled type="text" value="<?php echo $LastName ?>" id="txtlnameid">
								</div>											
							</div>	
						</div>
						<div class="row">
							<div class="span10">
								<div class="span2">
									<label>Designation</label>
								</div>
								<div class="span3">
									<input class="span5" type="text" disabled name="txtdesignationname" value="<?php echo $Designation ?>" id="txtdesignationid">
									<span id="errDesignation" class ="clr"></span>
								</div>																
							</div>	
						</div>
						<div class="row">
							<div class="span10">
								<div class="span2">
									<label>Email Address</label>
								</div>
								<div class="span3">
									<input class="span5" type="text" disabled name="txtemailname" value="<?php echo $email ?>" id="txtemailid">
									<span id="errEmail" class ="clr"></span>	
								</div>										
							</div>	
						</div>
						<div class="row">
							<div class="span10">
								<div class="span2">
									<label>Company</label>
								</div>
								<div class="span3">
									<input class="span5"  type="text" disabled name="txtcompanyname" value="<?php echo $company ?>" id="txtcompanyid">
									<span id="errCompany" class ="clr"></span>	
								</div>									
							</div>	
						</div>	
						<div class="row">
							<div class="span10">
								<div class="span2">
									<label>Street Address</label>
								</div>
								<div class="span3">
									<input class="span5" type="text" disabled name="txtaddressname"  value="<?php echo $address ?>" id="txtaddressid">
									<span id="errAddress" class ="clr"></span>
								</div>										
							</div>	
						</div>
						<div class="row">
							<div class="span10">
								<div class="span2">
									<label>City</label>
								</div>
								<div class="span3">
									<input  class="span5" type="text" disabled name="txtcityname" value="<?php echo $city ?>" id="txtcityid">
									<span id="errCity" class ="clr"> </span>
								</div>																			
							</div>	
						</div>
						<div class="row">
							<div class="span10">
								<div class="span2">
									<label>State</label>
								</div>
								<div class="span3">
									<input class="span5" type="text" name="txtstatename" disabled value="<?php echo $state ?>" id="txtstateid">
									<span id="errState" class ="clr"></span>	
								</div>										
							</div>	
						</div>		
						<div class="row">
							<div class="span10">
								<div class="span2">
									<label>Country</label>
								</div>
								<div class="span3">
									<input class="span5" type="text" name="txtcountryname" disabled  value="<?php echo $country ?>" id="txtcountryid">
									<span id="errCountry" class ="clr"></span>
								</div>											
							</div>	
						</div>
						<div class="row">
							<div class="span10">
								<div class="span2">
									<label>Pincode</label>
								</div>
								<div class="span3">
									<input class="span5" type="text" name="txtpincodename" disabled  value="<?php echo $pin ?>" id="txtpincodeid">
									<span id="errPincode" class ="clr"></span>
								</div>											
							</div>	
						</div>		
						<div class="row">
							<div class="span10">
								<div class="span2">
									<label>Mobile Number</label>
								</div>
								<div class="span3">
									<input class="span5" type="text" name="txtmobilename" disabled value="<?php echo $mob ?>" id="txtmobileid">
									<span id="errMobile" class ="clr"></span>
								</div>												
							</div>	
						</div>		
						<div class="row">
							<div class="span10">
								<div class="span2">
									<label>Landline</label>
								</div>
								<div class="span3">
									<input class="span5" type="text" name="txtlandlinename" disabled value="<?php echo $phone ?>" id="txtlandlineid">
									<span id="errLandline" class ="clr"></span>	
								</div>										
							</div>	
						</div>			
							
						<?php if($active_flag ==1){ ?>
						<div class="row">
							<div class="span10">
								<div class="span2">
									<label>Approval Date</label>
								</div>
								<div class="span3">
									<input class="span5" type="text" disabled value="<?php echo $approve_date ?>">	
								</div>										
							</div>	
						</div>								
						<?php } ?>
						<?php if($active_flag ==2){ ?>
						<div class="row">
							<div class="span10">
								<div class="span2">
									<label>Rejected Date</label>
								</div>
								<div class="span3">
									<input class="span5" type="text" disabled value="<?php echo $approve_date ?>">	
								</div>										
							</div>	
						</div>
						<?php } ?>
						<div class="row">
							<div class="span10">
								<div class="span2">
									<label>Terminated Date</label>
								</div>
								<div class="span3">
									<input class="span5" type="text" disabled value="<?php echo $terminate_date ?>">
								</div>	
							</div>
						</div>
						<div class="row">
							<div class="span10">								
									<p></p>
							</div>
						</div>	
						<div class="row">
							<div class="span10">							
								<div class="span2">
									
								</div>
								<div class="span2">
									<input class="btn span2" id="divApproveId" type="submit"name ="Approve" value="Approve" onclick="return val()">
									<input class="btn span2" id="divTerminateId" type="submit"name ="Terminate" value="Terminate" onclick="return val()">
								</div>												
								<div class="span2">
									<input class="btn span2" id="divRejectId" type="submit" name="Reject" value="Reject" onclick="return val()">
								</div>
								<div class="span2">
									<input class="btn span1.9"  type="button" value ="Close" onclick="window.location.href='grid2.php'" />
								</div>
							</div>	
						</div>						
					</form>
		        </div>
            </div>
        </div>
	</body>	
		<script>
		<?php if($active_flag=="0") {?>
		//document.getElementById('divApproveId').style.display = 'block';
		$('#divApproveId').show();
		$('#divTerminateId').hide();
		//document.getElementById('divTerminateId').style.display = 'none';
								
		<?php } if($active_flag=="1") {?>
		$('#divApproveId').hide();
		$('#divTerminateId').show();
		document.getElementById('divApproveId').style.display = 'none';
		document.getElementById('divTerminateId').style.display = 'block';
		document.getElementById('divRejectId').style.display = 'none';
		<?php } if(($active_flag!=1)&&($active_flag!=0)){?>
		document.getElementById('divApproveId').style.display = 'none';
		document.getElementById('divTerminateId').style.display = 'none';
		document.getElementById('divRejectId').style.display = 'none';
		<?php }?>
		</script>
</html>

					<?php
	
						if(isset($_POST['Close']))
						{
							echo '<script type="text/javascript">
								   window.location.href = "grid2.php";
								  </script>';
								
						}
					?>
					<?php
						if(isset($_POST['Approve']))
						{
							include "mail1.php";
							$active_flag="1";
							$date = date('Y-m-d');
							$date1 = date('Ydm');
							$pwd= $FirstName.$date1;
							try{
							$pdo = Database::connect();
							$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$sql = "UPDATE jpb_ws_users  set ACTIVE_FLAG= ?,APPRV_REJ_DATE=?,PASS_WORD=? WHERE ID = '$id'";
							$q = $pdo->prepare($sql);
							$q->execute(array($active_flag,$date,$pwd));					
							Database::disconnect();	
							$FromEmail="info@jindalbuttons.com";
							$Subject="JindalPolyButton Approved You";
							$Message="JindalPolyButton To access our website trends Page username=$email and password=$pwd Thankyou";
							$FromName="Jindal Poly Buttons Pvt Ltd";
							$ToEmail=$email;
							sendEmail($FromEmail,$Subject,$Message,$FromName,$ToEmail);
							echo '<script type="text/javascript">
								   window.location.href = "grid2.php";
								  </script>';   
						}
							catch(Exception $e){
							echo "<center>Please contact jindalbuttons.com </center>";
								}
						}
			?>	
				<?php
						if(isset($_POST['Reject']))
						{
							$active_flag="2";
							$date = date('Y-m-d');
							try{
							$pdo = Database::connect();
							$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$sql = "UPDATE jpb_ws_users  set ACTIVE_FLAG= ?,APPRV_REJ_DATE=? WHERE ID = '$id'";
							$q = $pdo->prepare($sql);
							$q->execute(array($active_flag,$date));					
							Database::disconnect();	
							echo '<script type="text/javascript">
								   window.location.href = "grid2.php";
								  </script>'; 
						
							}
							catch(Exception $e){
							echo "<center>Please contact jindalbuttons.com </center>";
								}
						}
				?>	
				<?php
					if(isset($_POST['Terminate']))
						{
							$active_flag="3";
							$date = date('Y-m-d');
							try{
							$pdo = Database::connect();
							$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							$sql = "UPDATE jpb_ws_users  set ACTIVE_FLAG= ?,TERMINATED_DATE=? WHERE ID = '$id'";
							$q = $pdo->prepare($sql);
							$q->execute(array($active_flag,$date));					
							Database::disconnect();		
							echo '<script type="text/javascript">
							   window.location.href = "grid2.php";
							  </script>';  
							}
							catch(Exception $e){
							echo "<center>Please contact jindalbuttons.com </center>";
								}
						}
				?>				