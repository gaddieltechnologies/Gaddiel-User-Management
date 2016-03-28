<table width="100%" border="1">
        <tr> 
          <td><strong><font color="#000000">ID</font></strong></td>
          <td><strong><font color="#000000">FIRSTNAME</font></strong></td>
          <td><strong><font color="#000000">DESIGNATION</font></strong></td>
          <td><strong><font color="#000000">EMAIL</font></strong></td>
          <td><strong><font color="#000000">COMPANY </font></strong></td>
          <td><strong><font color="#000000">CITY #</font></strong></td>
          <td><strong><font color="#000000"> ACTIVE_FLAG</font></strong></td>
          <td><strong><font color="#000000">TERMINATED_DATE</font></strong></td>
          <td><strong><font color="#000000">APPRV_REJ_DATE</font></strong></td>
    <td><strong><font color="#000000">Edit/Delete/Complaints</font></strong></td>
        </tr>
  <?PHP
    include("database_connect.php");
    $pdo = Database::connect();
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM jpb_ws_users Order by Id DESC ";
    //echo $sql;exit;
	$q = $pdo->prepare($sql);
	$q->execute(array());
	Database::disconnect();
    //$result = mysql_query($sql);
    while($row=mysql_fetch_array($q))
    {
    ?>
        <tr> 
          <td><?php echo $row['APPRV_REJ_DATE']; ?></td>
          <td><?php echo $row['FIRSTNAME']; ?></td>
          <td><?php echo $row['DESIGNATION']; ?></td>
          <td><?php echo $row['EMAIL']; ?></td>
          <td><?php echo $row['COMPANY']; ?></td>
          <td><?php echo $row['TERMINATED_DATE']; ?></td>
          <td><?php echo $row['ACTIVE_FLAG']; ?></td>
          <td><?php
     if($row['ACTIVE_FLAG']==1)
   {
   echo "Active";
   }
   else
   {
   echo "Inactive";
   } 
   ?></td>
          <td><?php echo $row['TERMINATED_DATE']; ?></td>
         
     <td><a href="Clientedit.php?cid=<?php echo $row['FIRSTNAME']; ?>"><strong>Edit</strong></a> | <a href="Clientdel.php?action=delete&id=<?php echo $row['FIRSTNAME']; ?>"><strong>Delete</strong></a> | <a href="Clientcomplaintlist.php?cid=<?php echo $row['FIRSTNAME']; ?>"><strong>Complaints</strong></a></td>
        </tr>
  <?php
  }
  ?>
