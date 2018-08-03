<?php include('header.php'); ?>


			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url('admin/index/dashboard')?>">Home</a> 
					</li>
					
				</ul>
			</div>
			<div class="sortable row-fluid">
				

				<a data-rel="tooltip"  class="well span3 top-block" href="#">
					<span class="icon32 icon-color icon-user"></span>
					<div>Total No.of Candidates</div>
                                        <?php $result=$this->SuperAdmin_M->countCandidate()?>
					<div><?php echo $result?></div>
                                        <?php $result=$this->SuperAdmin_M->countactiveCandidate()?>
                                        
					<span class="notification green"><?php echo $result?></span>
				</a>

				<a data-rel="tooltip"  class="well span3 top-block" href="#">
					<span class="icon32 icon-color icon-cart"></span>
					<div>Total No.of Employers</div>
					<?php $result=$this->SuperAdmin_M->countEmployee()?>
					<div><?php echo $result?></div>
                                        <?php $result=$this->SuperAdmin_M->countactiveEmployee()?>
                                        
					<span class="notification red"><?php echo $result?></span>
				</a>
				
				<a data-rel="tooltip"  class="well span3 top-block" href="#">
					<span class="icon32 icon-color icon-envelope-closed"></span>
					<div>Total No.of Interns</div>
					<?php $result=$this->SuperAdmin_M->countIntern()?>
					<div><?php echo $result?></div>
                                        <?php $result=$this->SuperAdmin_M->countactiveIntern()?>
                                        
					<span class="notification orange"><?php echo $result?></span>
				</a>
                            <a data-rel="tooltip"  class="well span3 top-block" href="#">
					<span class="icon32 icon-red icon-user"></span>
					<div>New Intenships</div>
					<?php $result=$this->SuperAdmin_M->countInternship()?>
					<div><?php echo $result?></div>
                                        <?php $result=$this->SuperAdmin_M->countactiveInternship()?>
                                        
					<span class="notification yellow"><?php echo $result?></span>
				</a>
			</div>
			
			<div class="row-fluid">
				<div class="box span12">
					<div class="box-header well">
						<h2><i class="icon-info-sign"></i> Introduction</h2>
						
					</div>
					<div class="box-content">
						<h3>CADnaukri.com | India's first CAD CAM job site for the design industry </h3>
						<p>India's Premiere First CAD CAM CAE CFD Job Portal. Search & Apply for Job Vacancies across Top Product Design Companies in India. Compare And Apply For Best 

                                                     Search Now. Post your CV or Resume to find dream Job Now!</p>
						
						
						<p class="center">
							<a href="<?php echo base_url()?>" class="btn btn-large btn-primary" target="_blank"><i class="icon-chevron-right icon-white"></i> Go To Front End</a> 
							
						</p>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
					
			
				

		  
       
<?php include('footer.php'); ?>