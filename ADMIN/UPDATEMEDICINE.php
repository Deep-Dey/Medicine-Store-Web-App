<style>
.mySlides {display:none;}
</style>
</title>

<style type="text/css">
input[type=date] {
   width:20%;
    border:2px solid #aaa;
	border-radius: 26px;
    margin:8px 0;
    outline:none;
    padding:8px;
    box-sizing:border-box;
    transition:.3s;
}
input[type=date]:focus{
    border-color:dodgerBlue;
    box-shadow:0 0 8px 0 dodgerBlue;
  }
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
</head>
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
include('../connection.php');
$ID=$_POST['ID'];
?>
<HTML>
<link rel="stylesheet"  href="../CSS/SEARCHBOX.CSS">
<body>
<BR><center>
    <font color="#666666" size=6>PLEASE INSERT CORRECT INFO</font>
<FORM ACTION="UPDATEMEDICINE.php" METHOD="post">
         <INPUT TYPE="TEXT" NAME="ID" VALUE=<?php echo $ID;?> readonly> <BR>
         <INPUT TYPE="NUMBER" NAME="ST" required  placeholder="NO. OF MEDICINES ADDED"><BR>
         <INPUT TYPE="NUMBER" NAME="PR" required  placeholder="PRICE OF MEDICINES"><BR>
         <font size="4" color="#666666"><center>MANUFACTURING DATE:</center></font>
		<input type="DATE" name="MFD" PLACEHOLDER="MFD" id="MFD" required><BR>
		<font size="4" color="#666666"><center>EXPIRY DATE:</center></font>
		<input type="DATE" name="EXP" PLACEHOLDER="EXP" id="EXP" required><BR><BR>
         <INPUT TYPE="SUBMIT" NAME="SUB"VALUE="OK">	<BR>	   
		</FORM>
</center>		
</body>
</html>
<?php
if(isset($_POST['SUB']))
{
$ST=$_POST['ST'];
$MFD=$_POST['MFD'];
$EXP=$_POST['EXP'];
$PR=$_POST['PR'];
$link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
$query33="SELECT * FROM `medicine` WHERE ID='$ID'";
$result=mysqli_query($link, $query33);
$row=mysqli_num_rows($result);
if($row  >0)
{
	$no_of_row= mysqli_num_rows($result);
	$row_value= mysqli_fetch_array($result);
	$temp=$row_value['QTY'];
	$St=$ST+$temp;
	$qry11="UPDATE `medicine` SET `PRICE`='$PR',`QTY`='$St',`MFD`='$MFD',`EXP`='$EXP' WHERE ID='$ID'";
	if(mysqli_query($link, $qry11))
	{
		?>
	<script>
	alert('The Medicine Stock Update Successfully');
	window.location = "STORE.php";	
    </script>
    <?php
	}
	else
	{
		?>
	<script>
	alert('Some error occur.');	
    </script>
    <?php
	}
}
else
	{
		?>
	<script>
	alert('The Medicine does not Exist');	
    </script>
    <?php
	}
}

include('HEADERS\BOTTOMHEADER2.php');
?>
