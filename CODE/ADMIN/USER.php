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
<link rel="stylesheet"  href="../CSS/SEARCHBOX.CSS">
<body>
<CENTER>
<font color="#666666" size="6">PUT USER EMAIL-ID</font>
		<FORM ACTION="USERDETAIL.php" METHOD="post"><BR>
		<INPUT TYPE="EMAIL" NAME="GG" required><BR>
        <INPUT TYPE="SUBMIT" NAME="SUB"VALUE="OK">
		</FORM>
		</CENTER>
		
</body>
</html>
<?php
include('HEADERS\BOTTOMHEADER2.php');
?>
