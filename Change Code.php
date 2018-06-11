<!doctype html>
<!--Issue receipt form-->
<html>
<head>
<meta charset="utf-8"/>
<title>Change Secret Code</title><!--Title of the page -->
<link rel="stylesheet" type="text/css" href="ITSstyles.css">
<script src="ClientSideValidations.js"></script>
<script type="text/javascript">
	function testSecretCode()
	{	var code=document.getElementById("new_Code1").value;
		var error=ValidateSecretCode(code);
		/*invokes the ValidateSecretCode() function from ClientSideValidations.js which validates the name and returns a 1 if the SecretCode is okay or an error message if the Secret Code has an issue. Refer to ClientSideValidations.js to understand how ValidateSecretCode()works*/
		
		if(error != 1)
		{
			alert(error);//displays the error message as a pop up window
		}
	}//tests to ensure that the secret code is secure enough.
	function testMatch(){
		var code1=document.getElementById("new_Code1").value;
		var code2=document.getElementById("new_Code2").value;
		if(!(code1==code2)){
			alert("Secret Codes don't match");
		}
	}//tests to ensure that codes entered match
</script>
</head>
<html>
<body>
<?php
session_start();
	if(!(isset($_SESSION['MemberName'])|| isset($_SESSION['ManagerName'])))
	{
		die("Error while loading the page....");//kills the page if there was no successful login
	}
	else{
		require_once("header.php");//includes the generic header
	}
	//A script to check whether the user has logged in before accessing this page
?>
<fieldset>
<legend>Create your code from here</legend>
<form method='post' action='new Code.php'>
<!--Form to receive the inputs from the user-->
<table>
<!--Elements included into the form as table rows-->
<tr><td>Old Code</td><td><input type='password' name='oldCode' id='old_Code' required></td></tr>
<tr><td>New Code</td><td><input type='password' name='newCode1' id='new_Code1' required='required' onChange="testSecretCode();"></td></tr>
<tr><td>Confirm Code</td><td><input type='password' name='newCode2' id='new_Code2' required onChange="testMatch();"></td></tr>
</table><!--End of the table that contains the elements-->
<input type='submit' value='Change Code'> <input type='reset' value='Clear form'>
</form>
</fieldset>
</body>
</html>