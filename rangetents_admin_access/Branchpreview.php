<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<title>Contact Us</title>
<link rel="stylesheet" href="rangeStyles.css" />
<style type='text/css'>

</style>
</head>

<body>
<?php
	require_once("header.php");
?>

<div id='pageBody'>
<?php
$branchName=$_GET['branch'];

if($branchName=='Nalukolongo')
{
	print("
	<center>
	<img src='images/Nalukolongo Branch.jpg' alt='Nalukolongo Branch Front view' height='100%' width='100%'>
	</center>
	"
	);
}
else if($branchName=='Wakaliga')
{
	print("
	<center>
	<img src='images/IMG_20150325_124935.jpg' alt='Wakaliga Branch Front view' height='100%' width='100%'>
	</center>
	"
	);
}
else if($branchName=='Katwe')
{
	print("
	<center>
	<img src='images/Katwe Branch.jpg' alt='Katwe Branch Front view' height='100%' width='100%'>
	</center>
	"
	);
}
?>


</div>

<?php
require_once('footer.php');
?>
</body>
</html>

<!--Range Tents services companyy has three branches located at Katwe, Nalukolongo and Wakaliga. The Katwe-->