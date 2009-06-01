		<div id="navigation" class="module col2 sitenav">
			<h3>Navigation</h3>
			<ul>
				<li><a href="http://dev.standardpixel.com/EricGelinas-WebInterfaceEngineer.php">Resum&eacute;</a></li>
				<li><a href="http://dev.blog.standardpixel.com/">Blog</a></li>
				<li><a href="http://github.com/standardpixel/standarpixel.com/">Source</a></li>
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
	
	<script type="text/javascript" src="http://s.standardpixel.com/d/behavior.php" ></script>
	
	<? if( $this->input->post('showbasic') != true ){ ?>
		<script type="text/javascript">
		
			var SELECTOR = YAHOO.util.Selector,
				Dom = YAHOO.util.Dom;
		stapix.getAsyncMarkup(document.getElementById('feed_deliciousArticle_content'),'index.php/feed/deliciousArticle');
		
		stapix.getAsyncMarkup(document.getElementById('feed_friendfeed_content'),'index.php/feed/friendfeed');
		
		<? /*
		window.listShrinkafier = function(){	
			var group = SELECTOR.query('.listGroup')[0],
				lists = SELECTOR.query('.listGroup .list'),
				listCount = lists.length,
				viewHeight = Dom.getViewportHeight(),
				mainListCount = null,
				bottomPosition = null;
			
			for( var i=0; listCount > i; i++ ){
			
				var list = lists[ i ],
					items = SELECTOR.query( 'ul li', list ),
					lastIteration = listCount -1,
					offsetCount = mainListCount - items.length;
				
				if( i == 0 ){ //First iteration
				
					//Capture count of first list since none will be longer
					mainListCount = items.length
				
				} else if( i == lastIteration ) { //Last iteration
				
					//Get the lowest position
					bottomPosition = Dom.getY( group ) + group.offsetHeight;
					
					//console.log(offsetCount);
					
				} else {
				
					
				
				}
				
				if( viewHeight < bottomPosition ){
					while( viewHeight < bottomPosition ){
						
						console.log( bottomPosition -= 1 );
						
						bottomPosition = Dom.getY( group ) + group.offsetHeight;
						
					}
				
				}
			
			}
		}
			*/?>
		</script>
	<? } ?>
</body>
</html>