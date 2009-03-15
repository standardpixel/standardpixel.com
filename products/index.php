<?php 
	$sp = new SP();
	$title = "Eric Gelinas - Agile Front-End Engineer";
	$sp->include_header($title);
?>
	<div id="feature">
		<h3>StandardPixel Products</h3>
		<p>There are two projects in the works and once they are in a releasable state, they will be posted on this page. Still curious? visit the <a href="http://github.com/standardpixel/">StandardPixel profile</a> on <a href="http://github.com/">GitHub</a></p>
	</div>
	<?php $sp->include_nav() ?>
	<div id="sidebar">
		<div id="posts">
			<h3>Articles I am reading</h3>
			<?php
			$rss_url="http://del.icio.us/rss/dropinastorm/article";
			$rss_limit=10;
			include('../feeds/rss.html')
			?>	
		</div>
		<div id="tools">
			<h3>Tools I am using</h3>
			<?php
			$rss_url="http://del.icio.us/rss/dropinastorm/tool";
			$rss_limit=10;
			include('../feeds/rss.html')
			?>	
		</div>
	</div>
<?php $sp->include_footer() ?>