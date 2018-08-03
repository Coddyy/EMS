<?php
class SuperAdmin_M extends MY_Model 
{
      
    function __construct()
  {
    parent::__construct();
      $this->load->helper('date');
           $this->load->helper('date');
    
  }
         public  function login($email, $password){ 
               //  $encryptedpass=md5($password);
            $this -> db -> select('id, email, password');
       $this -> db -> from('superadmin');
       $this -> db -> where('email', $email);
       $this -> db -> where('password', $password);
                    $this -> db -> where('isActive', 1);
       $query = $this -> db -> get();
       if($query -> num_rows() > 0)
       {
         
        return 1;
       }
       else
       {
        return 0;
       }
  }
        public  function info($email, $password){ 
         $this -> db -> select('id, email, password');
       $this -> db -> from('superadmin');
       $this -> db -> where('email', $email);
       $this -> db -> where('password', $password);
           $this -> db -> where('isActive', 1);
       $query = $this -> db -> get();
       return $query->result();
  }
         public function logout(){
            $this->session->sess_destroy();
   }
        public function empInfo(){
     //       $this -> db -> select('*');
       // $this -> db -> from('employer');
     //        $this->db->order_by("created", "DESC"); 
       //  $query = $this -> db -> get();
       // return $query->result();
          $sql="SELECT * FROM employer LEFT JOIN designations ON employer.roles=designations.designation_id ORDER BY created DESC;";
    $query=$this->db->query($sql);
    return $query->result();
        }
       public function personaldata($empid)
      {
        $this->db->select('*');
        $this->db->from('employer');
        $this->db->where('id',$empid);  
    $query = $this->db->get();
        $result = $query->result();
    return $result;
    
   }
    public function candInfo()
      {
        $this->db->select('*');
        $this->db->from('candidate');
    $this->db->order_by('name','ASC');
        $query = $this->db->get();
        $result = $query->result();
    return $result;
    
    }
     public function candidatelist()
      {
        $this->db->select('candidate.id,candidate.name,candidate.email,candidate.mobile,candidate.location,candidate.cvname,candidate.cvpath,candidate.isActive,userdetails.gender,userdetails.language,userdetails.dob,userdetails.industryType,userdetails.yrofexp,userdetails.keyskills,edudetails.qualification');
        $this->db->from('candidate');
    $this->db->join('userdetails','userdetails.userId=candidate.id');
    $this->db->join('edudetails','edudetails.userId=candidate.id');
    $this->db->order_by('candidate.created','DESC');
    $this->db->group_by('candidate.id');
        $query = $this->db->get();
        $result = $query->result();
        //var_dump($result);exit();
    return $result;
    
     }
   public function internInfo()
      {
        $this->db->select('*');
        $this->db->from('intern');
    $this->db->order_by("created", "DESC"); 
        $query = $this->db->get();
        $result = $query->result();
    return $result;
    
   }
    public function jobInfo()
      {
        $sql="SELECT DISTINCT  job.id,job.jobtitle,job.designation,job.yop,job.qualification,job.location,company.name AS name  
    FROM `job`,`job_skills` ,`company` 
    where `job`.id=`job_skills`.job_id 
    AND `job` .companyId=`company` .id
    AND `job_skills` .company_id=`company` .id ORDER BY job.created DESC";
    $result = $this->db->query($sql)->result();
       /* $this->db->select('job.*,company.name');
        $this->db->from('job');
        $this->db->join('company','company.id=job.companyId');
       $this->db->order_by("job.created", "ASC"); 
        $query = $this->db->get();
        $result = $query->result();*/
        //var_dump($result);exit();
    return $result;
    
   }
    public function internshipInfo()
      {
        $this->db->select('internsip.*,company.name');
        $this->db->from('internsip');
        $this->db->join('company','company.id=internsip.companyId');
       $this->db->order_by("internsip.created", "DESC"); 
        $query = $this->db->get();
        $result = $query->result();
    return $result;
    
   }
   public function companyInfo()
      {
        $this->db->select('*');
        $this->db->from('company');
       $query = $this->db->get();
        $result = $query->result();
        return $result;
    
   }
    public function advatisement()
      {
        $this->db->select('*');
        $this->db->from('advatisement');
       $query = $this->db->get();
        $result = $query->result();
        return $result;
    
   }
   
    public function insert_emplogin($data)
      {
        $this->db->insert('employer',$data); 
        }
    public function inset_Sponors($data)
  {
      $this->db->insert('sponors',$data); 
    }
    public function inset_Intern($data)
  {
      $this->db->insert('intern',$data); 
        }
    public function insertInternship($data)
    {
      $query=$this->db->insert('internsip',$data);
      return $this->db->insert_id();
    }
     public function saveHomeadv($data)
  {
      $this->db->insert('advatisement',$data); 
    }
     public function saveJob($data)
  {
      $this->db->insert('job',$data); 
    }
     public function insertcandidate($data)
  {
      $this->db->insert('candidate',$data); 
    } 
    
     public function sponorsInfo()
      {
        $this->db->select('*');
        $this->db->from('sponors');
        $this->db->order_by('created','desc');
        $query = $this->db->get();
        $result = $query->result();
    return $result;
    
   }
    public function empSingleList($id)
      {
  //       $this->db->select('*');
  //       $this->db->from('employer');
  //        $this -> db -> where('id', $id);
  //      $query = $this->db->get();
  //       $result = $query->result();
    // return $result;
    $sql="SELECT * FROM employer,designations WHERE employer.id='$id' AND employer.roles=designations.designation_id;";
    $query=$this->db->query($sql);
    return $query->result();
    
   }
    public function candSingleList($id)
      {
        $this->db->select('*');
        $this->db->from('candidate');
        $this->db->where('id', $id);
    //$this->db->order_by('name','asc');
        $query = $this->db->get();
        $result = $query->result();
    return $result;

  //      $sql="SELECT * FROM candidate,skills WHERE candidate.id=skills.user_id AND candidate.id='$id';";
  //      $query=$this->db->query($sql);
    // $result = $query->result();
    // return $result;
    
   }
   
   public function sponorsSingleList($id)
      {
        $this->db->select('*');
        $this->db->from('sponors');
         $this -> db -> where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
    return $result;
    
   }
    public function internSingleList($id)
      {
        $this->db->select('*');
        $this->db->from('intern');
         $this->db->where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
    return $result;
    
   }
     public function jobSingleList($id)
      {
        $this->db->select('*');
        $this->db->from('job');
         $this -> db -> where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
    return $result;
    
   }
    public function singleinternshipList($id)
      {
        $this->db->select('*');
        $this->db->from('internsip');
         $this -> db -> where('id', $id);
        $query = $this->db->get();
        $result = $query->result();
    return $result;
    
   }
   
   
   
  public function updateSponors($data,$id){
       $this->db->where('id',$id);      
        $this->db->update('sponors',$data);
      
  }
   public function updateEmployee($id,$data){
       $this->db->where('id',$id);      
        $this->db->update('employer',$data);
      
  }
  public function updateCandidate($id,$data){
       $this->db->where('id',$id);      
        $this->db->update('candidate',$data);
      
  }
    public function updateIntern($id,$data){
       $this->db->where('id',$id);      
        $this->db->update('intern',$data);
      
  }
   public function  updateJob($id,$data){
       $this->db->where('id',$id);      
        $this->db->update('job',$data);
      
  }
   public function  updateInternship($id,$data){
       $this->db->where('id',$id);      
        $this->db->update('internsip',$data);
      
  }
 
  
  /*****SPONORS DELETE************/
  public function deleteSingleList($id){
      $data=array('isActive'=>0);
      $this->db->where('id',$id);     
        $this->db->update('sponors',$data);
      
  }
 
    public function deleteEmployee($id,$data){
       $this->db->where('id',$id);      
        $this->db->update('employer',$data);
      
  }
  public function deleteCandidate($id,$data){
       $this->db->where('id',$id);      
        $this->db->update('candidate',$data);
      
  }
    public function deleteallCandidate($checkbox){
    
  for($i=0;$i<count($checkbox);$i++)
           {
             $del_id=$checkbox[$i];
            // $this->db->where('id', $del_id);
            // $this->db->delete('candidate'); 
            //echo $del_id; exit;
            $this->db->where('id', $del_id);
            $this->db->delete('candidate'); 
            
           } 
           
      
  }
   public function deleteAllEmployee($checkbox){
    
  for($i=0;$i<count($checkbox);$i++)
           {
             $del_id=$checkbox[$i];
            // $this->db->where('id', $del_id);
            // $this->db->delete('candidate'); 
            //echo $del_id; exit;
            $this->db->where('id', $del_id);
            $this->db->delete('employer'); 
            
           }  
           
      
  }
     public function deletechkdIntern($checkbox){
    
  for($i=0;$i<count($checkbox);$i++)
           {
             $del_id=$checkbox[$i];
            // $this->db->where('id', $del_id);
            // $this->db->delete('candidate'); 
            //echo $del_id; exit;
            $this->db->where('id', $del_id);
            $this->db->delete('intern'); 
            
           }  
           
      
  }
     public function deletechkdjob($checkbox){
    
  for($i=0;$i<count($checkbox);$i++)
           {
             $del_id=$checkbox[$i];
            // $this->db->where('id', $del_id);
            // $this->db->delete('candidate'); 
            //echo $del_id; exit;
            $this->db->where('id', $del_id);
            $this->db->delete('job'); 
            
           }  
           
      
  }
       public function deletechkdinternship($checkbox){
    
  for($i=0;$i<count($checkbox);$i++)
           {
            $del_id=$checkbox[$i];
            // $this->db->where('id', $del_id);
            // $this->db->delete('candidate'); 
            //echo $del_id; exit;
            $this->db->where('id', $del_id);
            $this->db->delete('internsip'); 
            
           }  
  }
public function delete_news($checkbox){

  for($i=0;$i<count($checkbox);$i++)
           {
            $del_id=$checkbox[$i];
            $this->db->where('id', $del_id);
            $this->db->delete('news_events');   
           }  
  }

     public function getemailid($checkbox){ 
    
    $noofstudent= count($checkbox);
    $ids = join(',',$checkbox);
    $result = mysql_query("select email from  candidate where id IN ($ids)");
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
      foreach ($line as $col_value) {
      
      }
      $arry_val[]=$col_value;
    }
    
  return $arry_val;
        

  }
 public function getphonenum($checkbox){ 
    
    $noofstudent= count($checkbox);
    $ids = join(',',$checkbox);
    $result = mysql_query("select mobile from  candidate where id IN ($ids)");
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
      foreach ($line as $col_value) {
      
      }
      $arry_val[]=$col_value;
    } 
  return $arry_val;
  } 
  public function getEmployee_emailid($checkbox){ 
    
    $noofstudent= count($checkbox);
    $ids = join(',',$checkbox);
    $result = mysql_query("select email from  employer where id IN ($ids)");
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
      foreach ($line as $col_value) {
        
      }
      $arry_val[]=$col_value;
    }
    
    return $arry_val;
        

  }
     public function getIntern_emailid($checkbox){ 
    
    $noofstudent= count($checkbox);
    $ids = join(',',$checkbox);
    $result = mysql_query("select email from  intern where id IN ($ids)");
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
      foreach ($line as $col_value) {
        
      }
      $arry_val[]=$col_value;
    }
    
    return $arry_val;
  } 
  public function deleteIntern($id){
       $this->db->where('id',$id);      
        $this->db->delete('intern');
      
  }
   public function deleteInternship($id){
       $this->db->where('id', $id);
       $this->db->delete('internsip'); 
      
  }
   public function deleteJob($id){
       $this->db->where('id', $id);
       $this->db->delete('job'); 
      
  }
    public function deleteSponors($id){
       $this->db->where('id', $id);
       $this->db->delete('sponors'); 
      
  }
  
  
  /********************For dashbiard count****************/
  public function countCandidate(){
      $this->db->from('candidate');
    return  $this->db->count_all_results();
  }
   public function countactiveCandidate(){
      $this->db->from('candidate');
      $this->db->where('isActive', '0');
    return  $this->db->count_all_results();
  }
  public function newCandidate(){
      $this->db->from('candidate');
      $this->db->where('new_entry_check', '0');
    return  $this->db->count_all_results();
  }
  public function newEmployee(){
      $this->db->from('employer');
      $this->db->where('new_entry_check', '0');
    return  $this->db->count_all_results();
  }
  public function newIntern(){
      $this->db->from('intern');
      $this->db->where('new_entry_check', '0');
    return  $this->db->count_all_results();
  }
  public function newJobs(){
      $this->db->from('job');
      $this->db->where('new_entry_check', '0');
    return  $this->db->count_all_results();
  }
   public function countEmployee(){
      $this->db->from('employer');
    return  $this->db->count_all_results();
  }
   public function countactiveEmployee(){
      $this->db->from('employer');
      $this->db->where('isActive', '1');
    return  $this->db->count_all_results();
  }
   public function countIntern(){
      $this->db->from('intern');
    return  $this->db->count_all_results();
  }
   public function countactiveIntern(){
      $this->db->from('intern');
      $this->db->where('isActive', '1');
    return  $this->db->count_all_results();
  }
   public function countInternship(){
      $this->db->from('internsip');
    return  $this->db->count_all_results();
  }
   public function countactiveInternship(){
      $this->db->from('internsip');
      $this->db->where('isActive', '1');
    return  $this->db->count_all_results();
  }
  

   public function searchcandidate($skill,$exeperience)
   {
          // Check condition
          
             if(!empty($skill) && empty($exeperience))
            {
              $query = "SELECT * 
              FROM  `candidate` ,  `candiate_key_skills` 
              WHERE  `candidate`.id =  `candiate_key_skills`.user_id 
              and `candiate_key_skills`.key_id in ($skill) 
                      group by  `candidate`.id ";
              $result = $this->db->query($query)->result();
              
              
            }
              else if(empty($skill) && !empty($exeperience))
            {
              
              $words = explode('-', $exeperience);
              //print_r($words);exit;
              $lower_age=$words['0'];
              $upper_age=$words['1'];
              $query = "SELECT * FROM `candidate`,`userdetails`
              where `candidate`.id=`userdetails`.userId and yrofexp  
              between $lower_age AND $upper_age group by  `candidate`.id";
              $result = $this->db->query($query)->result();
            
              
            }
             else if(!empty($skill)  && !empty($exeperience))
            {
              $words = explode('-', $exeperience);
              $lower_age=$words['0'];
              $upper_age=$words['1'];
              $query = "SELECT * FROM `candidate`,`userdetails`,`candiate_key_skills`
                where `candidate`.id=`userdetails`.userId 
                AND `candidate`.id =  `candiate_key_skills`.user_id 
                AND `candiate_key_skills`.user_id =`userdetails`.userId 
                and `candiate_key_skills`.key_id in ($skill) and yrofexp 
                 between $lower_age AND $upper_age group by `candidate`.id";
              $result= $this->db->query($query)->result();
              
            }
            else
            {
              echo "";
            } 
            return $result;
            
     }        
        
       public function getresume($id)
     {
       $query = "select cvname,cvpath from candidate where id='$id'";
       $result = $this->db->query($query)->result();
       return $result;
     }
     
     public function addAdmin($admindetails)
     {
       $this->db->insert('admin',$admindetails); 
        $insert_id = $this->db->insert_id();
        return  $insert_id;
     }
     
     public function assignModule($role_tbl_data)
     {
       $this->db->insert('role',$role_tbl_data); 
       
     }
     //Admin login
      public  function adminlogin($email, $password)
    { 
           //  $encryptedpass=md5($password);
         $this->db->select('id, email, password');
       $this->db->from('admin');
       $this->db->where('email', $email);
       $this->db->where('password', $password);
           $this->db->where('status', 1);
       $query = $this -> db -> get();
       if($query -> num_rows() > 0)
       {
        return 1;
       }
       else
       {
        return 0;
       }
    }
    //Admin Info
    public  function admininfo($email, $password){ 
         $this -> db -> select('id, email, password');
       $this -> db -> from('admin');
       $this -> db -> where('email', $email);
       $this -> db -> where('password', $password);
           $this -> db -> where('status', 1); 
       $query = $this -> db -> get();
       return $query->result();
      }   
       public  function get_module($admin_id)
     {
       $this -> db -> select('module_id');
       $this -> db -> from('role');
       $this -> db -> where('admin_id', $admin_id);
       $query = $this -> db -> get();
       return $query->result();
     }
     public  function get_module_name($module_id)
     {
    $result = mysql_query("select name from  module where id IN ($module_id)");
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) 
      {
      foreach ($line as $col_value) 
        {
        
        }
      $arry_val[]=$col_value;
      }
      return $arry_val;
       
     }
     public function add_news_events($news_events_data)
     {
       $this->db->insert('news_events',$news_events_data); 
     }
     
     public  function get_news_events()
     {
       $this -> db -> select('*');
       $this -> db -> from('news_events');
       $query = $this -> db -> get();
       return $query->result();
     }
     public function get_admin_list()
     {
       $this->db->select('admin.id,admin.name,admin.email,role.module_id,admin.phone_number');
       $this->db->from('admin');
       $this->db->join('role','admin.id=role.admin_id');
       $query = $this->db->get();
       return $query->result();
     }
     public function delete_admin_list($admin_id)
     {
       $this->db->trans_start();
       $this->db->where('id',$admin_id);
       $this->db->delete('admin');
       
       $this->db->where('admin_id',$admin_id);
       $this->db->delete('role');
       $this->db->trans_complete();
       if($this->db->trans_status() === FALSE) 
      {
        return 0;
      }
      else{
        return 1;
      }
     }
     public function cand_skill($id)
     {
        $sql="SELECT name FROM skills,candiate_key_skills WHERE   candiate_key_skills.key_id=skills.id AND candiate_key_skills.user_id='$id';";
        $query=$this->db->query($sql);
        //var_dump($query->row()->name);exit();
        return $query->row()->name;
     }
     public function check_exp($id)
     {
        $sql="SELECT id,company,designation FROM expdetails WHERE userId='$id' AND company IS NOT NULL AND designation IS NOT NULL;";
        $query=$this->db->query($sql);
        //var_dump($query->result());exit();
        if($query->num_rows() == 1)
        {
          return $query->result();
          return true;
        }
        else
        {
          return false;
        }
     }
     public function add_daily_poll($data)
     {
        $success=$this->db->insert('daily_poll',$data);
        if($success)
        {
          return true;
        }
        else
        {
          return false;
        }
     }
    public function get_daily_polls($sort)
    {
        $sql="SELECT * FROM daily_poll ";

        if($sort == 'P')
        {
          $sql .= "WHERE display_permission= 'Pending' ORDER BY created DESC";
        }
        else if($sort == 'A')
        {
          $sql .= "WHERE display_permission= 'YES'";
        }
        else if($sort == 'I')
        {
          $sql .= "WHERE display_permission= 'NO' ORDER BY created DESC";
        }
        else
        {
          $sql.="ORDER BY posted_date DESC,created DESC ;";
        }
        

        $query=$this->db->query($sql);
        return $query->result();
    }
    public function delete_poll($question_id)
    {
        $sql="DELETE FROM daily_poll WHERE question_id='$question_id';";
        $query=$this->db->query($sql);
        if($query)
        {
          return true;
        }
        else
        {
          return false;
        }
    }
    public function get_that_poll($question_id)
    {
      $sql="SELECT * FROM daily_poll WHERE question_id='$question_id';";
      $query=$this->db->query($sql);
      return $query->result();
    }
    public function edit_poll($question_id,$data)
    {
      $this->db->where('question_id',$question_id);
      $success=$this->db->update('daily_poll',$data);
      if($success)
      {
          return true;
      }
      else
      {
          return false;
      }
    }
    public function count_pending_polls()
    {
        $sql="SELECT question_id FROM daily_poll WHERE display_permission='Pending';";
        $query=$this->db->query($sql);
        return $query->num_rows();
    }
    public function check_status($question_id)
    {
      $sql="SELECT display_permission FROM daily_poll WHERE question_id='$question_id';";
      $query=$this->db->query($sql);
      return $query->row()->display_permission;
    }
    public function add_blog($data)
    {
        $success=$this->db->insert('blog',$data);
        if($success)
        {
          $blog_id=$this->db->insert_id();
          return $blog_id;
        }
        else
        {
          return false;
        }

    }
    public function get_all_blogs()
    {
        $sql="SELECT * FROM blog;";
        $query=$this->db->query($sql);
        return $query->result();
    }
    public function delete_blog($blog_id)
    {
        $sql="DELETE FROM blog WHERE blog_id='$blog_id';";
        $query=$this->db->query($sql);
        if($query)
        {
          return true;
        }
        else
        {
          return false;
        }
    }
    public function get_that_blog($blog_id)
    {
      $sql="SELECT * FROM blog WHERE blog_id='$blog_id';";
      $query=$this->db->query($sql);
      return $query->result();
    }
     public function edit_blog($blog_id,$data)
    {
      $this->db->where('blog_id',$blog_id);
      $success=$this->db->update('blog',$data);
      if($success)
      {
          return true;
      }
      else
      {
          return false;
      }
    }
    public function insert_batch_blog_content($insert_batch_content)
    {
        $success=$this->db->insert_batch('blog_content',$insert_batch_content);
        if($success)
        {
          return true;
        }
        else
        {
          return false;
        }
    }
    public function get_active_candidates()
    {
      $sql="SELECT * FROM candidate WHERE is_logged_in='1';";
      $query=$this->db->query($sql);
      return $query->result();
    }
    public function check_admin_email($email)
    {
      $sql="SELECT id FROM superadmin WHERE email='$email';";
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
     public function change_admin_password($password,$email)
    {
      $sql="UPDATE superadmin SET password='$password' WHERE email='$email';";
      $query=$this->db->query($sql);
      if($query)
      {
        return true;
      }
      else
      {
        return false;
      }
    }
    public function get_tickets($related_to)
    {
      $sql="SELECT * FROM query_tickets WHERE related_to='$related_to' ORDER BY query_date DESC;";
      $query=$this->db->query($sql);
      return $query->result();
    }
    public function change_status($status,$query_id)
    {
      $sql="UPDATE query_tickets SET status='$status' WHERE query_id='$query_id';";
      $query=$this->db->query($sql);
      if($query)
      {
        return true;
      }
      else
      {
        return false;
      }
    }
    public function get_query_details($query_id)
    {
      $sql="SELECT * FROM query_tickets WHERE query_id='$query_id';";
      $query=$this->db->query($sql);
      return $query->row();
    }
    public function  change_status_by_user($status,$query_id)
    {
      //echo $status;echo $query_id;exit();
      $date=date('Y-m-d H:i:s');
      $sql="UPDATE query_tickets SET status='$status',query_date='$date' WHERE query_id='$query_id';";
      $query=$this->db->query($sql);
      if($query)
      {
        return true;
      }
      else
      {
        return false;
      }
    }

  public function get_designation($id)
  {
    $sql="SELECT designation_name FROM designations WHERE designation_id='$id';";
    $query=$this->db->query($sql);
    return $query->row()->designation_name;
  }
  public function get_emp_id($job_id)
  {
    $sql="SELECT userId FROM job WHERE id='$job_id';";
    $query=$this->db->query($sql);
    return $query->row()->userId;
  }
  public function get_emp_name($employer_id)
  {
    $sql="SELECT name FROM employer WHERE id='$employer_id';";
    $query=$this->db->query($sql);
    return $query->result();
  }
  public function get_cities()
  {
    $sql="SELECT * FROM cities ORDER BY city_name ASC";
    $query=$this->db->query($sql);
    return $query->result();
  }
  public function get_cv_upgrade_service_requests($emp_id)
  {
    $sql="SELECT * FROM cv_upgrade_service_request 
    LEFT JOIN employer ON employer.id = cv_upgrade_service_request.employer_id 
    ORDER BY cv_upgrade_service_request.request_date DESC; ";
    $query=$this->db->query($sql);
    return $query->result();
  }
  public function get_notifications()
  {
    $sql="SELECT * FROM notification;";
    $query=$this->db->query($sql);
    return $query->result();
  }   
  public function get_no_cv_candidates()
  {
    $sql="SELECT * FROM candidate WHERE cv_mail_sent='0';";
    $query=$this->db->query($sql);
    return $query->num_rows();
  }
  public function get_applied_candidates($job_id)
  {
      $sql="SELECT candidate.name,candidate.mobile,candidate.email,candidate.location,job_apply.created FROM candidate 
        LEFT JOIN job_apply ON job_apply.user_id=candidate.id  
        WHERE job_apply.job_id='$job_id' 
        ORDER BY job_apply.created DESC;";
      $query=$this->db->query($sql);
      return $query->result();
  }
  public function get_applied_interns($internship_id)
  {
      $sql="SELECT intern.name,intern.phno,intern.email,internship_apply.created FROM intern 
        LEFT JOIN internship_apply ON internship_apply.intern_id=intern.id  
        WHERE internship_apply.internship_id='$internship_id' 
        ORDER BY internship_apply.created DESC;";
      $query=$this->db->query($sql);
      return $query->result();
  }
  public function get_job_alerts()
  {
    $sql="SELECT job_alerts.name,job_alerts.email,job_alerts.mobile,job_alerts.location,industry_type.name AS industry_type FROM job_alerts  
    LEFT JOIN industry_type ON job_alerts.industry_type = industry_type.id
    ORDER BY job_alerts.created DESC;";
    $query=$this->db->query($sql);
    return $query->result();

  }
  public function check_cand_registered($email)
  {
      $sql="SELECT id FROM candidate WHERE email='$email';";
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
  public function cv_there($candidate_id)
  {
      $sql="SELECT id FROM candidate WHERE cvpath IS NOT NULL AND id='$candidate_id'";
      $query=$this->db->query($sql);
      if($query->num_rows() > 0)
      {
          return true;
      }
      else
      {
         return false;
      }
  }
  public function location_there($candidate_id)
  {
      $sql="SELECT id FROM candidate WHERE (location IS NOT NULL AND location != '') AND id='$candidate_id';";
      $query=$this->db->query($sql);
      if($query->num_rows() > 0)
      {
          return true;
      }
      else
      {
         return false;
      }
  }
  public function skill_there($candidate_id)
  {
      $sql="SELECT id FROM candiate_key_skills WHERE user_id='$candidate_id';";
      $query=$this->db->query($sql);
      if($query->num_rows() > 0)
      {
          return true;
      }
      else
      {
         return false;
      }
  }
  public function job_applying($candidate_id)
  {
      $sql="SELECT id FROM candidate WHERE (last_appiled_job IS NOT NULL AND last_appiled_job != '') AND id='$candidate_id';";
      $query=$this->db->query($sql);
      if($query->num_rows() > 0)
      {
          return true;
      }
      else
      {
         return false;
      }
  }
  public function get_company_details($emp_id)
  {
    $sql="SELECT * FROM company WHERE userId='$emp_id' ORDER BY created DESC;";
    $query=$this->db->query($sql);
    return $query->result(); 
  }
  public function get_location_by_id($city_id)
  {
    //echo $city_id;exit();
    $sql="SELECT city_name FROM cities WHERE city_id='$city_id' LIMIT 1;";
    //echo $sql;exit();
    $query=$this->db->query($sql);
    //var_dump($query->num_rows());exit();
    return $query->row()->city_name;//exit();
  }
  public function is_today_birthday($candidate_id)
    {
      date_default_timezone_set("Asia/Kolkata"); 
      $today=date('Y-m-d');
      $sql="SELECT id FROM candidate WHERE id='$candidate_id' AND DATE(dob) LIKE '%$today%' ;";
      $query=$this->db->query($sql);
      //var_dump($query->result());
      //$data=$query->result();
      if($query->num_rows() > 0)
      {
        return true; 
      }
      else
      {
        return false;
      }
  }
  public function get_exams_qualifiers($exam_details_id)
  {
    $sql="SELECT * FROM applied_exams 
          LEFT JOIN exam_details ON applied_exams.exam_details_id = exam_details.exam_details_id 
          LEFT JOIN candidate ON applied_exams.candidate_id = candidate.id 
          LEFT JOIN certificate ON certificate.apply_id = applied_exams.apply_id 
          WHERE applied_exams.exam_details_id = '$exam_details_id' 
          GROUP BY applied_exams.apply_id 
          ORDER BY applied_exams.created DESC";
    $query=$this->db->query($sql);
    return $query->result();
  }
  public function get_this_exam($apply_id)
  {
    $sql="SELECT * FROM applied_exams 
          LEFT JOIN exam_details ON applied_exams.exam_details_id = exam_details.exam_details_id 
          LEFT JOIN candidate ON applied_exams.candidate_id = candidate.id 
          WHERE applied_exams.apply_id ='$apply_id';";
    $query=$this->db->query($sql);
    return $query->row();
  }
  public function get_all_exams()
  {
    $sql="SELECT * FROM exam_details GROUP BY exam_details_id ORDER BY created DESC";
    $query=$this->db->query($sql);
    return $query->result();
  }
  public function get_questions($exam_details_id)
   {
      $sql="SELECT qtn1,qtn2,qtn3,qtn4,qtn5,qtn6,qtn7,qtn8,qtn9,qtn10 FROM exams WHERE exam_details_id ='$exam_details_id';";
      $query=$this->db->query($sql);
      //var_dump($query->row());exit();
      return $query->row();
   }
   public function get_question_details($question_id)
   {
      $sql="SELECT question_id,question,opt1,opt2,opt3,opt4,correctopt FROM question WHERE question_id='$question_id';";
      $query=$this->db->query($sql);
      //var_dump($query->result());exit();
      return $query->row();
   }
}
?>