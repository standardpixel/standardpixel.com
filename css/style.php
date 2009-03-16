<?php 
	//Set header
	header('Content-type: text/css');
	
	//Pull in static css 
	require($sp->root_path . "yui-reset-min.css");

	require($sp->root_path . "yui-base-min.css");

	require($sp->root_path . "yui-fonts-min.css");

	if( !strpos($_SERVER['HTTP_USER_AGENT'],'MSIE 6.0') ){	

		require($sp->root_path . "base.css");
	
		require($sp->root_path . "rollbahn.css");
	
	}
	
 	//Write dynamic css
	$sp = new SP(); 
?>
 	#logo{background:url(<? echo($sp->media_path) ?>img/logo_red.png) top left no-repeat;}
	#header{background:url(<? echo($sp->media_path) ?>img/header_bg.jpg) left top no-repeat;}