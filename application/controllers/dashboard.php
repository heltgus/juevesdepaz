<?php
class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
	    $header = array();
	    $template['header'] = $this->load->view('templates/header', $header, true);
        
	    $sidebar = array();
	    $template['sidebar'] = $this->load->view('templates/sidebar', $sidebar, true);
        
	    $content = array();
	    $template['content'] = $this->load->view('inicio', $content, true);
	    
		$this->load->view('templates/maintemplate', $template); 
	}
    
	function sociolegal()
	{
	    $header = array();
	    $template['header'] = $this->load->view('templates/header', $header, true);
        
	    $sidebar = array();
	    $template['sidebar'] = $this->load->view('templates/sidebar', $sidebar, true);
        
	    $content = array();
	    $template['content'] = $this->load->view('sociolegal_form', $content, true);
	    
		$this->load->view('templates/maintemplate', $template); 
	}

}
