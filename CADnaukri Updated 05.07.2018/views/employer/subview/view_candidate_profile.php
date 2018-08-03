<title>Candidate | View Profile</title>
<br><br>

<?php $candidate_id=$this->uri->segment(3); 
        $details=$this->Employee_M->get_candidate_detials($candidate_id);
        $cv_url=base_url($details->cvpath);

?>
<div class="container-fluid well span6">
	<div class="row-fluid">
        <div class="span8">
            <h3><?php echo $details->name;?></h3>
            <h6><?php echo $details->location;?></h6>
            
        </div>
        
        <div class="span2">
            <div class="btn-group">
            <?php if($cv_url != '' || $cv_url != NULL){ ?>
                <a class="btn dropdown-toggle btn-info" data-toggle="dropdown" href="<?php echo $cv_url;?>">
                    Download CV
                </a>
                <?php } else {?>
                    
                    CV Not Available

                <?php } ?>
            </div>
        </div>
</div>
</div>