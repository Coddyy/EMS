<?php include('header.php'); ?>
	   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
 <link href="<?php echo base_url('assets/superadmin/css/sumoselect.css'); ?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/superadmin/js/jquery.sumoselect.js'); ?>"></script>
      <script type="text/javascript">
				jQuery(document).ready(function ($)  {

							window.asd = $('.SlectBox').SumoSelect({ csvDispCount: 5 });

							window.test = $('.testsel').SumoSelect({okCancelInMulti:true });

							window.testSelAll = $('.testSelAll').SumoSelect({okCancelInMulti:true, selectAll:true });

							window.testSelAll2 = $('.testSelAll2').SumoSelect({selectAll:true });

						});

    </script>


<div>

	<ul class="breadcrumb">

	<li>

            <a href="<?php echo base_url()?>/admin/index/inedex">Home</a> <span class="divider">/</span>

	</li>

	<li>

	   <a href="<?php echo base_url()?>/admin/candidate/index">add admin</a> <span class="divider">/</span>

	</li>

        <li>

	   <a href="<?php echo base_url()?>/admin/candidate/editCandidate">add admin</a> 

	</li>

        </ul>

</div>

<div class="row-fluid sortable">
    <div class="box span12">
	<div class="box-header well" data-original-title>
            <h2><i class="icon-info"></i>ADD ADMIN</h2>
        </div>
        <div class="box-content">
         <form class="form-horizontal" name="registration" action=""  method="post"   enctype="multipart/form-data">
		 <?php $sql='select * from module';
					$query=$this->db->query($sql);
					$result=$query->result();
					
			?>
			<div class="control-group">
                <label for="exampleInputEmail1" class="control-label">Assign Role</label>
                 <div class="controls">
			    <select  multiple="multiple" placeholder="Modules" name="module[]" class="SlectBox form-control" required>
				<?php foreach($result as $row)
				{
				$module_id = $row->id;
				$module_name = $row->name;
				?>
				 <option value="<?=$module_id?>"><?=$module_name?></option>
				<?php
				} ?>       
					   
						</select>
                </div>
			<div id="errfn" class="error"></div> 
            </div>
			<div class="control-group">
                <label for="exampleInputEmail1" class="control-label">Name</label>
                 <div class="controls">
				<input type="text" class="input-xlarge form-control span8" id="name" name="name" size="50" onblur="allLetter()" placeholder="Name" value="">
                </div>
			<div id="errfn" class="error"></div> 
            </div>
			<div class="control-group">
                <label for="exampleInputPassword1" class="control-label">Email</label>
                 <div class="controls">
                    <input type="email" class="input-xlarge form-control span8" id="emailid" name="emailid" size="50" onblur="ValidateEmail()" placeholder="Email" value="">
                </div>    
                <div id="errfne" class="error"></div>
					<?php echo form_error('emailid', '<div class="error">', '</div>'); ?>
             </div>
            <div class="control-group">
                <label for="exampleInputPassword1" class="control-label">Password</label>
                 <div class="controls">
                 <input type="password" class="input-xlarge form-control span8" id="password"  name="password" size="50" placeholder="Password" value="">
                 </div>			
                 <div id="errfnpl" class="error"></div>
			</div>
			<div class="control-group offset2" >
				<button type="submit" class="btn btn-warning btn-large" name="SaveAdmin">Save</button>
			</div>
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


<?php $this->load->view('common/footer'); ?>

		<script src="<?php echo base_url('application/views/script/intlTelInput.js'); ?>"></script>

<script src="<?php echo base_url('assets/js/bootstrap-multiselect.js'); ?>"></script>