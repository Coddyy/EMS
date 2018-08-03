<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<form action="" method="post">
<label>ADD Catagory</label><input type="text" placeholder="CAD,CAM" name="desc_for"/><input type="submit" name="add" value="ADD" />
</form>

<!------ Include the above in your HEAD tag ---------->
<?php //$cat=array('CAD','CFD','PLM','CAE','BIM','CAD-Dev','CAD-Sales');?>
<div class="span8">
    <h2>Manage Description</h2>
    <form action="" method="post">

    <!-- <?php for ($i=0; $i < count($cat) ; $i++) 
    { ?>

        <label class="span4"><?php echo $cat[$i];?></label>
        <textarea name="desc[]" rows="2" class="span8"></textarea>
        <input type="hidden" name="cat[]" value="<?php echo $cat[$i];?>"></input>
       
    <?php } ?> -->
    <?php foreach ($m_ds as $key) {
       ?>

        <label class="span4"><?php echo $key->desc_for;?></label>
        <textarea name="desc[]" rows="2" maxlength="140" class="span8"><?php echo $key->description;?></textarea>
        <input type="hidden" name="cat[]" value="<?php echo $key->desc_for;?>"></input>
       
    <?php } ?>
    <br />
    <input type="submit" name="update" value="Save" class="btn btn-primary">
    </form>
</div>