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
			$gmail=$_SESSION['gmail'];
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
include('./HEADERS/CONNECTION.php');
?>

<HTML>
<link rel="stylesheet"  href="CSS/SEARCHBOX2.CSS">
<body link="white" vlink="#FFFFFF"><center>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        		<?php 
				include('./HEADERS/CONNECTION.php');
				//$link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
				$query11="SELECT * FROM `order` where GMAIL='$gmail'";
				$result= mysqli_query($conn, $query11);
				$no_of_row= mysqli_num_rows($result);
				?>
        <TR>
        <TD>
        <CENTER><FONT color="#666666" size="6">TOTAL NO OF ORDERS: <?php echo $no_of_row; ?></FONT></CENTER>
        </TD>
        </TR>
        <tr>
        <td height="90" align="center">
		<TABLE width="61%" BORDER=1 CELLSPACING=0 CELLPADDING=0 align="center">
			<TR>
				<TH width="15%" height="46" bgcolor="#CCCCCC">ORDER ID</TH>
              <TH width="14%" bgcolor="#CCCCCC">MEDICINE ID</TH>
              <TH width="23%" bgcolor="#CCCCCC">PAYMENT STATUS</TH>
              <TH width="21%" bgcolor="#CCCCCC">ORDER AMMOUNT</TH>
              <TH width="27%" bgcolor="#CCCCCC">PAYMENT</TH>
		  </TR>
			<?php
				
				for($i=0;$i<$no_of_row;$i++)
				{
					$row_value= mysqli_fetch_array($result);
				?>
				<tr>
			    <td height="54" align="center" FONT SIZE=5><?php echo $row_value['OID'];?></td>
				<td align="center"><?php echo $row_value['BID'];?></td>
                <td align="center"><?php echo $row_value['OSTATUS'];?></td>
                <td align="center"><font size="5"><?php echo $row_value['AMMOUNT'];?></font></td>
                <td align="center">
                <form action="PAYMENT.php" method="post">
                <?PHP
                $nm=$row_value['OSTATUS'];
				$bk='PAYMENT COMPLETE';
				if($nm!=$bk)
				{
				?>
				<input type="hidden" value=<?php echo $row_value['OID'];?> name="oid">
        		<INPUT TYPE="SUBMIT"NAME="SUB"VALUE="DO">
                <?php
                }
				else
				{
					echo "&nbsp;";
				}
				?>
                </form>
                </td>
				</tr>
				<?php	
				}
				?>
	
    </TABLE>
    </td>
  </tr>
  <TR><TD>&nbsp;</TD></tr>
</table>
</center>
</body>
</html>
<?php
include('./HEADERS/BOTTOMHEADER2.php');
?>
