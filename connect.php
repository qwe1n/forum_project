<?php
//connect.php:连接数据库
session_start();
$server = 'localhost';
$username = 'root';
$password = '942649';
$database = 'web_forum';

$connect = mysqli_connect($server,$username,$password);
if(!$connect)
{
	exit('Error: could not establish database connection');
}
if(!mysqli_select_db($connect,$database))
{
	exit('Error: could not select the database');
}
?>