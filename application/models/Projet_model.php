<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');
class Projet_model extends CI_Model {

	public function __construct()
    {
        $this->load->database();
    }
	
	public function ajoutProjet( $projet = array() ){

		$this->db->set('IDUTILISATEUR', $projet['IDUTILISATEUR'])
						->set('NOMP', $projet['NOMP'])
						->set('REGION', $projet['REGION'])
						->set('VILLE', $projet['VILLE'])
						->set('DATEDEDEBUT', $projet['DATEDEDEBUT'])
						->set('COMMENTAIRE', $projet['COMMENTAIRE'])
						->insert('projet');
	}
	
	/*public function count_where($id)
	{
		$this->db->where('IDUTILISATEUR', $id);
		$this->db->from('projet');
		return $this->db->count_all_results();
	}*/
	
	public function countProjet(){
		return $this->db->count_all('projet');
	}
	
	/*public function getProjetByUserId($id){
		$query = $this->db->get_where('projet',array('IDUTILISATEUR'=>$id));
		return $query->result_array();
	}*/
	
	public function getProjet(){
		$query = $this->db->get('projet');
		return $query->result_array();
	}
	
	public function rechProjet($projet){
		$query = $this->db->select('*')
						  ->from('projet')
						  ->like('NOMP', $projet)
						  ->get();
		return $query->result_array();
	}
	
	public function getProjetByName($nomp){
		$query = $this->db->get_where('projet',array('NOMP'=>$nomp));
		return $query->row_array();
	}
}
