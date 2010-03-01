<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();
	}
	
	function index()
	{	
		$this->sp_config = $this->config->config['sp'];
		
		$this->sp_is_production	= ($this->sp_config['environment'] === 'prod');
		
		if($this->sp_is_production){
			
			$this->sp_media_path = 'http://cdn.standardpixel.com/' . $this->sp_config['version'] . '/';
			
		} else {
			
			$this->sp_media_path = 'http://s.standardpixel.com/DDDDDD_C_V_R/';
			
		}
		
		$this->load->library('getremotecontent');
		
		$this->title = "TMI about Eric Gelinas";
		
		$this->load->view('header');
		
		$this->load->view('welcome_index');
		
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */