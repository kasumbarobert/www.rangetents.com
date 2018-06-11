//javascript functions to validate input data
//return 1 implies that the value has been verified to be true
//the errors 
function ValidateName(field)//function to validate the name input
{
	var message='';
	if(field=='')//tests for empty field 
	{
		return "Please enter the name";
	}
	
	if(/^[a-z]/.test(field))//tests whether the name starts with a lower case letter
	{
		message+="A name should start with an upper case letter. ";
	}
	
	if(/[\d]/.test(field))//tests for occurrence of a digit in the string
	{
		message+="The name cannot contain a number.";
	}
	if((/[\W]/.test(field))&& !(/\s/.test(field)))//checks if the contains a non-alphabetical character which is not a "space"
	{
		message+="A name cannot contain non-alphabetic character(s). ";
	}
	if(!(/^[A-z][a-zA-Z]+\s[A-Z][a-zA-Z]+/.test(field)))//checks if there are atleast two names each starting with a capital letter
	{//if a single name is input or if the name starts with a lower case letter, the name will be rejected
		message+="There should be atleast two or more names: each starting with a capital letter.";
	}
	if(message=='')//returns appropriate error message(s)
	{
		return 1;
	}
	else{
		return message;
	}
}

function ValidateSecretCode(field){
	//the secret code should have more than 6 or more characters, at least one number, letter and non-word character 
	var message="";
	if(field.length < 6)//tests if length of secret code contains atleast six characters
	{
		message+="The secret code should contain atleast 6 characters. ";
	}
	if(!(/[a-zA-Z]/.test(field)))//tests if secret code doesn't contain an alphabetic character
	{
		 message+="The secret code should contain atleast an alpahabetic letter. ";
	}
	if(!(/\d/.test(field)))//tests if secret code doesn't contain a digit
	{
		 message+="The secret code should contain atleast a number. ";
	}
	if(!(/\W/.test(field)))//checks whether the string doesn't contain non-alphabetic characters{
		 message+="The secret code should contain atleast one non-word characters e.g %,&,@,#,?,/,\,],[. ";
	}
	if(message=='')//returns appropriate error message(s)
	{
		return 1;
	}
	else{
		return message;
	}
}
function ValidatePhoneNumber(phone)//function to validate the phone number entry
{  	if(phone=="")//tests for empty field 
	{
		return "Enter phone Number.";
	}
	else if (!(/^((0)|(\+256))7\d{2}-\d{3}-\d{3}$/.test(phone)))//specifies the format of the phone number
	{
		/*alert(field+ "is an invalid phone number. The number should be in the format 0755-555-555");*/
		return phone+ " is an invalid phone number. The number should be in the format 0755-555-555"+" . ";
	}
	else{
		return 1;
    }
}
function ValidateEmail(field)//function to validate the email entry
{   
if(field=="")//tests for empty field 
 {
		return "Enter email!";
	}
	else if(!(/^[\w]+@[a-zA-Z\.]+[a-z]+$/.test(field)))//ensures that the email has the appropriate format
	{
		return field + " is an invalid email address"+". ";
	}
	else 
	{
		return 1;
	}
}


















