<?php
class Survey extends MY_Controller  
{
	//constructor function 
    function __construct()
    {
        parent::__construct();
        $this->load->model('Survey_M');
    }
    public function index()
    {
        //echo 'Hello Survey';
        //$this->Survey_M->index();

    }
    public function form()
    {
        if($_POST)
        {
           
            if(isset($_POST['personal_details_submitted']))
            {
                // echo "Personal Details Submmited";
                // echo $_POST['name'];
                $survey_id=$_POST['hidden_survey_id'];
                if (isset($_FILES["fileToUpload"]["name"])) 
                {
                    $target_dir = "surveycv/";
                    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                    $uploadOk = 1;
                    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
                    $newfilename = round(microtime(true)) . '_' . $data['name'];
                    move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
                    $cv_name=$_FILES["fileToUpload"]["name"];
                    //$data['cvpath']=$target_file;

                    $data=array(
                        "linkedin"=>$this->input->post("linkedin"),
                        "name"=>$this->input->post("name"),
                        "email"=>$this->input->post("email"),
                        "email"=>$this->input->post("email"),
                        "mobile"=>$this->input->post("mobile"),
                        "registered"=>$this->input->post("registered"),
                        "cv_name"=>$cv_name

                        );
                    $success=$this->Survey_M->save_per_details($survey_id,$data);
                    if($success == true)
                    {
                        redirect(base_url()."survey/submitted_successfully");
                    }
                    else
                    {
                        echo "Personal Details Not Saved"; 
                    }
                }
            }
            else
            {
                date_default_timezone_set("Asia/Kolkata"); 
                $date_time=date("Y-m-d H:i:s");
                $data=array(
                    "survey_date_time"=>$date_time,
                    "exp"=>$this->input->post("exp"),
                    "exp_year"=>$this->input->post("exp_year"),
                    "industry_types"=>$this->input->post("industry_types"),
                    "software_skills"=>$this->input->post("software_skills"),
                    "proficiency"=>$this->input->post("proficiency"),
                    "plan"=>$this->input->post("plan"),
                    "expected_salary"=>$this->input->post("expected_salary"),
                    "notice_period"=>$this->input->post("notice_period")

                    );
                $survey_id=$this->Survey_M->save_edu_details($data);
                if($survey_id != false) 
                {
                    $data['survey_id']=$survey_id;
                    $data['submitted']='education';
                    $this->load->view('survey_form',$data);
                }
                else
                {
                    echo "Educational Details Not Saved";
                }

                    
            }
        }
        else
        {
            //$data['submitted']='personal';
            $this->load->view('survey_form');
        }
    }
    public function submitted_successfully()
    {
        //$this->session->set_flashdata('submit_success', 'Submitted Successfully!');
        //$data['submitted']='personal';
        //$this->load->view('survey_form',$data);
        $this->load->view('survey_success');
    }
    public function redirect()
    {
        redirect("https://www.softcadinfotech.in/payment/");
    }
    public function survey_details()
    {
        $data['survey_details']=$this->Survey_M->get_all_surveys();
        $data['no_of_responses']=$this->Survey_M->get_no_of_responses();

        $this->load->view('survey_details',$data);
    }
    public function cadnaukri_survey_response_details()
    {
        $data['responses']=$this->Survey_M->get_responses();
        $this->load->view('survey_response',$data);
    }
    public function rd()
    {
 
        $this->load->view('survey_response');
    }
}
?>
