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
if(isset($_SESSION['gmail']))
		{
			?>
			<script>
	window.location = "INDEX.php";
    </script>
    <?php 
		}
?>
<?php
include('./HEADERS/HEADER.php');
?>
<HTML>
<link rel="stylesheet"  href="CSS/SEARCHBOX.CSS">
<body>
		<FORM ACTION="REG.php" METHOD="post">
		<br><strong><font color="#666666" size="5"><CENTER>WELCOME TO OUR WEBSITE!&nbsp; &nbsp;&nbsp; &nbsp;
		</FONT></strong><br>
		<INPUT TYPE="TEXT" NAME="UN" PLACEHOLDER="FULL NAME" required>&nbsp; &nbsp;&nbsp; &nbsp;<br>
        <INPUT TYPE="PASSWORD" NAME="PW" ID="PW" PLACEHOLDER="PASSWORD(at least 8 characters)" required>&nbsp; &nbsp;<input type="checkbox" onClick="password()"><br>
        <INPUT TYPE="PASSWORD" NAME="CPW" ID="CPW" PLACEHOLDER="CONFIRM PASSWORD" required>&nbsp; &nbsp;<input type="checkbox" onClick="cpassword()"><br>
        <INPUT TYPE="EMAIL" NAME="GMAIL" PLACEHOLDER="EMAIL-ID" required>&nbsp; &nbsp;&nbsp; &nbsp;<br>
        <INPUT TYPE="EMAIL" NAME="CGMAIL" PLACEHOLDER="Re-Type EMAIL-ID" required>&nbsp; &nbsp;&nbsp; &nbsp;<br>
        <INPUT TYPE="NUMBER" NAME="PHN" PLACEHOLDER="PHONE NUMBER" required>&nbsp; &nbsp;&nbsp; &nbsp;<br>
        <font color="#666666" size="4">GENDER&nbsp;<input type="radio" name="gender" value="male" required>male
			<input type="radio" name="gender" value="female" required>female&nbsp; &nbsp;&nbsp; &nbsp;<br></font>
            <INPUT TYPE="SUBMIT" NAME="SUB"VALUE="OK">&nbsp; &nbsp;&nbsp; &nbsp;<br>
            <p>*WE HOPE THAT YOU WILL GET A GOOD EXPERIENCE*&nbsp; &nbsp;&nbsp; &nbsp;</p></center>
		<?php
			include('./HEADERS/BOTTOMHEADER2.php');
		?>
		
</table>
</FORM>
</body>
</html>
<?php
if(isset($_POST['SUB']))
{
include('./HEADERS/CONNECTION.php');
$b=$_POST['UN'];
$p1=$_POST['PW'];
$p2=$_POST['CPW'];
$g=$_POST['GMAIL'];
$s=$_POST['CGMAIL'];
$gender=$_POST['gender'];
$phn=$_POST['PHN'];

if((!(strcmp($p1,$p2))) && (!(strcmp($g,$s))))
{
	if(strlen($phn)==10){
	if(strlen($p1)>7){
//$link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
$query3="select GMAIL from reg where GMAIL='".$g."'";
$result=mysqli_query($conn, $query3);
$row=mysqli_num_rows($result);
if($row  >0)
{
	?>
	<script>
	alert('Gmail already exist');
	window.location = "LOGIN.php";
    </script>
    <?php
	
}
else
	{
		
	$query="INSERT INTO `reg`(`UNAME`, `PASSWORD`, `GMAIL`, `GENDER`, `PH`) VALUES ('$b','$p1','$g','$gender','$phn')";
	if(mysqli_query($conn, $query))
	{	
		?>
	<script>
	alert('You Registered Successfully');
	window.location = "LOGIN.php";
    </script>
    <?php
	}
else
	{
		?>
	<script>
	alert('Data Submission Unsuccessfull');
    </script>
    <?php
	}
	}
}
else
{
	?>
	<script>
	alert('Your Password is too Short');
    </script>
    <?php
}}
else
{
	?>
	<script>
	alert('Your Phone Number is Incorrect');
    </script>
    <?php
}
}
else
{	
		?>
	<script>
	alert('Given Data is Wrong');
    </script>
    <?php
}
}	
?>
<script>
function password() {
  var x = document.getElementById("PW");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
  
}
function cpassword() {
  var Y = document.getElementById("CPW");
  if (Y.type === "password") {
    Y.type = "text";
  } else {
    Y.type = "password";
  }
  
}
</SCRIPT>