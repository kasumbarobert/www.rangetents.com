<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<title>Contact Us</title>
<link rel="stylesheet" href="rangeStyles.css" />
<script src="popup.js" ></script>
<script>

</script>
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
<div  class='container'>
<?php
	require_once("header.php");
?>
<div class='row'>
<div style='' class="col-sm-12 col-md-6 col-bg-6 panel panel-info">
<div class='list-group'>
	<div class='list-group-item'>
	<b style='font-size:1.5em;'>Nalukolongo Branch Front View</b>
	<img src='images/Nalukolongo Branch.jpg' alt='Nalukolongo Branch Front view' class='img-responsive'>
	</div>
	<div class='list-group-item'>
	<b style='font-size:1.5em;'>Wakaliga Branch Front View</b>
	<img src='images/Different Camping Tents.jpg' alt='Wakaliga Branch Front view' height='100%' width='100%'>
	</div>
	<div class='list-group-item'>
	<img src='images/Katwe Branch.jpg' alt='Katwe Branch Front view' class='img-responsive' >
	</div>
</div>


</div>


<div class="col-sm-12 col-md-6 col-bg-6 panel " style="background-color:#E6EDF6; font-size:1.2em; ">
		<div class='panel panel-primary' style='padding-left:2%; background-color:#eef;'>
		<p class='panel-header'><h3>Contact Information</h3></p>
		<div class='pane-body'>
		<i class='fa fa-envelope'></i> Email: <a href='mailto:rangetents@gmail.com'>rangetents@gmail.com</a> <br />
		<i class='fa fa-phone'></i> Call us on: 0703 531256/ 0756 249696 <br />
		P.0 BOX 75486, KAMPALA <br />
		<b>Location: <br/></b>
		Wakaliga Road near Lubiri SS<br />
AND<br />
Nalukolongo<br />
Opp. Bukoola Chemical Industries<br />
		</div>
		
		</div>
		<div class=" panel panel-default" style='padding-left:2%;'>
		<form action='comment.php' for="form" method='post' id='msg' onSubmit='return checkSubmit();'>
		<div class='panel-header'><h3>Fill in the details below to send us a message</h3></div>
		<p class='help-block' style='color:blue; font-style:italic;'><small>The information provided will only be used for intended purposes only. It will never be shared with third parties</small></p>
		<br>
		<label for="name">Name</label><br>
		<input type='text' class="form-control" id='name' name='name' placeholder='your name' onChange='checkName();'required /> 
		<br>
		<label for="name">Telephone contact</label>
		<input type='text' class="form-control" placeholder='your phone Number' onChange='checkName();' name='phone' id='phone'>
		<br>
		<label for="name">Email address</label>
		<input type='email' class="form-control" placeholder='example@domain.com' name='email' >
		<br>
		<label for="name">Enter your Comment or message here</label>
		<textarea  class="form-control" id='message' name='message' required></textarea>
		<br>
		<button type='submit' class="btn btn-primary"> <i class='fa fa-send' ></i> Send</button>  <input class="btn btn-primary" type='reset' value='Clear'>

		</form>
		</div>
		<div class='thumbnail media' >
		<center>
		<iframe src="https://www.youtube.com/embed/V03A4mrlnhc?autoplay=0">
		
		</iframe>
		<br />
		About Range Tents Limited
		<center>
		</div>
		</div>

</div>

<?php
require_once('footer.php');
?>
</div>
</body>
</html>

<!--Range Tents services companyy has three branches located at Katwe, Nalukolongo and Wakaliga. The Katwe-->