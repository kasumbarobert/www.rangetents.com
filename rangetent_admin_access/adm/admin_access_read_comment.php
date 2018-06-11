<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<title>Add new member</title><!--Title of the page -->
<link rel="stylesheet" type="text/css" href="RangeStyles.css">
<script src="ClientSideValidations.js"></script>
<script type="text/javascript">
</script>
<style type='text/css'>
p a button{
	font-size:2em;
	color:blue;
	margin-left:20%;
}
</style>
</head>
<body>
<?php
	session_start();
	if(isset($_SESSION['AdminName']) && $_SESSION['AdminId']){
	require_once("header.php");
	}
	else{
		header("Location:Login.php");
	}
?>
<div id='pageBody'>
<?php
echo "<p style='text-align:right'>Logged in as (<a href=''>$_SESSION[AdminName]</a> | <a href='Logout.php'>Log out</a>)</p>";
?>
<?php
	require_once("RangeFunctions.php");
	$con=ConnectDatabase();
	if(isset($_POST['startdate']) && isset($_POST['enddate']) ){
		//strtotime($startDate)>strtotime($endDate)
		$startDate=$_POST['startdate'];
		$endDate=$_POST['enddate'];
		$query="SELECT * FROM comments WHERE DateAdded BETWEEN '$startDate' AND '$_POST[enddate]' "; 
		$comments=mysql_query($query);
		if(mysql_num_rows($comments)){
		ECHO "
	<table cellspacing='8' cellpadding='3' width='100%'style='text-align:center; padding-bottom:20%;'>
	<caption><h2 style='text-align:center;  font-size:0.8em;'>Displaying messages received between $startDate and $endDate </h2></caption>
	<tr><th>Name</th><th>Phone Contact</th><th>Email</th><th>Comment/message</th><th>Date Received</th></tr>
	<tr><td colspan='6'><hr/></td></tr>";
		while($display=mysql_fetch_array($comments))
		{
			print("
				<tr><td>".$display['CustomerName']."</td><td>".$display['TelephoneNumber']."</td><td>".$display['EmailAddress']."</td><td>".$display['Comment']."</td><td>".$display['DateAdded']."</td></tr>
			");
		}
		echo '</table>';}
		else{
			echo" <h1 style='color:red;'>No results found! Check the dates entered. Ensure that the dates have been entered in the format \"yyyy-mm-dd\"</h1>";
		}
	}else{
		echo "
		<form action='Read Comment.php' method='post' style='padding-bottom:15%; padding-left:10%;' >
		<p>Display messages received </p>
		<p>From: <input type='date' name='startdate' required> e.g 2015-07-23</p>
		<p>To:&nbsp&nbsp<input type='date' name='enddate' required> e.g 2015-07-26</p>
		<input type='submit' value='Display Messages'></form>
	";
	}
?>
</div>

<?php
require_once('footer.php');
?>
</body>
</html>