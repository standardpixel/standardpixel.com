<?php 
	$sp = new SP();
	$title = "Web Development Services";
	$sp->include_header($title);
?>
	<div id="feature">
		<h3>StandardPixel LLC is...</h3>
		<h4>&nbsp;</h4>
		<p> a side project of Front-End Engineer, Eric Gelinas. This site includes links to current projects and agile web development information. Please contact <a href="mailto:info@standardpixel.com">info@standardpixel.com</a> if you would like to know more.</p>
		
		<h3>Current Activity</h3>
		<h4>from <a href="https://github.com/standardpixel">github.com</a></h4>
		<p>
			<strong><a href="http://github.com/standardpixel/stapx-for-yui/tree">STAPIX for YUI</a> - </strong>
			An extension library for YUI <a href="http://github.com/standardpixel/stapx-for-yui/tree">(more)</a>.
		</p>
		<p>
			<strong><a href="http://github.com/standardpixel/slides/tree">Slides</a> - </strong>
			An HTML based presentation platform <a href="http://github.com/standardpixel/slides/tree">(more)</a>.
		</p>
		
	</div>
	<?php $sp->include_nav() ?>
	<div id="sidebar">
		<div id="posts">
			<h3>Articles I am reading</h3>
			<?php
			$rss_url="http://del.icio.us/rss/dropinastorm/article";
			$rss_limit=8;
			include('feeds/rss.html')
			?>	
		</div>
		<div id="tools">
			<h3>Tools I am using</h3>
			<?php
			$rss_url="http://del.icio.us/rss/dropinastorm/tool";
			$rss_limit=8;
			include('feeds/rss.html')
			?>	
		</div>
	</div>
<?php $sp->include_footer() ?>