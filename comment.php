<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<title>Contact Us</title>
<link rel="stylesheet" href="rangeStyles.css" />
<script src="popup.js" ></script>
<link href="mystyles/css/bootstrap.css" rel="stylesheet">
<script type='text/javascript'>

</script>
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
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php
	require_once("header.php");
?>
</div>
</div>

<?php
	require_once("RangeFunctions.php");
	$con=ConnectDatabase();
	if(isset($_POST['message']) && isset($_POST['name'])){
		$name=$_POST['name'];
		$message=$_POST['message'];
		$email=isset($_POST['email'])?$_POST['email']:'No email given';
		$phone=isset($_POST['phone'])?$_POST['phone']:'No Phone Number given';
		$thedate=Date('Y-m-d');
		$addComment=mysql_query("INSERT INTO comments(CustomerName, TelephoneNumber, EmailAddress, Comment , DateAdded) VALUES('$name', '$phone', '$email','$message','$thedate')") ;
		
		$subject='Message from: '.$name.' Via Range tents website';
		$emailMessage="<p>".$message."</p><h3>Contact Information</h3><p>Email:".$email."<br />Phone:".$phone."</p>";
		$ouremail='rangetents@gmail.com';
		$from='Rangetents.com';
		mail($ouremail,$subject, $emailMessage, 'From:'.$from);
		if($addComment)
		{
			echo "<h1 style='color:blue;'>Thank you $name! Your message has been sent</h1>";
			}
		}else
	echo <<<_END

	<div class="row">
		<div class="col-sm-12 col-md-6 col-bg-6 panel panel-default" style="background-color:#E6EDF6; font-size:1.2em;">
		
		<form action='comment.php' for="form" method='post' id='msg' onSubmit='return checkSubmit();'>
		<div class='panel-header'><h3>Fill in the details below</h3></div>
		<p class='help-block' style='color:blue; font-style:italic;'><small>The information provided will only be used for intended purposes only. It will never be shared with third parties</small></p>
		<br>
		<label for="name">Name</label><br>
		<input type='text' class="form-control" id='name' name='name' placeholder='your name' onChange='checkName();'required /> 
		<br>
		<label for="name">Telephone contact</label>
		<div class='input-group'>
		<span class='input-group-addon'><i class='fa fa-phone'></i></span>
		<input type='text' class="form-control" placeholder='your phone Number' onChange='checkName();' name='phone' id='phone'>
		</div>
		<label for="name">Email address</label>
		<div class='input-group'>
		<span class='input-group-addon'><i class='fa fa-envelope'></i></span>
		<input type='email' class="form-control" placeholder='example@domain.com' name='email' /></div>
		<br>
		<label for="name">Enter your Comment or message here</label>
		<textarea  class="form-control" id='message' name='message' required></textarea>
		<br>
		<button type='submit' class="btn btn-primary"> <i class='fa fa-send' ></i> Send</button>  <input class="btn btn-primary" type='reset' value='Clear'>
		

		</form>
		
		</div>
		<div class="col-sm-12 col-md-6 col-bg-6"></div>
	</div>

_END;
?>

<div class="row" style="margin-top:2%;">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php
require_once('footer.php');
?>
</div>
</div>
</div>
</body>
</html>