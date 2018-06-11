<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<title>Contact Us</title>
<link rel="stylesheet" href="rangeStyles.css" />
<script src="popup.js" ></script>
<style type='text/css'>


#contacts div{
	border-radius:5px;
	width:90%;
	margin-top:3%;
	font-size:1.1em;
	border:solid 2px #5E82B2;
	background-color:#E6EDF6;
	margin-right:3%;
}
a{
	color:red;
}

</style>
</head>

<body>
<?php
	require_once("header.php");
?>

<div >
<div id='contacts' style='float:left;width:50%; display:inline;'>
<p style='text-align:center; background-color:#5E82B2; color:#FFF; width:90%; margin-top:6%; height:2em; font:14pt Tahoma, Geneva, sans-serif;'> Our Offices</p>
<div>
Nalukolongo (Main Branch)<br />
Opp. Bukoola Chemical Industries<br />
Tel: 0703 531256 <br />P.0 BOX 75486, KAMPALA<br /> Email:<a href='mailto:rangetents@gmail.com'>rangetents@gmail.com</a>
<form action='Branchpreview.php'>
<input type='hidden' id='branch' name='branch' value='Nalukolongo'>
<input type='submit' value='Click to Preview Branch Premises' style='font-size:1em; color:blue;'></form>
</div>
<div>
Wakaliga Branch<br />
Wakaliga Road <br /> Near Lubiri SS on the opposite side<br/>
Tel: 0703 531256 <br />P.0 BOX 75486, KAMPALA<br /> Email:<a href='mailto:rangetents@gmail.com'>rangetents@gmail.com</a>
<form action='Branchpreview.php'>
<input type='hidden' id='branch' name='branch' value='Wakaliga'>
<input type='submit' value='Click to Preview Branch Premises' style='font-size:1em; color:blue;'></form>
</div>
<div>
Katwe Branch<br />
Katwe<br /> Along Queen's way<br /> Opposite the locally known as "Ettaawo Ly'akatimba"<br />
Tel: 0703 531256 <br />P.0 BOX 75486, KAMPALA<br /> Email:<a href='mailto:rangetents@gmail.com'>rangetents@gmail.com</a>
<form action='Branchpreview.php'>
<input type='hidden' id='branch' name='branch' value='Katwe'>
<input type='submit' value='Click to Preview Branch Premises' style='font-size:1em; color:blue;'></form>
</div>

</div>

<div style='padding-top:3%; padding-bottom:3%; width:60%; margin-left:50%;' >
<fieldset style='margin-right:16%; font-size:1.5em; border:solid 2px #5E82B2; background-color:#E6EDF6; border-radius:15px; margin-bottom:3%; '  >


<p>Send us a Message</p>
<form action='comment.php' method='post' onSubmit='return checkSubmit();' id='msg' >
<table cellpadding='15%' >
<tr><td><label>Name<label></td></label></tr><tr><td><input type='text' id='name' name='name' placeholder='Enter your name here' onChange='checkName();'size='30'required> </td><tr>
<tr><td><label>Telephone contact<label></td></tr><tr><td><input type='text' name='phone' placeholder='Enter your telephone contact' maxlength='15' onChange='checkName();'></td></tr>
<tr><td><label>Email address<label></tr><tr></td><td><input type='email' name='email' placeholder='Enter your email address'></td></tr>
<tr><td colspan='2'><label>Enter your Message here<br /></label>
<textarea rows='10' cols='50' name='message' required></textarea></td></tr>
<tr><td><input type='submit' value='Send Message'></td><td><input type='reset' value='Clear'></td></tr>
</table>


</form>
</fieldset>
</div>
</div>

<?php
require_once('footer.php');
?>
</body>
</html>

<!--Range Tents services companyy has three branches located at Katwe, Nalukolongo and Wakaliga. The Katwe-->