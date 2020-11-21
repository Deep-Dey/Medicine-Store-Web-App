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
<body><CENTER>
<?php 
				include('./HEADERS/CONNECTION.php');
				//$link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
				$query11="SELECT * FROM `order`";
				$result= mysqli_query($conn, $query11);
				$no_of_row= mysqli_num_rows($result);
				?>
       <FONT color="#666666" size="6">TOTAL NO OF ORDERS: <?php echo $no_of_row; ?></FONT>
<TABLE width="68%" BORDER=1 CELLSPACING=0 CELLPADDING=7 align="center" bgcolor="#FFFFFF">
			<TR>
				<TH width="16%" height="40" bgcolor="#CCCCCC">ORDER ID</TH>
			  <TH width="23%" bgcolor="#CCCCCC">GMAIL</TH>
              <TH width="14%" bgcolor="#CCCCCC">BOOK ID</TH>
              <TH width="23%" bgcolor="#CCCCCC">ORDER STATUS</TH>
              <TH width="24%" bgcolor="#CCCCCC">ORDER AMMOUNT</TH>
		  </TR>
			<?php
				
				for($i=0;$i<$no_of_row;$i++)
				{
					$row_value= mysqli_fetch_array($result);
				?>
				<tr>
			    <td height="35" align="center" FONT SIZE=5><?php echo $row_value['OID'];?></td>
				<td align="center"><?php echo $row_value['GMAIL'];?></td>
				<td align="center"><?php echo $row_value['BID'];?></td>
                <td align="center"><?php echo $row_value['OSTATUS'];?></td>
                <td align="center"><?php echo $row_value['AMMOUNT'];?></td>
				</tr>
				<?php	
				}
				?>
	
    </TABLE>
    </CENTER>
</body>
</html>
<?php
include('./HEADERS/BOTTOMHEADER2.php');
?>
