<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    
    <script src="popup.js"></script>


 
<link rel='icon' type="images/png" href='images/logo.png' />
<title>Home | Range tents services</title>
<script type='text/javascript'>

</script>
<style>
.linkButton { 
     background: none;
     border: none;   
}
input[type='submit']
{
	 cursor: pointer; 
}
</style>
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id='homebody' class='container'>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php
	require_once("header.php");
?>
</div>
</div>
<div id='homeTopSection' class='row' >

<div class='col-lg-2 col-md-4 col-sm-4 col-xs-12 ' style='padding-left:0px;'>
		<div class='list-group'>

		<p class='lead list-group-item active'><b>Categories</b></p>
	
		<?php 
		require_once("RangeFunctions.php");
		$con=ConnectDatabase();
		$img_qry="SELECT DISTINCT Category FROM images";
		$imagesReturned=@mysql_query($img_qry) or die(mysql_error());
		while($image=mysql_fetch_array($imagesReturned))
		{
		print(
		"<form action='Displayimages.php' method='post' id='".$image['Category']."'>
		<input type='hidden' name='Category' value='".$image['Category']."'>
		<a  href='javascript:{}' style='font-size:1.1em;' class='list-group-item' onClick='send_data(\"".$image['Category']."\");'>".$image['Category']."</a></form>"
		);}
		?>

		</div>
</div>
<script src="mystyles/js/transition.js"></script>
<div class='col-lg-6 col-md-4 col-sm-4 col-xs-12 thumbnail'>
    <div id='myCarousel' class='carousel slide'>
		<ol class='carousel-indicators'>
			<li data-target="#myCarousel" data-slide-to="0" class='active'></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
			<li data-target="#myCarousel" data-slide-to="4"></li>
			<li data-target="#myCarousel" data-slide-to="5"></li>
			<li data-target="#myCarousel" data-slide-to="6"></li>
		</ol>
   
        <div class="carousel-inner" style="height:350px;">
			<div class='item active'>
			<img src="images/Models.jpg" alt='Tents Models'  class="img-responsive" />            
			</div>
            <div class='item'>
			<img src='images/Car Covers.jpg' alt='Car Covers'  class="img-responsive" />            
			</div>
            <div class='item'>
			<img src='images/RANGE TENTS LTD_00307.jpg' alt='Arranging Tents'  class="img-responsive" />            
			</div>
            <div class='item'>
			<img src="images/Making a tent.jpg" alt='Making a tent'  class="img-responsive" />            
			</div>
            <div class='item'>
			<img src='images/Range Tents.jpg' alt='Range tents'  class="img-responsive" />            
			</div>
			<div class='item'><img src="images/Party Tent.jpg" alt='Party Tents'  class="img-responsive" />            </div>
			<div class='item'><img src="images/Different Camping Tents.jpg" alt='Camping Tents'  class="img-responsive" />            </div>
        </div>  
		<a class="carousel-control left" href="#myCarousel" data-slide="prev">
		<span class='icon-prev'></span>
		</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="prev">
		<span class='icon-next'></span>
		</a>
    </div>
	<script>
$("#myCarousel").carousel('cycle');
</script>

 </div>
 
 
 <div id='notes' style='background-color: #E6EDF6; font-size:1.4em; ' class='col-lg-4 col-md-4 col-sm-4 col-xs-12  panel panel-default'>
<p>TENTS FOR HIRE</p>
<p>30-50 SEATER / 50-80 SEATER</p>
<p>100 SEATER/ 150 SEATER</p>
<p>BRIDAL TENT / CAKE TENT</p>
<p>LARGE CAMPING TENTS</p>
<p>Tents in soft and hard material at reduced prices</p>
<p>We are always ready to serve you with the best tents ,chairs music systems and any other material you may need for your party</p>

</div>
</div>
<div class='row' >
<div id='info' class='col-lg-8 col-md-8 col-sm-12 col-xs-12 panel panel-default' style='font-size:1.6em;'>
<div class='panel-body'>
<h2 style='color:red;'>Welcome to Range Tents </h2>
<p>Range tents is one of the leading manufacturers and distributors of high quality and long lasting tents in Uganda. Our products range from ordinary tents, car shades, Bridal tents, exhibition tents, camping tents to vehicle covers as well as materials such as PVC, canvas, and aluminium. We also offer rental services for chairs and tents with an aim of making your event a special and memorable one.</p>
<p>Our products are offered in different sizes, shapes, designs as by the clients’ specifications.</p> 
<p>We have been in service since 2011 and this has given us vast experience in the field of events management as indicated by our rise through the ranks in a very short period.   </p>
<p>We supply top quality products to our clients from Uganda, Kenya, Burundi, Tanzania, Rwanda, Sudan, and the Democratic Republic of Congo.
</p><p>Our prices are always client friendly and negotiable. Together with our dedicated and professional staff and our timely delivery services we assure you of the best service.</p>
<p>We have our main branch at Nalukolongo, Kampala-Uganda opposite Bukoola Chemical industries limited</p>
<p>
Click <a href='Contact us.php' style='color:red; text-decoration:underline;'>here</a> to <a href='Contact us.php' style='color:red; text-decoration:underline;'>contact</a> us. </p>

<div style='padding-top: 2%;padding-left: 2%; background-color:white; margint-top:1%;'>
<div class="fb-like" data-href="https://www.facebook.com/rangeSevices/?fref=ts&ref=br_tf" data-layout="standard" data-action="like" 
data-show-faces="true" data-share="true"></div>
<div class="fb-comments" data-href="http://www.rangetents.com/" data-width="508" data-numposts="5"></div>
</div>
<div id='contact' class='row' style=' color:green;'>
<i class='fa fa-1x'>Follow us via </i>
<a href='https://www.facebook.com/rangeSevices' title="Like us on facebook"><i class='fa fa-facebook-official fa-2x '></i></a> &nbsp;&nbsp;
<a href='https://www.youtube.com/watch?v=V03A4mrlnhc&feature=youtu.be' title="Follow us on you tube"><i class='fa fa-youtube fa-2x'></i></a>&nbsp;&nbsp;
<a href='mailto:rangetents@gmail.com'><i class='fa fa-envelope fa-2x' title="Send us an email"></i></a>&nbsp;&nbsp;
</div>
<marquee>Range tents services offers affordable products that fit your interest. Visit us when you need to buy tents, hire tents and chairs for your event</marquee>
</div>
</div>
<div id='#sample_images'  class='col-lg-4 col-md-4 col-sm-12 col-xs-12'>
<?php
	require_once("RangeFunctions.php");
	$con=ConnectDatabase();
	$img_qry="SELECT Category, Title, ImagePath, DateAdded FROM images ORDER BY DateAdded DESC";
	$count=0;
	$imagesReturned=@mysql_query($img_qry);
	echo "<div class='row list-group'>";
	while($image=mysql_fetch_array($imagesReturned))
	{
		$count++;
		print(
		"<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 thumbnail list-group-item'>
		<form action='Displayimages.php' method='post' id='".$image['ImagePath']."'>
		<input type='hidden' name='imageName' value='".$image['ImagePath']."'>
		<a href='javascript:{}' onClick='send_data(\"".$image['ImagePath']."\");'><img src='".$image['ImagePath']."' width='100%'  class='featuredImg img-responsive' >
		 Click to view </a></form>
		</div>"
		);
		if($count==3)
		{
			break;
		}
	}
	
?>
<div id="fb-root" class='col-lg-12 col-md-12 col-sm-12 col-xs-12 thumbnail list-group-item'></div><script>(function(d, s, id) {  var js, fjs = d.getElementsByTagName(s)[0];  if (d.getElementById(id)) return;  js = d.createElement(s); js.id = id;  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3";  fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="fb-post" data-href="https://www.facebook.com/rangeSevices/photos/a.1588309961458820.1073741827.1556054234684393/1588309844792165/?type=3" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/rangeSevices/photos/a.1588309961458820.1073741827.1556054234684393/1588309844792165/?type=3">Posted by <a href="https://www.facebook.com/rangeSevices/">RANGE TENTS Services LTD</a> on&nbsp;<a href="https://www.facebook.com/rangeSevices/photos/a.1588309961458820.1073741827.1556054234684393/1588309844792165/?type=3">Wednesday, June 10, 2015</a></blockquote></div></div>
</div>
</div>

</div>
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<?php
require_once('footer.php');
?>
</div>
</div>

</div>
<div id='dynamic'></div>

</body>
</html>