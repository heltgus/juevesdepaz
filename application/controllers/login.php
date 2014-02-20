<?php
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
        /*
        $header = array();
        $template['header'] = $this->load->view('templates/header', $header, true);
        
        $sidebar = array();
        $template['sidebar'] = $this->load->view('templates/sidebar', $sidebar, true);
        
        $content = array();
        $template['content'] = $this->load->view('inicio', $content, true);
        */
        
        $template['content'] = "";
        $this->load->view('login', $template); 
    }
    

}
