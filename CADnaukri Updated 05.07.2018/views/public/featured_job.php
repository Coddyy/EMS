 

 <style>
 	.tab-button
 	{
		width:94%;
		background-color: none;
		min-height: 80px;
	}
	.tab_link
	{
		color: rgb(255, 255, 255);
	}
  a:hover{text-decoration: none;}
  .h3titel{color:#fff;background-color: #FF7900; width: 110%;height: 31px;font-weight:none;font-family:calibri;padding: 5px;border-radius: 2px;text-align: left;}
                        .h3titel:hover{background-color: #0055A5;color:#fff;}

                        @media screen and (max-width: 768px){
                          .h3titel{font-size: 14px;padding: 7px;min-width: 140%;border: 0px solid green;margin-left: -5px;}
                        }
 </style>
<title>CADnaukri.com | Job Search | Job Posting | CAD | CAM | CAE | CFD | BIM | PLM Jobs</title>
 <div class="main-container">
    	
        <section class="light-grey">
        	<section class="section ">
            	<div class="container">
              <!--   <br /> -->
                    <div class="job-container">
                            <h2 class="title"><!-- <span></span> -->Featured Jobs</h2><hr>
                            <div class="job-list">
                            <?php
                            if($this->session->flashdata('job_appply_success')){
                               $succesmsg = $this->session->flashdata('job_appply_success');?>
                               <div class="alert alert-success  col-md-12 alert-dismissible fade in" role="alert"><?php echo $succesmsg;?></div>
                               <br/>
                               <?php } ?>
                                <ul>
                                <?php 
                                if($featured_jobs)
                                {
                                    foreach($featured_jobs as $fj)
                                    {
                                        $jobtitle=$fj->jobtitle;
                                            $job_title=str_replace(' ', '-', $fj->jobtitle);
                                            $location=str_replace(' ', '-', $fj->location);
                                            $designation=str_replace(' ', '-', $fj->designation);
                                            //$url=base_url('best_design_jobs/signle_search/'.$fj->id).'"><h5>'.$fj->jobtitle;
                                            $url='Job-Opening-'.$job_title.'-'.$location.'/'.$designation.'/id='.$fj->id;
                                        
                                        echo '<li>
                                            <div class="job-list-inner">
                                            <div class="job-list-title">
                                                <a href="'.base_url($url).'"><h4 class="h3titel" style="">'.$fj->jobtitle.'</h4></a>
                                                <p style="color:black;font-size:14px;">'.$fj->designation.' <br> Last Date '.date("jS F, Y", strtotime($fj->lastdate)).'</p>';?>
                                                
                                                
                                                 <?php
                                                 $job_id=$fj->id;
                                                if($this->session->userdata('candidate_id'))
                                                {
                                                    $candidate_id=$this->session->userdata('candidate_id');
                                                    $check_applied=$this->Job_apply_M->get_by(
                                                    array('job_id'=>$job_id,
                                                    'user_id'=>$candidate_id));
                                                    //$url=base_url("candidate/job_apply/$job_id");
                                                    if(count($check_applied) > 0 )
                                                    {
                                                        echo '<button type="button" class="  btn-primary" disabled="disabled" style="position: absolute;top: 0;right: 0;padding: 7px 30px;">Already Applied</button>';
                                                        //echo '<a class="button btn-disabled" href="#"> </a>';
                                                    }
                                                    else
                                                    {
                                                        echo '<a class="button" href="'.base_url($url).'">View</a>';
                                                    }
                                                    
                                                }
                                                else
                                                {
                                                    
                                                    $url=base_url("candidate/login/best_design_jobs/$job_id");
                                                     echo '<a class="button" href="'.base_url($url).'">View</a>';
                                                }
                                                ?>
                                                
                                              <?php 
                                               echo '
                                            </div>
                                            <div class="job-post-details">
                                                <ul>
                                                    <li ><a href="#" style="color:black;font-size:14px;"><span class="glyphicon glyphicon-briefcase" style="font-size: 16px;color: #FF7900;" title="Exprience"></span>'.$fj->yop.'</a></li>
                                                    <li ><a href="#" style="color:black;font-size:14px;"><span class="glyphicon glyphicon-map-marker" style="font-size: 16px;color: #FF7900;" title="Location"></span>'.$fj->location.'</a></li>
                                                    <li ><a href="#" style="color:black;font-size:14px;"><span></span> Posted Date '.date("jS F, Y", strtotime($fj->created)).'</a></li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                      </li>';
                                    }
                                }
                                ?>
                               
                                </ul>
                            </div>
                      </div>



                	
                </div>
            </section>
        </section>
       </div> 
       
   
     <script>
  $(function() {
    var data =<?php echo json_encode($skills)?>;
   /*  var data = [
            { label: "anders", id: "1", category: "" },
            { label: "andreas", id: "2", category: "" },
            { label: "antal", id: "3", category: "" },
            { label: "annhhx10", id: "4", category: "Products" },
            { label: "annk K12", id: "5", category: "Products" },
            { label: "annttop C13", id: "6", category: "Products" },
            { label: "anders andersson", id: "7", category: "People" },
            { label: "andreas andersson", id: "8", category: "People" },
            { label: "andreas johnson", id: "9", category: "People" }
        ];*/
    $( "#skills" ).autocomplete({
      source: data, select: function(event, ui) {
                  $('#selected_skill').val((ui.item.id));
            }
    });
     var locations =<?php echo json_encode($citis)?>;
    $( "#location" ).autocomplete({
      source: locations, select: function(event, ui) {
               $('#selected_location').val((ui.item.id));
            }
    });
  });
  function form_submit()
  {
  	
  	  $("#search_form").submit();
  }
  </script> 