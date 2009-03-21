<?php 
	class SP {
	    public $root_path = "/var/www/domains/ComStandardpixelDev/";
	    public $media_path = "/";

	    function include_header($title){
		  	$sp_title = $title;
		  	include("header.html");
		 	}
		
			function include_nav(){
		  	include("nav.html");
		 	}
		
			function include_footer(){
		  	include("footer.html");
		 	}
	}
 ?>
