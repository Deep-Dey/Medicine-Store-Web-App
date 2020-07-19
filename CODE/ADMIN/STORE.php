<head>
<title>Phermacy
<style>
.mySlides {display:none;}
</style>
</title>

<style type="text/css">
input[type=submit] {
  width: 10%;
  background-color:#666;
  color: white;
  padding: 6px 10px;
  margin: 6px 0;
  border: none;
  border-radius: 2px;
  cursor: pointer;
}

input[type=submit].a1:hover {
  background-color: #F03;
}

</style>
<?php
session_start();
if(isset($_SESSION['uid']))
		{
			include('HEADERS\ADMINHEADER.php');		
		}
	else
		{
			?>
			<script>
	window.location = "../ADMIN.php";
    </script>
    <?php
		}
include('HEADERS\CONNECTION.php');
?>
<table border="0" align="center" cellpadding="5" cellspacing="5" width="100%" BGCOLOR="WHITE">
<?php
				include('../connection.php');
				$query2="Select * from medicine";
				$result= mysql_query($query2);
				$no_of_row= mysql_num_rows($result);
				for($i=0;$i<$no_of_row;$i++)
				{
					$row_value= mysql_fetch_array($result);
				?>
  <tr>
    <td width="16%" ROWSPAN=7><img src="DATAIMG/<?php echo $row_value['IMAGE'];?>" width="180" height="250" border="1"></td>
    <td width="84%" height="43"><FONT SIZE=5 color="#666666" face="Georgia"><B>MEDICINE NAME:&nbsp;<?php echo $row_value['MNAME'];?></FONT></B><BR>
    <FONT size="3" color="#666666" face="Georgia">MANUFACTURED  BY:&nbsp;<?php echo $row_value['BNAME'];?></FONT></td>
  </tr>
  <tr>
    <td><FONT face="Georgia">MANUFACTURING DATE : &nbsp;&nbsp;<font color="#FF0000"><?php echo $row_value['MFD'];?></FONT></FONT></td>
  </tr>
  <tr>
    <td><FONT face="Georgia">EXPIERY DATE : &nbsp;&nbsp;<font color="#FF0000"><?php echo $row_value['EXP'];?></font></FONT></td>
  </tr>
    <tr>
    <td><font color="#FF0000" face="Georgia">RS : &nbsp;&nbsp;<?php echo $row_value['PRICE'];?>/-</font></td>
  </tr>
  <tr>
    <td><FONT color="#FF0000" face="Georgia">STOCK OF MEDICINE: &nbsp;&nbsp;<?php echo $row_value['QTY'];?></font></td>
  </tr>
  <tr>
    <td>
    <form action="UPDATEMEDICINE.php" method="post">
<input type="hidden" value=<?php echo $row_value['ID'];?> name="ID">
        <INPUT TYPE="SUBMIT" NAME="SUB2" VALUE="UPDATE" class="a1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</form></td>
  </tr>
  <tr>
    <td>
    <form action="DELETEMEDICINE.php" method="post">
<input type="hidden" value=<?php echo $row_value['ID'];?> name="ID">
        <INPUT TYPE="SUBMIT" NAME="SUB" VALUE="REMOVE" class="a1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</form></td>
  </tr>
  <tr><td colspan="2">
<hr color="#666666" width="97%" align="center">
</td></tr>
	<?php	
	}
	?>
    </table>
	</TD>
  </tr>
  <tr>
    <?php
			include('HEADERS\BOTTOMHEADER2.php');
		?> 
  </tr>
</table>
</body>
</html>
<?php
include('../connection.php');
if(isset($_POST['SUB']))
{
$ID=$_POST['ID'];


	$qry="DELETE from medicine WHERE ID='".$ID."'";
	if(mysql_query($qry))
	{
		?>
		<script>
		alert('Data Deleted Successfully.');
		window.location = "DELETEMEDICINE.php";
		</script>
		<?php
	}
else
	{
		?>
		<script>
		alert('Can not Delete Data Right Now');
		</script>
		<?php
	}
}
	
?>