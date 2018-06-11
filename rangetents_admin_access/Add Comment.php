
<?php
	
	if(isset($_POST['message']) && isset($_POST['name'])){
		$name=$_POST['name'];
		$message=$_POST['message'];
		$email=isset($_POST['email'])?$_POST['email']:'No email given';
		$phone=isset($_POST['phone'])?$_POST['phone']:'No Phone Number given';
		$date=Date('Y-m-d');
		$addComment=@mysql_query("INSERT INTO comments(CustomerName, TelephoneNumber, EmailAddress, Comment , DateAdded) VALUES('$name', '$phone', '$email','$message', 'Date')") or die(mysql_error());
		
		if($addComment)
		{
			$_SESSION['success']=true;
			header('Location:Comment.php');
			}
		}

?>