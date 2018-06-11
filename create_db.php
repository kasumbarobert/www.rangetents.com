<?php
	$con=@mysql_connect("localhost", "root", "");
	
	mysql_query("CREATE DATABASE RangeTents_Db");
	mysql_select_db('RangeTents_Db',$con);
	$createTable1="CREATE TABLE Images(
		id int AUTO_INCREMENT PRIMARY KEY,
		Category VARCHAR(30) NOT NULL,
		Title VARCHAR(100) NOT NULL,
		ImagePath VARCHAR(50) NOT NULL UNIQUE,
		Description VARCHAR(200) NOT NULL,
		DateAdded DATE NOT NULL,
		AddedBy VARCHAR(30) NOT NULL	
	)";
	
	mysql_query($createTable1);
	
	$createTable2="
		CREATE TABLE comments(
			id int AUTO_INCREMENT PRIMARY KEY,
			CustomerName VARCHAR(50) NOT NULL,
			TelephoneNumber VARCHAR(30) NOT NULL,
			EmailAddress VARCHAR(50) NOT NULL,
			Comment TEXT NOT NULL,
			DateAdded DATE NOT NULL
		)
	";
	mysql_query($createTable2);
	
	$createTable3="
		CREATE TABLE Administrator(
			AdminId VARCHAR(20) NOT NULL PRIMARY KEY,
			AdminName VARCHAR(50) NOT NULL,
			TelephoneContact VARCHAR(30) NOT NULL,
			EmailAddress VARCHAR(50) NOT NULL,
			AccessKey VARCHAR(50) NOT NULL
		)
	";
	mysql_query($createTable3);
	$salt1='%#$&/';
	$salt2='~^7_+';
	$key='12345';
	$defaultKey=md5("$salt1$key$salt2");
	
	mysql_query("INSERT INTO Administrator(AdminId, AdminName, AccessKey) VALUES('RG001', 'Initial Administrator','$defaultKey' )");

?>