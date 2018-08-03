<?php include('header.php'); ?>
<div>
	<ul class="breadcrumb">
	<li>
            <a href="<?php echo base_url()?>superadmin/index/inedex">Home</a> <span class="divider">/</span>
	</li>
	<li>
	   <a href="<?php echo base_url()?>superadmin/candidate/index">Candidate</a> <span class="divider">/</span>
	</li>
        <li>
	   <a href="<?php echo base_url()?>superadmin/candidate/editCandidate">Edit Candidate</a> 
	</li>
        </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
	<div class="box-header well" data-original-title>
            <h2><i class="icon-info"></i>Edit Candidate</h2>
        </div>
               
        <div class="box-content">
            <form class="form-horizontal" name="registration" action="<?php echo base_url('superadmin/candidate/updateData')?>"  method="post"   enctype="multipart/form-data">
    <?php foreach($candsingleList as $r){?> 
                <input type="hidden" name="id" value="<?php echo $r->id?>" > 
            <div class="control-group">
                <label for="exampleInputEmail1" class="span2 control-label">Name</label>
                 <div class="controls">
                     <input type="text" class="input-xlarge form-control" id="firstname" name="firstname" size="50" onblur="allLetter()" placeholder="First Name" value="<?php echo $r->name?>">
                 </div>
                     <div id="errfn" class="error"></div>
            </div>
           <!-- <div class="control-group">
                <label for="exampleInputEmail1" class="span2 control-label">Middle Name</label>
                 <div class="controls">
                    <input type="text" class="input-xlarge form-control " id="middlename" name="middlename" size="50"  placeholder="Middle Name" value="<?php //echo $r->mName?>">
                </div>
           </div>
            <div class="control-group">
                 <label for="exampleInputPassword1" class="span2 control-label">Last Name</label>
                 <div class="controls">
                      <input type="text" class="input-xlarge form-control" id="lastname" name="lastname" size="50" onblur="allLetterl()" placeholder="Last Name" value="<?php //echo $r->lName?>">
                 </div>
                      <div id="errfnl" class="error"></div>
             </div> -->
          
              <div class="control-group">
                <label for="exampleInputPassword1" class="span2 control-label">Email</label>
                 <div class="controls">
                    <input type="email" class="form-control" id="emailid" name="emailid" size="50" onblur="ValidateEmail()" placeholder="Email" value="<?php echo $r->email?>">
                 </div>    
                <div id="errfne" class="error"></div>
			<?php echo form_error('emailid', '<div class="error">', '</div>'); ?>
             </div>
            <div class="control-group">
                <label for="exampleInputPassword1" class="span2 control-label">Mobile Number</label>
                <div class="controls">
                  <input type="tel" class="form-control" id="phoneno" name="phoneno"  placeholder="e.g. 8895679043" value="<?php echo $r->mobile?>">
                </div>
		<?php echo form_error('phoneno', '<div class="error">', '</div>'); ?>
             </div>
            <div class="control-group">
                <label for="exampleInputPassword1" class="span2 control-label">Present Location</label>
                  <div class="controls">
                   <input type="text" class="form-control" id="presentlocation"  name="presentlocation" size="50" onblur="alphanumeric()" placeholder="Present Location" value="<?php echo $r->location?>">
                  </div>			
                   <div id="errfnpl" class="error"></div>
             </div>
              <div class="control-group">
		  <label class="span2 control-label">CV Upload<span class="error">*</span></label>
		   <div class="controls">
                    <div class="uploader" id="uniform-undefined">
                             <input type="file" name="fileToUpload" size="19" style="opacity: 0;" onchange="return file_upload();" value="<?php echo $r->cvname?>">
                              <span class="filename">No file selected</span><span class="action">Choose File</span></div>
		</div>
              </div>
                <div class="control-group">
              <label for="exampleInputPassword1" class="span2 control-label">Nationality</label>
                <div class="controls">
              <select name="nationality"  value="nationality">
              <?php
              $country=$this->Country_M->get();
              foreach($country as $c)
              {
			  	$is_selected=$c->country_id==$r->nationality?'selected':'';
			  	echo '<option value="'.$c->country_id.'" '.$is_selected.'>'.$c->country_name.'</option>';
			  }
              ?>
							  <option value="<?php echo $r->nationality?>"><?php echo $r->nationality?></option>
							  
                </select>
                </div>
		<div id="errfnn" class="error"></div>
            </div>
            <div class="control-group offset2" >
                   <button type="submit" class="btn btn-warning btn-large">Update</button>
							  
		</div>
    <?php } ?>
        </form>
        </div>
    </div>
</div>
<?php include('footer.php') ?>
<script type="text/javascript">

function file_upload()
{
				var imgpath = document.getElementById('fileToUpload').value; 	                      
				console.log(imgpath);

				if(imgpath == "")
				{
				alert("upload your word file");
				//document.file.fileToUpload.focus();
				return false;
				}
				else
				{
				var arr1 = new Array;
				arr1 = imgpath.split("\\");
				var len = arr1.length;
				var img1 = arr1[len-1];
				var filext = img1.substring(img1.lastIndexOf(".")+1);
				// Checking Extension
				if(filext == "doc" || filext == "docx" || filext == "pdf")
				{
				//alert("File has been upload correctly")
				return true;
				}
				else
				{
          document.getElementById("fileToUpload").value = '';
  				alert("You are requested to upload .doc .docx & .rtf documents only.");
  				//document.form.fileToUpload.focus();
  				return false;
				}
				}
}
</script>