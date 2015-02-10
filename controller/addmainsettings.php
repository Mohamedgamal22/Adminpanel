<?php


if ($_POST) {
	
	$mainSettings['siteName']=$_POST['site_name'];
	$mainSettings['title']=$_POST['site_title'];
	
	include "../db/app.php";
	
	include "../models/add.php";
	$a=new add($mainSettings,"mainSettings",$con);
	if ($a==true) {
		echo "ok";
	}else{
		echo "no";
	}

}

?>