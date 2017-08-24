<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projet extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Chargement des resources
		$this->load->database();
        $this->load->helper(array('url', 'assets', 'form', 'security', 'uploads_helper'));
		$this->load->library(array('session','email', 'form_validation'));
		$this->load->model('projet_model', 'projetManager');
		$this->load->model('campagne_model', 'campagneManager');
		$this->load->model('user_model', 'userManager');
	}
	
	public function nouveau(){
		if(!isset($_SESSION['EMAIL'])){
			redirect('user/connexion');
		}
		else
		{
			$tab['nbprojet'] = $this->projetManager->countProjet();
			$tab['nbCampagne'] = $this->campagneManager->countCampagne();
			if(isset($_POST['rec'])){
				$this->form_validation->set_error_delimiters('<div class="callout callout-danger" style="padding: 1%">', '</div>');
				$this->form_validation->set_rules('nomP', '"Nom du projet"','trim|required|min_length[2]|max_length[150]|is_unique[projet.NOMP]|encode_php_tags');
				if($this->form_validation->run()){
					$projet['IDUTILISATEUR'] = $_SESSION['IDUTILISATEUR'];
					$projet['NOMP'] = $this->input->post('nomP');
					$projet['REGION'] = $this->input->post('region');
					$projet['VILLE'] = $this->input->post('ville');
					$projet['DATEDEDEBUT'] = $this->input->post('dateD');
					$projet['COMMENTAIRE'] = $this->input->post('commentaire');
					$this->projetManager->ajoutProjet($projet);
                    redirect('projet/nouveau');
					//redirect(array('projet', 'nouveau'));
				}
			}
			$this->load->view('ajoutProjet', $tab);
		}
		
	}
	
	public function liste(){
		if(!isset($_SESSION['EMAIL'])){
			redirect('user/connexion');
		}
		else
		{
			$tab['projet'] = $this->projetManager->getProjet();	
			for($i=0; $i<=count($tab['projet'])-1; $i++){
				$tab['utilisateur'][$i]  = $this->userManager->getUser($tab['projet'][$i]['IDUTILISATEUR']);
				$tab['nbCampagne'][$i] = $this->campagneManager->countCampagneByProjet($tab['projet'][$i]['IDPROJET']);
			}
			$nbprojet = $this->projetManager->countProjet();
			$nbpages = 0;
			$pagecourante = 1;
			
			if($nbprojet%5==0){
				$nbpages = $nbprojet/5;
			}
			else
			{
				$nbpages = ($nbprojet+(5-($nbprojet%5)))/5;
			}
			
			if(!isset($_GET['page'])){
				$tab['debutboucle'] = $nbprojet;
				$tab['finboucle'] = $nbprojet-5;
				$_SESSION['page'] = 1;
			}
			else
			{
				$_SESSION['page'] = $_GET['page'];
				if($_GET['page']==1){
					$tab['debutboucle'] = $nbprojet;
					$tab['finboucle'] = $nbprojet-5;
				}
				else{
					if($_GET['page']>1){
						if($_GET['page']==$nbpages){
							$tab['debutboucle'] = $nbprojet-(($_GET['page']*5)-5);
							$tab['finboucle'] = 0;
						}
						else{
							$tab['debutboucle'] = $nbprojet-(($_GET['page']*5)-5);
							$tab['finboucle'] = $nbprojet-($_GET['page']*5);
						}
					}
				}
			}
			$tab['nbpages'] = $nbpages;
			$this->load->view('listeProjets', $tab);
		}
	}

}