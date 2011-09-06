<!doctype html>  
	<head>
		<meta charset="utf-8">

		<title>StandardPixel.com: Curation of _things_ by Eric Gelinas</title>
		<meta name="description" content="">
		<meta name="author" content="Eric Gelinas">

		<meta name="viewport" content="width=device-width, initial-scale=0.9">
		
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		       
		<script type="text/javascript" src="http://use.typekit.com/tkt0mro.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                
		<link rel="stylesheet" href="style_domestica_summer.css" type="text/css" media="screen" charset="utf-8">
		
	</head>

	<body class="domestica summer">

		<div id="container">
			<header>
				<div id='logo'>
					<div class="illustration">
						<div class="block-1 first"></div>
						<div class="block-2"></div>
						<div class="block-3"></div>
						<div class="block-4"></div>
					</div>
					<h2>Standard Pixel</h2>
				</div>
				<h1>Hello, I am Eric Gelinas. StandardPixel.com is where I showcase the many <i>things</i> which I "fave", "like", "+1", and otherwise curate online.</h1>
			</header>

			<nav>
				<ul>
					<li>
						<a href="http://blog.standardpixel.com/">Blog</a>
						<p>My Tumblr blog which is mostly about music</p>
					</li>
					<li>
						<a href="EricGelinas-WebInterfaceEngineer.php">Resumé</a>
						<p>What exactly I have been doing with my life for the past <?=(date('Y')-1997)?> years</p>
					</li>
					<li>
						<a href="http://s.standardpixel.com/proto">Prototypes</a>
						<p>Some small things I have been tinkering with</p>
					</li>
					<li>
						<a href="http://github.com/standardpixel/standarpixel.com/">Source</a>
						<p>The source code for this site and a lot more of my tinkerings</p>
					</li>
					<li>
						<a href="http://flickr.com/standardpixel">Photos</a>
						<p>My flickr photostream. Basically my life since 2007, along with a little more.</p>
					</li>
					<li>
						<a href="http://8tracks.com/standardpixel">Playlists</a>
						<p>Digital mixtapes which I have put together on 8tracks.com</p>
					</li>
					<li>
						<a href="http://last.fm/user/dropinastorm">Music</a>
						<p>A ridiculous amount of information on what I have been listening too thanks to last.fm</p>
					</li>
					<li>
						<a href="http://pinboard.in/u:standardpixel">Bookmarks</a>
						<p>Pinboard silently collects links which I share and save directly.</p>
					</li>
					<li>
						<a href="http://svpply.com/standardpixel">Wish List</a>
						<p>Lots of items which I want but in many cases will never have on Svpply.com</p>
					</li>
					<li>
						<a href="http://standardpixel.yelp.com/">Places</a>
						<p>Places (mostly in SF) and elsewhere, where I have been and some words on the ones which I feel most strongly</p>
					</li>
					<li>
						<a href="http://www.songkick.com/users/standardpixel">Gigs</a>
						<p>The concerts I am interested in and possibly going too</p>
					</li>
				</ul>
			</nav>

			<footer>
				<div class="cc-img"><a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Creative Commons License" align="top" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a></div>
				<div class="cc-text"><p><br /><span xmlns:dct="http://purl.org/dc/terms/" property="dct:title">StandardPixel</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://standardpixel.com" property="cc:attributionName" rel="cc:attributionURL">Eric Gelinas</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/">Creative Commons Attribution-NonCommercial-ShareAlike 3.0 Unported License</a>.</p></div>
			</footer>
		</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
		
		<script>
			(function() {
				function getRowLength() {
					return Math.floor( $('nav').width() / $('nav li:first-child').width() )
				}
				
				function position_dependants() {
					if($('h1')) {
						var last_in_row    = $($('nav li')[(getRowLength()-1)]),
						    new_left_value = (last_in_row.offset().left+last_in_row.width())-$('h1').width();
						
						if(new_left_value > 1) {
							$('h1').css('right','none');
							$('h1').css('width',(last_in_row.width()*2)+31)
							$('h1').css('left',new_left_value);
						}
					}
				}
				
				$(window).resize(function(e) {
					position_dependants()
				});
				
				position_dependants();
				
				$(document).ready(function() {
					position_dependants();
					
					setTimeout(function() {
						$('h1').css('-webkit-transition','left .2s linear');
						$('h1').css('transition','left .2s linear');
					},1000);	
				});
				
				$('nav').click(function(e) {
					var parent_element = (e.srcElement.tagName !== 'LI') ? e.srcElement.parentNode : e.srcElement,
					    link_elements  = parent_element.getElementsByTagName('a');
					
					if(link_elements && link_elements[0] && parent_element.tagName === "LI") {
						var link_element = link_elements[0];
						document.location.href=link_element.href;
					}
				});
				
			})();
		</script>

	</body>
</html>
