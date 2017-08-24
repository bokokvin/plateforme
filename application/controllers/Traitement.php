<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traitement extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// Chargement des resources
		$this->load->database();
        $this->load->helper(array('url', 'assets', 'form', 'security', 'uploads_helper'));
		$this->load->library(array('session', 'email', 'form_validation'));
		$this->load->model('traitement_model', 'traitementManager');
	}
	
	public function nouveau(){
		$tab = array();
		if(isset($_POST['charger'])){
			$name = $this->traitementManager->countFichier() + 1;
			$config['upload_path'] = './uploads/';
			$config['allowed_types']        = 'xls|txt|xlsx';
			$config['max_size']             = '8192';
			$config['file_name']             = 'fichier'.$name;
        
			$this->load->library('upload', $config);
			
			if ($this->upload->do_upload('fichier') == true)
			{
				$data = $this->upload->data();
				//$rapport['file'] = $data['full_path'];
				$rapport['IDPROJET'] = 1;
				$rapport['name'] = $data['file_name'];
				$this->traitementManager->chargerFichier($rapport);
				
				$this->load->library('excel');
				$objPHPExcel = PHPExcel_IOFactory::load(fichier_url($rapport['name']));
				$highestRow = $objPHPExcel->getSheet(0)->getHighestRow(); // e.g. 10
				
				//$this->traitementManager->insertDate($objPHPExcel->getSheet(0)->getCell('C7')->getValue());
				echo PHPExcel_Shared_Date::ExcelToPHPObject($objPHPExcel->getSheet(0)->getCell('C7')->getValue());
				
				/*for ($row = 7; $row <= $highestRow; $row++) { 
					$cell = "E".$row;
					echo $tab['e'] = $objPHPExcel->getSheet(0)->getCell($cell)->getValue().'<br>';
					
					//echo $tab['e'] = $objPHPExcel->getSheet(2)->getCell($cell)->getValue().'<br>';
				}
				echo $highestRow; */
			}
			
		}
		$this->load->view('chargerFichier', $tab);
	}
	
}