<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Maps extends CI_Controller {
    
	public function __construct()
	{
		parent::__construct();
		// Chargement des resources
		$this->load->database();
        $this->load->helper(array('url', 'assets', 'form', 'security', 'uploads_helper'));
		$this->load->library(array('session', 'email', 'form_validation'));
		$this->load->model('maps_model', 'mapsManager');
	}
    
    public function getMarkers(){
        $this->load->view('maps');
    }
}