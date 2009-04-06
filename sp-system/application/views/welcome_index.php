	<div id="container" class="stapix millbahn elastic">
		<div id="header">
			<h1>
				<span class="standard">standard</span><span class="pixel">pixel</span><span class="com">.com</span>
			</h1>
			<h2>Web Application Development Blog</h2>
		</div>
		<div id="content_1" class="area col1">
			<h3>Blog Posts</h3>
			<div class="article module col1">
				<h4>Progressively enhanced fat client</h4>
				<div class="date">August 20th, 2008</div>
				<p>I love the idea of progressive enhancement. If kept in mind throughout design and development, the product will be more accessable to those with disabilities and most of the awkward challenges that the Internet drag in. The fact is that what little work I have done to make a site progressively enhance, has turned out to save me lots of time down the road. You will just have to take my word on the last one.</p>

				<p>So how does this relate to some of the fat client style applications that I have been working with lately? If you don’t know, a fat client, in the javascript world, refers to an app that relies mostly on client side code to run and communicates with the back-end  through asynchronous data exchanges. These apps are able to use client side technologies to give a similar experience to a desktop application. Lack of proper “low-fi” states, where the app can be useful without javascript enabled, are not generally considered when building fat clients with client side libraries like YUI and SproutCore. The makers of these libraries obviously try to keep their products accessible but it is difficult to keep maintain this accessibility as the fat client features are added. I could not reconcile that I could Both be making progress and ignoring progressive enhancement when working on these types of applications. The truth is that we can’t make an application that can both contain all of the interface convenience features that modern browser users expect and have a low-fi case to fall back on for accessibility.</p>

				<p>The best way I have found to get around the gap between accessibility comes in the form of a compromise. There are sites that will redirect a user to a low-fi version, if a browser does not meet the minimum requirements of the fat client. The same approach is often taken to redirect mobile users to mobile versions of an interface. This allows every user to get an ideal experiance for their client type as long as their client type matches the requirements. It is very important that if the client does not meet the minimum requirements, is of unknown type, or an error occurs preventing client detection, the page is served in simple HTML, with no JavaScript enhancement.</p>

				<p>I do understand that most of us do not have the time to build two or more versions of an application. There are clever ways to organize an app to minimize the amount of duplicate work that needs to be done when building both a low-fi and fat client version of your interface. Ruby on Rails perticularly comes to mind so it will be my example. First, you want to create a simple Rails application. This would not need to be much more then a scaffold. Apply some style though the site should be readable without CSS, even if it is not pretty. Make sure that your controllers are set up to return a JSON representation of the rendered data if requested. This JSON output will be the rest service that your fat client will use to communicate with the backend along with the neccisary ability to accept AJAX form posts. This seems to be the least evil way to provide functionality for specific clients.</p>

				<p>–EG–</p>
				
				<div class="moreinfo">Posted in <a href="#">Tag</a>&nbsp;|&nbsp;<a href="#">1000 Comments</a></div>
			</div>
		</div>
		<div id="content_2" class="module content col2">
			<h3>Interesting Apps</h3>
			<div id="feed_deliciousTool_content" class="list">
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