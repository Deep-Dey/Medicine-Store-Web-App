<?php
session_start();
include('HEADERS\CONNECTION.php');
if(!(isset($_SESSION['gmail'])))
		{
			?>
		<script>
		alert('Please Login for Order');
		window.location = "LOGIN.php";
		</script>
		<?php 
		}
else
{
$bb=$_POST['ID'];
$email=$_SESSION['gmail'];
$OID='QWERTYUIOPASDFGHJKLZXCVBNMqwertyuiopasdfghjklzxcvbnm0123456789';
		$OID=str_shuffle($OID);
		$OID=substr($OID, 0, 6);

$query94="Select * from reg where `GMAIL`='$email'";
				$result= mysql_query($query94);
				$no_of_row= mysql_num_rows($result);
				$row_value= mysql_fetch_array($result);				
$nm=$row_value['UNAME'];
				
$query22="Select * from `order` where OID='$OID'";
				$result= mysql_query($query22);
				$row=mysql_num_rows($result);
				
if($row  >0)
{
	header('location:ORDER.php');
}
else
{
$query2="Select * from medicine where `ID`='$bb'";
				$result= mysql_query($query2);
				$no_of_row= mysql_num_rows($result);
				$row_value= mysql_fetch_array($result);				
$p=$row_value['PRICE'];
$t=$p+10;
$qry="INSERT INTO `order`(`OID`, `GMAIL`, `BID`, `AMMOUNT`) VALUES ('$OID','$email','$bb','$p')";
if(mysql_query($qry))
	{
		?>
		<script>
		alert('Now Download the Chalan and Complete the Payment');
		</script>
		<?php
						
?>
<html>
<title>Bank Chalan</title>
</head>

<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <td width="49%">
    <table width="95%" border="0" cellpadding="5" cellspacing="0" align="center">
    <tr>
      <td>
    <table width="20%" border="1" cellpadding="0" cellspacing="0" align="right">
    <tr>
      <td align="center" valign="middle"><strong><font size=2>Dipositor Copy</font></strong></td></tr>
    </table><p><?php echo "Date:".date("d-m-y"); ?></p>
    <table width="100%" border="1" cellpadding="2" cellspacing="0" align="left">
    <tr><td align="center"><font size=2><strong>Pre Acknowledgement Payment(PAP) Form for Payment through any SBI Branch</strong></font></td></tr>
    </table><br>
    <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" colspan="2"><strong>Benrficiary/Remitance Details</strong></td>
      </tr>
      <tr>
        <td align="center" colspan="2">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr><td width="50%">State Bank Collect Reference No.</td><td width="50%"><?php echo $OID; ?></td></tr>
        <tr><td width="50%">BeneFiciary:</td><td width="50%">R&amp;D MEDICINE CENTER</td></tr>
        <tr><td width="50%">Category:</td><td width="50%">OTHERS</td></tr>
        <tr><td width="50%">Last Date of Payment:</td><td width="50%">Within 48 Hours of Challan Date</td></tr>
        <tr><td width="50%">Remitter</td><td width="50%"><?php echo $nm; ?></td></tr>
        <tr><td width="50%">&nbsp;</td>
        <td width="50%"><div align="right">Rs.</div></td></tr>
        </table>
        </td>
      </tr>
      <tr>
        <td align="center" width="80%"><div align="left">Collection Ammount</div></td><td><?php echo $p; ?></td>
      </tr>
      <tr>
        <td align="center" width="80%"><div align="left">Comission</div></td>
        <td>10</td>
      </tr>
      <tr>
        <td align="center" width="80%"><div align="left">Total Rs.</div></td><td><?php echo $t; ?></td>
      </tr>
</table>
&nbsp;
    <table width="100%" border="1" cellpadding="2" cellspacing="0">
      <tr>
        <td width="70%"><strong>Details of Cash/Cheque</strong></td>
        <td width="15%"><div align="center"><strong>Rs.</strong></div></td>
        <td width="15%"><div align="center"><strong>P</strong></div></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>Total Rs.</strong></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
  </table>
    Instructions for Dipositors: This is not an e-receipt.After payment,please <br>visit <a href="www.onlinesbi.com">www.onlinesbi.com</a> 'State Bank Collector' and click on the hyperlink<br>at the bottom of the page to generaye the e-receipt.
    <center>
       ___________________________________________________________
      
      <br>
      (To be Filled by the bank)</center><br>
   Branch Name:___________________
   <br><br>Brach Code:_________________
   &nbsp;&nbsp;&nbsp;&nbsp;Deposit Date:___/___/______
   <p align="right">Branch Stamp<br><br>Authorith signature</p>
   <a style="cursor:pointer;" onClick="window.print();" titlt="print screen" alt="print screen"target_blank><font color="#0000FF">PRINT PAGE</font></a></td></tr>
    </table><a href="INDEX.php"><FONT color="#000000">HOME PAGE</FONT></a>
    </td>
  
    
    
<td width="51%">
    <table width="90%" border="0" cellpadding="5" cellspacing="0" align="center">
    <tr>
      <td>
    <table width="20%" border="1" cellpadding="0" cellspacing="0" align="right">
    <tr>
      <td align="center" valign="middle"><strong><font size=2>Branch Copy</font></strong></td></tr>
    </table><p><?php echo "Date:".date("d-m-y"); ?></p>
    <table width="100%" border="1" cellpadding="2" cellspacing="0" align="left">
    <tr><td align="center"><font size=2><strong>Pre Acknowledgement Payment(PAP) Form for Payment through any SBI Branch</strong></font></td></tr>
    </table>
    <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" colspan="2"><strong>Benrficiary/Remitance Details</strong></td>
      </tr>
      <tr>
        <td align="center" colspan="2">
        <table width="100%" border="0" align="center" cellpadding="0" cellspacing="4">
        <tr><td width="50%">State Bank Collect Reference No.</td><td width="50%"><?php echo $OID; ?></td></tr>
        <tr><td width="50%">BeneFiciary:</td><td width="50%">R&amp;D MEDICINE CENTER</td></tr>
        <tr><td width="50%">Category:</td><td width="50%">OTHERS</td></tr>
        <tr><td width="50%">Last Date of Payment:</td><td width="50%">Within 48 Hours  of Challan Date</td></tr>
        <tr><td width="50%">Remitter</td><td width="50%"><?php echo $nm; ?></td></tr>
        <tr><td width="50%">&nbsp;</td>
        <td width="50%"><div align="right">Rs.</div></td></tr>
        </table>
        </td>
      </tr>
      <tr>
        <td align="center" width="80%"><div align="left">Collection Ammount</div></td><td><?php echo $p; ?></td>
      </tr>
      <tr>
        <td align="center" width="80%"><div align="left">Comission</div></td>
        <td>10</td>
      </tr>
      <tr>
        <td align="center" width="80%"><div align="left">Total Rs.</div></td><td><?php echo $t; ?></td>
      </tr>
</table>
&nbsp;<strong>Mode of Payment</strong>(Choose Either Cash/Cheque)<br />
Cash <br>
<table width="100%" border="1" cellpadding="2" cellspacing="0">
      <tr>
        <td width="50%"><div align="center"><strong>Cash Notes</strong></div></td>
        <td width="50%" colspan="4"><div align="center"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ammount<br /> 
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;P</strong></div></td>
      </tr>
      <tr>
        <td width="50%"><div align="right">*2000 </div></td>
        <td width="10%">&nbsp;</td>
        <td width="10%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
      </tr>
      <tr>
        <td width="50%"><div align="right">*500 </div></td>
        <td width="10%">&nbsp;</td>
        <td width="10%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
      </tr>
      <tr>
        <td width="50%"><div align="right">*200 </div></td>
        <td width="10%">&nbsp;</td>
        <td width="10%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
      </tr>
      <tr>
        <td width="50%"><div align="right">*100 </div></td>
        <td width="10%">&nbsp;</td>
        <td width="10%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
      </tr>
      <tr>
        <td width="50%"><div align="right">*50 </div></td>
        <td width="10%">&nbsp;</td>
        <td width="10%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
      </tr>
      <tr>
        <td width="50%"><div align="right">*20 </div></td>
        <td width="10%">&nbsp;</td>
        <td width="10%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
      </tr>
      <tr>
        <td width="50%"><div align="right">*10 </div></td>
        <td width="10%">&nbsp;</td>
        <td width="10%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
      </tr>
      <tr>
        <td width="50%">&nbsp;</td>
        <td width="10%">&nbsp;</td>
        <td width="10%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
      </tr>
      <tr>
        <td width="50%"><div align="right">Coins </div></td>
        <td width="10%">&nbsp;</td>
        <td width="10%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
      </tr>
      <tr>
        <td width="50%"><div align="right">Total Rs.</div></td>
        <td width="10%">&nbsp;</td>
        <td width="10%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
        <td width="15%">&nbsp;</td>
      </tr>
  </table>
Cheque<br />
  Cheque No._______________________<br />Cheque Date:___/___/______<br />
  Drawee Bank & Branch: State Bank of India &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Branch:<br>
  ______________________________________Signature of the depositor
</div><p align="right">
  Branch Stamp</p></td></tr>
    </table>
    </td>

     
    
  </tr>
</table>
</body>
</html>
<?php
	}
else
{
	?>
		<script>
		alert('Sorry some error Occur');
		</script>
		<?php
}
}
}
?>