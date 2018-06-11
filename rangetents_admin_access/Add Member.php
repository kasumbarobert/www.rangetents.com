<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<title>Add new member</title><!--Title of the page -->
<link rel="stylesheet" type="text/css" href="RangeStyles.css">
<script src="ClientSideValidations.js"></script>
<script type="text/javascript">
//Javascript functions to validate the entries in the form. 
	function testName()//invoked on change to the next field
	{
		var name=document.getElementById('member_Name').value;//picks the value entered in the name field
		var error=ValidateName(name);
		/*invokes the ValidateName() function from ClientSideValidations.js which validates the name and returns a 1 if the name is okay or an error message if the name has an issue. Refer to ClientSideValidations.js to understand how ValidateName()works*/
		
		if(error != 1)
		{
			alert(error);//displays the message as a pop up window
			return false;
		}
	}
	function testEmail()//invoked on change to the next field
	{
		var email=document.getElementById('email_Address').value;//picks the value entered in the Email Address field
		var error=ValidateEmail(email);
		/*invokes the ValidateEmail() function from ClientSideValidations.js which validates the name and returns a 1 if the Email is okay or an error message if the email has an issue. Refer to ClientSideValidations.js to understand how ValidateEmail()works*/
		if(error != 1)
		{
			alert(error);//displays the message as a pop up window
			return false;
		}
	}
	function testPhoneNumber()//invoked on change to the next field
	{
		var phone=document.getElementById('tel_Contact').value;//picks the value entered in the Phone Number field
		var error=ValidatePhoneNumber(phone);
		/*invokes the ValidatePhoneNumber() function from ClientSideValidations.js which validates the name and returns a 1 if the Phone Number is okay or an error message if the email has an issue. Refer to ClientSideValidations.js to understand how ValidatePhoneNumber() works*/
		
		if(error != 1)
		{
			alert(error);//displays the message as a pop up window
			
		}
	}
	function testTitle()//invoked when the field loses focus
	{
		var title=document.getElementById('member_Title').value;//picks the value entered in the Member Title field
		
		if(title.length<2)
		{
			alert("Fill in the member title");//reminds the manager to fill in the title 
		}
	}
	function testID()//invoked when the field loses focus
	{
		var id=document.getElementById('member_ID').value;//picks the value entered in the Member ID field
		
		if(id=='')
		{
			alert("Fill in the member ID");//reminds the manager to fill in the member ID 
		}
	}
	
	function testAllFields()//invoked on submit to test all the data entries
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
<fieldset style="font-size:0.8em; border:hidden;">
<legend style="font-size:1.5em;">Enter the information about the new member</legend>
<div style="font-size:2em; float:left;">
<form method='post' action='EnterMember.php'>
<!--Form to record the details about the new team member-->
<table>
<!--Elements included into the form as table rows-->
<tr><td>Admnistrator ID</td><td><input type='text' name='memberID' id='member_ID' required="required"  onBlur="testID();"><span style="color:red; font-size:0.8em;">*required</span></td></tr>
<tr><td>Admnistrator Name</td><td><input type='text' name='memberName' id='member_Name' placeholder="e.g TImothy Andrews" required="required" onChange="testName();"><span style="color:red; font-size:0.8em;">*required</span></td></tr>
<tr><td>Email Address</td><td><input type='email' name='emailAddress' id='email_Address' placeholder="usernam@host.com" required="required" onChange="testEmail();"><span style="color:red; font-size:0.8em;">*required</span></tr>
<tr><td>Telephone Contact</td><td><input type='tel' name='telContact' id='tel_Contact' placeholder="0789-890-789" 
required="required" onChange="testPhoneNumber();"><span style="color:red; font-size:0.8em;">*required</span> format 0778-890-678 or +256787-567-687  </td></tr>
</table><!--End of the table that contains the elements-->
<input type='submit' value='Add Admnistrator' onSubmit="testAllFields();"> <input type='reset' value='Clear form'>
</form></div>
</fieldset>


<ol style="color:blue; font-size:1em;">
Note:
<li>The Admnistrator ID is the Employee number assigned to the team member being added.</li>
<li>The Admnistrator Name is the personal name of the team Member.  Each name(first/last) should start with Upper case letter, Accepted formats include(Timothy Jones, TIMOTHY JONES, JOHNS ANDREW TIMOTHY, Johns Andrew Timothy)</li>
<li>Contact the IT department in case of any issue</li>
<li>Ensure that no field is left  empty</li></ol>

</div>
<?php
require_once('footer.php');
?>
</body>
</html>