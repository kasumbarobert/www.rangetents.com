<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<title>Products</title>
<link rel="stylesheet" href="rangeStyles.css" />
<script src="popup.js" ></script>
<script type='text/javascript'>


</script>
<style type='text/css'>
p{
	font-size:1.5em; color: blue;
}
a:hover.comment{
	text-decoration:underline;
	color:red;
	font-size:2em;
}
a{
	color:#F33;
}
</style>
</head>

<body>
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php
	require_once("header.php");
?>
</div>
</div>
<div id='pageBody' class='responsive-table'>
<?php
	require_once("RangeFunctions.php");
	$con=ConnectDatabase();
	if(isset($_POST['imageName'])){$imagePath=$_POST['imageName'];
	
	$imageInformation=mysql_query("SELECT Title, Category, Description FROM images WHERE ImagePath='$imagePath'") or die(mysql_error());
	$image=mysql_fetch_array($imageInformation);
	print(
	"
		<table width='100%' height='80%' class='table'>
		<tr><td align='left' width='70%' style='padding-left:5%;'><img src='$imagePath' width='80%' height='65%'></td><td rowspan='2' valign='top'><section id=''><h1 style='color:red;'>Thank you for visiting our website!</h1>
<p style='font-size:1.5em; color: blue;'>All our products can be offered in any design, color, and size of preference.<br />You can come with your predefined design and we will make you that product which is worthy your money!</p>
<p>Leave us a <a href='comment.php' class='comment'>comment</a> to enable us serve you better</p></section></td>
</tr><tr><td align='left' style='font-size:1.3em; padding:5%; padding-right:8%;'>Category: <span style='color:#66F; font-size:1.2em;'>".$image['Category']."</span><br /> Brief description<br /><span style='color:#66F; font-size:1.2em;'>".$image['Description']."</span> <p>send us a <a href='comment.php'>comment/message</a> about the product</p></td></tr>
		</table>
	"
	);}
	else if(isset($_POST['Category']))
	{
		$category=$_POST['Category'];
		$img_qry="SELECT Title, ImagePath FROM images WHERE Category='$category' ORDER BY DateAdded DESC";
	$count=0;
	$imagesReturned=@mysql_query($img_qry) or die(mysql_error());
	echo "<div class='row'>";
	while($image=mysql_fetch_array($imagesReturned))
	{
		$count++;
		print(
		"<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12'>
		<form action='DisplayImages.php' method='post' id='".$image['ImagePath']."'>
		<input type='hidden' name='imageName' value='".$image['ImagePath']."'>
		<a href='javascript:{}' onClick='send_data(\"".$image['ImagePath']."\");'><img src='".$image['ImagePath']."' width='100%'  class='featuredImg img-responsive' >
		 Click to view </a></form> </div>
		"
		);
	}
	echo "</div>";
	}
	else{
		$img_qry="SELECT Category, Title, ImagePath FROM images ORDER BY DateAdded DESC";
	$count=0;
	$imagesReturned=@mysql_query($img_qry) or die(mysql_error());
	echo "<div class='row'>";
	while($image=mysql_fetch_array($imagesReturned))
	{
		$count++;
		print(
		"<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12'>
		<form action='DisplayImages.php' method='post' id='".$image['ImagePath']."'>
		<input type='hidden' name='imageName' value='".$image['ImagePath']."'>
		<a href='javascript:{}' onClick='send_data(\"".$image['ImagePath']."\");'><img src='".$image['ImagePath']."' width='100%'  class='featuredImg img-responsive' >
		 Click to view </a></form> </div>
		"
		);
	}
	echo "</div>";
	}
?>
</div>
<div class="row" style="margin-top:2%;">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php
require_once('footer.php');
?>
</div>
</div></div>
</body>
</html>