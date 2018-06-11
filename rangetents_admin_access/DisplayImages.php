<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<title>Products</title>
<link rel="stylesheet" href="rangeStyles.css" />
<script src="popup.js" ></script>
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
<?php
	require_once("header.php");
?>

<div id='pageBody'>
<?php
	require_once("RangeFunctions.php");
	$con=ConnectDatabase();
	if(isset($_POST['imageName'])){$imagePath=$_POST['imageName'];
	
	$imageInformation=mysql_query("SELECT Title, Category, Description FROM images WHERE ImagePath='$imagePath'") or die(mysql_error());
	$image=mysql_fetch_array($imageInformation);
	print(
	"
		<table width='100%' height='80%'>
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
		$img_qry="SELECT Title, ImagePath FROM Images WHERE Category='$category' ORDER BY DateAdded DESC";
	$count=0;
	$imagesReturned=@mysql_query($img_qry) or die(mysql_error());
	echo "<table><tr>";
	while($image=mysql_fetch_array($imagesReturned))
	{
		$count++;
		print(
		"<td width='33%;' align='center'><form action='DisplayImages.php' method='post'><img src='".$image['ImagePath']."' width='90%' height='50%' ><br />
		<input type='hidden' name='imageName' value='".$image['ImagePath']."'>
		".$image['Title'] ." <input type='submit' value='More information >>' style='color:red; text-decoration:underline;border-radius:10px; background-color:white; border:hidden; text-decoration:underline;'/></form>
		</td>"
		);
		
		if($count%3==0)
		{
			echo "</tr><tr>";
		}	
	}
	echo "</tr></table>";
	}
	else{
		$img_qry="SELECT Category, Title, ImagePath FROM Images ORDER BY DateAdded DESC";
	$count=0;
	$imagesReturned=@mysql_query($img_qry) or die(mysql_error());
	echo "<table><tr>";
	while($image=mysql_fetch_array($imagesReturned))
	{
		$count++;
		print(
		"<td width='33%;' align='center'><form action='DisplayImages.php' method='post'><img src='".$image['ImagePath']."' width='90%' height='50%' ><br />
		<input type='hidden' name='imageName' value='".$image['ImagePath']."'>
		".$image['Title'] ." <input type='submit' value='More information >>' style='color:red; text-decoration:underline;border-radius:10px; background-color:white; border:hidden; text-decoration:underline;'/></form>
		</td>"
		);
		
		if($count%3==0 && $count!=0)
		{
			echo "</tr><tr>";
		}	
	}
	echo "</tr></table>";
	}
?>
</div>

<?php
require_once('footer.php');
?>
</body>
</html>