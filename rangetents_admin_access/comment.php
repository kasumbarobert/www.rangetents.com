<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<title>Contact Us</title>
<link rel="stylesheet" href="rangeStyles.css" />
<script src="popup.js" ></script>
<script type='text/javascript'>
	function checkName()
	{
		var name=document.getElementById('name').value;
		
	if(/[\d!@#\$\^&\*\(\)_\+\\\}\{\|"]/.test(name))
		{
			alert('You have entered an invalid name. Ensure that the name has none of the characters(0-9\d!@#\$\^&\*\(\)_\+ )');
			return false;
		}
		else{
			return true;
		}
	}
	function checkPhone(){
		/*var phone=document.getElementById('phone').value;
		if(/[a-zA-Z]/.test(phone))
		{
			alert('A telephone number can only contain numbers');
			return false;
		}
		else{
			return true;
		}
		
		function checkSubmit(){
			
			var valid=checkName() && checkPhone();
			
			if(!valid)
			{
				alert('correct the errors and submit again');
				return false;
			}
			else{
				alert("Thank you for your comment! It has been delivered.");
				return true;
			}
		}*/
		
	}
</script>
</head>

<body>
<?php
	require_once("header.php");
?>
<div  style='padding-top:3%; height:80%;'>
<?php
	require_once("RangeFunctions.php");
	$con=ConnectDatabase();
	if(isset($_POST['message']) && isset($_POST['name'])){
		$name=$_POST['name'];
		$message=$_POST['message'];
		$email=isset($_POST['email'])?$_POST['email']:'No email given';
		$phone=isset($_POST['phone'])?$_POST['phone']:'No Phone Number given';
		$date=Date('Y-m-d');
		$addComment=mysql_query("INSERT INTO comments(CustomerName, TelephoneNumber, EmailAddress, Comment , DateAdded) VALUES('$name', '$phone', '$email','$message', '$date')") or die(mysql_error());
		
		$subject='Message from: '.$name.'Via Range tents website';
		$emailMessage=$message.'Contact Information\n Email:'.$email.'\nPhone:'.$phone;
		$ouremail='rangetents@gmail.com';
		$from='Rangetents.com';
		mail($ouremail,$subject, $emailMessage, 'From:'.$from);
		if($addComment)
		{
			echo "<h1 style='color:blue;'>Thank you! Your message has been sent</h1>";
			}
		}else
	echo <<<_END
<fieldset style='margin-right:50%; font-size:1.5em; border:solid 2px #5E82B2; background-color:#E6EDF6; border-radius:15px; margin-bottom:3%; '  >
<form action='Comment.php' method='post' id='msg' onSubmit='return checkSubmit();'>
<caption text-align="center">Fill in these details below</caption>
<table cellpadding='15%'>
<tr><td><label>Name<label></td></tr><tr><td><input type='text' id='name' name='name' placeholder='your name' onChange='checkName();'required> </td><tr>
<tr><td><label>Telephone contact<label></tr><tr></td><td><input type='text' placeholder='your phone Number' maxlength='15' onChange='checkName();' name='phone' id='phone'></td></tr>
<tr><td><label>Email address<label></tr><tr></td><td><input type='email' placeholder='example@domain.com' name='email' ></td></tr>
<tr><td colspan='2'><label>Enter your Comment here<br /></label>
<textarea rows='10' cols='50' id='message' name='message' required></textarea></td></tr>
<tr><td><input type='submit' value='Send comment'></td><td><input type='reset' value='Clear'></td></tr>
</table>


</form>
</fieldset>
_END;
?>
</div>

<?php
require_once('footer.php');
?>
</body>
</html>