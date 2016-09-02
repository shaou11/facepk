<?php
	$con = mysql_connect('127.0.0.1','root','');
	$sel = mysql_select_db("FACE_PK");

		if (!$con || !$sel) 
		{
			die('Could not connect!');

		}
?>