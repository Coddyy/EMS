<style type="text/css">
.th{
	height: 50px;
}
.ts{
	width: 150px;
}
</style>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="container">
	<div class="row">
		<div class="table-responsive">
			<table  class="table" style="margin-left: 30px;">
				<thead>
					<tr>
						<th class="th"> Name </th>
						<th class="th"> Email </th>
					</tr>
				</thead>

		<?php if($cand != false)
			{
				foreach ($cand as $value) 
					{ ?>
				<tr>
					<td class="th"><?php echo $value->name; ?></td>
					<td class="th"><?php echo $value->email; ?></td>
				</tr>			
				<?php }
			}
			else
			{?>
				<tr>
	 				<td colspan="3"> No Candidates There </td>
				</tr>
	<?php 	}
		?>
	</div>
</div>