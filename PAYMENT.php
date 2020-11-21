<?php
session_start();
include('./HEADERS/CONNECTION.php');
if(isset($_SESSION['gmail']))
		{
include('./HEADERS/HEADERL.php');
		}
		else
		{
			?>
	<script>
	window.location = "LOGIN.php";
    </script>
    <?php  
		}
?>
<html>
<link rel="stylesheet"  href="CSS/SEARCHBOX.CSS">
<body>
<center>
<BR><font color="#666666" size="5">COMPLETE YOUR PAYMENT</font><BR><BR>
	<?php
		$gmail=$_SESSION['gmail'];
		$OID=$_POST['oid'];
	?>
	<form action="PC.php" method="post">
    <input type="text" name="TID" REQUIRED PLACEHOLDER="TRANSECTION ID"><BR>
    <input type="text" name="OID" value="<?php echo $OID; ?>" readonly><BR>
    <INPUT type="submit" name="SUB" VALUE="PAY" style="color: white;"><BR><BR>
    </form>
   <font color="#000000" size="4">*PLEASE PUT VALID CHALLAN DETAILS*</font><BR>
   </center>
</body>
</html>
<?php
include('./HEADERS/BOTTOMHEADER2.php');
?>
