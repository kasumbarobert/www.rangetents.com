<link href="mystyles/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="rangeStyles.css" />
<script src="mystyles/js/bootstrap.js"></script>
<script src="mystyles/js/bootstrap.min.js"></script>
<script src="mystyles/js/npm.js"></script>
<script src="mystyles/js/dropdown.js"></script>
<script src="mystyles/js/vendor/jquery.min.js"></script>
<script src="mystyles/js/transition.js"></script>
<script src="mystyles/js/carousel.js"></script>
<script src="mystyles/js/modal.js"></script>
<script src="mystyles/js/dropdown.js"></script>
<link rel="stylesheet" href="rangeStyles.css" />
<link rel="stylesheet" href="mystyles/f-awm/css/font-awesome.css" />
<div id="header" class="row jumbotron" style='padding:0;'>
<div class='col-lg-2 col-md-2 col-sm-12'>
<img src="images/logo.png" alt="Company Logo" class='img-responsive' width='100px;'/></div>
<div class='col-lg-7 col-md-7 col-sm-12' class="company_name text-center" style=''>
<h1 style='color:red;'><b>RANGE TENTS LTD</b></h1>
</div>
<div class='col-lg-3 col-md-3 ' style='padding-top:2%;'>
<a href='https://www.facebook.com/rangeSevices' title="Like us on facebook"><i class='fa fa-facebook-official fa-4x '></i></a> &nbsp;&nbsp;
<a href='https://www.youtube.com/watch?v=V03A4mrlnhc&feature=youtu.be' title="Follow us on you tube"><i class='fa fa-youtube fa-4x'></i></a>&nbsp;&nbsp;
<a href='mailto:rangetents@gmail.com'><i class='fa fa-envelope fa-4x' title="Send us an email"></i></a>&nbsp;&nbsp;
</div>
</div>
<div id="menu" class='row' style=''>
<nav class="navbar navbar-default" role="navigation">    
<div class="navbar-header" style='width:100%;'>

<ul class=' nav navbar-nav ' id="navHeaderCollapse">
<li style='background-color:#6f7;'><a href="index.php"><i class='fa fa-home fa-1x'></i> Home </a> </li>
<li><a href="DisplayImages.php"  >Products</a> </li>
<li ><a href="Contact us.php"  >contact us</a> </li>
<li><a href="comment.php" >comment</a> </li>
<li class='dropdown'>
<a class='dropdown-toggle' data-toggle='dropdown' >Categories<span class='caret'></span></a>   
<ul class="dropdown-menu list-group" role="menu" aria-labelledby="dLabel" style='padding-left:4%; font-size:0.8em;'>  
<?php 
		require_once("RangeFunctions.php");
		$con=ConnectDatabase();
		$img_qry="SELECT DISTINCT Category FROM images";
		$imagesReturned=@mysql_query($img_qry) or die(mysql_error());
		while($image=mysql_fetch_array($imagesReturned))
		{
		print(
		"<form action='DisplayImages.php' method='post' id='".$image['Category']."'>
		<input type='hidden' name='Category' value='".$image['Category']."'>
		<a href='javascript:{}' onClick='send_data(\"".$image['Category']."\");' class='list-group-item'>".$image['Category']."</a></form>"
		);}
		?>
</ul>
</li>
</ul>
<div class=' navbar-right'>
<form class="navbar-form" role="search"  action='Search Results.php' method='POST' onSubmit='return testSearch();'  class="form-inline" role="form">
<div class="input-group">
<input type="text" class="form-control"  name="search_key" id="key" placeholder="search for products" required><span class="input-group-addon"><i class="fa fa-search"></i></span>
</div>
<button type="submit" class="btn btn-info btn-md">Submit</button> </form></li>
</div>
</div>
       
</nav>
 
 
</div>
<script src="popup.js" ></script>