
<!--A script to test whether the login details are authentic and the create a session for the user-->
<?php
session_start();
//script to collect data from the form
if(isset($_POST['loggedin'])){
$userID=$_POST["userID"];
$memberName=$_POST["memberName"];
$secretCode=$_POST["secretCode"];
$salt1='%#$&/';
$salt2='~^7_+';
$myCode=md5("$salt1$secretCode$salt2");
require_once("RangeFunctions.php");
		$con=ConnectDatabase(); 
$loginQuery="SELECT AdminName FROM Administrator WHERE AdminId='$userID' AND AccessKey='$myCode'";
//query statement for fetching the title and member name based on the entered userID and secret code
$loginResult=mysql_query($loginQuery);//fetching the title and member name based on the entered userID and secret code

$user=mysql_fetch_array($loginResult);//saving the returned record as an associativve called $user. The array has only two elements

if($user['AdminName']==$memberName)
{
		//creating the session for a manager
		$_SESSION['AdminName']=$memberName;
		$_SESSION['AdminId']=$userID;//
		header("Location:Admnistrator.php");
}

else{
	die("<em>Wrong Credentials entered....Access denied</em>");
}
}

?>  