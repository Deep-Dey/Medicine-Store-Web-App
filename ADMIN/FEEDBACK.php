<?php
session_start();
if(isset($_SESSION['uid']))
		{
			include('./HEADERS/ADMINHEADER.php');		
		}
	else
		{
			?>
			<script>
	window.location = "../ADMIN.php";
    </script>
    <?php
		}
include('./HEADERS/CONNECTION.php');
?>
<HTML>
<body>
<center>
<?php 
				include('./HEADERS/CONNECTION.php');
				//$link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
				$query2="Select * from feedback";
				$result= mysqli_query($conn, $query2);
				$no_of_row= mysqli_num_rows($result);
				?>
        <FONT color="#666666" size="6">TOTAL NO OF USER-FEEDBACKS: <?php echo $no_of_row; ?></FONT>
<TABLE width="80%" BORDER=1 CELLSPACING=0 CELLPADDING=07 align="center" bgcolor="#FFFFFF">
			<TR>
				<TH height="38" bgcolor="#CCCCCC">NAME</TH>
			  <TH bgcolor="#CCCCCC">EMAIL</TH>
			  <TH bgcolor="#CCCCCC">FEEDBACK</TH>
		  </TR>
			<?php
				
				for($i=0;$i<$no_of_row;$i++)
				{
					$row_value= mysqli_fetch_array($result);
				?>
				<tr>
			    <td height="35" FONT SIZE=5 align="center"><?php echo $row_value['NAME'];?></td>
				<td align="center"><?php echo $row_value['EMAIL'];?></td>
				<td><?php echo $row_value['FEEDBACK'];?></td>
				</tr>
				<?php	
				}
				?>
	
    </TABLE>
 </center>   
</body>
</html>
<?php
include('./HEADERS/BOTTOMHEADER2.php');
?>
