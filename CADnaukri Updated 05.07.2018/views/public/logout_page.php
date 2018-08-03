
<?php if($this->Candidate_M->isLoggedin() == TRUE || $this->Employee_M->isLoggedin() == TRUE)
        {
            redirect(base_url());
        }
?>
<title>Logout</title>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-84911144-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-84911144-1');
</script>

<style type="text/css">
    .ds-btn li{ list-style:none; float:left; padding:10px; }
.ds-btn li a span{padding-left:15px;padding-right:5px;width:100%;display:inline-block; text-align:left;}
.ds-btn li a span small{width:100%; display:inline-block; text-align:left;}

</style>
<div class="container">
	<div class="row">
	    <br /><br />
     <div class="alert alert-success">
      You've successfully logged out
    </div>
    <ul class="ds-btn" >
        <li class="col-md-3">
             <a class="btn btn-lg btn-info" href="<?php echo base_url(); ?>candidate/login">
          <i class="glyphicon glyphicon-user"></i><span style="color:white;">Candidate<br></span></a> 
            
        </li>
        <li class="col-md-3">
             <a class="btn btn-lg btn-info " href="<?php echo base_url(); ?>employer/login">
         <i class="glyphicon glyphicon-user"></i><span style="color:white;">Employer<br></span></a> 
            
        </li>
        <li class="col-md-3">
               <a class="btn btn-lg btn-info" href="<?php echo base_url(); ?>internship/login">
        <i class="glyphicon glyphicon-user"></i><span style="color:white;">Intern<br></span></a> 
        </li>
        <li class="col-md-3">
               <a class="btn btn-lg btn-info" href="<?php echo base_url(); ?>">
         <i class="glyphicon glyphicon-home"></i><span style="color:white;">Home<br></span></a> 
        </li>
    </ul>
    
	</div>
</div>
<br /><br /><br />