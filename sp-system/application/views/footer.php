	<div id="navigation">
		<ul>
			<li><a href="http://standardpixel.com/">Home</a></li>
			<li><a href="http://standardpixel.com/EricGelinas-		WebInterfaceEngineer.php">Resum&eacute;</a></li>
			<li><a href="http://blog.standardpixel.com">Blog</a></li>
			<!--<li><a href="/contact.php">Contact</a></li>-->
			<li><a href="http://standardpixel.com/status.php">Status</a></li>
		</ul>
	</div>
	<div id="footer">
		<div><strong>&copy;&nbsp;<?=date('Y');?>&nbsp;StandardPixel LLC</strong>&nbsp;&nbsp;&nbsp;<a href="mailto:info@standardpixel.com">info@standardpixel.com</a></div>
	</div>
	<!-- YAHOO Global Object source file --> 
	<script type="text/javascript" src="http://yui.yahooapis.com/2.3.0/build/yahoo/yahoo-min.js" ></script>
	<script src="http://yui.yahooapis.com/2.7.0/build/event/event-min.js"></script>
	<script src="http://yui.yahooapis.com/2.7.0/build/connection/connection-min.js"></script>
	
	<!-- StaPx source file --> 
	<script type="text/javascript" src="http://s.standardpixel.com.nyud.net:8080/j/behavior.js" ></script>
	
	<? if( $this->input->post('showbasic') != true ){ ?>
		<script>
			stapix.getAsyncMarkup(document.getElementById('sidebar'),'async_delicious.php');
		</script>
	<? } ?>
</body>
</html>