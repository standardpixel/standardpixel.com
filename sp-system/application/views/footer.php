		<div id="navigation" class="module col2">
			<h3>Navigation</h3>
			<ul>
				<!--<li><a href="http://standardpixel.com/">Home</a></li>-->
				<li><a href="http://standardpixel.com/EricGelinas-		WebInterfaceEngineer.php">About Eric</a></li>
				<!--<li><a href="http://standardpixel.com/EricGelinas-		WebInterfaceEngineer.php">Resum&eacute;</a></li>-->
				<li><a href="http://blog.standardpixel.com">Blog</a></li>
				<!--<li><a href="/contact.php">Contact</a></li>-->
				<li><a href="http://github.com/standardpixel/standarpixel.com/">Portfolio</a></li>
			</ul>
		</div>
		<div id="footer" class="module">
			<div>&copy;&nbsp;<?=date('Y');?>&nbsp;StandardPixel LLC, All Rights Reserved.</div>
			<div>&nbsp;-&nbsp;</div>
			<div>
				<a href="mailto:info@standardpixel.com">info@standardpixel.com</a>
				&nbsp;[ <a href="http://github.com/standardpixel/standarpixel.com/">Source Code</a> ]
			</div>
		</div>
	</div>
	<!-- YAHOO Global Object source file --> 
	<script type="text/javascript" src="http://yui.yahooapis.com/2.3.0/build/yahoo/yahoo-min.js" ></script>
	<script src="http://yui.yahooapis.com/2.7.0/build/event/event-min.js"></script>
	<script src="http://yui.yahooapis.com/2.7.0/build/connection/connection-min.js"></script>
	<!-- Dependencies -->
	<script src="http://yui.yahooapis.com/2.7.0/build/dom/dom-min.js"></script>

	
	<!-- StaPx source file --> 
	<script type="text/javascript" src="http://s.standardpixel.com/j/behavior.js" ></script>
	
	<? if( $this->input->post('showbasic') != true ){ ?>
		<script>
		stapix.getAsyncMarkup(document.getElementById('feed_deliciousArticle_content'),'index.php/feed/deliciousArticle');
		
		stapix.getAsyncMarkup(document.getElementById('feed_friendfeed_content'),'index.php/feed/friendfeed');
		</script>
	<? } ?>
	<script>
		YAHOO.util.Dom.addClass( document.getElementsByTagName( 'body' )[ 0 ], 'poop' );
	</script>
</body>
</html>