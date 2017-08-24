<?php if ( ! defined('BASEPATH')) exit('No direct script access
allowed');
class User_model extends CI_Model {

	public function __construct()
    {
        $this->load->database();
    }
	
	public function ajoutUser( $user = array() ){

		return $this->db->set('NOM', $user['nom'])
						->set('PRENOM', $user['prenom'])
						->set('EMAIL', $user['email'])
						->set('M2P', $user['m2p'])
						->insert('utilisateur');
	}
	
	public function connexion($email)
	{
		$query = $this->db->get_where('utilisateur',array('EMAIL'=>$email));
		return $query->row_array();
	}
	
	public function getUser($id){
		$query = $this->db->get_where('utilisateur',array('IDUTILISATEUR'=>$id));
		return $query->row_array();
	}
}