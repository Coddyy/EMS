<?php include('header.php'); ?>

			<div>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo base_url()?>/admin/index/inedex">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo base_url()?>/admin/employee/index">Employee</a> <span class="divider">/</span>
					</li>
				</ul>
			</div>
			
			 <div id="respose"></div>
	   <div class="row-fluid">
               
			<div class="span10">                    
                    <div class="head clearfix">
                        <div class="isw-grid"></div>
                        <h1>New Message</h1>                               
                    </div>
                    <div class="block-fluid table-sorting clearfix">
						<form name="" action="<?php echo base_url('admin/candidate/sendMailall');?>" method="POST">
						<input type="hidden" name="mailid" value="<?php echo implode(" ",$emailid);?>">
						  <div class="row-form clearfix">    
						  <div class="span3">Subject:</div> 
						  <div class="span9"><input type="text" class="validate[required]"  name="subject" value="" required/>
						  </div>                      
						  </div> 
						  <div class="row-form clearfix"> 
							<div class="span3">Body:</div> 
						    <div class="span9">
						    <textarea cols="3" rows="3" name="message"> </textarea></div>
						   </div>
						    <div class="row-form clearfix" align="center">									
						     <button class="btn btn-info" type="submit" name="Send" >Send</button>	
							</div>
						</form>
						  </div>                    
						 </div> 
                    </div>
                </div> 
  
        </div>
 <!--------------------------------Employee View---------------------------------------------------------->

 <!--------------------------------Employee View---------------------------------------------------------->
<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>CANDIDATE PERSONAL DETAILS</h3>
    </div>
    <div class="modal-body">
    	<!-- Ajax Request--><div class="loading" align="center">
            <img src="<?php echo base_url();?>assets/admin/img/loading.gif" alt="Loading..."/></div>
     </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
       </div>
</div>


				
<?php include('footer.php'); ?>
<script type="text/javascript">
function getCanddetails(candid)
{
	//alert(empid);
	var data=candid;
	var dataString= "candid=" + candid;
        //console.log(dataString);
	$.ajax({
		type: "POST",
		url: "<?php echo base_url()?>admin/candidate/candidateSingleList",  //file name
		data: dataString,
		beforeSend: function()
		{
			$('.loading').fadeIn('medium');
		},
		success: function(response)
		{
			$(".modal-body").html(null);
			$(".modal-body").fadeIn(5000).html(response);		
			$('.loading').fadeOut('medium');
                        
		}
	});
}
</script> 
<script language="javascript">
function validate()
{

			var chks = document.getElementsByName('userId[]');
			var hasChecked = false;
			for (var i = 0; i < chks.length; i++)
			{
				if (chks[i].checked)
				{ 
				   
					hasChecked = true;
					break;
				}

			}
			if (hasChecked == false)
			{
				alert("Please select at least one.");
				return false;
			}
			return true;

}

</script>
   <script>
            $(document).ready(function() {
                resetcheckbox();
                $('#selecctall').click(function(event) {  //on click
                    if (this.checked) { // check select status
                        $('.checkbox1').each(function() { //loop through each checkbox
                            this.checked = true;  //select all checkboxes with class "checkbox1"              
                        });
                    } else {
                        $('.checkbox1').each(function() { //loop through each checkbox
                            this.checked = false; //deselect all checkboxes with class "checkbox1"                      
                        });
                    }
                });
 
 
                $("#del_all").on('click', function(e) {
                	//alert('hello');
                    e.preventDefault();
                    var checkValues = $('.checkbox1:checked').map(function()
                    {
                        return $(this).val();
                    }).get();
                    console.log(checkValues);
                     
                    $.each( checkValues, function( i, val ) {
                        $("#"+val).remove();
                        });
//						return  false;
                    $.ajax({
                        url: '<?php echo base_url() ?>admin/candidate/deleteallCandidate',
                        type: 'post',
                        data: 'ids=' + checkValues
                    }).done(function(data) {
					
                        $("#respose").html(data);
						window.location.reload()
                        $('#selecctall').attr('checked', false);
                    });
                });
				  $("#mail_all").on('click', function(e) {
                	//alert('hello');
                    e.preventDefault();
                    var checkValues = $('.checkbox1:checked').map(function()
                    {
                        return $(this).val();
                    }).get();
                    console.log(checkValues);
                     
                    $.each( checkValues, function( i, val ) {
                        $("#"+val).remove();
                        });
//						return  false;
                    $.ajax({
                        url: '<?php echo base_url() ?>admin/candidate/sendMail',
                        type: 'post',
                        data: 'ids=' + checkValues
                    }).done(function(data) {
					
                        $("#respose").html(data);
						window.location.reload()
                        $('#selecctall').attr('checked', false);
                    });
                });
 
                $(".addrecord").click(function(e) {
                    e.preventDefault();
                    var url = $(this).attr('href');
                    $.ajax({
                        type: 'POST',
                        url: url
                    }).done(function() {
                        window.location.reload();
                    });
                });
                 
                function  resetcheckbox(){
                $('input:checkbox').each(function() { //loop through each checkbox
                this.checked = false; //deselect all checkboxes with class "checkbox1"                      
                   });
                }
            });
        </script>
				

