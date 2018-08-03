<?php
class Jobadmin extends MY_Controller  
{
    //constructor function 
    function __construct()
    {
        parent::__construct();
        $this->load->model('Job_admin_m');
        //$this->load->model('Candidate_M');
    }
    public function index()
    {
        //echo 'Hello';
        //$this->job_admin();
        $this->job_console();

    }
    public function job_console()
    {
        $data['pending_job']=$this->Job_admin_m->pending_job();
        $data['approved_job']=$this->Job_admin_m->approved_job();
        $data['rejected_job']=$this->Job_admin_m->rejected_job();
        $data['expired_job']=$this->Job_admin_m->expired_job();

        $this->load->view('admin/job_console',$data);
    }
    public function get_job($key=null)
    {
        $key=$this->uri->segment(3);
        if($key == 'P')
        {
          $data['jobs']=$this->Job_admin_m->get_pending_jobs();  
        }
        else if($key == 'A')
        {
          $data['jobs']=$this->Job_admin_m->get_approved_jobs();  
        }
        else if($key == 'R')
        {
          $data['jobs']=$this->Job_admin_m->get_rejected_jobs();  
        }
        else if($key == 'E')
        {
          $data['jobs']=$this->Job_admin_m->get_expired_jobs();  
        }
        
        $this->load->view('admin/job_admin',$data);
    }
    public function edit_job_details($job_id=null)
    {
        //var_dump($job_id);exit();
        $data['job']=$this->Job_admin_m->get_job_details($job_id);
        //var_dump($data);exit();
        if($data['job'] != false)
        {
            //var_dump($data);exit();
            $this->load->view('admin/job_edit_job_admin',$data);
        }
    }
    public function approve_job()
    {
        $job_id=$this->uri->segment(3);
        $approval=$this->uri->segment(4);
        // var_dump($job_id);
        // var_dump($approval);exit();
        $result=$this->Job_admin_m->approve_job($approval,$job_id);
        $emp_name=$this->Job_admin_m->get_emp_name($job_id);
        $emp_email=$this->Job_admin_m->get_emp_email($job_id);
        //echo $result;
        if($result == 'Y')
        {
            $this->load->library('email');

            $this->email->set_mailtype("html");

            $this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
            $this->email->to($emp_email);
            $this->email->subject("Your Job Post Is Approved");

            
            $this->email->message("
                
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
            <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
            <link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
            <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


            <div style='font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;'>
            <table style='width: 100%;'>
              <tr>
                <td></td>
                <td bgcolor='#FFFFFF'>
                  <div style='padding: 15px; max-width: 600px;margin: 0 auto;display: block; border-radius: 0px;padding: 0px; border: 1px solid #0055a5;'>
                    <table style='width: 100%;background: #f0f1fa ;'>
                      <tr>
                        <td></td>
                        <td>
                          <div>
                            <table width='100%'>
                              <tr>
                                <td rowspan='2' style='text-align:center;padding:10px;'>
                                  <a href='http://www.cadnaukri.com'>  <img style='float:left;height:40%;width:40%;'  src='http://cadnaukri.com/assets/images/logoemail.png' alt='Cadnaukri.com' /> </a>
                                    
                                    <span style='color:blue;float:right;font-size: 13px;font-style: italic;margin-top: 20px; padding:10px; font-size: 14px; font-weight:normal;'>
                                        <a href='https://www.facebook.com/CADnaukri'><img style='height:14%;width:25%;' src='http://cadnaukri.com/assets/images/fb.png' alt='Cadnaukri.com' ></a>
                                        <a href='https://twitter.com/cadnaukri'><img style='height:14%;width:25%;' src='http://cadnaukri.com/assets/images/tt.png' alt='Cadnaukri.com' ></a>
                                    </span></td>
                              </tr>
                            </table>
                          </div>
                        </td>
                        <td></td>
                      </tr>
                    </table>
                    <table style='padding: 10px;font-size:14px; width:100%;'>
                        <tr>
                        <td style='padding:10px;font-size:14px; width:100%;'>
                            <p>Hi ".$emp_name."</p>
                            <p style='color:green;'><br /> Your job has been approved</p>
                            <p> If you have any questions about these guidelines and how they affect your recruiting 
                                needs, please write to HR@CADNAUKRI.COM </p>
                            <p> </p>
                            <p>Thanks for choosing CADnaukri</p>
                            <p>CADnaukri Team.</p>
                         </td>
                        </tr>
                        <tr>
                        <td>
                        <div align='center' style='font-size:12px; margin-top:20px; padding:5px; width:100%; background:#eee;'>
                            © 2017 <a href='http://www.cadnaukri.com' target='_blank' style='color:#333; text-decoration: none;'>CADnaukri.com</a>
                        </div>
                    </td>
                    </tr>
                </table>
            </div>
          
            

                 ");

            $this->email->send();
            redirect(base_url()."jobadmin/get_job/A");
        }

        else if($result == 'M')
        {
            $result=$this->Job_admin_m->set_pending($job_id);
            if($result == true)
            {
                $this->load->library('email');

                $this->email->set_mailtype("html");

                $this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
                $this->email->to($emp_email);
                //$this->email->bcc('shaktiprasad.dash@softcadinfotech.in');
                $this->email->subject("Modify Your Job Post");

                
                $this->email->message("
                    
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
                <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
                <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
                <link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
                <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


                <div style='font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;'>
                <table style='width: 100%;'>
                  <tr>
                    <td></td>
                    <td bgcolor='#FFFFFF'>
                      <div style='padding: 15px; max-width: 600px;margin: 0 auto;display: block; border-radius: 0px;padding: 0px; border: 1px solid #0055a5;'>
                        <table style='width: 100%;background: #f0f1fa ;'>
                          <tr>
                            <td></td>
                            <td>
                              <div>
                                <table width='100%'>
                                  <tr>
                                    <td rowspan='2' style='text-align:center;padding:10px;'>
                                      <a href='http://www.cadnaukri.com'>  <img style='float:left;height:40%;width:40%;'  src='http://cadnaukri.com/assets/images/logoemail.png' alt='Cadnaukri.com' /> </a>
                                        
                                        <span style='color:orange;float:right;font-size: 13px;font-style: italic;margin-top: 20px; padding:10px; font-size: 14px; font-weight:normal;'>
                                        'Social Login'<span></span></span></td>
                                  </tr>
                                </table>
                              </div>
                            </td>
                            <td></td>
                          </tr>
                        </table>
                        <table style='padding: 10px;font-size:14px; width:100%;'>
                            <tr>
                                <td style='padding:10px;font-size:14px; width:100%;'>
                                    <p>Hi ".$emp_name."</p>
                                    <p style=''>
                                        <table width='100%'>
                                      <tr>
                                <td rowspan='2' style='text-align:left;padding:0px;height:40%;'>
                                  
                                </td>
                            </tr>
                        </table>
                                    <div><b>Job Posting Guidelines</b></div>
                                    <br >
                                   <span style='font-size:12px;'> Please follow the CADnaukri job posting guidelines and make the most exhibiting advertisement through our exclusive services at industry’s best ever pricing. 
                                    <br /> 
                                    We suggest you to develop the content of the advertisement in a very consistent manner that matches the optimal standards of CADnaukri’s ideal practices specified for recruiters. Please note that the following is a guide to make your job posts look better 
                                    and consistent in terms of industry standards only. </span>
                                    <br />
                                    <br />
                                    <h4>Job Titles and Descriptions <br /></h4>
                                    <br />
                                    <span style=''>
                                    ● <b>No offensive content.</b> Due diligence is necessary while creating a job post.Offensive or inappropriate content shall be out-rightly rejected without a second chance for modification. 
                                    <br />
                                    <br />
                                    ● <b>No clickbait</b> in job titles or in description. Job titles should be the actual name of the particular job opening only, with no other information allowed such as LOCATIONS or EMAIL IDs or WEBLINKS, etc. Job descriptions must contain only details of exact roles & responsibilities for the candidates with their exact skills & expertise. 
                                    <br />
                                    <br />
                                    ● <b>Salary/Compensation.</b> There should be clear information of the salary or 
                                    cost to company in Indian Rupees per annum. Negotiable salary advertisements do not attract good candidates. Plus the compensation must match that of the industry and the location of the job. 
                                    <br />
                                    <br />
                                    ● <b>Skills.</b> Use the field provided to list all the key skills like CATIA, CREO, HYPERMESH, etc. for a better visibility and search performance of the job advertisement. 
                                    <br />
                                    <br />
                                    ● <b>Job Location.</b> Exact location of job is required. No address details should be mentioned. Use the location field to specify the same. 
                                    <br />
                                    <br />
                                    ● <b>Eligibility.</b> A perfectly detailed advertisement is clear for the candidates to apply. Jargon information wastes everyone’s time including our databases. Therefore, do  not forget to fill this field with exact qualification necessary to apply for the job. 
                                    <br />
                                    <br />
                                    ● <b>Experience.</b> Do not leave the field marked experience empty as most job 
                                        seekers prefer job opportunities that exactly match their own experience levels having a better salary package. 
                                    <br />
                                    <br />
                                    ● <b>Don’t copy used job contents.</b> CADnaukri allows only uniquely prepared 
                                    job contents as it always performs better on popular search engines. 
                                    <br />
                                    <br />
                                    ● <b>Don’t post on behalf of others.</b> Job posts other than that of yours are 
                                    rejected by CADnaukri. Advertisements by only authorized representative(s) of the company are allowed to post their vacancies. If any post found to be ineligible shall be removed from the listing without notice. 
                                    <br />
                                    <br />
                                    ● <b>Post only a real job.</b> CADnaukri allows only jobs that are real. Non-job 
                                    content–including spam, scams and other offers–will not be shown to job seekers. 
                                    <br />
                                    <br />
                                    ● <b>Avoid posting of same jobs repeatedly.</b> CADnaukri job portal uses 
                                    algorithms as well as human intellect to cross-check freshness of job post, most relevant content in response to searches. Companies that attempt to exploit these principles by reposting roles within a short timeframe or posting roles in more locations than the job is offered for increased visibility will be removed from the listing without prior notice.  
                                    </span> 
                                    <br />
                                    <br />
                                    <span style=''><b>The Do’s and Don’ts</b></span> 
                                    <br />
                                    <br />
                                    <span style=''>
                                    <br />
                                    ● <b>Use CADnaukri to fill a genuine job opening.</b> Each posting should 
                                    represent the most currently available job in your company. 
                                    <br />
                                    ● <b>Non-discriminative posts.</b> The advertisements must be made available to 
                                    only the eligible & meritorious candidates irrespective of their race, gender and sexual orientation. 
                                    <br />
                                    ● <b>Clarity in compensation.</b> Advertisements must indicate the actual cost-to-company for a candidate on an annual basis. There should not be any charges for the candidates to either apply or attend any interview. 
                                    <br />
                                    ● <b>Follow one step application process.</b> There should not be any tedious process of application for the job-seekers. Once their application through CADnaukri gets shortlisted, they may be called for interviews. 
                                    <br />
                                    ● <b>Complete Privacy.</b> CADnaukri believes in cent percent privacy of the recruiters as well as the candidates. We urge not to disclose this to any 3rd party for eventual misuse. 
                                     <br />
                                    ● <b>Tell the truth.</b> Provide the true details of your job, including its location, duties and whether the job is `being offered by the hiring company or by a recruiter on the company’s behalf. 
                                     <br />
                                   <span style='' Forbidden posts </span>
                                   <span style=''>
                                   <br />
                                    ● <b>Career fairs</b> 
                                    <br />
                                    ● <b>Franchise or training opportunities </b>
                                    <br />
                                    ● <b>Multi-level marketing positions </b>
                                    <br />
                                    <br />
                                    CADnaukri is very sensitive towards the use of its platform for posting of job advertisements as per its standards from the hiring company. Listings that prove misleading, compromise the job seeker experience or those which we are not convinced represent a “real” job may be made only selectively visible or removed from organic search results altogether. 
                                     <br />
                                     </span>
                                     <br />
                                     <br />
                                   <span style=''> <b>Important: </b></span>
                                   <br />
                                   <br />
                                   <span style=''>
                                   CADnaukri may reject or remove any job and may disable any 
                                    company’s account, for any or no reason. We cannot give every reason why a 
                                    job or a company may be removed, and we always retain the right to undertake such the removal of any job, organic or sponsored, if we feel it is in our interest or our users’ interest.  
                                     
                                    </span>


                                </p>
                                <p>If you have any questions about these guidelines and how they affect your recruiting 
                                    needs, please write to HR@CADNAUKRI.COM </p>
                                <p> </p>
                                <p>Thanks for choosing CADnaukri</p>
                                <p>CADnaukri Team.</p>
                                <p>
                                    Our mailing address is:<br />
                                    C/o Softcad Infotech Solutions LLP,<br >
                                    2nd Floor, OCAC Tower<br />
                                    Acharya Vihar Square, Bhubaneswar - 751013
                                </p>
                             </td>
                            </tr>
                            <tr>
                            <td>
                            <div align='center' style='font-size:12px; margin-top:20px; padding:5px; width:100%; background:#eee;'>
                                © 2017 <a href='http://www.cadnaukri.com' target='_blank' style='color:#333; text-decoration: none;'>cadnaukri.com</a>
                            </div>
                        </td>
                        </tr>
                    </table>
                </div>
              
                

                     ");

                $this->email->send();
                redirect(base_url()."jobadmin/get_job/P");
            }
            else
            {
                echo "Set Pending Failed";
            }
        }
        else if($approval == 'N')
        {
            $this->load->library('email');

            $this->email->set_mailtype("html");

            $this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
            $this->email->to($emp_email);
            $this->email->subject("Your Job Post Is Rejected");

            
            $this->email->message("
                
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
            <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
            <link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
            <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


            <div style='font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;'>
            <table style='width: 100%;'>
              <tr>
                <td></td>
                <td bgcolor='#FFFFFF'>
                  <div style='padding: 15px; max-width: 600px;margin: 0 auto;display: block; border-radius: 0px;padding: 0px; border: 1px solid #0055a5;'>
                    <table style='width: 100%;background: #f0f1fa ;'>
                      <tr>
                        <td></td>
                        <td>
                          <div>
                            <table width='100%'>
                              <tr>
                                <td rowspan='2' style='text-align:center;padding:10px;'>
                                  <a href='http://www.cadnaukri.com'>  <img style='float:left;height:40%;width:40%;'  src='http://cadnaukri.com/assets/images/logoemail.png' alt='Cadnaukri.com' /> </a>
                                    
                                    <span style='color:orange;float:right;font-size: 13px;font-style: italic;margin-top: 20px; padding:10px; font-size: 14px; font-weight:normal;'>
                                    'Oops! Sorry '<span></span></span></td>
                              </tr>
                            </table>
                          </div>
                        </td>
                        <td></td>
                      </tr>
                    </table>
                    <table style='padding: 10px;font-size:14px; width:100%;'>
                        <tr>
                        <td style='padding:10px;font-size:14px; width:100%;'>
                            <p>Hi ".$emp_name."</p>
                            <p style='color:red;'><br /> Your job has been rejected </p>
                            <p> If you have any questions about these guidelines and how they affect your recruiting 
                                needs, please write to HR@CADNAUKRI.COM </p>
                            <p> </p>
                            <p>Thanks for choosing CADnaukri</p>
                            <p>CADnaukri Team.</p>
                         </td>
                        </tr>
                        <tr>
                        <td>
                        <div align='center' style='font-size:12px; margin-top:20px; padding:5px; width:100%; background:#eee;'>
                            © 2017 <a href='http://www.cadnaukri.com' target='_blank' style='color:#333; text-decoration: none;'>CADnaukri.com</a>
                        </div>
                    </td>
                    </tr>
                </table>
            </div>
          
            

                 ");

            $this->email->send();
            redirect(base_url()."jobadmin/get_job/R");
        }

    }
    public function requested_modify()
    {
        $this->session->set_flashdata('Requested', 'Requested');
        $this->job_admin();
    }
    public function job_approved()
    {
        $this->session->set_flashdata('Requested', 'Approved');
        $this->job_admin();
    }
    public function job_rejected()
    {
        $this->session->set_flashdata('Rejected', 'Rejected');
        $this->job_admin();
    }
    public function delete_job($job_id)
    {
        $deleted=$this->Job_admin_m->delete_job($job_id);
        if($deleed == true)
        {
            //$this->session->set_flashdata('success', 'deleted');
            redirect(base_url()."jobadmin/job_deleted");
        }
        else
        {
            //$this->session->set_flashdata('error', 'Not Deleted');
            redirect(base_url()."jobadmin/job_deleted");
        }
    }

    public function requestmodify()
    {
        $this->load->library('email');

            $this->email->set_mailtype("html");

            $this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
            $this->email->to('trupti@softcadinfotech.in');
            //$this->email->bcc('shaktiprasad.dash@softcadinfotech.in');
            $this->email->subject("Request Modification");

            
            $this->email->message("
                
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
            <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
            <link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
            <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


            <div style='font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;'>
            <table style='width: 100%;'>
              <tr>
                <td></td>
                <td bgcolor='#FFFFFF'>
                  <div style='padding: 15px; max-width: 600px;margin: 0 auto;display: block; border-radius: 0px;padding: 0px; border: 1px solid #0055a5;'>
                    <table style='width: 100%;background: #f0f1fa ;'>
                      <tr>
                        <td></td>
                        <td>
                          <div>
                            <table width='100%'>
                              <tr>
                                <td rowspan='2' style='text-align:center;padding:10px;'>
                                  <a href='http://www.cadnaukri.com'>  <img style='float:left;height:40%;width:40%;'  src='http://cadnaukri.com/assets/images/logoemail.png' alt='Cadnaukri.com' /> </a>
                                    
                                    <span style='color:orange;float:right;font-size: 13px;font-style: italic;margin-top: 20px; padding:10px; font-size: 14px; font-weight:normal;'>
                                    'Social Login'<span></span></span></td>
                              </tr>
                            </table>
                          </div>
                        </td>
                        <td></td>
                      </tr>
                    </table>
                    <table style='padding: 10px;font-size:14px; width:100%;'>
                        <tr>
                            <td style='padding:10px;font-size:14px; width:100%;'>
                                <p>Hi ".$emp_name."</p>
                                <p style=''>
                                    <table width='100%'>
                                  <tr>
                            <td rowspan='2' style='text-align:left;padding:0px;height:40%;'>
                              
                            </td>
                        </tr>
                    </table>
                                <div><b>Job Posting Guidelines</b></div>
                                <br >
                               <span style='font-size:12px;'> Please follow the CADnaukri job posting guidelines and make the most exhibiting advertisement through our exclusive services at industry’s best ever pricing. 
                                <br /> 
                                We suggest you to develop the content of the advertisement in a very consistent manner that matches the optimal standards of CADnaukri’s ideal practices specified for recruiters. Please note that the following is a guide to make your job posts look better 
                                and consistent in terms of industry standards only. </span>
                                <br />
                                <br />
                                <h4>Job Titles and Descriptions <br /></h4>
                                <br />
                                <span style=''>
                                ● <b>No offensive content.</b> Due diligence is necessary while creating a job post.Offensive or inappropriate content shall be out-rightly rejected without a second chance for modification. 
                                <br />
                                <br />
                                ● No clickbait in job titles or in description. Job titles should be the actual name of the particular job opening only, with no other information allowed such as LOCATIONS or EMAIL IDs or WEBLINKS, etc. Job descriptions must contain only details of exact roles & responsibilities for the candidates with their exact skills & expertise. 
                                <br />
                                <br />
                                ● Salary/Compensation. There should be clear information of the salary or 
                                cost to company in Indian Rupees per annum. Negotiable salary advertisements do not attract good candidates. Plus the compensation must match that of the industry and the location of the job. 
                                <br />
                                <br />
                                ● Skills. Use the field provided to list all the key skills like CATIA, CREO, HYPERMESH, etc. for a better visibility and search performance of the job advertisement. 
                                <br />
                                <br />
                                ● Job Location. Exact location of job is required. No address details should be mentioned. Use the location field to specify the same. 
                                <br />
                                <br />
                                ● Eligibility. A perfectly detailed advertisement is clear for the candidates to apply. Jargon information wastes everyone’s time including our databases. Therefore, do  not forget to fill this field with exact qualification necessary to apply for the job. 
                                <br />
                                <br />
                                ● Experience. Do not leave the field marked experience empty as most job 
                                    seekers prefer job opportunities that exactly match their own experience levels having a better salary package. 
                                <br />
                                <br />
                                ● Don’t copy used job contents. CADnaukri allows only uniquely prepared 
                                job contents as it always performs better on popular search engines. 
                                <br />
                                <br />
                                ● Don’t post on behalf of others. Job posts other than that of yours are 
                                rejected by CADnaukri. Advertisements by only authorized representative(s) of the company are allowed to post their vacancies. If any post found to be ineligible shall be removed from the listing without notice. 
                                <br />
                                <br />
                                ● Post only a real job. CADnaukri allows only jobs that are real. Non-job 
                                content–including spam, scams and other offers–will not be shown to job seekers. 
                                <br />
                                <br />
                                ● Avoid posting of same jobs repeatedly. CADnaukri job portal uses 
                                algorithms as well as human intellect to cross-check freshness of job post, most relevant content in response to searches. Companies that attempt to exploit these principles by reposting roles within a short timeframe or posting roles in more locations than the job is offered for increased visibility will be removed from the listing without prior notice.  
                                </span> 
                                <br />
                                <br />
                                <span style=''>The Do’s and Don’ts</span> 
                                <br />
                                <br />
                                <span style=''>
                                <br />
                                ● Use CADnaukri to fill a genuine job opening. Each posting should 
                                represent the most currently available job in your company. 
                                <br />
                                ● Non-discriminative posts. The advertisements must be made available to 
                                only the eligible & meritorious candidates irrespective of their race, gender and sexual orientation. 
                                <br />
                                ● Clarity in compensation. Advertisements must indicate the actual 
                                cost-to-company for a candidate on an annual basis. There should not be any charges for the candidates to either apply or attend any interview. 
                                <br />
                                ● Follow one step application process. There should not be any tedious 
                                process of application for the job-seekers. Once their application through CADnaukri gets shortlisted, they may be called for interviews. 
                                <br />
                                ● Complete Privacy. CADnaukri believes in cent percent privacy of the 
                                recruiters as well as the candidates. We urge not to disclose this to any 3rd party for eventual misuse. 
                                 <br />
                                ● Tell the truth. Provide the true details of your job, including its location, duties and whether the job is `being offered by the hiring company or by a recruiter on the company’s behalf. 
                                 <br />
                               <span style='' Forbidden posts </span>
                               <span style=''>
                               <br />
                                ● Career fairs 
                                <br />
                                ● Franchise or training opportunities 
                                <br />
                                ● Multi-level marketing positions 
                                <br />
                                <br />
                                CADnaukri is very sensitive towards the use of its platform for posting of job advertisements as per its standards from the hiring company. Listings that prove misleading, compromise the job seeker experience or those which we are not convinced represent a “real” job may be made only selectively visible or removed from organic search results altogether. 
                                 <br />
                                 </span>
                                 <br />
                                 <br />
                               <span style=''> Important: </span>
                               <br />
                               <br />
                               <span style=''>
                               CADnaukri may reject or remove any job and may disable any 
                                company’s account, for any or no reason. We cannot give every reason why a 
                                job or a company may be removed, and we always retain the right to undertake such the removal of any job, organic or sponsored, if we feel it is in our interest or our users’ interest.  
                                 
                                </span>


                            </p>
                            <p>If you have any questions about these guidelines and how they affect your recruiting 
                                needs, please write to HR@CADNAUKRI.COM </p>
                            <p> </p>
                            <p>Thanks for choosing CADnaukri</p>
                            <p>CADnaukri Team.</p>
                         </td>
                        </tr>
                        <tr>
                        <td>
                        <div align='center' style='font-size:12px; margin-top:20px; padding:5px; width:100%; background:#eee;'>
                            © 2017 <a href='http://www.cadnaukri.com' target='_blank' style='color:#333; text-decoration: none;'>cadnaukri.com</a>
                        </div>
                    </td>
                    </tr>
                </table>
            </div>
          
            

                 ");

            $this->email->send();
    }

    public function shootrejectmail()
    {
        $this->load->library('email');

            $this->email->set_mailtype("html");

            $this->email->from('no-reply@cadnaukri.com','CADnaukri | Alerts');
            $this->email->to('cadtestmymail@gmail.com');
            $this->email->subject("Your Job Post Is Rejected");

            
            $this->email->message("
                
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' >
            <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css'>
            <link href='//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css' rel='stylesheet'>
            <link href='//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css' rel='stylesheet'>
            <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>


            <div style='font-family: Helvetica Neue, Helvetica, Helvetica, Arial, sans-serif;'>
            <table style='width: 100%;'>
              <tr>
                <td></td>
                <td bgcolor='#FFFFFF'>
                  <div style='padding: 15px; max-width: 600px;margin: 0 auto;display: block; border-radius: 0px;padding: 0px; border: 1px solid #0055a5;'>
                    <table style='width: 100%;background: #f0f1fa ;'>
                      <tr>
                        <td></td>
                        <td>
                          <div>
                            <table width='100%'>
                              <tr>
                                <td rowspan='2' style='text-align:center;padding:10px;'>
                                  <a href='http://www.cadnaukri.com'>  <img style='float:left;height:40%;width:40%;'  src='http://cadnaukri.com/assets/images/logoemail.png' alt='Cadnaukri.com' /> </a>
                                    
                                    <span style='color:orange;float:right;font-size: 13px;font-style: italic;margin-top: 20px; padding:10px; font-size: 14px; font-weight:normal;'>
                                    'Oops! Sorry '<span></span></span></td>
                              </tr>
                            </table>
                          </div>
                        </td>
                        <td></td>
                      </tr>
                    </table>
                    <table style='padding: 10px;font-size:14px; width:100%;'>
                        <tr>
                        <td style='padding:10px;font-size:14px; width:100%;'>
                            <p>Hi ".$emp_name."</p>
                            <p style='color:red;'><br /> Your job has been rejected </p>
                            <p> If you have any questions about these guidelines and how they affect your recruiting 
                                needs, please write to HR@CADNAUKRI.COM </p>
                            <p> </p>
                            <p>Thanks for choosing CADnaukri</p>
                            <p>CADnaukri Team.</p>
                         </td>
                        </tr>
                        <tr>
                        <td>
                        <div align='center' style='font-size:12px; margin-top:20px; padding:5px; width:100%; background:#eee;'>
                            © 2017 <a href='http://www.cadnaukri.com' target='_blank' style='color:#333; text-decoration: none;'>CADnaukri.com</a>
                        </div>
                    </td>
                    </tr>
                </table>
            </div>
          
            

                 ");

            $this->email->send();
    }  


}

?>