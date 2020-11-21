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
include('./HEADERS/CONNECTION.php');
include('./HEADERS/HEADER.php');
?>
<HTML>
<link rel="stylesheet"  href="CSS/SEARCHBOX.CSS">
<body>
<CENTER>
		<FORM ACTION="FORGOTPASS.php" METHOD="post">
		  <br>
		<strong><font color="#666666" size="5"><CENTER>WELCOME BACK TO OUR SITE!</center>
		</FONT></strong>
		<BR>
        <INPUT TYPE="EMAIL" NAME="LUID" required placeholder="EMAIL-ID"><BR>
        <INPUT TYPE="PASSWORD" NAME="PW" ID="PW" required placeholder="PASSWORD">&nbsp; &nbsp;<input type="checkbox" onClick="password()"><BR>
        <INPUT TYPE="PASSWORD" NAME="CPW" ID="CPW" placeholder="Re-Type PASSWORD" required>&nbsp; &nbsp;<input type="checkbox" onClick="cpassword()"><BR>
        <INPUT TYPE="SUBMIT" NAME="SUB"VALUE="OK"><BR>
        <p><a href="LOGIN.php"><font color="#FF0000">GOOTO LOGIN PAGE</font></a></p>
		</FORM>
		</CENTER>
		</td>
      </tr>
    </table>
	</td>
  </tr>
</table>
</body>
</html>
<?php
			include('./HEADERS/CONNECTION.php');
			include('./HEADERS/BOTTOMHEADER2.php');		
if(isset($_POST['SUB']))
{
$l=$_POST['LUID'];
$p1=$_POST['PW'];
$p2=$_POST['CPW'];

//$link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
$query3="select GMAIL from reg where GMAIL='".$l."'";
$result=mysqli_query($conn, $query3);
$row=mysqli_num_rows($result);
if($row  <1)
{
	?>
	<script>
	alert('This Email-ID is not Registered');
    </script>
    <?php
}
else
	{
		if((!(strcmp($p1,$p2))))
			{
				if(strlen($p1)>7)
				{
					$query9="UPDATE `reg` SET `PASSWORD`='$p1' WHERE `GMAIL`='$l'";
					if(mysqli_query($conn, $query9))
						{	
							?>
						<script>
						alert('Password Update Successfully');
						window.location = "LOGIN.php";
    					</script>
    					<?php
						
						}
					else
						{
							?>
						<script>
						alert('Something Went Wrong');
    					</script>
   					 <?php
						}
				}
				else
				{
					?>
					<script>
					alert('Your Password is too Short');
    				</script>
    				<?php
				}
			}
			else
			{
				?>
				<script>
				alert('Both Passwords are Not Same');
    			</script>
    			<?php
			}
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