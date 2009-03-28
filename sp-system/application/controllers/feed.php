<?php

class Feed extends Controller {

	function Feed()
	{
		parent::Controller();	
		
		$this->load->library('simplepie');
		$this->simplepie->set_cache_location(
			'/var/www/domains/ComStandardpixelDev/sp-system/cache'
		);
		$this->simplepie->set_cache_duration(600);
	}
	
	function index()
	{	
        $this->load->view('feed_index');
	}
	
	function delicious()
	{
		$this->simplepie->set_feed_url('http://www.digg.com/rss/indexdig.xml');
    	$this->simplepie->init();
    	$this->remoteContent['deliciousArticles'] = $this->simplepie;
    	
    	echo "<ol>";
		foreach($this->remoteContent['deliciousArticles']->get_items() as $item) {
        	echo "<li><a href=’" .$item->get_link() . "’>" . $item->get_title() . "</a><li>";
		}
		echo "</ol>";
    	
		//$this->load->view('feed_index');
	}
}