<?php include('header.php'); ?>
<div>
	<ul class="breadcrumb">
	<li>
            <a href="<?php echo base_url()?>/admin/index/inedex">Home</a> <span class="divider">/</span>
	</li>
	<li>
	   <a href="<?php echo base_url()?>/admin/intern/index">Intern database</a> <span class="divider">/</span>
	</li>
        <li>
	   <a href="<?php echo base_url()?>/admin/intern/editIntern">Edit Intern</a> 
	</li>
        </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
	<div class="box-header well" data-original-title>
            <h2><i class="icon-info"></i>Edit Intern Student </h2>
        </div>
                                
        <div class="box-content">
             <form role="form" method="post" action="<?php echo base_url('admin/intern/updateIntern')?>">
                <?php foreach ($internsingleList as $r) {?>
            <input type="hidden" name="id" value="<?php echo $r->id ?>" >
                       <div class="control-group" >
                         <label for="first_name" class="span2 control-label"><h4>Full Name:<span class="error">*</span></h4></label>
                        <div class="controls">
                           
                            <input type="text" class="input-xlarge form-control " id="firstname" name="firstname" value="<?php echo $r->name?>" placeholder="Your First Name" required>
                            <div  class="error"></div>
                        
                        </div>
                    </div>
                    <!-- <div class="control-group" >
                        <label for="last_name" class="span2 control-label"><h4>Last Name:<span class="error">*</span></h4></label>
                        <div class="controls ">
                            
                            <input type="text" class="input-xlarge form-control " id="lastname" name="lastname" value="<?php echo $r->lastname ?>" placeholder="Your Last Name" required>
                                  <div  class="error"></div>
                        </div>
                    </div> -->
                    <div class="control-group">
                        <label for="email" class="span2 control-label"><h4>Your Email:<span class="error">*</span></h4></label>
                        <div class="controls ">
                        <input type="email" class="input-xlarge form-control " id="email" name="email" value="<?php echo $r->email ?>" placeholder="Your e-mail" onblur="ValidateEmail()" required>
                        
                    </div>
                    </div>
                    
                    <div class="control-group">
                        <label for="number" class="span2 control-label"><h4>Mobile Number:<span class="error">*</span></h4></label>
                        <div class="controls">
                            <div class="span1" style="width: 1%"> <input type="text" class="form-control country-code" id="country_code" name="country_code" value="+91"></div>
                            <div class="span9"><input type="number" class="form-control  " id="phone_primary" name="phone_primary"  placeholder="Your 10 Digit Mobile Number"  
                                                      value="<?php echo $r->phno ?>" required></div>
                        </div>
                    </div>
                 <div class="clear-fix"></div>
                
              <div class="control-group offset2" >
                   <button type="submit" class="btn btn-warning btn-large">UPDATE INTERN </button>
							  
		</div>
            </div>
                <?php } ?>
                </form>
        </div>
    </div>
</div>
<?php include('footer.php') ?>
