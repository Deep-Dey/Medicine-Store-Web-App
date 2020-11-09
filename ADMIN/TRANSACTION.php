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
<body>
        		<?php 
				include('HEADERS\CONNECTION.php');
				$link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
				$query2="Select * from transaction";
				$result= mysqli_query($link, $query2);
				$no_of_row= mysqli_num_rows($result);
				?>
        <CENTER><FONT color="#666666" size="6">TOTAL NO OF TRANSACTIONS: <?php echo $no_of_row; ?></FONT>
		<TABLE width="44%" BORDER=1 CELLSPACING=0 CELLPADDING=7 align="center" bgcolor="#FFFFFF">
			<TR>
				<TH width="31%" height="35" bgcolor="#CCCCCC">TRANSACTION ID</TH>
			  <TH width="22%" bgcolor="#CCCCCC">AMMOUNT</TH>
			  <TH width="47%" bgcolor="#CCCCCC">EMAIL-ID</TH>
		  </TR>
			<?php
				
				for($i=0;$i<$no_of_row;$i++)
				{
					$row_value= mysqli_fetch_array($result);
				?>
				<tr>
			    <td height="38" align="center" FONT SIZE=5><?php echo $row_value['TID'];?></td>
				<td align="center"><?php echo $row_value['PRICE'];?></td>
				<td align="center"><?php echo $row_value['GMAIL'];?></td>
				</tr>
				<?php	
				}
				?>
	
    </TABLE>
    </td>
  </tr>
  <TR><TD>
    <p>&nbsp;</p>
    <p><a href="ADDTR.php"><font color="#FF0000">ADD TRANSACTON ID</font></a></p>
    <p>&nbsp;</p>
</center>

</body>
</html>
<?php
include('HEADERS\BOTTOMHEADER2.php');
?>
