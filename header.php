<?php
	 session_start(); 
	
        if(empty($_SESSION['user'])){
		header("Location: http://trends.gaddieltech.com/login.php");	
			}	
			
	/*	$_SESSION['start'] = time(); // taking now logged in time
		 
			if(!isset($_SESSION['expire'])){
					$_SESSION['expire'] = $_SESSION['start'] + (30* 60) ; // ending a session in 5 mintues
				}
				$now = time(); // checking the time now when home page starts

				if($now > $_SESSION['expire'])
				{
					session_destroy();
					echo '<script type="text/javascript">
						window.location.href = "#";
						</script>';
				}*/
				

?>
	