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
<HTML>
<link rel="stylesheet"  href="../CSS/SEARCHBOX.CSS">
<body>
<CENTER>
<FONT color="#666666" size="6">ADD TRANSACTION-ID</FONT><BR>

<FORM ACTION="ADDTR.php" METHOD="post">
<INPUT TYPE="TEXT" NAME="TID" PLACEHOLDER="TRANSACTION-ID" required ><BR>
<INPUT TYPE="NUMBER" NAME="AM" required PLACEHOLDER="AMMOUNT"><BR>
<INPUT TYPE="EMAIL" NAME="GG" required PLACEHOLDER="EMAIL-ID"><BR>
<INPUT TYPE="SUBMIT" NAME="SUB"VALUE="OK">
<?php
			include('HEADERS\BOTTOMHEADER2.php');
		?>
</FORM>
</CENTER>
</body>
</html>

<?php
include('HEADERS\CONNECTION.php');
if(isset($_POST['SUB']))
{
$TID=$_POST['TID'];
$AM=$_POST['AM'];
$GMAIL=$_POST['GG'];
$query33="SELECT * FROM `transaction` WHERE TID='$TID'";
$result=mysql_query($query33);
$row=mysql_num_rows($result);
if($row  >0)
{
	?>
		<script>
		alert('Data Already Exist.');
		</script>
		<?php
	}
else{
	$qry="INSERT INTO `transaction`(`TID`, `PRICE`, `GMAIL`) VALUES ('$TID','$AM','$GMAIL')";
	if(mysql_query($qry))
	{
		?>
		<script>
		alert('Data Submission Successfully.');
		window.location = "TRANSACTION.php";
		</script>
		<?php
	}
else
	{
		?>
		<script>
		alert('Data Submission Unsuccessfully.');
		windows.open('ADDBOOK.php','_self');
		</script>
		<?php
	}
}
}
?>
