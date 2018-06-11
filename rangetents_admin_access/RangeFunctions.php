<?php
	function ConnectDatabase(){
		$con=@mysql_connect("localhost", "root", "");
		mysql_select_db('RangeTents_Db',$con);
		return $con;
	}
?>