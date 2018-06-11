<!doctype html>
<!--Issue receipt form-->
<html>
<head>
<meta charset="utf-8"/>
<title>Log out</title><!--Title of the page -->
<link rel="stylesheet" type="text/css" href="ITSstyles.css">
</head>
<html>
<body>
<?php
session_start();
if(isset($_SESSION['AdminName'])||isset($_SESSION['AdminId'])){
	session_destroy();
}
echo "You have been successfully logged out. Click <a href='login.php'>here</a> to login again";
	
?>
</body>
</html>