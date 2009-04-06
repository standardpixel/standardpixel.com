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
	<div id="sidebar">
		<div id="feed_deliciousTool" class="feed">
			<h3>Interesting Apps</h3>
			<div id="feed_deliciousTool_content" class="content">
				<? if( $this->input->post('showbasic') != true ){ ?>
					<form action="./" method="post">
						<input type="hidden" name="showbasic" value="true">
						<button>See more content</button>
					</form>
				<? } else { ?>
					<?php print_r($this); ?>
				<? } ?>	
			</div>
		</div>
	</div>