<?php include('header.php'); ?>
<div>
	<ul class="breadcrumb">
		<li>
				<a href="<?php echo base_url()?>/superadmin/index/inedex">Home</a> <span class="divider">/</span>
		</li>
		<li>
			<a href="<?php echo current_url()?>">CAD CACHOOL</a> <span class="divider">/</span>
		</li>
	</ul>
</div>
<div class="row-fluid sortable">
    <div class="box span12">
		<div class="box-header well" data-original-title>
            <h2><i class="icon-info"></i>Intern Database</h2>
            <form name="form1" method="POST" onSubmit="return validate();" action="<?php echo base_url('superadmin/internship/deletechkdinternship');?>" >                    
            <div class="pull-right" >
			<!--<button type="submit" name="delete" id="delete" class="btn btn-warning" >Delete</button>-->
			<a href="<?php echo base_url()?>/superadmin/cadcam_school/cad_cam" class="btn btn-warning">ADD CAD CAM School
            </a>
			</div>
		</div>
        <div class="box-content">
        <?php
        if(!empty($cad_cam_schools))
		{
			$id="example";
		}
		else
		{
			$id='';
		}
		?>
        	<table class="table table-striped table-bordered " id='<?php echo $id?>'>
			<thead>
				<tr>
		           <th>Institue Name</th>
					<th>Logo</th>
                    <th>Contact Person</th>
                    <th>Address Line1</th>
                     <th>Address Line2</th>
                     <th>Contact No</th>
                     <th>Additional No</th>
					 <th>website</th>
					  <th>courses</th>
					  <th>Actions</th>
				</tr>
			</thead>   
			<tbody>
			<?php
			if(!empty($cad_cam_schools))
			{
			
			 foreach($cad_cam_schools as $cs)
			{
				$edit_url=base_url("superadmin/cadcam_school/cad_cam/$cs->id");
				echo '<tr>';
				echo '<td>'.$cs->institue_name.'</td>';
				echo '<td>'.'<img src="'.$cs->logo_url.'" alt="" height="50" width="80">'.'</td>';
				echo '<td>'.$cs->contact_person.'</td>';
				echo '<td>'.$cs->address_line1.'</td>';
				echo '<td>'.$cs->address_line2.'</td>';
				echo '<td>'.$cs->contact_no.'</td>';
				echo '<td>'.$cs->additional_no.'</td>';
				echo '<td>'.$cs->website.'</td>';
				echo '<td>'.$cs->courses.'</td>';
				echo '<td>'.'<a class="btn btn-info" href="'.$edit_url.'" title="Edit"><i class="icon-edit icon-white"></i>Edit</a>'.'</td>';
				echo '</tr>';
			}
				
			}
			else
			{
				echo '<tr><td>'.'No data Found'.'</td></tr>';
			}
			?>
								
			</tbody>
	    </table>
        </div>
  	</div>
</div>
        <?php include('footer.php'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
   
<script src="<?php echo base_url('assets/superadmin/js/jquery.table2excel.js'); ?>"></script>
<script>
$(document).ready(function () { 
    $('#example').dataTable({});
});