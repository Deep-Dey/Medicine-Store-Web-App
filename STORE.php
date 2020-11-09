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
			include('HEADERS\HEADERL.php');		
		}
	else
		{
		include('HEADERS\HEADER.php');
		}
include('HEADERS\CONNECTION.php');
?>
<table border="0" align="center" cellpadding="5" cellspacing="5" width="100%" BGCOLOR="WHITE">
<?php
        $link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
				$query2="Select * from medicine";
				$result= mysqli_query($link, $query2) or die("Couldn't connect");
				$no_of_row= mysqli_num_rows($result);
				for($i=0;$i<$no_of_row;$i++)
				{
					$row_value= mysqli_fetch_array($result);
					if($row_value['QTY']>0)
					{
				?>
  <tr>
    <td width="16%" ROWSPAN=5><img src="ADMIN/DATAIMG/<?php echo $row_value['IMAGE'];?>" width="180" height="250" border="1"></td>
    <td width="84%" height="43"><FONT SIZE=5 color="#666666" face="Georgia"><B>MEDICINE NAME:&nbsp;<?php echo $row_value['MNAME'];?></FONT></B><BR>
    <FONT size="3" color="#666666" face="Georgia">MANUFACTURED  BY:&nbsp;<?php echo $row_value['BNAME'];?></FONT></td>
  </tr>
  <tr>
    <td><FONT face="Georgia">MANUFACTURING DATE : &nbsp;&nbsp;<font color="#FF0000"><?php echo $row_value['MFD'];?></FONT></FONT></td>
  </tr>
  <tr>
    <td><FONT face="Georgia">EXPIERY DATE : &nbsp;&nbsp;<font color="#FF0000"><?php echo $row_value['EXP'];?></font></FONT></td>
  </tr>
    <tr>
    <td><font color="#FF0000" face="Georgia">RS : &nbsp;&nbsp;<?php echo $row_value['PRICE'];?>/-</font></td>
  </tr>
  <tr>
    <td>
    <form action="CHALLAN.php" method="post">
<input type="hidden" value=<?php echo $row_value['ID'];?> name="ID">
        <INPUT TYPE="SUBMIT" NAME="SUB2" VALUE="BUY NOW" class="a1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</form></td>
  </tr>
  <tr><td colspan="2">
<hr color="#666666" width="97%" align="center">
</td></tr>
	<?php	
	}
	}
	?>
    </table>
	</TD>
  </tr>
  <tr>
    <?php
			include('HEADERS\BOTTOMHEADER2.php');
		?> 
  </tr>
</table>
</body>
</html>
