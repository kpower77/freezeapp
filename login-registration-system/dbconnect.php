<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
if(!mysql_connect("localhost","x14114640",""))
{
	die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("dbproject"))
{
	die('oops database selection problem ! --> '.mysql_error());
}

?>