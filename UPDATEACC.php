<?php
session_start();
if(isset($_SESSION['gmail']))
		{
			$temp=$_SESSION['gmail'];
			include('HEADERS\HEADERL.php');
		}
		else{
			?>
	<script>
	window.location = "LOGIN.php";
    </script>
    <?php
			}
?>
<HTML>
<link rel="stylesheet"  href="CSS/SEARCHBOX.CSS">
<body>
<FORM ACTION="UPDATEACC.php" METHOD="post">

		<br><strong><font color="#666666" size="5"><CENTER>UPDATE YOUR DETAILS
		</FONT></strong><br><br>
		<INPUT TYPE="TEXT" NAME="UN" PLACEHOLDER="FULL NAME" required><br>
        <INPUT TYPE="PASSWORD" NAME="PW" ID="PW" PLACEHOLDER="PASSWORD(at least 8 characters)" required>&nbsp; &nbsp;<input type="checkbox" onClick="password()"><br>
        <INPUT TYPE="PASSWORD" NAME="CPW" ID="CPW" PLACEHOLDER="CONFIRM PASSWORD" required>&nbsp; &nbsp;<input type="checkbox" onClick="cpassword()"><br>
        <INPUT TYPE="EMAIL" NAME="GMAIL" value=<?php echo $temp ?> readonly><br>
        <INPUT TYPE="NUMBER" NAME="PHN" PLACEHOLDER="PHONE NUMBER" required><br>
        <font color="#666666" size="4">GENDER&nbsp;<input type="radio" name="gender" value="male" required>male
			<input type="radio" name="gender" value="female" required>female</font><BR>
            <INPUT TYPE="SUBMIT"
				NAME="SUB"VALUE="OK"><br>
        <p><a href="ACCDETAILS.php"><font color="#FF0000">SEE ACCOUNT DETAILS</font></a></p><br>
        <p>*WE HOPE THAT Y0U WILL GET A GOOD EXPERIENCE*</p></center>
		<?php
			include('HEADERS\BOTTOMHEADER2.php');
		?>
</FORM>		
</table>

</body>
</html>
<?php
if(isset($_POST['SUB']))
{
include('CONNECTION.php');
$b=$_POST['UN'];
$p1=$_POST['PW'];
$p2=$_POST['CPW'];
$gender=$_POST['gender'];
$phn=$_POST['PHN'];

if((!(strcmp($p1,$p2))))
{
	if(strlen($phn)==10){
	if(strlen($p1)>7){
	$link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
	$query="UPDATE `reg` SET `UNAME`='$b',`PASSWORD`='$p1',`GENDER`='$gender',`PH`='$phn' WHERE GMAIL='$temp'";
	if(mysqli_query($link, $query))
	{	
		?>
	<script>
	alert('Data Updated Successfully');
	window.location = "ACCDETAILS.php";
    </script>
    <?php
	}
else
	{
		?>
	<script>
	alert('Data Updation Unsuccessfull');
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