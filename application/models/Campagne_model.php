<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');
class Campagne_model extends CI_Model {

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
	
	/*public function count_where($id)
	{
		$this->db->where('IDUTILISATEUR', $id);
		$this->db->from('projet');
		return $this->db->count_all_results();
	}*/
	
	public function getCampagneByProjet($id){
		$query = $this->db->get_where('campagne',array('IDPROJET'=>$id));
		return $query->result_array();
	}
	
	public function countCampagneByProjet($id){
		$this->db->where('IDPROJET', $id);
		$this->db->from('campagne');
		return $this->db->count_all_results();
	}
	
	public function getCampagneByProjetAndByName($idprojet,$nomc){
		/*$query = $this->db->select('*')
						  ->from('campagne')
						  //->where('IDPROJET', $idprojet)
						  ->like('NOMC', $nomc)
						  ->get();*/
		$query = $this->db->query("SELECT * FROM campagne WHERE ((IDPROJET = $idprojet) AND (NOMC LIKE ('%$nomc%')))");
		return $query->result_array();
	}
	
	public function getCampagneByName($nomc){
		$query = $this->db->get_where('campagne',array('NOMC'=>$nomc));
		return $query->row_array();
	}
	
	public function countCampagne(){
		return $this->db->count_all('campagne');
	}
	
	public function getCampagne(){
		$query = $this->db->get('campagne');
		return $query->result_array();
	}
	
	public function getResultatByCampagne($id){
		$query = $this->db->get_where('resultat',array('IDCAMPAGNE'=>$id));
		return $query->result_array();
	}
	
	public function getTechByResultat($tech,$id){
		$query = $this->db->get_where($tech,array('IDRESULTAT'=>$id));
		return $query->row_array();
	}
}
