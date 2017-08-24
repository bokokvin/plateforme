<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Traitement_model extends CI_Model{




	public function __construct(){
		$this->load->database();
	}

	
	public function insert ( $res= array() )
	{
		return $this->db->set('IDCAMPAGNE', $res['idcampagne']['id'])
						->set('DATE', $res['date'])
						->set('TIME', $res['time'])
						->set('BATTERY', $res['battery'])
						->set('TEMPERATURE', $res['temperature'])
						->set('MARQUEUR', $res['mark'])
						->set('LATITUDE', $res['lat'])
						->set('LONGITUDE', $res['long'])
						->insert('resultat');
	}
	
	public function insertFM ( $tech= array() )
	{
		return $this->db->set('IDRESULTAT', $tech['fm']['id']['id'])
						->set('V_M', $tech['fm']['vm'])
						->set('MW_CM', $tech['fm']['cm'])
						->set('W_M', $tech['fm']['m'])
						->set('GPE',$tech['fm']['gpe'])
						->set('OE', $tech['fm']['oe'])
						->insert('fm');
	}
	
	public function insertTV3 ( $tech= array() )
	{
		return $this->db->set('IDRESULTAT', $tech['tv3']['id']['id'])
						->set('V_M', $tech['tv3']['vm'])
						->set('MW_CM', $tech['tv3']['cm'])
						->set('W_M', $tech['tv3']['m'])
						->set('GPE',$tech['tv3']['gpe'])
						->set('OE', $tech['tv3']['oe'])
						->insert('tv3');
	}
	
	public function insertTETRA ( $tech= array() )
	{
		return $this->db->set('IDRESULTAT', $tech['tetra']['id']['id'])
						->set('V_M', $tech['tetra']['vm'])
						->set('MW_CM', $tech['tetra']['cm'])
						->set('W_M', $tech['tetra']['m'])
						->set('GPE',$tech['tetra']['gpe'])
						->set('OE', $tech['tetra']['oe'])
						->insert('tetra');
	}
	
	public function insertTV4 ( $tech= array() )
	{
		return $this->db->set('IDRESULTAT', $tech['tv4']['id']['id'])
						->set('V_M', $tech['tv4']['vm'])
						->set('MW_CM', $tech['tv4']['cm'])
						->set('W_M', $tech['tv4']['m'])
						->set('GPE',$tech['tv4']['gpe'])
						->set('OE', $tech['tv4']['oe'])
						->insert('tv45');
	}
	
	public function insertGSMTX ( $tech= array() )
	{
		return $this->db->set('IDRESULTAT', $tech['gsmtx']['id']['id'])
						->set('V_M', $tech['gsmtx']['vm'])
						->set('MW_CM', $tech['gsmtx']['cm'])
						->set('W_M', $tech['gsmtx']['m'])
						->set('GPE',$tech['gsmtx']['gpe'])
						->set('OE', $tech['gsmtx']['oe'])
						->insert('gsmtx');
	}
	
	public function insertGSMRX ( $tech= array() )
	{
		return $this->db->set('IDRESULTAT', $tech['gsmrx']['id']['id'])
						->set('V_M', $tech['gsmrx']['vm'])
						->set('MW_CM', $tech['gsmrx']['cm'])
						->set('W_M', $tech['gsmrx']['m'])
						->set('GPE',$tech['gsmrx']['gpe'])
						->set('OE', $tech['gsmrx']['oe'])
						->insert('gsmrx');
	}
	
	public function insertDCSTX ( $tech= array() )
	{
		return $this->db->set('IDRESULTAT', $tech['dcstx']['id']['id'])
						->set('V_M', $tech['dcstx']['vm'])
						->set('MW_CM', $tech['dcstx']['cm'])
						->set('W_M', $tech['dcstx']['m'])
						->set('GPE',$tech['dcstx']['gpe'])
						->set('OE', $tech['dcstx']['oe'])
						->insert('dcstx');
	}
	
	public function insertDCSRX ( $tech= array() )
	{
		return $this->db->set('IDRESULTAT', $tech['dcsrx']['id']['id'])
						->set('V_M', $tech['dcsrx']['vm'])
						->set('MW_CM', $tech['dcsrx']['cm'])
						->set('W_M', $tech['dcsrx']['m'])
						->set('GPE',$tech['dcsrx']['gpe'])
						->set('OE', $tech['dcsrx']['oe'])
						->insert('dcsrx');
	}
	
	public function insertDECT ( $tech= array() )
	{
		return $this->db->set('IDRESULTAT', $tech['dect']['id']['id'])
						->set('V_M', $tech['dect']['vm'])
						->set('MW_CM', $tech['dect']['cm'])
						->set('W_M', $tech['dect']['m'])
						->set('GPE',$tech['dect']['gpe'])
						->set('OE', $tech['dect']['oe'])
						->insert('dect');
	}
	
	public function insertUMTSTX ( $tech= array() )
	{
		return $this->db->set('IDRESULTAT', $tech['umtstx']['id']['id'])
						->set('V_M', $tech['umtstx']['vm'])
						->set('MW_CM', $tech['umtstx']['cm'])
						->set('W_M', $tech['umtstx']['m'])
						->set('GPE',$tech['umtstx']['gpe'])
						->set('OE', $tech['umtstx']['oe'])
						->insert('umtstx');
	}
	
	public function insertUMTSRX ( $tech= array() )
	{
		return $this->db->set('IDRESULTAT', $tech['umtsrx']['id']['id'])
						->set('V_M', $tech['umtsrx']['vm'])
						->set('MW_CM', $tech['umtsrx']['cm'])
						->set('W_M', $tech['umtsrx']['m'])
						->set('GPE',$tech['umtsrx']['gpe'])
						->set('OE', $tech['umtsrx']['oe'])
						->insert('umtsrx');
	}
	
	public function insertWIFI ( $tech= array() )
	{
		return $this->db->set('IDRESULTAT', $tech['wifi']['id']['id'])
						->set('V_M', $tech['wifi']['vm'])
						->set('MW_CM', $tech['wifi']['cm'])
						->set('W_M', $tech['wifi']['m'])
						->set('GPE',$tech['wifi']['gpe'])
						->set('OE', $tech['wifi']['oe'])
						->insert('wifi');
	}
	
	
	
	

	
	public function countFichier(){
		
		//return $id = $this->db->insert_id('campagne');
	
		$query = $this->db->query("SELECT MAX(IDCAMPAGNE) 'id' FROM campagne");
		return $query->row_array();
	}
	
	public function countFichier1(){
		return $this->db->count_all('campagne');
	}
	
	public function countResultat(){
		//return $id = $this->db->insert_id('resultat');
		
		$query = $this->db->query("SELECT MAX(IDRESULTAT) 'id' FROM resultat");
		return $query->row_array();
	}
}