<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>Employer | Edit Exam</title>

<?php 

$exam_details_id=$this->uri->segment(3);
if($this->Employee_M->is_exam_set($exam_details_id) == true)
{
	redirect(base_url()."employer/exams");
}
?>

<style type="text/css">
	/*    --------------------------------------------------
	:: General
	-------------------------------------------------- */
body {
	font-family: 'Open Sans', sans-serif;
	color: #353535;
}
.content h1 {
	text-align: center;
}
.content .content-footer p {
	color: #6d6d6d;
    font-size: 12px;
    text-align: center;
}
.content .content-footer p a {
	color: inherit;
	font-weight: bold;
}

/*	--------------------------------------------------
	:: Table Filter
	-------------------------------------------------- */
.panel {
	border: 1px solid #ddd;
	background-color: #fcfcfc;
}
.panel .btn-group {
	margin: 15px 0 30px;
}
.panel .btn-group .btn {
	transition: background-color .3s ease;
}
.table-filter {
	background-color: #fff;
	border-bottom: 1px solid #eee;
}
.table-filter tbody tr:hover {
	cursor: pointer;
	background-color: #eee;
}
.table-filter tbody tr td {
	padding: 10px;
	vertical-align: middle;
	border-top-color: #eee;
}
.table-filter tbody tr.selected td {
	background-color: #eee;
}
.table-filter tr td:first-child {
	width: 38px;
}

.ckbox {
	position: relative;
}
.ckbox input[type="checkbox"] {
	opacity: 0;
}
.ckbox label {
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}
.ckbox label:before {
	content: '';
	top: 1px;
	left: 0;
	width: 18px;
	height: 18px;
	display: block;
	position: absolute;
	border-radius: 2px;
	border: 1px solid #bbb;
	background-color: #fff;
}
.ckbox input[type="checkbox"]:checked + label:before {
	border-color: #2BBCDE;
	background-color: #2BBCDE;
}
.ckbox input[type="checkbox"]:checked + label:after {
	top: 3px;
	left: 3.5px;
	content: '\e013';
	color: #fff;
	font-size: 11px;
	font-family: 'Glyphicons Halflings';
	position: absolute;
}
.table-filter .star {
	color: #ccc;
	text-align: center;
	display: block;
}
.table-filter .star.star-checked {
	color: #F0AD4E;
}
.table-filter .star:hover {
	color: #ccc;
}
.table-filter .star.star-checked:hover {
	color: #F0AD4E;
}

.table-filter .media-body {
    display: block;
    /* Had to use this style to force the div to expand (wasn't necessary with my bootstrap version 3.3.6) */
}
.table-filter .media-meta {
	font-size: 11px;
	color: #999;
}
.table-filter .media .title {
	color: #2BBCDE;
	font-size: 16px;
	font-weight: bold;
	line-height: normal;
	margin: 0;
}
.table-filter .media .title span {
	font-size: .8em;
	margin-right: 20px;
}
.table-filter .media .title span.pagado {
	color: #5cb85c;
}
.table-filter .media .title span.pendiente {
	color: #f0ad4e;
}
.table-filter .media .title span.cancelado {
	color: #d9534f;
}
.table-filter .media .summary {
	font-size: 14px;
}
</style>


<div class="container">
	<div class="row">
		<section class="content">
			<h1>Question Table</h1>
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">	
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
						<?php

							$qtn1=$questions->qtn1;
						    $qtn2=$questions->qtn2;
						    $qtn3=$questions->qtn3;
						    $qtn4=$questions->qtn4;
						    $qtn5=$questions->qtn5;
						    $qtn6=$questions->qtn6;
						    $qtn7=$questions->qtn7;
						    $qtn8=$questions->qtn8;
						    $qtn9=$questions->qtn9;
						    $qtn10=$questions->qtn10;

						    $qtnarray=array($qtn1,$qtn2,$qtn3,$qtn4,$qtn5,$qtn6,$qtn7,$qtn8,$qtn9,$qtn10);

							for ($i=0; $i < count($qtnarray); $i++) { 
								
								

								$qtn_details=$this->Employee_M->get_question_details($qtnarray[$i]);

						?>
									<tr data-status="cancelado">
										<td>
											<div class="media">
												<div class="">
													<h4 class="title pull-left">
														Q<?php echo ($i + 1)?>.&nbsp&nbsp<?php echo $qtn_details->question;?>
													</h4>
													<span class="media-meta pull-right"><a href="<?php echo base_url();?>employer/question_details/<?php echo $qtnarray[$i];?>/<?php echo $exam_details_id;?>"><button class="btn btn-info">Edit</button></button></a></span>
													
												</div>
											</div>
										</td>
									</tr>
								<?php } //End For Loop ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</section>	
	</div>
</div>