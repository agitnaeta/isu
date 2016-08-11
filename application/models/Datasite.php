<?php 
	/**
	* 
	*/
	class Datasite extends CI_Model
	{
		
		public function siteName()
		{
			$this->db->where('parameter','sitename');
			return $this->db->get('siteoption');		
		}
	}