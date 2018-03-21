<?php
session_start();
?>
<html>
     <head>
		<title>MMICT&BM</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<!--header-->
	<div class="header">

	    <ul class="navbar">
	 	<li><a href="#">SERVICES</a></li>
	 	<li><a href="#">OUR STORY</a></li>
	 	<li><a href="#">WORK</a></li>
	 	<li><a href="#">JOURNAL</a></li>
	 	<li><a href="#">CONTACT</a>	</li>
	 	<li><h2>Welcome : <i><?php echo $_SESSION['login_user']; ?></i></h2></li>
	 	<li><a href="logout.php">logout</a>	</li>
<div class="logo">
	<img src="images/log.png">
</div>

</div>
</ul>
</div>
</body>
</html>