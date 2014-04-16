<?php
// 连接服务器，并且选择test数据库
function(){
	
$db = mysql_connect("localhost","root","root") 
	or die("连接数据库失败！");

mysql_select_db("user")
	or die ("不能连接到user".mysql_error());
	
	
}
	
?>