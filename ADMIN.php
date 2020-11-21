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
			?>
			<script>
	window.location = "ADMIN/INDEX.php";
    </script>
    <?php 
		}
		include('./HEADERS/CONNECTION.php');
		include('./HEADERS/HEADER.php');
?>
<HTML>
<link rel="stylesheet"  href="CSS/SEARCHBOX.CSS">
<body >
		<CENTER>
		<FORM ACTION="ADMIN.php" METHOD="post">
		  <br>
		  <p><strong><font color="#666666" size="5">WELCOME TO THE ADMIN PANNEL !</font></strong></p>
		  <br>
		
<INPUT TYPE="TEXT" NAME="LUID" required placeholder="ADMIN-ID">&nbsp; &nbsp;&nbsp; &nbsp;<br>
<INPUT TYPE="PASSWORD" NAME="LPW" ID="LPW" required placeholder="PASSWORD">&nbsp; &nbsp;<input type="checkbox" onClick="password()"><br>
<INPUT TYPE="SUBMIT" NAME="SUB"VALUE="OK"><br>
		  <p>&nbsp;</p>
		  <p>*THIS PAGE ONLY FOR ADMINISTRATIVE USER*</p><br>
        </FORM>
		</CENTER>
</body>
</html>
<?php
include('./HEADERS/CONNECTION.php');
if(isset($_POST['SUB']))
{
$l=$_POST['LUID'];
$p=$_POST['LPW'];
//$link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
$query1="select UID,PASSWORD from admin where UID='".$l."' and PASSWORD='".$p."'";
$result=mysqli_query($conn, $query1);
$row=mysqli_num_rows($result);
if($row  <1)
{
	?>
	<script>
	alert('Username or Password not matched');
	windows.open('ADMIN.php','_self');
    </script>
    <?php
	
}
else
	{
		$row_value=mysqli_fetch_array($result);
		$id=$row_value['UID'];
		$_SESSION['uid']=$id;
		header('location:ADMIN\INDEX.php');
	}
}
include('./HEADERS/BOTTOMHEADER2.php');
?>
<script>
function password() {
  var x = document.getElementById("LPW");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  
}
</SCRIPT>