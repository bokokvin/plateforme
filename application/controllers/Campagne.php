<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Campagne extends CI_Controller {
	public $pourcentage = "5%";
	public function __construct()
	{
		parent::__construct();
		// Chargement des resources
		$this->load->database();
        $this->load->helper(array('url', 'assets', 'form', 'security', 'uploads_helper'));
        $this->load->library(array('session', 'email', 'form_validation'));
		$this->load->model('projet_model', 'projetManager');
		$this->load->model('campagne_model', 'campagneManager');
		$this->load->model('traitement_model', 'traitementManager');
	}
	
	public function complete(){
		if(!isset($_SESSION['EMAIL'])){
			rredirect('user/connexion');
		}
		else
		{
			// Mot tapé par l'utilisateur
			$q = htmlentities($_GET['nom']);
			$tab = $this->projetManager->rechProjet($q);
			for($i=0;$i<=count($tab)-1; $i++){
				echo '<tr class=\'completeHover\' onclick="changeValue(this.innerHTML)"><td style="width: 700px;"><a>'.$tab[$i]['NOMP'].'</a></td></tr>';
			}
		}
	}
	
	public function complete1(){
		if(!isset($_SESSION['EMAIL'])){
            redirect('user/connexion');
		}
		else
		{
			// Mot tapé par l'utilisateur
			$nomp = htmlentities($_GET['nomp']);
			$nomc = htmlentities($_GET['nomc']);
			$idprojet = $this->projetManager->getProjetByName($nomp);
			$tab = $this->campagneManager->getCampagneByProjetAndByName($idprojet['IDPROJET'],$nomc);
			for($i=0;$i<=count($tab)-1; $i++){
				echo '<tr class=\'completeHover\' onclick="changeValue1(this.innerHTML)"><td style="width: 700px;"><a>'.$tab[$i]['NOMC'].'</a></td></tr>';
			}
		}
	}
	
	public function visualiser(){
		if(!isset($_SESSION['EMAIL'])){
			redirect('user/connexion');
		}
		else
		{
			// Mot tapé par l'utilisateur
			$nomp = htmlentities($_GET['nomp']);
			$nomc = htmlentities($_GET['nomc']);
			$tech = htmlentities($_GET['tech']);
			$idprojet = $this->projetManager->getProjetByName($nomp);
			$idcampagne = $this->campagneManager->getCampagneByName($nomc);
			$resultat = $this->campagneManager->getResultatByCampagne($idcampagne['IDCAMPAGNE']);
			$tech1 = array();
			for($i=0;$i<=count($resultat)-1; $i++){
				$tech1[$i] = $this->campagneManager->getTechByResultat($tech,$resultat[$i]['IDRESULTAT']);
			}
			$tab['idprojet'] = $idprojet;
			$tab['idcampagne'] = $idcampagne;
			$tab['resultat'] = $resultat;
			$tab['tech'] = $tech1;
		
			echo json_encode($tab);
			/*echo '{"idprojet":
								"{
									"IDPROJET": "'.$idprojet['IDPROJET'].'",
									"NOMP": "'.$idprojet['NOMP'].'",
									"REGION": "'.$idprojet['REGION'].'",
									"VILLE": "'.$idprojet['VILLE'].'",
									"DATEDEDEBUT": "'.$idprojet['DATEDEDEBUT'].'",
									"COMMENTAIRE": "'.$idprojet['COMMENTAIRE'].'"
								}",
					"idcampagne": "lol"
				  }';*/
		}
	}
	
	public function nouvelle(){
		if(!isset($_SESSION['EMAIL'])){
			redirect('user/connexion');
		}
		else
		{
			$tab['nbprojet'] = $this->projetManager->countProjet();
			$tab['nbCampagne'] = $this->campagneManager->countCampagne();
			//$_SESSION['pourcentage'] = '0%';
			$this->pourcentage = '10%';
			$tab['pourcentage'] = $this->pourcentage;
			
			if(isset($_POST['rec'])){
				$this->form_validation->set_error_delimiters('<div class="callout callout-danger" style="padding: 1%">', '</div>');
				$this->form_validation->set_rules('nomC', '"Nom de la campagne"','trim|required|min_length[2]|max_length[150]|is_unique[campagne.NOMC]|encode_php_tags');
				if($this->form_validation->run()){
					$idprojet = $this->projetManager->getProjetByName($this->input->post('nomP'));
					$campagne['IDPROJET'] = $idprojet['IDPROJET'];
					$campagne['NOMC'] = $this->input->post('nomC');
					$campagne['DATEC'] = $this->input->post('dateC');
					$campagne['COMMENTAIRE'] = $this->input->post('commentaire');
					
					//$name = $this->traitementManager->countFichier() + 1;
					$config['upload_path'] = './uploads/';
					$config['allowed_types']        = 'xls|xlsx';
					$config['max_size']             = '8192';
					$config['file_name']             = $this->input->post('nomP').'_'.$campagne['NOMC'];
        
					$this->load->library('upload', $config);
			
					if($this->upload->do_upload('fichier') == true){
						$data = $this->upload->data();
						$campagne['FICHIER'] = $data['file_name'];
						$this->campagneManager->ajoutCampagne($campagne);
						
						$this->load->library('excel');
						$objPHPExcel = PHPExcel_IOFactory::load($data['full_path']);
						$highest_row=$objPHPExcel->getSheet(0)->getHighestRow();
						$comp = 1;
						$total = $highest_row-7;
						for($row=7 ; $row<=$highest_row ; $row++)
						{
						
							//$this->pourcentage = intval($comp/$total * 100)."%";
							//$this->pourcentage = $.'%';
							
							$c="C".$row;
							$d="D".$row;
							$e="E".$row;
							$f="F".$row;
							$g="G".$row;
							$h="H".$row;
							$i="I".$row;
							$j="J".$row;
							$k="K".$row;
							$l="L".$row;
							$m="M".$row;
							$n="N".$row;
							$o="O".$row;
							$p="P".$row;
							$q="Q".$row;
							$r="R".$row;
							$t="T".$row;
							$u="U".$row;
							$v="V".$row;
				
							$res['idcampagne'] = $this->traitementManager->countFichier() ;	
							$res['date'] = $objPHPExcel->getSheet(0)->getCell($c)->getValue() ;	
							$res['time'] = $objPHPExcel->getSheet(0)->getCell($d)->getValue() ;	
							$res['battery'] = $objPHPExcel->getSheet(0)->getCell($e)->getValue() ;	
							$res['temperature'] = $objPHPExcel->getSheet(0)->getCell($f)->getValue() ;
							$res['mark'] = $objPHPExcel->getSheet(0)->getCell($t)->getValue() ;
							$res['lat'] = $objPHPExcel->getSheet(0)->getCell($u)->getValue() ;
							$res['long'] = $objPHPExcel->getSheet(0)->getCell($v)->getValue() ;
							$this->traitementManager->insert($res);
				
				
							$tech['fm']['id']= $this->traitementManager->countResultat();
							$tech['fm']['vm']= $objPHPExcel->getSheet(0)->getCell($g)->getValue() ;
							$tech['fm']['cm']= $objPHPExcel->getSheet(1)->getCell($g)->getValue() ;
							$tech['fm']['m']= $objPHPExcel->getSheet(2)->getCell($g)->getValue() ;
							$tech['fm']['gpe']= $objPHPExcel->getSheet(3)->getCell($g)->getValue() ;
							$tech['fm']['oe']= $objPHPExcel->getSheet(4)->getCell($g)->getValue() ;
							$this->traitementManager->insertFM($tech);
				
							$tech['tv3']['id']= $this->traitementManager->countResultat();
							$tech['tv3']['vm']= $objPHPExcel->getSheet(0)->getCell($h)->getValue() ;
							$tech['tv3']['cm']= $objPHPExcel->getSheet(1)->getCell($h)->getValue() ;
							$tech['tv3']['m']= $objPHPExcel->getSheet(2)->getCell($h)->getValue() ;
							$tech['tv3']['gpe']= $objPHPExcel->getSheet(3)->getCell($h)->getValue() ;
							$tech['tv3']['oe']= $objPHPExcel->getSheet(4)->getCell($h)->getValue() ;
							$this->traitementManager->insertTV3($tech);
				
							$tech['tetra']['id']= $this->traitementManager->countResultat();
							$tech['tetra']['vm']= $objPHPExcel->getSheet(0)->getCell($i)->getValue() ;
							$tech['tetra']['cm']= $objPHPExcel->getSheet(1)->getCell($i)->getValue() ;
							$tech['tetra']['m']= $objPHPExcel->getSheet(2)->getCell($i)->getValue() ;
							$tech['tetra']['gpe']= $objPHPExcel->getSheet(3)->getCell($i)->getValue() ;
							$tech['tetra']['oe']= $objPHPExcel->getSheet(4)->getCell($i)->getValue() ;
							$this->traitementManager->insertTETRA($tech);
				
							$tech['tv4']['id']= $this->traitementManager->countResultat();
							$tech['tv4']['vm']= $objPHPExcel->getSheet(0)->getCell($j)->getValue() ;
							$tech['tv4']['cm']= $objPHPExcel->getSheet(1)->getCell($j)->getValue() ;
							$tech['tv4']['m']= $objPHPExcel->getSheet(2)->getCell($j)->getValue() ;
							$tech['tv4']['gpe']= $objPHPExcel->getSheet(3)->getCell($j)->getValue() ;
							$tech['tv4']['oe']= $objPHPExcel->getSheet(4)->getCell($j)->getValue() ;
							$this->traitementManager->insertTV4($tech);
				
				
							$tech['gsmtx']['id']= $this->traitementManager->countResultat();
							$tech['gsmtx']['vm']= $objPHPExcel->getSheet(0)->getCell($k)->getValue() ;
							$tech['gsmtx']['cm']= $objPHPExcel->getSheet(1)->getCell($k)->getValue() ;
							$tech['gsmtx']['m']= $objPHPExcel->getSheet(2)->getCell($k)->getValue() ;
							$tech['gsmtx']['gpe']= $objPHPExcel->getSheet(3)->getCell($k)->getValue() ;
							$tech['gsmtx']['oe']= $objPHPExcel->getSheet(4)->getCell($k)->getValue() ;
							$this->traitementManager->insertGSMTX($tech);
				
							$tech['gsmrx']['id']= $this->traitementManager->countResultat();
							$tech['gsmrx']['vm']= $objPHPExcel->getSheet(0)->getCell($l)->getValue() ;
							$tech['gsmrx']['cm']= $objPHPExcel->getSheet(1)->getCell($l)->getValue() ;
							$tech['gsmrx']['m']= $objPHPExcel->getSheet(2)->getCell($l)->getValue() ;
							$tech['gsmrx']['gpe']= $objPHPExcel->getSheet(3)->getCell($l)->getValue() ;
							$tech['gsmrx']['oe']= $objPHPExcel->getSheet(4)->getCell($l)->getValue() ;
							$this->traitementManager->insertGSMRX($tech);
				
							$tech['dcstx']['id']= $this->traitementManager->countResultat();
							$tech['dcstx']['vm']= $objPHPExcel->getSheet(0)->getCell($m)->getValue() ;
							$tech['dcstx']['cm']= $objPHPExcel->getSheet(1)->getCell($m)->getValue() ;
							$tech['dcstx']['m']= $objPHPExcel->getSheet(2)->getCell($m)->getValue() ;
							$tech['dcstx']['gpe']= $objPHPExcel->getSheet(3)->getCell($m)->getValue() ;
							$tech['dcstx']['oe']= $objPHPExcel->getSheet(4)->getCell($m)->getValue() ;
							$this->traitementManager->insertDCSTX($tech);
				
							$tech['dcsrx']['id']= $this->traitementManager->countResultat();
							$tech['dcsrx']['vm']= $objPHPExcel->getSheet(0)->getCell($n)->getValue() ;
							$tech['dcsrx']['cm']= $objPHPExcel->getSheet(1)->getCell($n)->getValue() ;
							$tech['dcsrx']['m']= $objPHPExcel->getSheet(2)->getCell($n)->getValue() ;
							$tech['dcsrx']['gpe']= $objPHPExcel->getSheet(3)->getCell($n)->getValue() ;
							$tech['dcsrx']['oe']= $objPHPExcel->getSheet(4)->getCell($n)->getValue() ;
							$this->traitementManager->insertDCSRX($tech);
				
							$tech['dect']['id']= $this->traitementManager->countResultat();
							$tech['dect']['vm']= $objPHPExcel->getSheet(0)->getCell($o)->getValue() ;
							$tech['dect']['cm']= $objPHPExcel->getSheet(1)->getCell($o)->getValue() ;
							$tech['dect']['m']= $objPHPExcel->getSheet(2)->getCell($o)->getValue() ;
							$tech['dect']['gpe']= $objPHPExcel->getSheet(3)->getCell($o)->getValue() ;
							$tech['dect']['oe']= $objPHPExcel->getSheet(4)->getCell($o)->getValue() ;
							$this->traitementManager->insertDECT($tech);
				
							$tech['umtstx']['id']= $this->traitementManager->countResultat();
							$tech['umtstx']['vm']= $objPHPExcel->getSheet(0)->getCell($p)->getValue() ;
							$tech['umtstx']['cm']= $objPHPExcel->getSheet(1)->getCell($p)->getValue() ;
							$tech['umtstx']['m']= $objPHPExcel->getSheet(2)->getCell($p)->getValue() ;
							$tech['umtstx']['gpe']= $objPHPExcel->getSheet(3)->getCell($p)->getValue() ;
							$tech['umtstx']['oe']= $objPHPExcel->getSheet(4)->getCell($p)->getValue() ;
							$this->traitementManager->insertUMTSTX($tech);
				
							$tech['umtsrx']['id']= $this->traitementManager->countResultat();
							$tech['umtsrx']['vm']= $objPHPExcel->getSheet(0)->getCell($q)->getValue() ;
							$tech['umtsrx']['cm']= $objPHPExcel->getSheet(1)->getCell($q)->getValue() ;
							$tech['umtsrx']['m']= $objPHPExcel->getSheet(2)->getCell($q)->getValue() ;
							$tech['umtsrx']['gpe']= $objPHPExcel->getSheet(3)->getCell($q)->getValue() ;
							$tech['umtsrx']['oe']= $objPHPExcel->getSheet(4)->getCell($q)->getValue() ;
							$this->traitementManager->insertUMTSRX($tech);
				
							$tech['wifi']['id']= $this->traitementManager->countResultat();
							$tech['wifi']['vm']= $objPHPExcel->getSheet(0)->getCell($r)->getValue() ;
							$tech['wifi']['cm']= $objPHPExcel->getSheet(1)->getCell($r)->getValue() ;
							$tech['wifi']['m']= $objPHPExcel->getSheet(2)->getCell($r)->getValue() ;
							$tech['wifi']['gpe']= $objPHPExcel->getSheet(3)->getCell($r)->getValue() ;
							$tech['wifi']['oe']= $objPHPExcel->getSheet(4)->getCell($r)->getValue() ;
							$this->traitementManager->insertWIFI($tech);
							
							//echo $_SESSION['pourcentage'];
							$comp++;
						}
						sleep(5);
                        redirect('campagne/nouvelle');
					}
				}
			}
			$this->load->view('ajoutCampagne',$tab);
		}
	}
	
	public function chercher(){
		if(!isset($_SESSION['EMAIL'])){
			redirect('user/connexion');
		}
		else
		{
			if(isset($_POST['rec'])){
				$projet = $this->projetManager->getProjetByName($this->input->post('nomP'));
				$idprojet = $projet['IDPROJET'];
				//redirect(array('campagne', 'liste?idprojet='.$idprojet));
                redirect('campagne/liste?idprojet='.$idprojet);
			}
			$this->load->view('chercherCampagne');
		}
	}
	
	/*public function progress(){
		if(!isset($_SESSION['EMAIL'])){
			redirect(array('user', 'connexion'));
		}
		else
		{
			
			
			
				echo $this->pourcentage;
			
			
		}
	}*/
	
	public function liste(){
		if(!isset($_SESSION['EMAIL'])){
			redirect('user/connexion');
		}
		else
		{
				
				$idprojet = $_GET['idprojet'];
				$tab['idprojet'] = $idprojet;
				$tab['campagne'] = $this->campagneManager->getCampagneByProjet($idprojet);
				$nbprojet = count($tab['campagne']);
				$nbpages = 0;
				$pagecourante = 1;
				$tab['nbc'] = $nbprojet;
				if($nbprojet == 0){
					$tab['v'] = 1;
				}
				else{
					if($nbprojet<=5){
						$tab['v'] = 2;
					}
					else{
						$tab['v'] = 0;
					}
				}
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
				$this->load->view('resultatCampagne',$tab);
		}
	}

}