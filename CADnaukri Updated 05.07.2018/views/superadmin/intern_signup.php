<?php include('header.php'); ?>
<div>
	<ul class="breadcrumb">
	<li>
            <a href="<?php echo base_url()?>/superadmin/index/inedex">Home</a> <span class="divider">/</span>
	</li>
	<li>
	   <a href="<?php echo base_url()?>/superadmin/intern/index">Intern database</a> <span class="divider">/</span>
	</li>
        <li>
	   <a href="<?php echo base_url()?>/superadmin/intern/signup">ADD Intern</a> 
	</li>
        </ul>
</div>

<?php       $rand='';
            $seed = str_split('abcdefghijklmnopqrstuvwxyz'  .'ABCDEFGHIJKLMNOPQRSTUVWXYZ' .'0123456789'.'!@#$%^&*'); // and any other characters
            shuffle($seed); // probably optional since array_is randomized; this may be redundant
            foreach (array_rand($seed, 8) as $k) $rand.= $seed[$k];
            $password=$rand;
            //echo $rand;
?>
<div class="row-fluid sortable">
    <div class="box span12">
	<div class="box-header well" data-original-title>
            <h2><i class="icon-info"></i>Intern Student Register</h2>
        </div>
                                
        <div class="box-content">
             <form role="form" method="post" action="<?php echo base_url('superadmin/intern/insertSignup')?>">
                
            
              <!-- <div class="control-group">
              <label for="salutation" class="span2 control-label"><h4>Salutation:</h4></label>
                   <div class="controls">
                        <select class="input-xlarge form-control" name="salutation">
                            <option value="mr">Mr.</option>
                            <option value="ms">Ms.</option>
                            <option value="mrs">Mrs.</option>
                        </select>
                    </div>
                </div> -->
                 <div class="control-group" >
                         <label for="first_name" class="span2 control-label"><h4>Name:<span class="error">*</span></h4></label>
                        <div class="controls">
                           
                            <input type="text" class="input-xlarge form-control " id="firstname" name="firstname" value="<?php echo set_value('firstname'); ?>" placeholder="Name" required>
                            <div  class="error"></div>
                        
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="email" class="span2 control-label"><h4>Your Email:<span class="error">*</span></h4></label>
                        <div class="controls ">
                        <input type="email" class="input-xlarge form-control " id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="Your e-mail" onblur="ValidateEmail()" required>
                        
                    </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="number" class="span2 control-label"><h4>Mobile Number:<span class="error">*</span></h4></label>
                        <div class="controls">
                            <div class="span1" style="width: 1%"> <input type="text" class="form-control country-code" id="country_code" name="country_code" value="+91"></div>
                            <div class="span9"><input type="number" class="form-control  " id="phone_primary" name="phone_primary"  placeholder="Your 10 Digit Mobile Number"  value="<?php echo set_value(
                                    'phone_primary');?>" required></div>
                        </div>
                    </div>
                    <div class="control-group" >
                        <label for="last_name" class="span2 control-label"><h4>Auto Generated Password<span class="error">*</span></h4></label>
                        <div class="controls ">
                            
                            <input type="text" class="input-xlarge form-control " id="lastname" name="password" value="<?php echo $password; ?>" placeholder="Password" readonly>
                                  <div  class="error"></div>
                        </div>
                    </div>
                    <div class="control-group" >
                        <label for="last_name" class="span2 control-label"><h4>Date Of Birth<span class="error">*</span></h4></label>
                        <div class="controls ">
                            
                            <input type="text" class="input-xlarge form-control " id="lastname" name="dob" value="<?php echo date('Y-m-d'); ?>" placeholder="Password" readonly>
                                  <div  class="error"></div>
                        </div>
                    </div>
                    <div class="control-group" >
                        <label for="last_name" class="span2 control-label"><h4>Nick Name<span class="error">*</span></h4></label>
                        <div class="controls ">
                            
                            <input type="text" class="input-xlarge form-control " id="lastname" name="nick_name" value="CADinterns" placeholder="Password" readonly>
                                  <div  class="error"></div>
                        </div>
                    </div>
                 <div class="clear-fix"></div>
                
              <div class="control-group offset2" >
                   <button type="submit" class="btn btn-warning btn-large">INTERN REGISTER</button>
							  
		</div>
            </div>
                  
                </form>
        </div>
    </div>
</div>
<?php include('footer.php') ?>
