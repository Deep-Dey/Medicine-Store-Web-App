<HTML>

<style>
body{
	margin-left: 20px;
	width:100%;
	overflow-x:hidden;
	height: 100%;
}

#container input[type=text]{
	vertical-align:top;
	margin-left: 75px;
	margin-top:0px;
    width:30%;
    border:2px solid #aaa;
    border-radius: 26px;
    outline:none;
    height:40px;
    box-sizing:border-box;
    transition:.3s;
  }
  
#container input[type=text]:focus{
    border-color:dodgerBlue;
    box-shadow:0 0 8px 0 dodgerBlue;
  }
  
#container input[type=submit]{
	vertical-align:top;
	margin-left: 1px;
	margin-top:0px;
    width:5%;
    border:2px solid #aaa;
    border-radius: 26px;
    outline:none;
    height:40px;
    box-sizing:border-box;
    transition:.3s;
  }
  
#container input[type=submit]:focus{
    border-color:dodgerBlue;
    box-shadow:0 0 8px 0 dodgerBlue;
  }
  
*{
	margin: 0px;
	padding: 0px;
}

#container ul {
	vertical-align:middle;
	position:inherit;
	list-style: none;
	padding: 0px;
	margin-left: 0px;
	position:inherit;
}
#container ul li{
	list-style:none;
	background-color:#666;
	width: 150px;
	border: 1px solid white;
	border-radius: 26px;
	height: 40px;
	line-height: 40px;
	text-align:center;
	float:left;
	color:solid white;
	font-size: 19px;
}

#container ul  li:hover{
	background-color:  #85C1E9;
}

#container ul li a{
	color:#FFF;
	text-decoration:none;
}

#container ul ul{
	display: none;
}

#container  ul  li:hover > ul{
	display: block;
}

#container  ul li ul li {
	float:none;
}
</style>
<body>

<center>
  <font color="#666666" size="7"><b>R&amp;D MEDICINE CENTER</b></font>
</center>
<br>
<div id="container">
<ul>
<li><a href="INDEX.php">HOME</a></li>
<li><font color="#FFFFFF">MEDICINES</font>
<ul>
		<li><a href="STORE.php">DEALS</a></li>
        <li><a href="ORDER.php">ORDERS</a></li>
	</ul>
    </li>
<li><font color="#FFFFFF">YOUR-INFO</font>
	<ul>
		<li><a href="ACCDETAILS.php">ACCOUNT</a></li>
        <li><a href="ADDADDRESS.php">ADDRESS</a></li>
	</ul>
    </li>
<li><font color="#FFFFFF">OTHERS</font>
	<ul>
		<li><a href="ABOUTUS.php">ABOUT US</a></li>
        <li><a href="FEEDBACK.php">FEEDBACK</a></li>
	</ul>
    </li>
<li><a href="LOGOUT.php">LOG OUT</a></li>
</ul>

<FORM ACTION="SEARCHEDRESULT.php" METHOD="post">
                <INPUT TYPE="text"
						NAME="SS" PLACEHOLDER=" SEARCH FOR MEDICINES">
                        <INPUT TYPE="SUBMIT"
						NAME="SUB"VALUE="OK"></FORM>

<p align="left">&nbsp;</p>
<p align="left">&nbsp;</p>
<hr color="#666666" width="97%" align="center">
<p align="left">&nbsp;</p>
<hr color="#666666" width="97%" align="center">
<p align="left">&nbsp;</p>
<p align="left">&nbsp;</p>
</div>
</body>
</html>




