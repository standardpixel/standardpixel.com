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
				<h4>Recent work</h4>
				<p>
				<img src="http://dev.s.standardpixel.com/i/feature/feature_sp.png" alt="StandardPixel.com design by Ernest Millan" title="StandardPixel.com design by Ernest Millan" align="left" /><strong>StandardPixel.com redesign</strong>
					<ul class="project">
						<li><strong>Status: </strong> Launched</li>
						<li><strong>Designer: </strong> <a href="http://millanwebdesign.com">Ernest Millan</a></li>
						<li><strong>Crafted by: </strong>Eric Gelinas</li>
					</ul>
				</p>
				<p>
				<img src="http://dev.s.standardpixel.com/i/feature/feature_sp.png" alt="StandardPixel.com design by Ernest Millan" title="StandardPixel.com design by Ernest Millan" align="left" /><strong>StandardPixel Blog redesign</strong>
					<ul class="project">
						<li><strong>Status: </strong> Design Approved</li>
						<li><strong>Designer: </strong> <a href="http://millanwebdesign.com">Ernest Millan</a></li>
						<li><strong>Crafted by: </strong>Eric Gelinas</li>
					</ul>
				</p>
				<p>
				<img src="http://dev.s.standardpixel.com/i/feature/feature_cs.png" alt="Culturally Shallow design by Ernest Millan" title="Culturally Shallow design by Ernest Millan" align="left" /><strong>StandardPixel.com redesign</strong>
					<ul class="project">
						<li><strong>Status: </strong> Design Apporved</li>
						<li><strong>Designer: </strong> <a href="http://millanwebdesign.com">Ernest Millan</a></li>
						<li><strong>Crafted by: </strong>Winnie Wong & Eric Gelinas</li>
					</ul>
				</p>
			</div>
		
		</div>
		<div id="content_2" class="module content col2 listGroup">
			<h4>Reading List</h4>
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
			<h4>News</h4>
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