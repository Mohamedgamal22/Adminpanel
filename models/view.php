<?php

/**
* 
*/
class view
{
	
	public static function show($page,$data) 
	{  
		if ($data) {
 			extract($data);
 		    }

		$view="view/".$page.".view.php";
		require "view/layout.php";
	}
}


?>