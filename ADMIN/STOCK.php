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
<table border="0" align="center" cellpadding="10" cellspacing="10" width="100%">

<?php
				include('HEADERS\CONNECTION.php');
				$query2="Select * from book";
				$result= mysql_query($query2);
				$no_of_row= mysql_num_rows($result);
				for($i=0;$i<$no_of_row;$i++)
				{
					$row_value= mysql_fetch_array($result);
				?>
  <tr>
    <td width="16%" ROWSPAN=4><img src="..\DATAIMG\<?php echo $row_value['IMG'];?>" width="144" height="204" border="1"></td>
    <td width="84%" height="43"><FONT SIZE=5 color="#666666"><B><?php echo $row_value['BNAME'];?></FONT></B><BR>
    <FONT size="4" color="#666666">BOOK ID: <?php echo $row_value['BID'];?></FONT></td>
  </tr>
  <tr>
    <td>WRITTEN BY: <B><?php echo $row_value['ANAME'];?></B></td>
  </tr>
  <tr>
    <td><b>RS:<font color="#FF0000"><?php echo $row_value['PRICE'];?>/-</font></b></td>
  </tr>
  <tr>
    <td height="53"><FONT color="#FF0000"><B>NO. OF COPIES: <?php echo $row_value['QTY'];?></B></font></td>
  </tr>
  <tr><td colspan="2">
<hr color="#666666" width="97%" align="center">
</td></tr>
	<?php	
	}
	?>
    </table>
    
    <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WE HOPE YOU WILL  LIKE IT</strong>

</body>
</html>
<?php
include('HEADERS\BOTTOMHEADER2.php');
?>