
<!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/jquery.multiselect.css')?>" />
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.multiselect.js')?>"></script>
<?php if($this->uri->segment(2) == "Register"){ ?>

  <link href="<?php echo base_url()?>assets/superadmin/css/bootstrap-responsive.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/superadmin/css/charisma-app.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/superadmin/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
  <link href='<?php echo base_url()?>assets/superadmin/css/fullcalendar.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/fullcalendar.print.css' rel='stylesheet'  media='print'>
  <link href='<?php echo base_url()?>assets/superadmin/css/chosen.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/uniform.default.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/colorbox.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/jquery.cleditor.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/jquery.noty.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/noty_theme_default.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/elfinder.min.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/elfinder.theme.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/jquery.iphone.toggle.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/opa-icons.css' rel='stylesheet'>
  <link href='<?php echo base_url()?>assets/superadmin/css/uploadify.css' rel='stylesheet'>
        
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/superadmin/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/superadmin/css/dataTables.tableTools.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>


<?php } ?> -->

<!--<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" />-->
<!-- Latest compiled and minified CSS -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>

<title>CAD CAM Schools | Register</title>

<style>
h4{color:#0055A5;}
 .main_width{max-width: 1000px;margin: auto;}
 .imglogo{margin-top: 15px;margin-left: -5px;}
  @media screen and (max-width: 786px){
    .imglogo{margin-top: 0px;}
  }
  .imgbanner{margin-left: -20px;max-width: 105%;height: 100px;}
  @media screen and (max-width: 768px){
  .imgbanner{margin-left: -20px;max-width: 110%;height: 100px;}
  }
	.ms-options-wrap>li
	{
		list-style-type: none;
	}
	.ui-multiselect
	{
		height:38px;
	}
   @media screen and (max-width: 768px){
  .new_logo{text-align: center;}
</style>

<!--Header-->
  <div class="container main_width">
  <div class="row" style="">

    
    <div class="col-md-3 col-xs-12 new_logo">
                        <!-- <div id=""> --><a href="<?php echo base_url();?>" title="www.cadnaukri.com">
                          <!-- <img src="<?php echo base_url()?>assets/images/img/Logo-1-min.jpg" alt="CADnaukri" class="logonew"></a> -->
                          <img src="<?php echo base_url()?>assets/sam/logo/CADnaukri-logo_119W-x-85H.png" alt="CADnaukri" class="" align="center" title="CADnaukri" style="margin-top: 3px;"></a>

                        <!-- </div> -->   
                    </div>
    <div class="col-md-9 col-xs-12" title="CADnaukri.com" style="border:0px solid red;"><img src="<?php echo base_url()?>assets/images/img/96_720_2-min.png" alt="CADnaukri" class="imgbanner" style="">
    </div>
  </div>
</div><!--End of container header-->

<!--Header-->
<div class="container-fluid header" id="myheader">
  <div class="row" style="background-color: #FF7900;margin: ;">
    <div class="container" style="text-align: center;max-width: 1000px;border:0px solid red;padding: 0 -10px;" align="center">
      <div class="topnav" id="myTopnav" align="center">
          <a style="background-color: transparent; color: #fff;">Browse jobs <span style="font-weight: bold;">↔</span> </a>
          <a href="<?php echo base_url();?>best_design_jobs/search" style="text-transform: capitalize;">All jobs</a>
          <a href="<?php echo base_url();?>CAD-Jobs" style="text-transform: capitalize;">Cad jobs</a>
          <a href="<?php echo base_url();?>CAE-Jobs" style="text-transform: capitalize;">Cae jobs</a>
          <a href="<?php echo base_url();?>CFD-Jobs" style="text-transform: capitalize;">Cfd jobs</a>
          <a href="<?php echo base_url();?>BIM-Jobs" style="text-transform: capitalize;">Bim jobs</a>
          <a href="<?php echo base_url();?>PLM-Jobs" style="text-transform: capitalize;">Plm jobs</a>
          <a href="<?php echo base_url();?>CAD-Sales-Jobs" style="text-transform: capitalize;">Cad sales jobs</a>
          <a href="<?php echo base_url();?>CAD-Developer-Jobs" style="text-transform: capitalize;">Cad programming jobs</a>
          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>
    </div>
  </div>
</div>

<br>
<style>
.reg{background:#FF7900;padding:;display: block;font-size:15px;height: 40px;width: 30%;}
                             .reg:hover{background:#0055A5;font-size: 17px;}

                             .log{background:#0055A5;padding:;display: block;font-size:15px;height: 40px;width: 30%;}
                             .log:hover{background:#FF7900;font-size: 17px;}



        body {margin:0;}

        .topnav {
          overflow: hidden;
          background-color: #FF7900;
        }

        .topnav a {
          float: left;
          display: block;
          color: #fff;
          text-align: center;
          padding: 5px 16px;
          text-decoration: none;
          font-size: 14px;
        }

        .topnav a:hover {
          background-color: #0055A5;
          color: #fff;
        }

        .active {
          background-color: #0055A5;
          color: #fff;
        }

        .topnav .icon {
          display: none;
        }

        @media screen and (max-width: 768px) {
          .topnav a:not(:first-child) {display: none;}
          .topnav a.icon {
            float: right;
            display: block;
          }
        }

        @media screen and (max-width: 768px) {
          .topnav.responsive {position: relative;}
          .topnav.responsive .icon {
            position: absolute;
            right: 0;
            top: 0;
          }
          .topnav.responsive a {
            float: none;
            display: block;
            text-align: center;
          }

        }
  </style>
<!--End of Header style-->

<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
<style type="text/css">
  .reg_style1{text-align: center;width:80%;margin-right: 10%;margin-left: 10%;color: #0055A5;border-bottom:5px solid #FF7900;}
  .reg_style2{width:70%;margin-right: 15%;margin-left: 15%;margin-top: 0%;margin-bottom: 10%;}
  .mobile{display: none;}
  .desktop{border: 0px solid red;}
 /* .btn_style{background-color:#0055A5;width: 150px;padding: 5px;}*/
  .heading_style{width:70%;margin-right: 15%;margin-left: 15%;margin-top: 10%;margin-bottom: 8%;}
  .reg1{background:#FF7900;padding:2px;display: block;font-size:14px;height: 40px;width: 30%;}
  .reg1:hover{background:#0055A5; font-size: 16px;}
  .log1{background:#0055A5;padding:2px;display: block;font-size:14px;height: 40px;width: 30%;}
  .log1:hover{background:#FF7900; font-size: 16px;}

    @media screen and (max-width: 768px){
                              .reg1{font-size: 14px;width: 100%;}
                              .reg:hover{background:#0055A5;font-size: 15px;}
                              .log1{font-size: 14px;width: 100%;}
                              .log:hover{background:#FF7900;font-size: 15px;}
                             }
  @media screen and (max-width: 768px){
    .reg_style1{text-align: center;width:100%;margin:0 0;font-size: 16px;}
  .reg_style2{width:90%;margin:10% 5%;font-size: 8px;}
  .desktop{display: none;}
  .mobile{display: inline-block;}
  .heading_style{font-size: 18px;width: 100%;margin-top: 20px;margin-bottom: -30px;}
  }
</style>
<!--Header Ends-->
<?php if($this->uri->segment(2) == "Registered")
{ ?>
<div class="container" align="center" style="border: 0px solid red;height: auto;max-width: 1000px;">
  <div class="row" align="center">
    <div class="col-md-6 col-xs-6 "><button class="btn btn-primary reg1">Back to Homepage</button> </div>
    
    
    <div class="col-md-6 col-xs-6 "><button class="btn btn-primary log1">Back to Listing</button></div><br>

<p class="h3 heading_style " style="text-align: center;">Thank you for submitting your company</p>
    <!-- <center>
      <div class="col-xs-6 mobile"><button class="btn btn-primary reg1">Back to Homepage</button> </div>
     <div class="col-xs-6 mobile" style="overflow: hidden;"><button class="btn btn-primary log1">Back to Listing</button></div>
  </center> -->
    <div class="alert alert-success reg_style2" align="center" style="border: 1px solid green;">

      <p class="h5 reg_style1" style="border: 0px solid red;">It may take upto 72 hrs to get updated in our database</p>
    <br /><div class="spinner spinner-4"></div>
    </div>
    
  <!-- ================= -->
<style type="text/css">
      .spinner {
        width: 50px;
        height: 50px;
        background: none;
        border-radius: 50%;
        position: relative;
        margin: 0px;
        display: inline-block;
      }
      .spinner:after, .spinner:before {
        content: "";
        display: block;
        width: 50px;
        height: 50px;
        border-radius: 50%;
      }
      .spinner-4:before, .spinner-4:after {border:2px solid red;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-top: -25px;
        margin-left: -25px;
        background: greenyellow;
        -webkit-animation: pulse 3s linear infinite;
                animation: pulse 3s linear infinite;
        opacity: 0;
      }
      .spinner-4:after {
        -webkit-animation: pulse 2s linear 2.3s infinite;
                animation: pulse 2s linear 2.3s infinite;
      }

      @-webkit-keyframes pulse {
        0% {
          -webkit-transform: scale(0);
                  transform: scale(0);
          opacity: 1;
        }
        100% {
          -webkit-transform: scale(1.3);
                  transform: scale(1.3);
          opacity: 0;
        }
      }

      @keyframes pulse {
        0% {
          -webkit-transform: scale(0);
                  transform: scale(0);
          opacity: 1;
        }
        100% {
          -webkit-transform: scale(1.3);
                  transform: scale(1.3);
          opacity: 0;
        }
      }
</style>
  <!-- ================= -->

    <?php }else if($this->uri->segment(2) == "not_saved"){ ?>
    <div class="alert alert-danger" align="center">
      School not saved!
    </div>
  </div>

</div>
<?php } else {?>
<div class="container-fluid" align="">
  <div class="container" style="max-width: 1000px;">
    <div class="row-fluid sortable">
    <div class="box span12">
				<div class="box-header well" data-original-title>
            <h4 align="center" style="text-transform: uppercase;"><i class="icon-edit"></i>Advertise your company <i style="font-size: 12px; color:black;">(freemium listing !)</i></h4>
				</div><br>
        <div class="box-content">
              <?php
		        if($this->session->flashdata('msg2'))
		          {
			         $succesapply = $this->session->flashdata('msg2');?>

    			 <div class="alert alert-success">
    		      <button type="button" class="close" data-dismiss="alert">×</button>
    				  <strong>Well done!</strong> <?php echo $succesapply ?>
    			</div>
    		      <?php }else if($this->session->flashdata('msgdelete'))
              {
               $succesdelete = $this->session->flashdata('msgdelete');?>

           <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <?php echo $succesdelete ?>
          </div>
              <?php } ?>
                               
           <form  name="registration" action=""  method="post"   enctype="multipart/form-data">			
				    <div><h4>Company Introduction</h4></div>
                                     <hr />

                            <div class="clear"></div>
                           <div class="control-group">    
                             <label for="exampleInputName2" class="span4 control-label">Company Name<span style="color:red;">*</span></label>  
                                <div class="controls">            
                                    <input type="text" class="input-xlarge form-control span8" id="companyname" onclick="showbox()" name="companyname" placeholder="Company Name"  value="<?php echo $sponors->companyname?>" required="">  
                                    <div id="errfncn" class="error"></div>    
                                </div>        
                            </div>


                                      <div class="control-group">		
                                      <label for="exampleInputName2" class="span4 control-label">Category<span style="color:red;">*</span> </label>
                                       <div class="controls  ">	
	                                   <select class="input-xlarge  form-control span8" onchange="showbox()" id="selectError1" name="category" required="">
                                     <?php if($sponors->category !=''){
                                              if($sponors->category == "Training"){
                                                $category="Training Institute";
                                              }
                                              else if($sponors->category == "EnggServices"){
                                                $category="Engg. Services Company";
                                              }
                                              else if($sponors->category == "Both"){
                                                $category="Training & CAD Consulting";
                                              }

                                      ?>
                                         <option value="<?php echo $category; ?>" ><?php echo $category; ?></option>
                                         <option value="Training" > Training Institute</option>
                                         <option value="EnggServices" > Engg. Services Company</option>
                                         <option value="Both" > Training & CAD Consulting</option>
                                      <?php } else { ?>
                                      <option value="0" > Select Category</option>
                  										   <option value="Training" > Training Institute</option>
                  										   <option value="EnggServices" > Engg. Services Company</option>
                                         <option value="Both" > Training & CAD Consulting</option>
                                         <?php } ?>
                										  </select>
                                          	
                                        </div>	
                                       			
                                   </div>
                            
                                   <?php $year=date('Y'); ?>
                                   <div class="control-group">    
                                      <label for="exampleInputName2" class="span4 control-label">Year Estd.<span style="color:red;">*</span></label>
                                       <div class="controls ">  
                                         <select name="year_of_est" id="model-list" class="input-xlarge  form-control span8"  required>
                                         <?php if($sponors->year_of_est != ""){ ?>
                                         <option value="<?php echo $sponors->year_of_est;?>"><?php echo $sponors->year_of_est;?></option> 
                                         <?php for($i=$year;$i>=1980;$i--){?>
                                            
                                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                            <?php } } else { ?>
                                            <?php for($i=$year;$i>=1980;$i--){?>
                                            
                                            <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                            <?php } } ?>
                                        </select>    
                                                <div id="errfn" class="error"></div>    
                                        </div>          
                                   </div>
                                 
                                  <!-- <div class="control-group">		
                                      <label for="exampleInputName2" class="span4 control-label">Name Of institute</label>
                                       <div class="controls ">	
                                         <input type="text" class="input-xlarge form-control span8" id="institute" name="institute" size="50"  placeholder="Name Of Institute" value="<?php echo $sponors->institution?>" required="">		
                                                <div id="errfn" class="error"></div>		
                                        </div>					
                                   </div> -->
			                   <div class="control-group">
								   <label class="span4 control-label">Company Logo</label>
									<div class="controls">
							      		    <input type="file" name="fileToUpload"   class="input-xlarge form-control span8" >
			                       	</div>
                          <p class="isa_warning" style="color:orange;">Image size W-150 * H-65</p>
						        </div>
                         <div class="control-group">
          <label class="span4 control-label" for="textarea2">Company Profile</label>
        <div class="controls ">
          <textarea class="cleditor input-xlarge  form-control span8" placeholder="Upto 60 characters" name="description" id="textarea2" rows="3"><?php echo $sponors->description?></textarea>
        </div>
      </div><hr>
                         	<div>  <h4>Contact Details</h4>     </div>
                          
                          <div class="control-group">
                                <label for="exampleInputName2" class="span4 control-label">Contact Person<span style="color:red;">*</span></label>         
                                <div class="controls">
                                  <input type="text" class="input-xlarge form-control span8" id="contact_person" name="contact_person" placeholder="Contact Person Name" value="<?php echo $sponors->contact_person?>" required="">  
                                    <div id="errfnad" class="error"></div>  
                                </div>    
                            </div>
                            <div class="control-group">     
                                <label for="inputEmail3" class="span4 control-label">Email<span style="color:red;">*</span></label>  
                                <div class="controls">        
                                     <input type="email" class=" input-xlarge form-control span8" id="email" name="email" size="50" onblur="ValidateEmail()" placeholder="Email" value="<?php echo $sponors->email?>" required>
                                    <div id="errfne" class="error"></div>           
                                  <?php echo form_error('email', '<div class="error">', '</div>'); ?>     
                                </div>        
                            </div>
                          <div class="control-group">   
                                <label for="exampleInputName2" class="span4 control-label">Mobile<span style="color:red;">*</span></label>  
                                <div class="controls">  
                                    <input type="tel" onkeyup = "validate_number(this)" class="input-xlarge  form-control span8" id="mobile" name="mobile"  placeholder="e.g. 8895679043"  value="<?php echo $sponors->mobile?>" required  />
             <?php echo form_error('mobile', '<div class="error">', '</div>'); ?> 
                                </div>         
                            </div><hr />
                            <h4>Company Details</h4>     
                          
                          <div class="control-group">
                                <label for="exampleInputName2" class="input-xlarge span4 control-label">Address<span style="color:red;">*</span></label>					
                                <div class="controls">
                                  <textarea maxlength="140" class="cleditor input-xlarge span8 form-control" rows="3" id="add" placeholder="Enter address" name="address" required><?php echo $sponors->location?>
                                  </textarea>	
                                    <div id="errfnad" class="error"></div>	
                                </div>		
                            </div>	
                              <div class="control-group">
                                <label for="exampleInputName2" class="span4 control-label">City/Town<span style="color:red;">*</span></label>					
                                <div class="controls">
                                  <input type="text" class="input-xlarge form-control span8" id="city" name="city"  placeholder="City/Town" value="<?php echo $sponors->city?>" required="">	
                                    <div id="errfnad" class="error"></div>	
                                </div>		
                            </div>
                              <div class="control-group">
                                <label for="exampleInputName2" class="span4 control-label">State<span style="color:red;">*</span></label>					
	                                <div class="controls">
	                                   <select  name="state"   class=" input-xlarge form-control span8" required="">
                                     <?php if($sponors->state != ""){ ?>
                                     <option value="<?php echo $sponors->state;?>"><?php echo $sponors->state;?></option>
                                   <?php } else { ?>
	                                   	  <?php 
	                                   	    foreach($states as $s)
	                                   	    {
	                                   	    	$is_select=($s->state_id==$sponors->state?'selected':'');
                    												echo '<option value="'.$s->state_name.'" '.$is_select.'>'.$s->state_name.'</option>';
                    											} }
	                                   	  ?>
	                                   	  </select>
	                                </div>		
                            </div>
                            <div class="control-group">
                                <label for="exampleInputName2" class="span4 control-label">Pincode<span style="color:red;">*</span></label>          
                                <div class="controls">
                                  <input type="text" class="input-xlarge form-control span8" id="city" name="pincode"  placeholder="Pincode" value="<?php echo $sponors->pincode?>" required=""> 
                                    <div id="errfnad" class="error"></div>  
                                </div>    
                            </div>
                            <div class="control-group">   
                                <label for="exampleInputName2" class="span4 control-label">Website</label>  
                                <div class="controls">          
                                    <input type="text" class="input-xlarge  form-control span8" id="website"  name="website" size="50"  placeholder="e.g.www.instituion.com" value="<?php echo $sponors->website?>">  
                                    <div id="errfnpl" class="error"></div>        
                                </div>      
                            </div>
                            <div class="control-group">			
                                <label for="inputEmail3" class="span4 control-label">Company Email<span style="color:red;">*</span></label>	
                                <div class="controls">				
                                     <input type="email" class=" input-xlarge form-control span8" id="email" name="cemail" size="50" onblur="ValidateEmail()" placeholder="Email" value="<?php echo $sponors->email?>" required>
                                    <div id="errfne" class="error"></div>					 	
                                  <?php echo form_error('email', '<div class="error">', '</div>'); ?>			
                                </div>				
                            </div>
                            <div class="control-group">   
                                <label for="exampleInputName2" class="span4 control-label">Company Mobile<span style="color:red;">*</span></label>  
                                <div class="controls">  
                                    <input type="tel" onkeyup = "validate_number(this)" class="input-xlarge  form-control span8" id="mobile" name="cmobile"  placeholder="e.g. 8895679043"  value="<?php echo $sponors->cmobile?>"  required />
             <?php echo form_error('mobile', '<div class="error">', '</div>'); ?> 
                                </div>         
                            </div>
                              <div class="control-group">			
                                <label for="inputEmail3" class="span4 control-label">Landline </label>	
                                <div class="controls">				
                                     <input type="number" onkeyup = "validate_number(this)" class=" input-xlarge form-control span8" id="phno" name="phno" size="50"  placeholder="Contact Number" value="<?php echo $sponors->phno?>">
                                    <div id="errfne" class="error"></div>					 	
                                  <?php echo form_error('email', '<div class="error">', '</div>'); ?>			
                                </div>				
                            </div>	
                           	
   <?php if($sponors->category != ""){ ?> 
<!-- ############## SHOW HIDE DIV ################ -->

        <!--******* Training Box *******-->

        <div id="trainingbox" style="display:none">  

          <div> <h4>Software Courses</h4> </div>
          <hr />       
            <div class="control-group">
              <label class="span4 control-label" for="selectError1">Course Offered<span style="color:red;">*</span></label>
                 <div class="controls">
                 <input type="text" class="input-xlarge  form-control span8" onkeyup = "validate_content(this)" id="course" placeholder="Example:- Autocad ; Catia ; Creo" value="<?php echo $sponors->course?>" name="course" required>
                   
                  
            </div>
            </div>

            <div>  <h4>Affiliations & Certifications</h4>     </div>
             <hr /> 
            <div class="control-group"> 
                  <label for="exampleInputName2" class="span4 control-label">Certifying Agencies</label>  
                      <div class="controls">      
                                    <input type="text" class="input-xlarge  form-control span8" id="certification" value="<?php echo $sponors->certification;?>" name="certification" onkeyup = "validate_content(this)" placeholder="Certifying Body Eg: Autodesk ; PTC University ; etc" >  
                                    <div id="errfnrd" class="error"></div>
                     </div>   
            </div>        
            <div class="control-group">  
                  <label for="exampleInputName2" class="span4 control-label">University Affiliations</label>  
                    <div class="controls">      
                                    <input type="text" class="input-xlarge  form-control span8" id="certification" name="affiliation" value="<?php echo $sponors->affiliation;?>" onkeyup = "validate_content(this)" placeholder="Universities Eg: KIIT University ; AICTE ; etc" >  
                                    <div id="errfnrd" class="error"></div>
                    </div>   
            </div>
        </div><!--******* End Training Box *******-->

          <!--******* Service Box *******-->

          <div id="servicebox" style="display:none">  
            <div>  <h4>Services</h4>     </div>
             <hr /> 
             <div class="control-group">  
                  <label for="exampleInputName2" class="span4 control-label">Consultency Services</label>  
                      <div class="controls">      
                        <input type="text" class="input-xlarge  form-control span8" id="certification" name="service" value="<?php echo $sponors->service;?>" onkeyup = "validate_content(this)" placeholder="Services Eg: Service 1 ; Service 2 ; etc" >  
                        <div id="errfnrd" class="error"></div>
                     </div> 
                </div>
          </div> <!--******* End Service Box *******-->
<!-- ############## END SHOW HIDE DIV ################ -->

   <?php }else { ?>                            
                            
  <!-- ############## SHOW HIDE DIV ################ -->

        <!--******* Training Box *******-->

        <div id="trainingbox" style="display:none">  

          <div> <h4>Software Courses</h4> </div>
          <hr />       
            <div class="control-group">
              <label class="span4 control-label" for="selectError1">Course Offered<span style="color:red;">*</span></label>
                 <div class="controls">
                 <input type="text" class="input-xlarge  form-control span8" onkeyup = "validate_content(this)" id="course" placeholder="Example:- Autocad ; Catia ; Creo" value="<?php echo $sponors->course?>" name="course" required>
                   
                  
            </div>
            </div>

            <div>  <h4>Affiliations & Certifications</h4>     </div>
             <hr />	
            <div class="control-group">	
                  <label for="exampleInputName2" class="span4 control-label">Certifying Agencies</label>	
                      <div class="controls">			
                                    <input type="text" class="input-xlarge  form-control span8" id="certification" name="certification" onkeyup = "validate_content(this)" placeholder="Certifying Body Eg: Autodesk ; PTC University ; etc" >	
                                    <div id="errfnrd" class="error"></div>
                     </div>		
            </div>				
            <div class="control-group">  
                  <label for="exampleInputName2" class="span4 control-label">University Affiliations</label>  
                    <div class="controls">      
                                    <input type="text" class="input-xlarge  form-control span8" id="certification" name="affiliation" onkeyup = "validate_content(this)" placeholder="Universities Eg: KIIT University ; AICTE ; etc" >  
                                    <div id="errfnrd" class="error"></div>
                    </div>   
            </div>
        </div><!--******* End Training Box *******-->

          <!--******* Service Box *******-->

          <div id="servicebox" style="display:none">  
            <div>  <h4>Services</h4>     </div>
             <hr /> 
             <div class="control-group">  
                  <label for="exampleInputName2" class="span4 control-label">Consultency Services</label>  
                      <div class="controls">      
                        <input type="text" class="input-xlarge  form-control span8" id="certification" name="service" onkeyup = "validate_content(this)" placeholder="Services Eg: Service 1 ; Service 2 ; etc" >  
                        <div id="errfnrd" class="error"></div>
                     </div> 
                </div>
          </div> <!--******* End Service Box *******-->
<!-- ############## END SHOW HIDE DIV ################ -->
             
    <?php } ?>            
            </div>
                            <!-- <div class="control-group" style="border: 1px solid red;"> -->
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6" align="center">
                               	<button type="submit" class="btn btn-primary log">Save</button>
                               </div>
                                <div class="col-lg-6 col-md-6 col-xs-6 col-sm-6" align="center">

                               	<button type="reset" class="btn btn-warning reg">Cancel</button>
							               </div> 
                            </div>
                            <br><br>
					                 <!-- </div> -->
				</fieldset>
				</form>
			  </div>
			</div>
		</div><?php } ?>    <!--End URI segment != Registered-->
  </div>
</div>

<style>
 .news_button{height: 40px; padding: 0px 22px; color: #fff; background: #F60; border: none; border-radius: 3px;}
 #subs_res{padding:10px;color:#F60}
 .sub_error{color: #F60}
 .sub_sucess{color:#0859A8}

.blue-bg, .blue-bg p, .blue-bg li, .blue-bg a {
    color: #bbb;background-color: #1765AD;
}
 li a:hover{color:#fff;}

.parallax2 {
    /* The image used */
    background-image: url("<?php echo base_url()?>assets/images/img/bb.jpg");

    /* Set a specific height */
    min-height: 500px; 

    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
ul.a {list-style-type: none;font-size: 12px;padding: 10px;}

  </style>

<footer>
  <section class="blue-bg" style="border:1px solid yellow;padding: 50px 0px;">
          <section class="section parallex2">
              <div class="container main_width">
                    <div class="container-inner">
                      <div class="blue-category">
                          <div class="row">
                              <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="blue-category-inner" style="">
                                  <h4 style="padding: 0 10px; color: #fff;">Information</h4>
                                        <ul class="a">
                                          <li><a href="<?php echo base_url('index/aboutus')?>">About Us</a></li>
                                            <li><a href="<?php echo base_url('index/terms_and_condition')?>">Terms &amp; Conditions</a></li>
                                            <li><a href="<?php echo base_url('index/privacy_policy')?>">Privacy Policy</a></li>
                                            <li><a href="<?php echo base_url('index/disclaimer')?>">Disclaimer of Warranties and Liabilities</a></li>
                                            <li><a href="<?php echo base_url('index/back_ground_check')?>">Background Check</a></li>
                                            <!--
                                            <li><a href="#">Careers with Us</a></li>
                                            <li><a href="#">Sitemap</a></li>
                                            <li><a href="<?php echo base_url('index/contactus')?>">Contact Us</a></li>
                                            <li><a href="">FAQs</a></li>
                                            <li><a href="#">Summons / Notices</a></li>
                                            <li><a href="#">Grievances</a></li>
                                            <li><a href="#">Fraud Alert</a></li>-->
                                        </ul>
                                </div>
                              </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="blue-category-inner">
                                  <h4 style="padding: 0 10px; color: #fff;">Jobseekers</h4>
                                        <ul class="a">
                                          <li><a href="<?php echo base_url('best_design_jobsfor_job_seeker/for_job_seeker')?>">For Job Seeker</a></li>
                                            <li><a href="<?php echo base_url();?>best_design_jobs/search">Search Jobs</a></li>
                                          
                                          <?php    
                                          if(!($this->session->userdata('candidate_id')) || !($this->session->userdata('emp_id')))
                                           {?>
                                               <li><a href="<?php echo base_url('candidate/Login')?>">Register Now</a></li>
                                            <li><a href="<?php echo base_url('best_design_jobs/search')?>">All Jobs</a></li>
                                            <?php } ?>
                                           <!-- <li><a href="#">Create Job Alert</a></li>
                                            <li><a href="#">Report a Problem</a></li>
                                            <li><a href="#">Blogs</a></li>
                                            <li><a href="#">Security Advice</a></li>
                                            <li><a href="#">Mobile Site</a></li>-->
                                            
                                        </ul>
                                        <!--<h5>Fast Forward</h5>
                                        <ul>
                                            <li><a href="#">Resume Writing</a></li>
                                            <li><a href="#">Profile Enhancement</a></li>
                                            <li><a href="#">Recruiter Reach</a></li>
                                            <li><a href="#">Jobs For You</a></li>                                            
                                            
                                        </ul>-->
                                </div>
                              </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="blue-category-inner">
                                  <h4 style="padding: 0 10px; color: #fff;">Browse Jobs</h4>
                                        <ul class="a">
                                        <!-- <li><a href="<?php echo base_url('best_design_jobs/for_job_seeker')?>">All Design Jobs</a></li>-->
                                         <li><a href="<?php echo base_url();?>CAD-Jobs" > CAD Jobs</a></li>
                                    <li><a href="<?php echo base_url();?>CAE-Jobs">CAE Jobs</a></li>
                                    <li><a href="<?php echo base_url();?>CFD-Jobs" >CFD Jobs</a></li>
                                    <li><a href="<?php echo base_url();?>PLM-Jobs" >PLM Jobs</a></li>
                                    <li><a href="<?php echo base_url();?>BIM-Jobs" >BIM Jobs</a></li>
                                    <li><a href="<?php echo base_url();?>CAD-Sales-Jobs" >CAD Sales Jobs</a></li>
                                    <li><a href="<?php echo base_url();?>CAD-Developer-Jobs">CAD Software Dev. Jobs</a></li>                                         
                                        </ul>
                                </div>
                              </div>
                                <div class="col-xs-6 col-sm-6 col-md-3">
                                <div class="blue-category-inner">
                                  <h4 style="padding: 0 10px; color: #fff;">Employers</h4>
                                        <ul class="a">
                                          <li><a href="<?php echo base_url('best_design_jobsfor_job_seeker/for_corporates_recruiters')?>">For Corporates/Recruiters</a></li>
                                           
                                            <li>Help Line: 8260701701</li>                                            
                                        </ul>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
          </section>
        </section>
        
    
        <section class="wht-bg footer-last" style="background-color:; height:50px;margin-top: 0px;">
          <section class="section"> 
              <div class="container">
                  <div class="container-inner desktop" align="center">
                    &copy; 2015 cadnaukri.com, All rights reserved. <a href="<?php echo base_url('index/disclaimer')?>">Disclaimer</a>  |  <a href="<?php echo base_url('index/privacy_policy')?>">Privacy Policy</a> 
                    <span class="social-div" style="margin-top: -3px">
                      <a href="https://www.facebook.com/CADnaukri" target="_blank" title="https://www.facebook.com/CADnaukri"><img src="<?php echo base_url()?>assets/images/fb-icon.png" alt="" /></a>
                        <a href="https://plus.google.com/u/0/+CADnaukri" target="_blank" title="https://plus.google.com/u/0/+CADnaukri" ><img src="<?php echo base_url()?>assets/images/gp-icon.png" alt="" /></a>
                        <a href="https://twitter.com/cadnaukri" target="_blank" title="https://twitter.com/cadnaukri"><img src="<?php echo base_url()?>assets/images/tw-icon.png" alt="" /></a>
                        <a href="https://www.youtube.com/watch?v=LaKtY29qcyo" target="_blank" title="https://www.youtube.com/watch?v=LaKtY29qcyo"><img src="<?php echo base_url()?>assets/images/yt-icon.png" alt="" /></a>
                    </span>
                    </div>
                     <!--Mobile-->         
                      <div class="container-inner mobile" align="center">
                        &copy; 2015 cadnaukri.com, All rights reserved.<br> <a href="<?php echo base_url('index/disclaimer')?>">Disclaimer</a>  |  <a href="<?php echo base_url('index/privacy_policy')?>">Privacy Policy</a> <br>
                        <span class="social-div" style="margin-top: -3px">
                          <a href="https://www.facebook.com/CADnaukri" target="_blank" title="https://www.facebook.com/CADnaukri"><img src="<?php echo base_url()?>assets/images/fb-icon.png" alt="" /></a>
                           <a href="https://plus.google.com/u/0/+CADnaukri" target="_blank" title="https://plus.google.com/u/0/+CADnaukri" ><img src="<?php echo base_url()?>assets/images/gp-icon.png" alt="" /></a>
                            <a href="https://twitter.com/cadnaukri" target="_blank" title="https://twitter.com/cadnaukri"><img src="<?php echo base_url()?>assets/images/tw-icon.png" alt="" /></a>
                            <a href="https://www.youtube.com/watch?v=LaKtY29qcyo" target="_blank" title="https://www.youtube.com/watch?v=LaKtY29qcyo"><img src="<?php echo base_url()?>assets/images/yt-icon.png" alt="" /></a>
                        </span>
                    </div>

                     <!--Mobile-->
                </div>            
            </section>
        </section>
</footer> 


<script>
function validate_number(num) {
    num.value = num.value.replace(/[^0-9]+/g, '');
}
function validate_content(content) {
  //alert(course);
    content.value = content.value.replace(/[^a-zA-Z0-9;]+/g, '');
}
// $(function(){
//    $("#courses").multiselect({
//    	header: "Choose options below",
//        hide: ["explode", 1000],
//        selectedList: 10 // 0-based index
//    }); 
// });
    function showbox()
    {
      var selectone=document.getElementById("selectError1");
      //alert(selectone.value);
      var training=document.getElementById("trainingbox");
      var service=document.getElementById("servicebox");
      if(selectone.value == "Training"){
        training.style.display ="block";
        service.style.display ="none";
      }
      else if(selectone.value== "EnggServices")
      {
        //alert("Working");
        training.style.display ="none";
        service.style.display ="block";
        
      }
      else if(selectone.value== "Both")
      {
        training.style.display ="block";
        service.style.display = "block";
      }

    }
    </script> 
    <style type="text/css">
      a:hover{text-decoration: none;}
    </style>