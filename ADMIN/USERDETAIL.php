<?php
session_start();
include('./HEADERS/CONNECTION.php');
$GMAIL=$_POST['GG'];

        //$link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
				$query6="Select * from reg where GMAIL='".$GMAIL."'";
				$result= mysqli_query($conn, $query6);
				$row_value= mysqli_fetch_array($result);
				$row=mysqli_num_rows($result);
if($row  <1)
{
	?>
	<script>
	alert('The Gmail does not Exist');
	window.location = "USER.php";
    </script>
    <?php
}
else
{
?>
<?php
include('./HEADERS/ADMINHEADER.php');	
?>
<HTML>
<body><center>
<FONT color="#666666" size="5"><B>USER ACCOUNT DETAILS AND ADDRESS</B></FONT>
<table width="50%" border="1" cellpadding="4" cellspacing="0" align="center">
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
    </table>
<table width="50%" border="1" cellpadding="4" cellspacing="0">
<?php
				include('./HEADERS/CONNECTION.php');
				$query6="Select * from address where GMAIL='".$GMAIL."'";
				$result= mysqli_query($conn, $query6);
				$row_value= mysqli_fetch_array($result);
				?>
  <tr>
    <TD width="36%" bgcolor="#CCCCCC" align="center"><h3><strong>ADDRESS</strong></h3></TD>
    <td width="64%" height="28" bgcolor="#FFFFCC" align="center"><FONT SIZE=4><?php echo $row_value['ADDRESS'];?></FONT></td>
  </tr>
  <tr>
    <TD width="36%" bgcolor="#CCCCCC" align="center"><h3><strong>LANDMARK</strong></h3></TD>
    <td width="64%" height="34" bgcolor="#FFFFCC" align="center"><FONT SIZE=4><?php echo $row_value['LANDMARK'];?></FONT></td>
  </tr>
  <tr>
    <TD width="36%" bgcolor="#CCCCCC" align="center"><h3><strong>CITY</strong></h3></TD>
    <td width="64%" height="35" bgcolor="#FFFFCC" align="center"><FONT SIZE=4><?php echo $row_value['CITY'];?></FONT></td>
  </tr>
  <tr>
    <TD width="36%" bgcolor="#CCCCCC" align="center"><h3><strong>POSTAL CODE</strong></h3></TD>
    <td width="64%" height="33" bgcolor="#FFFFCC" align="center"><FONT SIZE=4><?php echo $row_value['PCODE'];?></FONT></td>
  </tr>
  <tr>
    <TD width="36%" bgcolor="#CCCCCC" align="center"><h3><strong>DISTRICT</strong></h3></TD>
    <td width="64%" height="34" bgcolor="#FFFFCC" align="center"><FONT SIZE=4><?php echo $row_value['DISTRICT'];?></FONT></td>
  </tr>
    </table>
    <BR>
<B>*THE STATE IS ONLY WEST BENGAL DUE TO DELIVERY ISSUE*</B>
</center>
</body>
</html>

<?php
}
include('./HEADERS/BOTTOMHEADER2.php');
?>