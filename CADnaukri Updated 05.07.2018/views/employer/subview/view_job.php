<title>Employer | View Job</title>
<div class="container">
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
<?php foreach ($details as $key) {  ?>
  
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $key->jobtitle;?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                    <tr>
                        <td>Designation</td>
                        <td><?php 
                        if($key->designation)
                        {
                          echo $key->designation;
                        }
                        else
                        {
                          echo 'Not Available';
                        }?></td>
                      </tr>
                      <tr>
                        <td>Location</td>
                        <td><?php echo $key->location;?></td>
                      </tr>
                      <tr>
                        <td>Company</td>
                        <td><?php
                        if($key->companyId)
                        {
                          $company_name=$this->Company_M->get($jd->companyId,TRUE)->name;
                          echo $company_name;
                        }
                        else
                        {
                          echo 'Not Available';
                        }?></td>
                      </tr>
                      <tr>
                        <td>Posted Date</td>
                         <td><?php echo $key->created;?></td>
                      </tr>
                      <tr>
                        <td>Last Date</td>
                        <td><?php echo $key->lastdate;?></td>
                      </tr>
                      
                      <tr>
                        <td>Company Email</td>
                        <td><?php
                        if($key->company_email)
                        {
                          echo $key->company_email;
                        }
                        else
                        {
                          echo 'Not Available';
                        }?></td>
                      </tr>
                      <tr>
                        <td>Salary</td>
                        <td><?php
                        if($key->salary)
                        {
                          echo $key->salary;
                        }
                        else
                        {
                          echo 'Not Available';
                        }?></td>
                      </tr>
                      <tr>
                        <td>Experience</td>
                        <td><?php 
                        if($key->yop)
                        {
                          echo $key->yop;
                        }
                        else
                        {
                          echo 'Not Available';
                        }
                        ?></td>
                      </tr>
                      <tr>
                        <td>Industry Type</td>
                        <td><?php 
                        if($key->industry_type)
                        {
                          echo $key->industry_type;
                        }
                        else
                        {
                          echo 'Not Available';
                        }?></td>
                      </tr>
                      <tr>
                        <td>Job Type</td>
                        <td><?php
                        if($key->job_type)
                        {
                          echo $key->job_type;
                        }
                        else
                        {
                          echo 'Not Available';
                        }?></td>
                      </tr>
                      <tr>
                        <td>Gender</td>
                        <td><?php
                        if($key->gender)
                        {
                          echo $key->gender;
                        }
                        else
                        {
                          echo 'Not Available';
                        }?></td>
                      </tr>
                      <tr>
                        <td>languages</td>
                        <td><?php
                        if($key->language)
                        {
                          echo $key->language;
                        }
                        else
                        {
                          echo 'Not Available';
                        }?>
                        </td>
                           
                      </tr>
                      
                      <!-- </tr>
                        <td>Linkdin</td>
                        <td></td>
                        </td>
                           
                      </tr> -->
                     
                    </tbody>
                  </table>
                </div>
<?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>