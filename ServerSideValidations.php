<?php
function ValidateName($field)//function to validate the name input
{
	$message='';
	if($field=='')//tests for empty field 
	{
		return "The name is missing <br />";
	}
	if(preg_match("/^[a-z]/",$field))//tests whether the name starts with a lower case letter
	{
		$message=$message."A name should start with an upper case letter. <br />";
	}
	
	if(preg_match("/[\d]/",$field))//tests for occurrence of a digit in the string
	{
		$message=$message."The name cannot contain a number. ";
	}
	if(preg_match("/[\W]/",$field)&& !preg_match("/\s/",$field))//checks whether the string contains non-alphabetic characters which is not a "space"
	{
		$message=$message."A name cannot contain non-alphabetic character(s).<br />";
	}
	if(!preg_match("/^[A-Z][a-zA-Z]+\s[A-Z][a-zA-Z]+/",$field))//checks if there are atleast two names each starting with a capital letter
	{
		$message=$message."There should be atleast two or more names: each starting with a capital letter. Ensure there are no more extra spaces between names<br />";
	}
	if($message=='')//returns appropriate error message(s)
	{
		return '';
	}
	else{
		return $message;
	}
}
function ValidatePhoneNumber($phone)//function to validate the phone number entry
{  	if($phone=="")//tests for empty field 
	{
		return "Phone Number is Missing <br />";
	}
	else if (!preg_match("/^((0)|(\+256))7\d{2}-\d{3}-\d{3}$/",$phone))//specifies the format of the phone number
	{
		/*alert(field+ "is an invalid phone number. The number should be in the format 0755-555-555");*/
		$message=$phone." is an invalid phone number. The number should be in the format 0755-555-555. <br />";
		
		return $message;//returns appropriate error message(s)
	}
	else
	{
		return'';
	}
}

function ValidateTitle($field)//function to validate the name input
{
	$message='';
	if($field=='')//tests for empty field
	{
		return "The member Title is Missing! <br />";
	}
	
	if(preg_match("/^[a-z]/",$field))//tests if the title begins with a lower case letter
	{
		$message=$message."The title should start with an upper case letter. <br /> ";
	}
	
	if(preg_match("/[\d]/",$field))//tests if title contains a digit
	{
		$message=$message."The title should not contain a number. ";
	}
	if(preg_match("/[\W]/",$field)&& !preg_match("/\s/",$field))//checks whether the title contains non-alphabetic characters which is not a "space"
	{
		$message=$message."The title should not contain non-alphabetic character(s). <br />";
	}
	if($message=='')//returns appropriate error message(s)
	{
		return '';
	}
	else{
		return $message;
	}
}

function Connect2Database()//function to connect to the database
{
	$con=mysql_connect('localhost','robert','robert14');
	mysql_select_db('issuetracker',$con);
	return $con;
}
?>