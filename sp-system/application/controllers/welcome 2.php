<?php

class Welcome extends Controller {

	function Welcome()
	{
		parent::Controller();	
	}
	
	function index()
	{
		$this->title = "Web Development Services";
		
		$this->load->view('header');
		
		$this->load->view('welcome_index');
		
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */