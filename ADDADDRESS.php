<?php
session_start();
include('HEADERS\CONNECTION.php');
$temp=$_SESSION['gmail'];
$link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
$query8="select PCODE from address where GMAIL='".$temp."'";
$result=mysqli_query($link, $query8);
$row=mysqli_num_rows($result);
if($row  >0)
{
?>
	<script>
	window.location = "SHOWAD.php";
    </script>
    <?php 		
}
else{
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
?>
<HTML>
<link rel="stylesheet"  href="CSS/SEARCHBOX.CSS">
<body>
<FORM ACTION="ADDADDRESS.php" METHOD="post">
		<br>
		<strong><font color="#666666" size="5"><CENTER>ADD ADDRESS FOR DELIVERY</FONT></strong><br><br>
		<textarea name = "ADDRESS" rows ="4" placeholder="House No./Flat No./Location"></textarea><br>
        <INPUT TYPE="TEXT" NAME="LANDMARK" PLACEHOLDER="Landmark(Optional)"><br>
        <INPUT TYPE="TEXT" NAME="CITY" PLACEHOLDER="CITY" required><br>
        <INPUT TYPE="NUMBER" NAME="PC" PLACEHOLDER="PIN" required><br>
        <INPUT TYPE="TEXT" NAME="DISTRICT" PLACEHOLDER="DISTRICT" required><br>
        <INPUT TYPE="SUBMIT" NAME="SUB"VALUE="ADD"><br>
        <p>&nbsp;</p>
		    <p>*DELIVERY AVAILABLE ONLY FOR WEST BENGAL*</p>
	      <p>&nbsp;</p></center>
		<?php
			include('HEADERS\BOTTOMHEADER2.php');
		?>
</FORM>
</body>
</html>
<?php
if(isset($_POST['SUB']))
{
include('CONNECTION.php');
$a=$_POST['ADDRESS'];
$b=$_POST['LANDMARK'];
$p1=$_POST['CITY'];
$p2=$_POST['PC'];
$g=$_POST['DISTRICT'];
	if(strlen($p2)==6){
$temp=$_SESSION['gmail'];
$link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
$query3="select * from address where GMAIL='".$temp."'";
$result=mysqli_query($link, $query3);
$row=mysqli_num_rows($link, $result);
if($row  >0){}
else
	{
	$query="INSERT INTO `address`(`GMAIL`, `ADDRESS`, `LANDMARK`, `CITY`, `PCODE`, `DISTRICT`) VALUES ('$temp','$a','$b','$p1','$p2','$g')";
	if(mysqli_query($link, $query))
	{	
		?>
	<script>
	alert('Data Submitted Successfully');
	window.location = "SHOWAD.php";
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
	alert('Your Postal Code is Incorrect');
    </script>
    <?php
}
}
}
?>
