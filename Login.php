<!--This page displays the login page-->
<html>
<head>
<meta charset="utf-8"/>
<title>Login</title><!--Title of the page -->
<link rel="stylesheet" type="text/css" href="ITSstyles.css">
<script src="ClientSideValidations.js"></script>
</head>
<html>
<body>
<fieldset style="margin-left:20%; margin-right:20%; margin-top:15%; font-size:2em;">
<legend>Enter your Access information</legend>
<form method='post' action='check login.php'>
<!--Form to record the details about the new team member-->
<table>
<!--Elements included into the form as table rows-->
<tr><td>User ID</td><td><input type='text' name='userID' id='user_ID' placeholder="Enter your Employee Number" required/> <span style="color:red; font-size:0.8em;">*required</span></td></tr>
<tr><td>Name</td><td><input type='text' name='memberName' id='member_Name' required='required'/> <span style="color:red; font-size:0.8em;">*required</span></td></tr>
<tr><td>Secret Code</td><td><input type='password' name='secretCode' id='secret_Code' required='required'/> <span style="color:red; font-size:0.8em;">*required</span></td></tr>
</table><!--End of the table that contains the elements-->
<input type="hidden" name="loggedin" value="true"><!--hidden element which is set to true on submitting the form-->
<input type='submit' value='Login'/>
</form>
</fieldset>
</body>
</html>