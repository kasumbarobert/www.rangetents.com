<!--Issue receipt form-->
<html>
<head>
<meta charset="utf-8"/>
<title>Add new Admnistrator</title><!--Title of the page -->
<link rel="stylesheet" type="text/css" href="RangeStyles.css">
<script src="popup.js" ></script>
</head>
<html>
<body>
<?php
session_start();

		require_once("header.php");
//script to collect details about a new member.
if(isset($_POST["memberID"]))$memberID=$_POST["memberID"];
if(isset($_POST["memberName"]))$memberName=$_POST["memberName"];
$secretCode="12345";
if(isset($_POST["emailAddress"]))$emailAddress=$_POST["emailAddress"];
if(isset($_POST["telContact"]))$telContact=$_POST["telContact"];
$salt1='%#$&/';
$salt2='~^7_+';
$code=md5("$salt1$secretCode$salt2");
require("ServerSideValidations.php");//this includes the validation functions in this file
//php variables to collect the data entered in the form from Add Memeber.php
$error='';

$error=$error.ValidateName($memberName);
$error=$error.ValidatePhoneNumber($telContact);

if($error == '')
{
	require_once("RangeFunctions.php");
		$con=ConnectDatabase();

$insertData="INSERT INTO Administrator(AdminId, AdminName,AccessKey,EmailAddress,TelephoneContact) VALUES('$memberID','$memberName','$code','$emailAddress','$telContact')";// inserting data into the database


$entered=mysql_query($insertData);// query statement to insert data into the table

if($entered){
	echo"<script> alert('New Member $memberName has been added')</script>";
}
else{
	echo "<script> alert('Member $memberName has not been added')</script>";
}
mysql_close($con);
}

else{
	echo <<<_END
<html>
<head>
<meta charset="utf-8"/>
<title>Add new member</title><!--Title of the page -->
<link rel="stylesheet" type="text/css" href="ITSstyles.css">
<script src="ClientSideValidations.js"></script>
<script type="text/javascript">
	function testName()
	{
		var name=document.getElementById('member_Name').value;
		var error=ValidateName(name);
		
		if(error != 1)
		{
			alert(error);
			return false;
		}
	}
	function testEmail()
	{
		var email=document.getElementById('email_Address').value;
		var error=ValidateEmail(email);
		
		if(error != 1)
		{
			alert(error);
			return false;
		}
	}
	function testPhoneNumber()
	{
		var phone=document.getElementById('tel_Contact').value;
		var error=ValidatePhoneNumber(phone);
		
		if(error != 1)
		{
			alert(error);
			
		}
	}
	function testTitle()
	{
		var title=document.getElementById('member_Title').value;
		
		if(title.length<2)
		{
			alert("Fill in the member title");
		}
	}
	function testID()
	{
		var id=document.getElementById('member_ID').value;
		
		if(id=='')
		{
			alert("Fill in the member ID");
		}
	}
	
	function testAllFields()
	{	
		testID();
		testTitle();
		testName();
		testEmail();
		testPhoneNumber();
	}
</script>
</head>
<body>
<?php
	require_once("header.php");
	//A script to check whether the user has logged in as a manager before accessing this page
?>
<fieldset style="font-size:2em; margin-left:200px;  margin-right:200px;">
<p style='color:red; font-size:0.9em;'>The following errors have been found in the data submitted:<br />
<span style='color:red; font-size:0.6em;'>$error</span><br />
<span style='color:green; font-size:0.9em;'>You can correct the errors and submit again</span>
</p>

<legend>Enter the information about the new member</legend>
<div style="font-size:2em; float:left;">
<form method='post' action='EnterMember.php'>
<!--Form to record the details about the new team member-->
<table>
<!--Elements included into the form as table rows-->
<tr><td>Member ID</td><td><input type='text' name='memberID' id='member_ID' required="required"  onBlur="testID();"><span style="color:red; font-size:0.8em;" value=$memberID>*required</span></td></tr>
<tr><td>Member Name</td><td><input type='text' name='memberName' id='member_Name' placeholder="e.g TImothy Andrews" required="required" onChange="testName();" value=$memberName><span style="color:red; font-size:0.8em;">*required</span></td></tr>
<tr><td>Email Address</td><td><input type='email' name='emailAddress' id='email_Address' placeholder="usernam@host.com" required="required" onChange="testEmail();" value=$emailAddress><span style="color:red; font-size:0.8em;">*required</span></tr>
<tr><td>Telephone Contact</td><td><input type='tel' name='telContact' id='tel_Contact' placeholder="0789-890-789" 
required="required" onChange="testPhoneNumber();" value=$telContact><span style="color:red; font-size:0.8em;">*required</span> format 0778-890-678 or +256787-567-687  </td></tr>
</table><!--End of the table that contains the elements-->
<input type='submit' value='Add Member' onSubmit="testAllFields();"> <input type='reset' value='Clear form'>
</form></div>
</fieldset>
<div>
<ol style="color:blue; font-size:1em;">
Note:
<li>The member ID is the Employee number assigned to the team member being added.</li>
<li>The Name is the personal name of the team Member.  Each name(first/last) should start with Upper case letter, Accepted formats include(Timothy Jones, TIMOTHY JONES, JOHNS ANDREW TIMOTHY, Johns Andrew Timothy)</li>
<li>The Title can be any job title but only 'managers' will get special access. All others are considered non-managers</li>
<li>Contact the IT department in case of any issue</li>
<li>Ensure the no field is left  empty</li></ol>
</div>
</body>
</html>
}
_END;
}


?>
</body>
</html>