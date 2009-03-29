<?php

class Feed extends Controller {

	function Feed()
	{
		parent::Controller();	
		
		$this->load->library('simplepie');
		$this->simplepie->set_cache_location('sp-system/cache/');
		$this->simplepie->set_cache_duration(600);
	}
	
	function index()
	{	
	
        $this->load->view('feed_index');
        
	}
	
	function twitter()
	{
	
		$this->simplepie->set_feed_url('http://twitter.com/statuses/user_timeline/657073.rss?count=5');
		$this->simplepie->handle_content_type();
    	$this->simplepie->init();
    	$this->remoteContent['twitter'] = $this->simplepie;
    	
    	echo "<ul>";

		foreach($this->remoteContent['twitter']->get_items() as $item) {
			
			echo '<li><a href="' . $item->get_link() . '">' . str_ireplace( 'standardpixel: ', '', $item->get_title() ) . '</a></li>';
			
		} // end foreach
		
		echo "</ul>";
		
	}
	
	function flickr()
	{
	
		$this->simplepie->set_feed_url('feed://api.flickr.com/services/feeds/photos_public.gne?id=14646162@N03&lang=en-us&format=rss_200');
		$this->simplepie->handle_content_type();
    	$this->simplepie->init();
    	$this->remoteContent['flickr'] = $this->simplepie;
    	
    	echo "<ul>";

		foreach($this->remoteContent['flickr']->get_items() as $item) {
			
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
	
		$this->simplepie->set_feed_url('feed://friendfeed.com/standardpixel?format=atom');
		$this->simplepie->handle_content_type();
    	$this->simplepie->init();
    	$this->remoteContent['friendfeed'] = $this->simplepie;
    	
    	echo "<ul>";

		foreach($this->remoteContent['friendfeed']->get_items() as $item) {
			
			echo '<li>';
			
			echo '<div><a href="' . $item->get_link() . '">';
			echo $item->get_title(); 
			echo '</a></div>';
			
			echo '<div>' . $item->get_description() . '</div>';
			
			echo '</li>';
			
		} // end foreach
		
		echo "</ul>";
		
	}
	
	function github()
	{
	
		$this->simplepie->set_feed_url('https://github.com/standardpixel.private.actor.atom?token=252dad735736578a1de4ff57519108af');
		$this->simplepie->handle_content_type();
    	$this->simplepie->init();
    	$this->remoteContent['github'] = $this->simplepie;
    	
    	echo "<ul>";

		foreach($this->remoteContent['github']->get_items() as $item) {
			
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
	
		$this->simplepie->set_feed_url('http://feeds.delicious.com/v2/rss/dropinastorm/article?count=5');
		$this->simplepie->handle_content_type();
    	$this->simplepie->init();
    	$this->remoteContent['deliciousArticle'] = $this->simplepie;
    	
    	echo "<ul>";

		foreach($this->remoteContent['deliciousArticle']->get_items() as $item) {
			
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
	
		$this->simplepie->set_feed_url('http://feeds.delicious.com/v2/rss/dropinastorm/tool?count=5');
		$this->simplepie->handle_content_type();
    	$this->simplepie->init();
    	$this->remoteContent['deliciousTool'] = $this->simplepie;
    	
    	echo "<ul>";

		foreach($this->remoteContent['deliciousTool']->get_items() as $item) {
			
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