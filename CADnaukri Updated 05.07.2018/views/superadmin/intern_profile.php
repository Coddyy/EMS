<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Intern Profile</title>
<div class="container">
      <div class="row">
     
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
<?php foreach ($intern as $key) {
  //echo $intern->name;
?>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $key->name;?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $key->email;?></td>
                        </tr>
                        <tr>
                            <td>Phone Number</td>
                            <td><?php echo $key->phno;?>
                            </td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td><?php echo $key->dob;?></td>
                        </tr>
                        <tr>
                            <td>Nick Name</td>
                            <td><?php if($key->nick_name)
                            {
                              echo $key->nick_name;
                            }
                            else
                            {
                              echo "Not Available";
                            }?>
                            </td>
                        </tr>
                        <tr>
                            <td>Admin Created Password</td>
                            <td><?php if($key->admin_created_password)
                            {
                              echo $key->admin_created_password;
                            }
                            else
                            {
                              echo "Not Available";
                            }?>
                            </td>
                        </tr>
<?php } 

foreach($intern_edu as $key) { ?>

                        <tr>
                            <td>Institute</td>
                            <td><?php if($key->institute)
                            {
                              echo $key->institute;
                            }
                            else
                            {
                              echo "Not Available";
                            }?>
                            </td>
                        </tr>
                        <tr>
                            <td>Hometown</td>
                            <td><?php if($key->hometown)
                            {
                              echo $key->hometown;
                            }
                            else
                            {
                              echo "Not Available";
                            }?>
                            </td>
                        </tr>
                        <tr>
                            <td>Institute Location</td>
                            <td><?php if($key->location_insti)
                            {
                              echo $key->location_insti;
                            }
                            else
                            {
                              echo "Not Available";
                            }?>
                            </td>
                        </tr>
                        <tr>
                            <td>Degree</td>
                            <td><?php if($key->degree)
                            {
                              echo $key->degree;
                            }
                            else
                            {
                              echo "Not Available";
                            }?>
                            </td>
                        </tr>
                        <tr>
                            <td>Stream</td>
                            <td><?php if($key->stream)
                            {
                              echo $key->stream;
                            }
                            else
                            {
                              echo "Not Available";
                            }?>
                            </td>
                        </tr>
                        <!-- <tr>
                            <td>Current Year</td>
                            <td><?php if($key->current_year)
                            {
                              echo $key->current_year;
                            }
                            else
                            {
                              echo "Not Available";
                            }?>
                            </td>
                        </tr> -->
                        <tr>
                            <td>Graduation Year</td>
                            <td><?php if($key->gaduationyearr)
                            {
                              echo $key->gaduationyearr;
                            }
                            else
                            {
                              echo "Not Available";
                            }?>
                            </td>
                        </tr>
                        <tr>
                            <td>Performance Scale PG</td>
                            <td><?php if($key->performance_scale_pg)
                            {
                              echo $key->performance_scale_pg;
                            }
                            else
                            {
                              echo "Not Available";
                            }?>
                            </td>
                        </tr>
                        <tr>
                            <td>Performance PG</td>
                            <td><?php if($key->performance_pg)
                            {
                              echo $key->performance_pg;
                            }
                            else
                            {
                              echo "Not Available";
                            }?>
                            </td>
                        </tr>
                        <tr>
                            <td>Performance Scale UG</td>
                            <td><?php if($key->performance_scale_ug)
                            {
                              echo $key->performance_scale_ug;
                            }
                            else
                            {
                              echo "Not Available";
                            }?>
                            </td>
                        </tr>
                        <tr>
                            <td>Performance UG</td>
                            <td><?php if($key->performance_ug)
                            {
                              echo $key->performance_ug;
                            }
                            else
                            {
                              echo "Not Available";
                            }?>
                            </td>
                        </tr>
                        <tr>
                            <td>12th %</td>
                            <td><?php if($key->twelve_percentage)
                            {
                              echo $key->twelve_percentage;
                            }
                            else
                            {
                              echo "Not Available";
                            }?>
                            </td>
                        </tr>
                        <tr>
                            <td>10th %</td>
                            <td><?php if($key->ten_percentage)
                            {
                              echo $key->ten_percentage;
                            }
                            else
                            {
                              echo "Not Available";
                            }?>
                            </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php } ?>