<div class="container">
<?php if($this->uri->segment(3) == "password_changed_successfully"){ ?>
    <div class="alert alert-success">
        Your Password Is Successfully Changed!
    </div>
<?php } else if($this->uri->segment(3) == "password_not_changed"){ ?>
    <div class="alert alert-danger">
        Error Occurred! Password Not Changed!
    </div>
<?php } else if($this->uri->segment(3) == "email_not_recognised"){ ?>
    <div class="alert alert-danger">
        Oops! Your Email Is Not Recognised.
    </div>
<?php } ?>
	<div id="passwordreset" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Password Reset</div>
                            <!--<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#">Sign In</a></div>-->
                        </div>  
                        <div class="panel-body" >
                            <form id="signupform" action="" class="form-horizontal" role="form" method="post">
                                <div class="form-group">
                                <br />
                                    <label for="email" class="col-md-3 control-label">Registered Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Enter your email" required="">
                                    </div>
                                    <br />
                                    <label for="email" class="col-md-3 control-label">New Password</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="password" placeholder="Enter your new password" required="">
                                        <br />
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="submit" class="btn btn-warning">Update</button>
                                    </div>
                                </div>
                            
                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            We'll send you an email with a link to reset your password.
                                        </div>
                                    </div>
                                </div>    
                                
                            </form>
                         </div>
                    </div>
         </div> 
    </div>
