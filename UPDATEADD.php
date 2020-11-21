<?php
session_start();
include('./HEADERS/CONNECTION.php');
$temp=$_SESSION['gmail'];
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
<HTML>
<link rel="stylesheet"  href="CSS/SEARCHBOX.CSS">
<body>
<FORM ACTION="UPDATEADD.php" METHOD="post">

		<br>
		<strong><font color="#666666" size="5"><CENTER>UPDATE ADDRESS FOR DELIVERY</FONT></strong><br><br>
		<textarea name = "ADDRESS" rows ="4" placeholder="House No./Flat No./Location"></textarea><br>
        <INPUT TYPE="TEXT"  NAME="LANDMARK" PLACEHOLDER="Landmark(Optional)"><br>
        <INPUT TYPE="TEXT" NAME="CITY" PLACEHOLDER="CITY" required><br>
        <INPUT TYPE="NUMBER" NAME="PC" PLACEHOLDER="PIN" required><br>
        <INPUT TYPE="TEXT" NAME="DISTRICT" PLACEHOLDER="DISTRICT" required><br>
        <INPUT TYPE="SUBMIT" NAME="SUB"VALUE="ADD"><br>
            <p>&nbsp;</p>
		    <p><a href="SHOWAD.php"><font color="#FF0000">VIEW ADDRESS</font></a></p><br>
		    <p>*DELIVERY AVAILABLE ONLY FOR WEST BENGAL*</p></center>
		<?php
			include('./HEADERS/BOTTOMHEADER2.php');
		?>
		</td>
      </tr>
    </table>
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
//$link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
$query3="select * from address where GMAIL='".$temp."'";
$result=mysqli_query($conn, $query3);
$row=mysqli_num_rows($result);
if($row  <1){
	?>
	<script>
	alert('User not found.');
    </script>
    <?php
	}
else
	{
	$query="UPDATE `address` SET  `ADDRESS`='$a',`LANDMARK`='$b',`CITY`='$p1',`PCODE`='$p2',`DISTRICT`='$g' WHERE GMAIL='$temp'";
	if(mysqli_query($conn, $query))
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
	alert('Some Problem Occure.');
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
?>
