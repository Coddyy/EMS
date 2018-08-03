<?php
class Sponors_M extends MY_Model 
{
	   protected $_primary_key = 'id';
		protected $_table_name = 'sponors';
		protected $_order_by = 'id';
    	
    function __construct()
	{
		
		parent::__construct();
		  $this->load->helper('date');
		
	}
	
	  public function get_new()
	{
		$img = new stdClass();
		$img->companyname='';		
		$img->category='';
		$img->year_of_est='';
		$img->logo='';
		$img->logo_path='';
		$img->description='';
		$img->contact_person='';
		$img->email='';
		$img->mobile='';
		$img->location='';
		$img->city='';
		$img->state='';
		$img->phno='';
		$img->cemail='';
		$img->cmobile='';
		$img->website='';
		$img->pincode='';
		$img->course='';
		$img->certification='';
		$img->affiliation='';
		$img->service='';
		$img->isActive='';
		return $img;
	}
/*#################### Candidate Login ####################*/	
	function sponorsList()
	{ 
		   $this -> db -> select('*');
		   $this -> db -> from('sponors');
		  $query = $this->db->get();
            return $query->result();
 	}

 	function update_permissions($id,$data)
 	{
 		$this->db->where('sponor_id',$id);
 		$this->db->update('sponor_permissions',$data);
 	}
 	public function add_to_permission($data)
 	{
 		$this->db->insert('sponor_permissions',$data);
 	}
 	public function check_sponor_id_in_permission($id)
 	{
 		$sql="SELECT sponor_id FROM sponor_permissions WHERE sponor_id='$id';";
 		$query=$this->db->query($sql);
 		if($query->num_rows() == 1)
 		{
 			return true;
 		}
 		else
 		{
 			return false;
 		}
 	}
 	public function get_all_sponors()
 	{

 	}
 	public function get_permissions($sponor_id)
 	{
 		$sql="SELECT * FROM sponor_permissions WHERE sponor_id='$sponor_id';";
 		$query=$this->db->query($sql);
 		return $query->row();
 	}
 	public function publish_now($sponor_id)
 	{
 		//echo $sponor_id;exit();
 		$sql="UPDATE sponors SET status='Active' WHERE id='$sponor_id';";
 		$query=$this->db->query($sql);
 	}
 	public function stop_publish($sponor_id)
 	{
 		//echo $sponor_id;exit();
 		$sql="UPDATE sponors SET status='Deactive' WHERE id='$sponor_id';";
 		$query=$this->db->query($sql);
 	}
 	public function getall_sponors()
 	{
 		$sql="SELECT * FROM sponors WHERE status='Active';";
 		$query=$this->db->query($sql);
 		return $query->result();
 	}
 	public function check_permission($sponor_id,$field)
 	{
 		$sql="SELECT sponor_id FROM sponor_permissions WHERE $field='Y' AND sponor_id='$sponor_id';";
 		//echo $sql;exit();
 		$query=$this->db->query($sql);
 		if($query->num_rows == 1)
 		{
 			return true;
 		}
 		else
 		{
 			return false;
 		}
 	}
}
?>