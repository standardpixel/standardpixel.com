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