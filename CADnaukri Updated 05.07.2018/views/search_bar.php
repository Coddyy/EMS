<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  
  
  <form class="form-inline">
    <div class="form-group">
      <div class="dropdown select_location" >
<button class="dropbtn">City<span class="caret"> </span></button>
<div class="dropdown-content">
                                    <a href="<?php echo base_url('best_design_jobs/Pune')?>">Pune</a>
                                    <a href="<?php echo base_url('best_design_jobs/Chennai')?>">Chennai</a>
                                    <a href="<?php echo base_url('best_design_jobs/Hyderabad')?>">Hyderabad</a>
                                    <a href="<?php echo base_url('best_design_jobs/Bangalore')?>">Bangalore</a>
                                    <a href="<?php echo base_url('best_design_jobs/Ahmedabad')?>">Ahmedabad</a>
                                    <a href="<?php echo base_url('best_design_jobs/Bhubaneswar')?>">Bhubaneswar</a>
                                    <a href="<?php echo base_url('best_design_jobs/Mumbai')?>">Mumbai</a>
                                    <a href="<?php echo base_url('best_design_jobs/Delhi')?>">Delhi</a>
                                    <a href="<?php echo base_url('best_design_jobs/Indore')?>">Indore</a>
                                    <a href="<?php echo base_url('best_design_jobs/Surat')?>">Surat</a>
                                    
                                  </div>
                                </div>
      <input type="email" class="form-control" id="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
    </div>
    <div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
