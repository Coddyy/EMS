<?php $this->load->view('common/header'); ?>
<?php $this->load->view('common/navbar'); ?>
    <?php $this->load->view($subview); ?>
<div class="clear">
<form method="post">
<level>First Name</level>
<input type="text" name="fname">
<level>Last Name</level>
<input type="text" name="lname">
<level>Email Id</level>
<input type="email" name="email">
<level>Contact NO</level>
<input type="email" name="cno">
<level>Location</level>
<input type="email" name="lctn">
<level>Designation</level>
<input type="email" name="dgstn">
</form>





</div>
  <?php $this->load->view('common/footer'); ?>

  
</body>

</html>