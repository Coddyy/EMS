<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://opensource.keycdn.com/fontawesome/4.7.0/font-awesome.min.css" integrity="sha384-dNpIIXE8U05kAbPhy3G1cz+yZmTzA6CY8Vg/u2L9xRnHjJiAK76m2BIEaSEV+/aU" crossorigin="anonymous">
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="http://momentjs.com/downloads/moment-with-locales.js"></script>
<script src="http://momentjs.com/downloads/moment-timezone-with-data.js"></script>

<style>


    
</style>
<div class="container" style="background-color: ">
    <div class="row">
    <br />
        <div class="col-md-6 col-sm-12" style="" align="center">
        <section class="panel panel-box" style="background-color:   #ffbf00;width:50%;">
        <br />
            <p class="text-muted no-margin text" ><span><b style="color:black;">Pending Jobs</b></span></p>
            <b><p class="size-h1 no-margin countdown_first"><?php 
                echo $pending_job; ?></p></b>
            <a href="<?php echo base_url();?>jobadmin/get_job/P"><button class="btn">View</button></a>
        </section>
        </div>
        <div class="col-md-6 col-sm-12" align="center">
        <section class="panel panel-box" style="background-color: #00ff80;width:50%;">
        <br />
            <p class="text-muted no-margin text"><span><b style="color:black;">Approved Job</b></span></p>
            <b><p class="size-h1 no-margin countdown_first"><?php 
                echo $approved_job; ?></p></b>
            <a href="<?php echo base_url();?>jobadmin/get_job/A"><button class="btn">View</button></a>
        <br />
        </section>
        </div>
    </div>
    <div class="row">
    <br />
        <div class="col-md-6 col-sm-12" align="center">
        <section class="panel panel-box" style="background-color:   #df2020;width:50%;">
        <br />
            <p class="text-muted no-margin text"><span><b style="color:black;">Rejected Jobs</b></span></p>
            <b><p class="size-h1 no-margin countdown_first"><?php 
                echo $rejected_job; ?></p></b>
            <a href="<?php echo base_url();?>jobadmin/get_job/R"><button class="btn">View</button></a>
        </section>
        </div>
        <div class="col-md-6 col-sm-12" align="center">
        <section class="panel panel-box" style="background-color:  #bf00ff;width:50%;">
        <br />
            <p class="text-muted no-margin text"><span><b style="color:black;">Expired Jobs</b></span></p>
            <b><p class="size-h1 no-margin countdown_first"><?php 
                echo $expired_job; ?></p></b>
            <a href="<?php echo base_url();?>jobadmin/get_job/E"><button class="btn">View</button></a>
        </section>
        </div>    
    </div>
    <br /> 
</div>


	  	
		
		
		
		
		
		
		
		
		
		
		

