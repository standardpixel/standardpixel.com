<?php 
	class SP {
	    public $root_path = "/Library/WebServer/Documents/domains/ComStandardpixel/";
	    public $media_path = "/domains/ComStandardpixel/";

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