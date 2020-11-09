<?php
session_start();
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
include('HEADERS\CONNECTION.php');
$GMAIL=$_SESSION['gmail'];
?>
<HTML>
<body>
  <br>
		<CENTER>
		  <p><strong><font color="#666666" size="5">
	      YOUR ADDRESS FOR DELIVERY
		    </font></strong>	      </p>
		  <p><br>
	      </p>
		  <table width="35%" border="1" align="center" cellpadding="4" cellspacing="0">
  <?php
        include('HEADERS\CONNECTION.php');
        $link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
				$query6="Select * from address where GMAIL='".$GMAIL."'";
				$result= mysqli_query($link, $query6);
				$row_value= mysqli_fetch_array($result);
				?>
		    <tr>
    <TD width="43%" bgcolor="#CCCCCC" align="center"><h3><strong>ADDRESS</strong></h3></TD>
    <td width="57%" height="35" bgcolor="#FFFFCC" align="center"><FONT SIZE=4><?php echo $row_value['ADDRESS'];?></FONT></td>
  </tr>
  <tr>
    <TD width="43%" bgcolor="#CCCCCC" align="center"><h3><strong>LANDMARK</strong></h3></TD>
    <td width="57%" height="34" bgcolor="#FFFFCC" align="center"><FONT SIZE=4><?php echo $row_value['LANDMARK'];?></FONT></td>
  </tr>
  <tr>
    <TD width="43%" bgcolor="#CCCCCC" align="center"><h3><strong>CITY</strong></h3></TD>
    <td width="57%" height="35" bgcolor="#FFFFCC" align="center"><FONT SIZE=4><?php echo $row_value['CITY'];?></FONT></td>
  </tr>
  <tr>
    <TD width="43%" bgcolor="#CCCCCC" align="center"><h3><strong>POSTAL CODE</strong></h3></TD>
    <td width="57%" height="33" bgcolor="#FFFFCC" align="center"><FONT SIZE=4><?php echo $row_value['PCODE'];?></FONT></td>
  </tr>
  <tr>
    <TD width="43%" bgcolor="#CCCCCC" align="center"><h3><strong>DISTRICT</strong></h3></TD>
    <td width="57%" height="34" bgcolor="#FFFFCC" align="center"><FONT SIZE=4><?php echo $row_value['DISTRICT'];?></FONT></td>
  </tr>
  <tr>
    <TD width="43%" bgcolor="#CCCCCC" align="center"><h3><strong>STATE</strong></h3></TD>
    <td width="57%" height="32" bgcolor="#FFFFCC" align="center"><FONT SIZE=4>WEST BENGAL</FONT></td>
  </tr>
</table>
  <BR>
  <p><a href="UPDATEADD.php"><font color="#FF0000">UPDATE ADDRESS</font></a></p>
		    <p>&nbsp;</p>
<p>*REMEMBER THAT DELIVERY AVAILABLE ONLY FOR WEST BENGAL*</p></center>
	<?php	
	?>
    
</body>
</html>
<?php
include('HEADERS\BOTTOMHEADER2.php');
?>