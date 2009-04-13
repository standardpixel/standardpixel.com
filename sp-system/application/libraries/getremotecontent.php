<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class GetRemoteContent {

    function GetRemoteContent()
	{
		$CI =& get_instance();	
		
		$CI->load->library('simplepie');
		$CI->simplepie->set_cache_location('sp-system/cache/');
		$CI->simplepie->set_cache_duration(600);
	}
    
    function twitter()
	{
		$CI =& get_instance();	
	
		$CI->simplepie->set_feed_url('http://twitter.com/statuses/user_timeline/657073.rss?count=5');
		$CI->simplepie->handle_content_type();
    	$CI->simplepie->init();
    	$CI->remoteContent['twitter'] = $CI->simplepie;
    	
    	echo "<ul>";

		foreach($CI->remoteContent['twitter']->get_items() as $item) {
			
			echo '<li><a href="' . $item->get_link() . '">' . str_ireplace( 'standardpixel: ', '', $item->get_title() ) . '</a></li>';
			
		} // end foreach
		
		echo "</ul>";
		
	}
	
	function flickr()
	{
	
		$CI =& get_instance();	
		
		$CI->simplepie->set_feed_url('feed://api.flickr.com/services/feeds/photos_public.gne?id=14646162@N03&lang=en-us&format=rss_200');
		$CI->simplepie->handle_content_type();
    	$CI->simplepie->init();
    	$CI->remoteContent['flickr'] = $CI->simplepie;
    	
    	echo "<ul>";

		foreach($CI->remoteContent['flickr']->get_items() as $item) {
			
			echo '<li>';
			
			echo '<div><a href="' . $item->get_link() . '">';
			echo $item->get_title(); 
			echo '</a></div>';
			
			echo '<div>' . $item->get_description() . '</div>';
			
			echo '</li>';
			
		} // end foreach
		
		echo "</ul>";
		
	}
	
	function friendfeed()
	{
	
		$CI =& get_instance();	
		
		$CI->simplepie->set_feed_url('feed://friendfeed.com/standardpixel?format=atom');
		$CI->simplepie->handle_content_type();
    	$CI->simplepie->init();
    	$CI->remoteContent['friendfeed'] = $CI->simplepie;
    	
    	echo "<ul>";

		foreach($CI->remoteContent['friendfeed']->get_items() as $item) {
			
			if( substr ( $item->get_title() , 0 , 1 ) != '@' ){
			
				echo '<li>';
			
				echo '<div><a href="' . $item->get_link() . '">';
				echo $item->get_title(); 
				echo '</a></div>';
			
				echo '<div>' . $item->get_description() . '</div>';
			
				echo '</li>';
			
			}
			
		} // end foreach
		
		echo "</ul>";
		
	}
	
	function github()
	{
	
		$CI =& get_instance();	
	
		$CI->simplepie->set_feed_url('https://github.com/standardpixel.private.actor.atom?token=252dad735736578a1de4ff57519108af');
		$CI->simplepie->handle_content_type();
    	$CI->simplepie->init();
    	$CI->remoteContent['github'] = $CI->simplepie;
    	
    	echo "<ul>";

		foreach($CI->remoteContent['github']->get_items() as $item) {
			
			echo '<li>';
			
			echo '<div><a href="' . $item->get_link() . '">';
			echo $item->get_title(); 
			echo '</a></div>';
			
			echo '<div>' . $item->get_description() . '</div>';
			
			echo '</li>';
			
		} // end foreach
		
		echo "</ul>";
		
	}
	
	function deliciousArticle()
	{
	
		$CI =& get_instance();	
		
		$CI->simplepie->set_feed_url('http://feeds.delicious.com/v2/rss/dropinastorm/article?count=5');
		$CI->simplepie->handle_content_type();
    	$CI->simplepie->init();
    	$CI->remoteContent['deliciousArticle'] = $CI->simplepie;
    	
    	echo "<ul>";

		foreach($CI->remoteContent['deliciousArticle']->get_items() as $item) {
			
			echo '<li>';
			
			echo '<div><a href="' . $item->get_link() . '">';
			echo $item->get_title(); 
			echo '</a></div>';
			
			echo '<div>' . $item->get_description() . '</div>';
			
			echo '</li>';
			
		} // end foreach
		
		echo "</ul>";
		
	}
	
	function deliciousTool()
	{
	
		$CI =& get_instance();	
	
		$CI->simplepie->set_feed_url('http://feeds.delicious.com/v2/rss/dropinastorm/tool?count=5');
		$CI->simplepie->handle_content_type();
    	$CI->simplepie->init();
    	$CI->remoteContent['deliciousTool'] = $CI->simplepie;
    	
    	echo "<ul>";

		foreach($CI->remoteContent['deliciousTool']->get_items() as $item) {
			
			echo '<li>';
			
			echo '<div><a href="' . $item->get_link() . '">';
			echo $item->get_title(); 
			echo '</a></div>';
			
			echo '<div>' . $item->get_description() . '</div>';
			
			echo '</li>';
			
		} // end foreach
		
		echo "</ul>";
		
	}
}

?>