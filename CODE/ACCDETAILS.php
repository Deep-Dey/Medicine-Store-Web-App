<?php
session_start();
if(isset($_SESSION['gmail']))
		{
			include('HEADERS\HEADERL.php');		
		}
	else
		{
			?>
	<script>
	window.location = "LOGIN.php";
    </script>
    <?php
		}
include('HEADERS\CONNECTION.php');
$GMAIL=$_SESSION['gmail'];
?>
<HTML>
<body link="white" vlink="#FFFFFF">
  <br>
		<strong><font color="#666666" size="5"><CENTER>YOUR ACCOUNT DETAILS</FONT></strong><br><br>
<table width="35%" border="1" align="center" cellpadding="4" cellspacing="0">
<?php
				include('HEADERS\CONNECTION.php');
				$query6="Select * from reg where GMAIL='".$GMAIL."'";
				$result= mysql_query($query6);
				$row_value= mysql_fetch_array($result);
				?>
  <tr>
    <TD width="36%" bgcolor="#CCCCCC" align="center"><h3><strong>USER-ID</strong></h3></TD>
    <td width="64%" height="28" bgcolor="#FFFFCC" align="center"><FONT SIZE=4>C3MCJ<?php echo $row_value['ID'];?></FONT></td>
  </tr>
  <tr>
    <TD width="36%" bgcolor="#CCCCCC" align="center"><h3><strong>USER-NAME</strong></h3></TD>
    <td width="64%" height="34" bgcolor="#FFFFCC" align="center"><FONT SIZE=4><?php echo $row_value['UNAME'];?></FONT></td>
  </tr>
  <tr>
    <TD width="36%" bgcolor="#CCCCCC" align="center"><h3><strong>EMAIL-ID</strong></h3></TD>
    <td width="64%" height="35" bgcolor="#FFFFCC" align="center"><FONT SIZE=4><?php echo $row_value['GMAIL'];?></FONT></td>
  </tr>
  <tr>
    <TD width="36%" bgcolor="#CCCCCC" align="center"><h3><strong>PHONE NO.</strong></h3></TD>
    <td width="64%" height="33" bgcolor="#FFFFCC" align="center"><FONT SIZE=4>+91-<?php echo $row_value['PH'];?></FONT></td>
  </tr>
  <tr>
    <TD width="36%" bgcolor="#CCCCCC" align="center"><h3><strong>GENDER</strong></h3></TD>
    <td width="64%" height="32" bgcolor="#FFFFCC" align="center"><FONT SIZE=4><?php echo $row_value['GENDER'];?></FONT></td>
  </tr>
	<?php	
	?>
    </table><BR>
<p><a href="UPDATEACC.php"><font color="#FF0000">UPDATE DETAILS</font></a></p><BR>
<p>*THANK YOU FOR BEING WITH US*</p></CENTER>
</body>
</html>
<?php
include('HEADERS\BOTTOMHEADER2.php');
?>