<html><body><?php
include('./HEADERS/CONNECTION.php');
if(isset($_POST['SUB']))
{
$TD=$_POST['TID'];
//$link = mysqli_connect("localhost", "root", "", "example") or die("Couldn't connect");
$query2="Select * from `transaction` where TID='$TD'";
$result= mysqli_query($conn, $query2);
				$no_of_row= mysqli_num_rows($result);
				$row_value= mysqli_fetch_array($result);
				$TPP="";
				if($row_value>0){
					$TPP=$row_value['PRICE'];
				}
				
if($no_of_row >0)
{				
$OD=$_POST['OID'];
$query23="Select * from `order` where OID='$OD'";
$result2= mysqli_query($conn, $query23);
				$no_of_row= mysqli_num_rows($result2);
				$row_value= mysqli_fetch_array($result2);
				$OPP=$row_value['AMMOUNT'];
				$BID=$row_value['BID'];
if($no_of_row >0)
{
if((!(strcmp($TPP,$OPP))))
{
	$TEMP="PAYMENT COMPLETE";
	$query30="UPDATE `order` SET `OSTATUS`='$TEMP' WHERE OID='$OD'";
	if(mysqli_query($conn, $query30))
	{
		$query3="DELETE FROM `transaction` WHERE TID='$TD'";
		$result=mysqli_query($conn, $query3);
		$query33="SELECT * FROM `medicine` WHERE ID='$BID'";
		$result=mysqli_query($conn, $query33);
		$row_value= mysqli_fetch_array($result);
		$temp=$row_value['QTY'];
		$St=$temp-1;
	$qry11="UPDATE `medicine` SET `QTY`='$St' WHERE ID='$BID'";
	$delbok=mysqli_query($conn, $qry11);
		?>
	<script>
	alert('Your Payment is Sucessfull');
	window.location = "ORDER.php";
    </script>
    <?php
	}
	else
	{
		?>
	<script>
	alert('Something went Wrong');
	window.location = "ORDER.php";
    </script>
    <?php
	}
	
}
else
{
	?>
	<script>
	alert('Payment not Done');
	window.location = "ORDER.php";
    </script>
    <?php
}
}
else
{
?>
	<script>
	alert('Wrong Order ID');
	window.location = "ORDER.php";
    </script>
    <?php	
}
}
else
{
	?>
	<script>
	alert('Wrong Tranaction ID');
    window.location = "ORDER.php";
    </script>
    <?php
	
}
}
?>
</body></html>