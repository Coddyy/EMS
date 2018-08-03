<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<div class="main-container">
        <section class="wht-bg">
        <section class="section">
              <div class="container">
                <div class="container-inner line-sepa-bottom">
                    <div class="row">                        
                        <div class="col-xs-12 col-md-3">
                        <div class="xcolright">
                              <ul class="side-profile">
                              <?php
                //                if($candidate_details->imagePath != '')
                //               {
                //   $profile_image_url=$candidate_details->imagePath;
                //   $add_or_edit='Edit';
                // }
                // else
                // {
                //   $profile_image_url=base_url('assets/images/profile-photo.png');
                //   $add_or_edit='Add';
                // }
                ?>
                     <li class="profile-photo">
                     <a href="<?php //echo base_url('candidate/dashboard')?>" >
                      <img src="<?php echo $profile_image_url?>" alt="" />
                     </a>
                     </li>
                                    <li class="profile-edit"> 
                                    Hi <?php //echo ucwords(strtolower($candidate_details->fName))?></li>
                                </ul>
              
                          <ul class="sidebar">
                            <li><a href="<?php echo base_url();?>dashboard/index" class="active">Profile</a></li>
                                  <li><a href="<?php echo base_url('candidate/profile/personal_details') ?>" >Personal Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/educational_details') ?>">Educational Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/skill_details') ?>">Skill=Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/experience_details') ?>">Experience Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/profile/contact_details') ?>">Contact Details</a></li>
                                    <li><a href="<?php echo base_url('candidate/logout') ?>">Log Out</a></li>
                                </ul>
                        </div>
                      </div>
                      <div class="col-xs-9">
                        <div class="xcolleft">
                            <div class="">
                          <h1 align="center">Welcome To Your Personal Cabinet</h1>
                          <!-- <a href="<?php echo base_url('candidate/changePassword')?>"  class="button" style="position:relative;margin-left:40%">Change Password</a> -->
                        </div>
                        <label align="center">Profile Completeness</label>
                          <div class="progress" align="center" style="margin-right:25%;width:50%;margin-left:25%;">
                            <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
                              20% Complete
                            </div>
                          </div>
                        
                            <div class="welcome-message">
                              <button class="btn btn-info">Applied Jobs</button>
                              <button class="btn btn-info">All Jobs</button>
                            </div>
                            <div class="welcome-message">
                              <button class="btn btn-primary">Upgrade Services</button>
                              <button class="btn btn-primary">Profile Views</button>
                              <button class="btn btn-primary">Track Jobs</button>
                              <button class="btn btn-primary">Applied Status</button>
                              <button class="btn btn-primary">Update CV</button>
                            </div>
                            <div class="profile-data-box">
                              <form action="<?php echo base_url();?>dashboard/search" method="post">
                                <div class="row">
                                  <div class="col-xs-6">
                                    <label for="ex2">Skill</label>
                                    <input class="form-control" id="ex2" type="text" name="skill" required />
                                  </div>
                                  <div class="col-xs-6">
                                  <label for="ex2">Experience</label>
                                    <input class="form-control" id="ex2" type="number" name="experience" />
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-6">
                                  <label for="ex2">Location</label>
                                    <select id="location" name="location" >
                                      <option value="">-Select-</option>
                                      <?php //for($i=0;$i<count($item);++$i) 
                                           //{
                                            // $psports_id=$item[$i]->psports_id;
                                            // $psports_name=$item[$i]->psports_name;
                                            // echo "<option value='$psports_id'>$psports_name</option>";
                                           //} 
                                      ?>
                                    </select>
                                  </div>
                                  <div class="col-xs-6">
                                  <label for="ex2">Company</label>
                                    <input class="form-control" id="ex2" type="text" name="company" />
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-12" align="center">
                                    <button class="btn btn-success">Search</button>
                                  </div>
                                </div>
                                <!-- <div class="row"><br /></div>
                                <div class="row">
                                  <div class="col-xs-6">
                                  <label for="ex2">Industry</label>
                                    <select id="experience" name="experience" >
                                      <option value="">-Select-</option>
                                      <?php //for($i=0;$i<count($item);++$i) 
                                           //{
                                            // $psports_id=$item[$i]->psports_id;
                                            // $psports_name=$item[$i]->psports_name;
                                            // echo "<option value='$psports_id'>$psports_name</option>";
                                           //} 
                                      ?>
                                    </select>
                                  </div>
                                  <div class="col-xs-6">
                                  <label for="ex2">Company</label>
                                    <input class="form-control" id="ex2" type="text">
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-12" align="center">
                                    <button class="btn btn-success">Search</button>
                                  </div>
                                </div> -->
                              </form>
                            




                          </div>
                        </div>
                      </div>
                    </div>