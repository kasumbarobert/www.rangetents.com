<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<title>Change Access code</title><!--Title of the page -->
<link rel="stylesheet" type="text/css" href="RangeStyles.css">
<script src="ClientSideValidations.js"></script>
<script type="text/javascript">
</script>
<style type='text/css'>
h1{
	color:red;
	margin:30%;
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
require_once("header.php");
			require("ServerSideValidations.php");//this includes the validation functions in this file
			require_once("RangeFunctions.php");
			$con=ConnectDatabase();//connect to the database
if(isset($_POST['oldCode'])&& isset($_POST['newCode1'])&& isset($_POST['newCode2'])) 
	{		if($_POST['newCode1']===$_POST['newCode2']){
			$salt1='%#$&/';
			$salt2='~^7_+';
			$oldCode=md5("$salt1$_POST[oldCode]$salt2");
			//encrypting the entered old code before comparison
		
			$newCode=md5("$salt1$_POST[newCode1]$salt2");//encrypting the new code
			
			$query="SELECT AdminName From Administrator WHERE AccessKey='$oldCode' AND AdminId='$_SESSION[AdminId]'";
			//selects member_Name based on the submitted on the manager ID and the submitted old code
			$result=mysql_query($query) or die(mysql_error());
	
			if(	mysql_num_rows($result)!=0 && mysql_result($result,0,'AdminName')==$_SESSION['AdminName']){
				$query2="UPDATE Administrator SET AccessKey='$newCode' WHERE AdminId='$_SESSION[AdminId]'";
				//updating the table
				$updated=mysql_query($query2)or die(mysql_error());
				if($updated){
					echo "<h1 style='color:blue;'> Secret Code change Successful</h1>";
				}
			}
			else{
				echo "<h1>Code change Denied!</h1>";
			}
	}else{
		echo "<h1>The new secret codes/access keys don't match</h1>";
	}
			}
			else{
				echo "<h1>Secret Code was not change</h1>";
			}
?>
</div>
<?php
 require_once('footer.php');
?>
</body>
</html>