<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<style>
.productbox {
    background-color:#ffffff;
    padding:10px;
    margin-bottom:10px;
    -webkit-box-shadow: 0 8px 6px -6px  #999;
       -moz-box-shadow: 0 8px 6px -6px  #999;
            box-shadow: 0 8px 6px -6px #999;
}

.producttitle {
    font-weight:bold;
    padding:5px 0 5px 0;
}

.productprice {
    border-top:1px solid #dadada;
    padding-top:5px;
}

.pricetext {
    font-weight:bold;
    font-size:1.4em;
}
</style>

<?php if($this->Employee_M->isLoggedIn == FALSE)
{
    redirect(base_url()."employer/login");
}
?>

<div class="container">
    <div class="row">
        <?php 
        if ($all_service_details != '' && $all_service_details != NULL){
        foreach ($all_service_details as $key) { 
        
    

        $service_name=$key->service_name;
        $service_desc=$key->service_description;
        $service_amount=$key->service_amount;
        $service_id=$key->service_id;
        $user_id="12";
        ?>

        <div class="col-md-2 column productbox" style="width:40%;margin-right: 5%;margin-left: 5%;">
            <img align="center" src="http://placehold.it/460x250/e67e22/ffffff&text=Service" class="img-responsive" style="height:10%;">
            <form action="https://www.softcadinfotech.in/payment/get_data" method="post">
            <div class="producttitle"><?php echo $service_name; ?></div>
            <div class="productprice">

            <div class="pull-right"><button class="btn btn-primary btn-sm" type="submit" role="button">BUY</button></div>
            <input type="hidden" name="service_id" value="<?php echo $service_id; ?>" />
            <input type="hidden" name="service_amount" value="<?php echo $service_amount; ?>" />
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
            </form>
            <div class="pull-right"><a href="#" class="btn btn-primary btn-sm" role="button">ENQUIRY</a>&nbsp</div>
            <div class="pricetext"><i style="color:green;" class="fa fa-usd" aria-hidden="true"></i>&nbsp<?php echo $service_amount; ?></div></div>
        </div>
        <?php }     } else { ?>


        No Services There!


            <?php } ?>
    </div>
</div>
