<?php
	function ConnectDatabase(){
		$con=@mysql_connect("localhost", "root", "");
		mysql_select_db('rangeten_db',$con);
		return $con;
	}
?>
