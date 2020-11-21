<?php
session_start();
if(isset($_SESSION['gmail']))
		{
			include('./HEADERS/HEADERL.php');		
		}
	else
		{
			include('./HEADERS/HEADER.php');
		}
include('./HEADERS/CONNECTION.php');
?>
<HTML>
<body>
<table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
   <TR>
   <TD></TD>
   <TD></TD>
   </TR>
  <tr>
    <td height="169" colspan="3" bgcolor="#FFFFFF">
     <CENTER><img SRC="SYSPIC\DEYPIC20.jpg" width="503" height="484">
    </td>
  <td width="55%"><p><font size=6 color="#666666"><strong>ABOUT US</strong></font>
  </p>
    <p>&nbsp;</p>
    <font size="4"><p>
      India's Leading and Most-trusted Online Healthcare Aggregator:

Tired of rushing to the nearest chemist/ medical store to buy monthly medicines? You need not do so anymore! PharmEasy, your very own online healthcare and
medicine delivery platform delivers 100% genuine medicines right to your doorstep.

PharmEasy is pharmacy made easy. In a short span of three years, we have established ourselves as India's leading online healthcare and medicine delivery platform, catering to two million customers pan India. Through our mobile app and website, we help customers (patients and their caregivers) connect with local pharmacy stores and diagnostic centers to fulfill their extensive medical needs. We firmly believe that everyone should have access to good health and that health care should be affordable to all. Taking this belief forward, we offer 100% genuine medicines at FLAT 20% OFF, up to 70% OFF on Diagnostic tests and up to 50% OFF on healthcare products, ensuring highest savings in the shortest time possible.

We now deliver medicines in 1000+ cities in India, covering 22000+ pin codes. We offer diagnostic tests in Mumbai including Thane,
Navi Mumbai, Kalyan & Dombivali, in Delhi, Noida, Gurgaon, Faridabad & Ghaziabad (entire NCR), Chennai, Pune, Ahmedabad, and Gandhi Nagar, Surat, Vadodara, Lucknow, Kolkata, Hyderabad, Bengaluru, and Jaipur.
    </p><BR>
    <P>
    For those who forget to take their medicine doses on time, this feature acts as a reminder to ensure you never miss a dose.
Skipping doses lowers the efficacy of the medication and delays the treatment.</P><BR>
<P>
Instead of placing repeated orders for required medicines, you can subscribe to our FREE refill service. Once you have uploaded your medicine prescription, click on 'Auto Refills.'</P></font></td>
  </tr>
</table>
</body>
</html>
<?php
include('./HEADERS/BOTTOMHEADER2.php');
?>







