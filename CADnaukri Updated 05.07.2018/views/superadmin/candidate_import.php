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
		   <a href="<?php echo base_url()?>superadmin/candidate/import">Candidate Import</a> <span class="divider">/</span>
		</li>
   </ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
	<div class="box-header well" data-original-title>
            <h2><i class="icon-info"></i>Candidate Import </h2>
        </div>
                                
        <div class="box-content">
      <?php  $scs = $this->session->flashdata('success');
			if(!empty($scs))
				echo '<div class="alert alert-success">'.$scs.'</div>';
				?>
		 <?php  $error_msg = $this->session->flashdata('error');
			if(!empty($error_msg))
				echo '<div class="alert alert-success">'.$error_msg.'</div>';
				?>
            <form class="form-horizontal" name="import" id="import_form" action=""  method="post"   enctype="multipart/form-data">
   	
   	           <div class="control-group">
   	           		<div style="float:right"><a href="<?php echo base_url('/assets/candidate/import_files/sample_csv.csv')?>" download>Download Sample CSV</a></div>
   	           </div>
            <div class="control-group">
                <label for="exampleInputEmail1" class="span2 control-label">Import File</label>
                 <div class="controls">
               
                     <input type="file" class="input-xlarge form-control" id="import_csv" name="userfile" required="">
                     
                 </div>
                 <input type="hidden" id="import_data" name="import_data" />
                     <div id="errfn" class="error"></div>
            </div>
             <div id="loader" class="control-group offset2" style="display:none"><img src="<?php echo base_url('/assets/images/ajax_loader.gif')?>" /></div>
            <div id="message" class="control-group offset2"></div>
             <div class="control-group offset2" id="data-check">
                   <input type="hidden" id="err_flag" name="err_flag" value="0" />
                   <input type="hidden" id="data_array" name="data_array" value="" />
                   <button type="submit" class="btn btn-warning" id="check_data">Check Data</button>
							  
		   </div>
            </form>
         
   </div>
    </div>
</div>
<?php include('footer.php') ?>
<script>
	$('#import_csv').on('change',function(){
		 $('#check_data').prop('disabled', false);
		 	$('#errfn').html('');
		  //alert( this.value );
		  fileName=this.value ;
		  var file_extension = fileName.split('.').pop(); // split function will split the filename by dot(.), and pop function will pop the last element from the array which will give you the extension as well. If there will be no extension then it will return the filename.
		 // alert(file_extension);
		 if(file_extension=='csv')
        {
        	 $('#check_data').prop('disabled', false);
            return true; // valid file extension
        }
        else
        {
			$('#errfn').html('Only CSV file allowed');
			 $('#check_data').prop('disabled', true);
			//$('#check_data').dis
		}
	});
	$("#import_form").on('submit',(function(e) {
	//	alert('Here');
        e.preventDefault();
        	$("#import_csv").prop('disabled', false);
        //$("#message").empty();
        $('#loader').show();
		$.ajax({
			url: "<?php echo base_url('superadmin/candidate/check_import')?>", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			contentType: false,       // The content type used when sending data to the server.
			cache: false,             // To unable request pages to be cached
			processData:false, 
		   dataType: "json",     // To send DOMDocument or non processed data file it is set to false
			success: function(reponses)   // A function to be called if request succeeds
			{
				//console.log(reponses.data_array);
			  $('#loading').hide();
			  $('#loader').hide();
			 if (reponses.status === "success")
			 {
			 	$("#message").html(reponses.message);
			 	$('#import_data').val(reponses.data_array);
			  	$("#import_csv").prop('disabled', true);
			 	$('#data-check').html('<button type="button" class="btn btn-warning" id="import-button">Import</button>');
			 	$('#import-button').on('click',function(){
						//  $('#loader').show();
						
						insert_data();
					});
					
			 }
			 else
			 {
			 	console.log(reponses.message);
			 	$("#message").addClass('error');
			 	$("#message").html(reponses.message);
			 }
			  
			}
         });
	}));
	function insert_data()
	{
		//alert($('#import_csv').prop('files'));
		var import_data= $('#import_data').val();
	//	console.log(import_data);
		$('#loader').show();
		$.ajax({
			url: "<?php echo base_url('superadmin/candidate/import_data/')?>", // Url to which the request is send
			type: "POST",             // Type of request to be send, called as method
			data:{import_data:import_data}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
			dataType	: 'json',       // To send DOMDocument or non processed data file it is set to false
			success: function(data)   // A function to be called if request succeeds
			{
			   console.log(data);
			   $('#import_csv').val('');
			   $("#message").html('Upload sucess');
			   $('#data-check').html('<button type="button" class="btn btn-warning" id="import_form">Check Data</button>');
			   $('#loader').hide();
			
			}
         });
		//$('#import_form').attr('action', "<?php echo base_url('superadmin/candidate/import_data')?>");
		//$('#import_form').submit();
		
	
	}
	
</script>