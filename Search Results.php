<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<title>Search results</title>
<link rel="stylesheet" href="rangeStyles.css" />
<style type='text/css'>

</style>
<script src="popup.js" ></script>
</head>

<body>
<div class='container'>
<?php
	require_once("header.php");
?>

<div id='pageBody'>
<?php
	if(isset($_POST['search_key']))
	{
		require_once("RangeFunctions.php");
		$con=ConnectDatabase();
		
		$searchKey=$_POST['search_key'];
		$img_qry="SELECT Title, ImagePath FROM images WHERE Category LIKE '%$searchKey%' OR Title LIKE '%$searchKey%' OR Description LIKE '%$searchKey%' ORDER BY DateAdded DESC";
		$count=0;
		$imagesReturned=@mysql_query($img_qry) or die(mysql_error());
		if(mysql_num_rows($imagesReturned))
		{echo "<table><tr>";
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
		echo "</tr></table>";}
		else{
		echo "<h1 style='color:red;'>No results found</h1>";}
	
	}
	else{
		header("Location:DisplayImages.php");
	}
	
	
?>
</div>

<?php
require_once('footer.php');
?>
</div>
</body>
</html>