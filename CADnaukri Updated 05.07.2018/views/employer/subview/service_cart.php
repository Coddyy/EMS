<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<title>My Cart</title>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="text-center col-sm-2 col-md-2">Services</th>
                        <!-- <th class="text-center">Location</th> -->
                        <th class="text-center col-sm-2 col-md-2">Price</th>
                        <th class="text-center col-sm-2 col-md-2">Quantity&nbsp&nbsp</th>
                        <th class="text-center col-sm-2 col-md-2" style="margin-left: 20px;" class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>

                <?php 

                $i=0;
                foreach ($service_details as $key) 
                { 
                	$order_id=$key->id;
                	echo $order_id;exit();
                    $service_name=$key->service_name;
                    $service_desc=$key->service_description;
                    $service_amount=$key->service_amount;
                    $serviceAmount=$serviceAmount + $service_amount;
                    $service_id=$key->id;
                    $cityName=$this->Employee_M->get_city_name($key->location);
                    $cityState=$this->Employee_M->get_city_state($key->location);
                    if($cityState == '749')
                    {
                        $gst='(GST[9%] + IGST[9%])';
                    }
                    else
                    {
                        $gst='IGST[18%]';
                    }
                    if($cityName != NULL)
                    {
                        $city_name=$cityName;
                    }
                    else
                    {
                        $city_name='Not Available';
                    }
                    $total_amount=((18/100) * $service_amount) + $service_amount;
                    $gstAmount=(18/100) * $service_amount;
                    $gst_amount=($gst_amount + $gstAmount);

                    $service_amount_id='service_amount_id'.$service_id;
                    $total_amount_id='total_amount_id'.$service_id;
                    $quantity_id='quantity_id'.$service_id;
                    $service_amount_inputId='service_amount_inputId'.$service_id;

                    $iteration_id='iteration_id'.$i.'-'.$service_id;
                ?>

                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="http://icons.iconarchive.com/icons/custom-icon-design/flatastic-2/72/product-icon.png" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?php echo $service_name; ?></a></h4>
                                <h5 class="media-heading"><a href="https://www.softcadinfotech.in">Softcad Infotech Solutions</a></h5>
                                <!-- <span>Status: </span><span class="text-success"><strong>In Stock</strong></span> -->
                            </div>
                        </div></td>
                       <!--  <td class="col-sm-1 col-md-1" style="text-align: center">
                        <input type="email" class="form-control" id="exampleInputEmail1" value="1" disabled="">
                        </td> -->
                        <!-- <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $city_name; ?></strong></td> -->
                        <td class="col-sm-1 col-md-1 text-center" >

                        <strong class="service_amount" id="<?php echo $service_amount_id; ?>">
                            <?php echo $service_amount; ?>

                        </strong>
                       
                        </td>
                        <!-- <input data-iteration_id="<?php echo $iteration_id; ?>" type="hidden" value="" id="<?php echo $iteration_find_id; ?>"/> -->

                        <input type="hidden" id="<?php echo $service_amount_inputId; ?>" value="<?php echo $service_amount;?>" />
                        <!-- <td class="col-sm-1 col-md-1 text-center"><strong><?php echo $gst; ?></strong></td> -->
                        <td class="col-sm-2 col-md-2 text-center">
                            
                        <?php 

                        $cvs=array('100' => '10 CV', '200' => '20 CV', '300' => '30 CV');

                        $months= array('100' => '1 Month','150' => '2 Months','200' => '3 Months','250' => '4 Months','300' => '5 Months','350' => '6 Months','400' => '7 Months','450' => '8 Months','9500' => '9 Months','550' => '10 Months'); ?>


                            <select style="width:120%;" name="quantity" id="<?php echo $quantity_id;?>" onchange="calculate(this)" required="" data-service_id="<?php echo $service_id;?>">
                            <?php foreach ($months as $key => $value) {

                                echo '<option  value="'.$key.'"><span style="margin-bottom:50px;">'.$value.'</span></option>';

                                $quantity .= $value.'-';


                             } ?>
                            </select>
                             <?php echo $quantity; ?>

                        </td>
                        <td class="col-sm-1 col-md-1 text-center"  ><strong class="total_amount" style="margin-left: 20px;" id="<?php echo $total_amount_id; ?>"><?php echo $total_amount; ?></strong></td>
                        <td class="col-sm-1 col-md-1">
                        <a href="<?php echo base_url();?>employer/remove_service_from_cart/<?php echo $service_id; ?>"
                        <button type="button" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remove
                        </button></a></td>
                    </tr>

                <?php $i++ ;} ?>
                    <!-- Calculation -->
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong id="final_service_amount"><?php echo $serviceAmount;?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Estimated Tax</h5></td>
                        <td   class="text-right"><h5><strong id="final_gst_amount"><?php echo $gst_amount;?></strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong id="final_total_amount"><?php echo ($serviceAmount + $gst_amount) ?></strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <a href="<?php echo base_url(); ?>services/all_services">
                        <button type="button" class="btn btn-default">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continue Subscribing
                        </button></a></td>

                        <td>
                            <form action="https://www.softcadinfotech.in/payment/get_data" method="post">

                                <input type="hidden" name="service_id" value="<?php echo $service_id; ?>" />
                                <input type="hidden" id="payment_service_amount" name="service_amount" value="<?php echo ($serviceAmount + $gst_amount); ?>" />
                                <input type="hidden" name="user_id" value="<?php echo $this->session->userdata('emp_id'); ?>" />
                                <input type="hidden" name="user_name" value="<?php echo $this->session->userdata('name');?>">
                                <input type="hidden" name="user_email" value="<?php echo $this->session->userdata('email');?>">
                                <input type="hidden" name="user_mobile" value="<?php echo $this->session->userdata('mobile');?>">
                                <input type="hidden" name="quantity" value="<?php echo $this->session->userdata('mobile');?>">
                                <button type="submit" role="button" class="btn btn-success">
                                    Checkout <span class="glyphicon glyphicon-play"></span>
                                </button>
                            </form>
                        </td>
                        
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    
function calculate(val)
{  
    //alert(iteration);
    var service_id=$(val).attr('data-service_id');
    var val=$('#quantity').val();
    //alert(service_id);
    //$('#total_amount').html(val);
    var service_amountId='#service_amount_inputId'+service_id; //For take service_amount into JS from PHP
    var service_amount_id='#service_amount_id'+service_id;//For display HTML
    var total_amount_id='#total_amount_id'+service_id;
    var quantity_id='#quantity_id'+service_id;
    var serviceAmount=$(service_amountId).val();
    var quantity_price=$(quantity_id).val();
    var totalAmount = $(total_amount_id).html();
    //alert(service_amount);
    var service_amount = (+serviceAmount + +quantity_price);
    var total_amount=((18/100) * service_amount) + service_amount;
    //alert(service_amount);
    $(service_amount_id).html(service_amount);
    $(total_amount_id).html(total_amount);
    
    //Dynamic Service Amount Subtotal
    var service_Amount=0;
    $('.service_amount').each(function()
    {
        //alert($(this).val());
        service_Amount +=(parseInt($(this).html()));
        
    });
    //alert(service_Amount);
    $('#final_service_amount').html(service_Amount);

    //Dynamic Service Amount total
    var total_Amount=0;
    $('.total_amount').each(function()
    {
        //alert($(this).html());
        //var serviceamount=parseInt($(this).val());
        total_Amount +=(parseInt($(this).html()));
        
    });
    //alert(total_Amount);
    var gstAmount=(18/100) * service_Amount;
    $('#final_total_amount').html(total_Amount);
    $('#final_gst_amount').html(total_Amount - service_Amount);

    $('#payment_service_amount').val(total_Amount);

} 

</script>