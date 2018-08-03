<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>Sent CV Update Mail</title>
<a href="<?php echo base_url();?>superadmin/index/dashboard"><button class="btn btn-info">Dashboard</button></a>
<?php $data=$this->SuperAdmin_M->get_no_cv_candidates();?>
<br /><br />
Total Candidates Left <b style="color:green;"><?php echo $data;?></b> 
<br /><br />
<a href="<?php echo base_url();?>superadmin/candidate/send_cv_mail"><button class="btn btn-warning">Shoot Mail</button></a><!-- 
<a href="<?php echo base_url();?>superadmin/candidate/send_cv_mail/30"><button class="btn btn-info">Shoot 30 Mails</button></a> -->