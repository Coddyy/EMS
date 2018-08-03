<?php
class Candidate_details_M extends MY_Model 
{

	protected $_primary_key = 'id';
	protected $_table_name = 'userdetails';
	protected $_order_by = 'id';
	function __construct()
	{
			parent::__construct();
	}
	public function get_new()
	{
		$candidate = new stdClass();
		$candidate->dob='';
		$candidate->altMobile='';
		$candidate->altEmail='';
		$candidate->landNo='';
		$candidate->height='';
		$candidate->weight='';
		$candidate->martialStatus='';
		$candidate->gender='';
		$candidate->language='';
		$candidate->noofFamily='';
		$candidate->yrofexp='';
		$candidate->monthofexp='';
		$candidate->keyskills='';
		$candidate->industryType='';
		$candidate->preferredPosition='';
		$candidate->prsAddrr='';
		$candidate->prsCountry='';
		$candidate->prsState='';
		$candidate->prsCity='';
		$candidate->prsPin='';
		
		$candidate->prmAddrr='';
		$candidate->prmCountry='';
		$candidate->prmState='';
		$candidate->prmCity='';
		$candidate->prmPin='';
		
		$candidate->hobbies='';
		return $candidate;
	}
	public function update_candidate_details($data,$user_id,$print=FALSE)
	{
		$this->db->where('userId', $user_id);
		$this->db->update('userdetails', $data);
		if($print==TRUE)
		{
			echo $this->db->last_query();exit;
		}
		
		
	}
	public function get_notice_period($user_id)
	{
		$sql="SELECT notice_period FROM candidate WHERE id='$user_id';";
		$query=$this->db->query($sql);
		return $query->row()->notice_period;
	}

}