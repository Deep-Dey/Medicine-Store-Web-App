<HTML>
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
<body>
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
?>
<?php
include('HEADERS\GALLERY.php');
include('HEADERS\BOTTOMHEADER.php');
include('HEADERS\CONNECTION.php');
?>
</body>
</html>
