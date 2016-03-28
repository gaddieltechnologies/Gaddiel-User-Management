<?php   include "header.php";   ?>
<html lang="en">
	<head>
		<title>search</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">  
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="apple-mobile-web-app-capable" content="yes">    
		<!-- CSS files -->
<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css" >
		<link rel="stylesheet" type="text/css" href="resources/css/bootstrap-responsive.min.css" >
		<link rel="stylesheet" type="text/css" href="resources/css/alveolae.css">
		<link rel="stylesheet" type="text/css" href="resources/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="resources/css/footable.core.css?v=2-0-1">
		<link rel="stylesheet" type="text/css" href="resources/css/footable-demos.css">		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
		<script src="resources/js/footable.js?v=2-0-1"></script>
	
    <!-- Google font -->
		<script>
			if (!window.jQuery) { document.write('<script src="../../resources/js/jquery-1.9.1.min.js"><\/script>'); }
		</script>
	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	
	</head>
		<body>
			<form action="" method="POST" name="forms">
				<div id="main-content">
					<!-- Container -->
					<div class="container">						
						<!-- /Content -->
						<div class="row">
							<div class="span12">
								<div class="widget">					
									<div class="widget-content">
										<div><h3>Trends Users</h3></div>            
										<div class="span2">
											<input type="text" autofocus class="span2" placeholder=" Search by Email Id"  id="txtEmailSearchId" name="txtEmailSearchName"/>
										</div>                          
										<div class="span2">
											<input type="text"  class="span2" placeholder="Search by Mobile#"  id="txtMobilenumberSearchId" name="txtMobilenumberSearchName"/>
										</div>      
										<div class="span3">
											<input type="text"  class="span3" placeholder="Search by Company Name"  id="txtCompanySearchId" name="txtCompanySearchName"/>
										</div> 
										<div class="span2">
											<select  class="span2" id="txtStatusSearchId"   name="txtStatusSearchName">
												<option value="">Search by status</option>
												<option value="0" name ="new">New</option>
												<option value="1" name ="approve">Approved</option>
												<option value="2" name ="reject">Rejected</option>
												<option value="3" name ="terminate">Terminated</option>
											</select>
										</div>    
										<div class="span2"> 
										<input type="submit" class="btn" onClick="searchvalue()" value="Search">
										<input type="reset"  class="btn" value="clear"></div>   
										<a href="moodboards/index.php"><img src="resources/img/application_exit.png"/></a>
									</div>
								   </div>
							</div>  								   
					  </div>  
					<div class="row">	
					  <div class="span12">
							<div class="widget-content">
								<div class="tab-content">
									<div class="tab-pane active" id="demo">									  
									<table class="table demo table-bordered " data-filter="#filter" data-page-size="5"
										   data-page-previous-text="prev" data-page-next-text="next">
									<!--<table class="table table-striped table-bordered">-->                            
										<thead>
											   <tr class="widget-header">
												<!--<th></th> --> 
												<th data-toggle="true">Select</th>		
												<th>First Name</th>
												<th data-hide="phone,tablet">Email Id</th>
												<th data-hide="phone,tablet">Mobile Number</th>												
												<th data-hide="phone">Company</th>
												<th data-hide="phone">Designation</th>
												<th data-hide="phone">Status</th>
											</tr>
										</thead>
										<tbody id="gridvaluediv" class="mytable1">	
										 <?php 
										  include "database_connect.php";
											$pdo = Database::connect();
											$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
											$result = $pdo->prepare("SELECT ID,FIRSTNAME,EMAIL,MOBILE,ACTIVE_FLAG,COMPANY,DESIGNATION FROM jpb_ws_users ORDER BY ID DESC");
											$result->execute();
											Database::disconnect();
											
											
											/*$whereClauses = array();
														if (! empty($_POST['optGroupNameId'])) $whereClauses[] = 'optGroupNameId='.mysql_real_escape_string($_POST['optGroupNameId']);
														if (! empty($_POST['optKeyNameId'])) $whereClauses[] ='optKeyNameId='.mysql_real_escape_string($_POST['optKeyNameId']);
														if (! empty($_POST['optValueNameId'])) $whereClauses[] = 'optValueNameId='.mysql_real_escape_string($_POST['optValueNameId']);

														$where = '';
													if (count($whereClauses) > 0) {
														$where = 'WHERE '.implode(' AND ',$whereClauses);
													}

													$query = "SELECT  ID,GROUP_NAME,KEY_NAME,VALUE_ID,VALUE_NAME FROM key_value WHERE  GROUP_NAME AND KEY_NAME AND VALUE_NAME".$where;	*/
										
									if ( !empty($_POST)) {	
									
										$EMAIL = $_POST['txtEmailSearchName'];									
										$MOBILE = $_POST['txtMobilenumberSearchName'];									
										$ACTIVE_FLAG = $_POST['txtStatusSearchName'];	
										$COMPANY = $_POST['txtCompanySearchName'];									
										$pdo = Database::connect();
										$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
										$sql="SELECT  ID,FIRSTNAME,EMAIL,MOBILE,COMPANY,ACTIVE_FLAG,DESIGNATION	 FROM jpb_ws_users WHERE  EMAIL LIKE :txtEmailSearchName AND MOBILE LIKE :txtMobilenumberSearchName AND Company LIKE :txtCompanySearchName AND ACTIVE_FLAG LIKE :txtStatusSearchName;";
										$result=$pdo->prepare($sql);
																			
										$result->bindValue(':txtEmailSearchName',$EMAIL.'%');
										$result->bindValue(':txtMobilenumberSearchName',$MOBILE.'%');
										$result->bindValue(':txtCompanySearchName',$COMPANY.'%');
										$result->bindValue(':txtStatusSearchName',$ACTIVE_FLAG.'%');
										$result->execute();
										}
										
									
										for($i=0; $row = $result->fetch(); $i++){																	
										Database::disconnect();
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
									  ?>
										
										<tr Style="cursor:pointer;" id="views">									  
											<td class="actions">
												<a href="view.php?id=<?php echo $row['ID']; ?>"> <img src="resources/img/tick.png" width="16px"> </a>
											</td>
											<td style="text-transform:uppercase;"><?php echo  $row['FIRSTNAME'];?></td>
											<td><?php echo  $row['EMAIL'];?></td>
											<td style="text-transform:uppercase;"><?php echo  $row['MOBILE'];?></td>
											<td style="text-transform:uppercase;"><?php echo  $row['COMPANY'];?></td>										
											<td style="text-transform:uppercase;"><?php echo  $row['DESIGNATION'];?></td>
											<td style="text-transform:uppercase;"><?php echo  $stats ?></td>
										</tr>
										 <?php  }?>
									</tbody>
								</table>
							</div>			
						</div>
					</div>
				</div> 
			   </div>				
			</div>				
		</div>				
	</form>	
</body>
<script type="text/javascript">
        $(function () {
            $('table').bind('footable_breakpoint', function() {
                $('table').trigger('footable_expand_first_row');
            }).footable();
        });
		
		
    </script>
</html>	