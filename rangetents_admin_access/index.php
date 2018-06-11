<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   
<title>Add new member</title><!--Title of the page -->
<link rel="stylesheet" type="text/css" href="RangeStyles.css">
<script src="ClientSideValidations.js"></script>
<script type="text/javascript">
</script>
<style type='text/css'>
p a button{
	font-size:2em;
	color:blue;
	margin-left:20%;
}
</style>
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

<p><a href='addingTents.php'><button>Add a product</button></a></p>
<p><a href='Add Member.php'><button>Add a new Admnistrator</button></a></p>
<p><a href='Read Comment.php'><button>Read Messages/Comments</button></a></p>
<p><a href='Delete Tent.php'><button>Delete Product</button></a></p>
<p><a href='Change Code.php'><button>Change Access Key</button></a></p>
<p><a href='Logout.php'><button>Log out</button></a><p>
</div>

<?php
require_once('footer.php');
?>
</body>
</html>