<?php
session_start();
include('HEADERS\CONNECTION.php');
$l=$_POST['ID'];
$query33="SELECT * FROM `medicine` WHERE ID='$l'";
$result=mysql_query($query33);
$row=mysql_num_rows($result);
if($row  >0){
	$qry="delete from medicine where ID='".$l."'";
	$result21=mysql_query($qry);
	?>
	<script>
	alert('Medicine Deleted Successfully');
	window.location = "STORE.php";
    </script>
    <?php
	
}
else
	{
		?>
	<script>
	alert('The Book does not Exist');
	window.location = "STORE.php";	
    </script>
    <?php
	}
?>
