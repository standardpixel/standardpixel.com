	<div id="container" class="stapix millbahn elastic">
		<div id="header">
			<h1>
				<span class="standard">standard</span><span class="pixel">pixel</span><span class="com">.com</span>
			</h1>
			<h2>Web Application Development Blog</h2>
		</div>
		<div id="content_1" class="area col1">
			<div class="article module col1">
				<h4>StandardPixel LLC is...</h4>
				<p> a side project of Front-End Engineer, <a href="http://standardpixel.com/EricGelinas-WebInterfaceEngineer.php">Eric Gelinas</a>. This site includes links to current projects and agile web development information. Please contact <a href="mailto:info@standardpixel.com">info@standardpixel.com</a> if you would like to know more.</p>
			</div>
			
			<div class="article module col1">
				<h4>Active Projects</h4>
				<div class="attribute">from <a href="https://github.com/standardpixel">github.com</a></div>
				<p>
				<strong><a href="http://github.com/standardpixel/stapx-for-yui/tree">STAPIX for YUI</a> - </strong>
				An extension library for YUI <a href="http://github.com/standardpixel/stapx-for-yui/tree">(more)</a>.
				</p>
				<p>
				<strong><a href="http://github.com/standardpixel/slides/tree">Slides</a> - </strong>
				An HTML based presentation platform <a href="http://github.com/standardpixel/slides/tree">(more)</a>.
				</p>
			</div>
		
		</div>
		<div id="content_2" class="module content col2 listGroup">
			<h4>Recently loved articles</h4>
			<div class="attribute">from <a href="https://github.com/standardpixel">delicious.com</a></div>
			<div id="feed_deliciousArticle_content" class="list">
				<? if( $this->input->post('showbasic') != true ){ ?>
					<form action="./" method="post">
						<input type="hidden" name="showbasic" value="true">
						<button>See more content</button>
					</form>
				<? } else { ?>
					<?php $this->getremotecontent->deliciousArticle(); ?>
				<? } ?>				
			</div>
			<h4>General online chatter</h4>
			<div id="feed_friendfeed_content" class="list">
				<? if( $this->input->post('showbasic') != true ){ ?>
					<form action="./" method="post">
						<input type="hidden" name="showbasic" value="true">
						<button>See more content</button>
					</form>
				<? } else { ?>
					<?php $this->getremotecontent->friendfeed(); ?>
				<? } ?>				
			</div>
		</div>