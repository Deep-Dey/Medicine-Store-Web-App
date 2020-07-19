
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
?><HTML>
<body link="white" vlink="#FFFFFF">
<?php
include('HEADERS\GALLERY.php');
include('HEADERS\BOTTOMHEADER.php');
?>
</body>
</html>
