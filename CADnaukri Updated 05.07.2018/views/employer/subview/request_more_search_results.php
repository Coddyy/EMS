<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row login">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 well">
            <form role="form" action="" method="post">
              <div class="form-group text-center">
                <div class="logo">
                    <h2>Request More Results</h2>
                    <?php if($this->session->flashdata('cemail_verified'))
                            {
                                $msg = $this->session->flashdata('cemail_verified');?>
                                <div class="alert alert-success alert-dismissible fade in col-md-12" data-dismiss="alert" role="alert" style="color: green;">  <?php echo $msg; ?></div>
                    <?php   echo '<script>
                                        setTimeout(function(){window.location="'.base_url().'employer/dashboard"},5000);
                                    </script>';
                    
                    
                            } else if($this->session->flashdata('email_sent'))
                            {
                                $msg = $this->session->flashdata('email_sent');?>
                                <div class="alert alert-success alert-dismissible fade in col-md-12" data-dismiss="alert" role="alert" style="color: green;">  <?php echo $msg; ?></div>
                    <?php        
                            } ?>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control input-lg" id="userid" name="name" value="<?php echo $this->session->userdata('name');?>" placeholder="Full Name" readonly="">
              </div>
              <div class="form-group">
                <input type="email" class="form-control input-lg" name="email" value="<?php echo $this->session->userdata('email');?>" id="password" placeholder="Email" readonly="">
              </div>
              <div class="form-group">
                <input type="email" name="cemail" class="form-control input-lg" id="password" placeholder="Company Email" required="">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-default btn-lg btn-block btn-success">Request</button>
              </div>
              
            </form>
        </div>
    </div>
</div>