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

   <title>Services</title>
<style>
.productbox {
    background-color:#ffffff;`
    padding:1%;
    margin-bottom:2%;
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
.Description{
    background-color:#428BCA;
    color: white;
    opacity: .7;
    border-radius: 2px;
    border:1px solid white;
    padding: 2%;
    margin-bottom: 1%;
    height: 8vw;
    overflow: auto;
}
@media screen and (max-width: 780px) {
    .Description{
        height: 15vw;
    }
}
</style>

<?php if($this->Employee_M->isLoggedin() == FALSE)
{
    redirect(base_url()."employer/login");
}
?>

<div class="container" >
    <div class="row col-sm-12">

        <?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php }else if($this->session->flashdata('error')){  ?>
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
           <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php } ?>



        <?php 
        if ($all_service_details != '' && $all_service_details != NULL){
        foreach ($all_service_details as $key) 
        { 
            $service_name=$key->service_name;
            $service_desc=$key->service_description;
            $service_amount=$key->service_amount;
            $service_id=$key->id;
            // $user_id="12";
        ?>

<style type="text/css">
    .cart-box{
     position: fixed;
  bottom: 480px;
  right: 60px;
  width: 48px;
  height: 48px;
  z-index: 2147483000;
  cursor: pointer;
  background-position: 50%;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}
.btn-circle.btn-lg {
  width: 50px;
  height: 50px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
.btn-circle.btn-xl {
  width: 70px;
  height: 70px;
  padding: 10px 16px;
  font-size: 24px;
  line-height: 1.33;
  border-radius: 35px;
}
.cart-items-count{
    position:relative;
    display:flex;
    text-align:center;
    justify-content: center;
    top:-55px;
}

.notification-counter {   
    position: absolute;
    right: 8px;
    background-color: blue;
    color: #fff;
    border-radius: 3px;
    padding: 1px 3px;
    font: 12px Verdana;
}




</style>

<div class="cart-box" id="Normal">
    <ul class="nav navbar-nav">
          <button href="#" onclick="gh()" class="draggable dropdown-toggle btn btn-warning btn-circle btn-xl" data-toggle="dropdown" role="button" aria-expanded="false"> 
          <span class="glyphicon glyphicon-shopping-cart"></span></button>
           <span  class="cart-items-count"><span class=" notification-counter"><?php echo $this->Employee_M->count_cart_items();?></span></span>
      </ul>
</div>
        <div class="col-sm-6  productbox">



            <img align="center" src="http://placehold.it/460x250/e67e22/ffffff&text=Service" class="img-responsive" style="height: 15vw; width: 100%;">
            <form action="" method="post">
            <div class="producttitle" align="center"><?php echo $service_name; ?></div>
            <div class=" Description"><?php echo $key->service_description; ?></div>
            <div class="productprice">

            <div class="pull-right">

            <?php $data=$this->Employee_M->istaken_service($this->session->userdata('emp_id'),$service_id); 

                if($data == true){ 
            ?>
                <button class="btn btn-primary btn-sm" role="button" disabled="">Added</button>

            <?php } else { ?>

                <button class="btn btn-primary btn-sm" type="submit" role="button">Add to cart</button>

            <?php } ?>
            </div>
            <input type="hidden" name="service_id" value="<?php echo $service_id; ?>" />
            <!-- <input type="hidden" name="service_amount" value="<?php echo $service_amount; ?>" />
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" /> -->
            </form>
            <!-- <div class="pull-right"><a href="#" class="btn btn-primary btn-sm" role="button">ENQUIRY</a>&nbsp</div> -->
            <div class="pricetext" style="margin-bottom: 20px;"><i style="color:green;" class="fa fa-usd" aria-hidden="true"></i>&nbsp<?php echo $service_amount; ?></div></div>
        </div>
        <?php }     } else { ?>


        No Services There!


            <?php } ?>
    </div>
</div>
<script type="text/javascript">
    function gh()
    {
        window.location="<?php echo base_url();?>employer/my_cart";
    }
</script>
