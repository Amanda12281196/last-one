<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> 刘新宇的留言板 Version 1.0</title>
<br/>
</head>
<link href="css.css" rel="stylesheet" type="text/css" />
<body>
<div id="head">
<div id="head_l">
<ul>
<li><a href="index.php">看留言</a></li>
<li><a href="post.php">发表</a></li>
<?php
session_start();
if($_SESSION["key"]==1){//如果获取的SESSION为1则显示管理项
?>
<li><a href="adminexit.php">退出管理</a></li>
<?
}
else
{
?>
<li><a href="admin.php">管理</a></li>
<?}?>
</ul>
</div>
<div id="head_r">刘新宇的留言板 Version 1.0</div>
</div>