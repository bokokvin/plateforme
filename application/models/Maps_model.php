<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');
class Maps_model extends CI_Model {

	public function __construct()
    {
        $this->load->database();
    }
	
	public function ajoutCampagne( $campagne = array() ){

		return $this->db->set('IDPROJET', $campagne['IDPROJET'])
						->set('NOMC', $campagne['NOMC'])
						->set('FICHIER', $campagne['FICHIER'])
						->set('DATEC', $campagne['DATEC'])
						->set('COMMENTAIRE', $campagne['COMMENTAIRE'])
						->insert('campagne');
	}
    
}