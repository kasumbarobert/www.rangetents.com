<title>Add a new product</title><!--Title of the page -->
<link rel="stylesheet" type="text/css" href="RangeStyles.css">
<script src="ClientSideValidations.js"></script>
<script type="text/javascript">
</script>
</head>
<body>

<div id='pageBody'>
<table>
<form action="addingTents.php" method="post" enctype="multipart/form-data">
<tr><td>Tent Name</td><td><input type="text" name="title" ></td></tr>
<tr><td>Category</td><td><select type="text" name="category">

<option>Car shades and Covers</option>
<option>Camping Tents</option>
<option>Ordinary Tents</option>
<option>Church Tents</option>
<option>Bridal Tents</option>
<option>Exbition Tents</option>
<option>Chairs and Tables</option>
</select>
</table><table>
</td></tr>
<tr><td>Tent description<br />
<textarea rows="8" cols="55" name='description'></textarea></td></tr>
<tr><td>Add image <input type="file" name="photo"></td></tr>
<tr><td><br><br><input type="submit" value="UPLOAD" name="submit1" >  <input type="reset" value="CANCEL"></td></tr>
</form>
</table>

<?php
	require_once("RangeFunctions.php");
	$con=ConnectDatabase();
if(isset($_POST['submit1'])){
	$category=$_POST['category'];
	$title=$_POST['title'];
	$description=$_POST['description'];
	$date=Date('Y-m-d');
	$folder="Uploaded Images/";
	$taget_file=$folder .basename($_FILES["photo"]["name"]);
	if(move_uploaded_file($_FILES["photo"]["tmp_name"],$taget_file)){
		$insertImage="INSERT INTO images(Category, Title, ImagePath, Description, DateAdded) VALUES('$category','$title',
		'$taget_file','$description','$date')";
	
		$imageAdded=mysql_query($insertImage) or die(mysql_error());
		
		echo "<script>alert('image has been successfully uploaded')</script>";
	}
	else{
		echo "<script>alert('Sorry! The image has not been uploaded')</script>";
	}	
}
?>
</div>
<?php
require_once('footer.php');
?>
</body>
</html>
