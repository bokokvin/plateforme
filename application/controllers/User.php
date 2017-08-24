<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Chargement des resources
		$this->load->database();
        $this->load->helper(array('url', 'assets', 'form', 'security', 'uploads_helper'));
        $this->load->library(array('session', 'email', 'form_validation'));
		$this->load->model('user_model','userManager');
	}
	
	public function home(){
		$this->load->view('cover');
	}
	
	public function inscription(){
		$user = array();
		$this->form_validation->set_error_delimiters('<p class="form_erreur">', '</p>');
        $this->form_validation->set_rules('nom', '"Nom"','trim|required|min_length[2]|max_length[25]|encode_php_tags');
		$this->form_validation->set_rules('prenom', '"Prenom"','trim|required|min_length[2]|max_length[25]|encode_php_tags');
        $this->form_validation->set_rules('email', '"Email"','trim|required|min_length[6]|max_length[25]|valid_email|is_unique[UTILISATEUR.EMAIL]|encode_php_tags');
        $this->form_validation->set_rules('m2p', '"Mot de passe"','trim|required|min_length[4]|max_length[25]|alpha_dash|encode_php_tags');
        $this->form_validation->set_rules('m2pConfirm', '"Confirmation"','trim|required|min_length[4]|max_length[25]|alpha_dash|matches[m2p]|encode_php_tags');
        
		if($this->form_validation->run())
		{
			$user['nom'] = $this->input->post('nom');
			$user['prenom'] = $this->input->post('prenom');
			$user['email'] = $this->input->post('email');
			$user['m2p'] = do_hash($this->input->post('m2p'));
			
			$this->userManager->ajoutUser($user);
            redirect('user/connexion', 'refresh');
		}
		else
		{
			$this->load->view('inscription');
		}
		
	}
	
	public function connexion(){
		$this->form_validation->set_error_delimiters('<p class="form_erreur">', '</p>');
		$this->form_validation->set_rules('email', '"Email"','trim|required|min_length[6]|max_length[25]|valid_email|encode_php_tags');
		$this->form_validation->set_rules('m2p', '"Mot de passe"','trim|required|min_length[4]|max_length[25]|alpha_dash|encode_php_tags');
		$tab['c'] = 0;
		if($this->form_validation->run())
		{
			$email = $this->input->post('email');
			$m2p = do_hash($this->input->post('m2p'));
			$u = $this->userManager->connexion($email);
			
			if($u['M2P'] == $m2p)
			{
				//session_start();
				$_SESSION['IDUTILISATEUR'] = $u['IDUTILISATEUR'];
				$_SESSION['NOM'] = $u['NOM'];
				$_SESSION['PRENOM'] = $u['PRENOM'];
				$_SESSION['EMAIL'] = $u['EMAIL'];
                redirect('user/dashboard');
			}
			else
			{
				$tab['c'] = 1;
				$this->load->view('connexion',$tab);
			}
		}
		else
		{
			$this->load->view('connexion', $tab);
		}
	}
	
	public function dashboard(){
		if(!isset($_SESSION['EMAIL'])){
            redirect('user/connexion');
		}
		else
		{
			$this->load->view('dashboard');
		}
		
	}
	
	public function dec(){
		if(!isset($_SESSION['EMAIL'])){
			redirect('user/home');
			
		}
		else
		{
			$_SESSION = array();
			setcookie(session_name(),'',time()-1);
			session_destroy();
            redirect('user/home');
		}
	}
	
}