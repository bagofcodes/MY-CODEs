<!DOCTYPE html>
<html>
<head>
	<title>DASHBOARD</title>
	<style type="text/css">
	span{
		background-color: red;
	}
	bc{
		background-color: #7fff00;
	}
</style> 
</head>
<body style="background-color: lightblue">
<div align="center"><h1><span>DIGITAL CLOCK</span></h1>
</div>
<div align="center" style="color: red"><bc><?php
date_default_timezone_set('ASIA/KOLKATA');
echo date('H:i:s');
$url=$_SERVER['REQUEST_URI'];
header("Refresh: 1; URL=$url");
?></bc></div>
</body>
</html>