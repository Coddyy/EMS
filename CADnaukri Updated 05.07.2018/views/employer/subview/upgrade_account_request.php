<title>Employer | Upgrade Account</title>

<?php 

$accounts=array('Basic','Silver','Gold','Diamond'); 
$account_type=$this->Employee_M->get_account_type($this->session->userdata('emp_id'));

?>

<div class="container">
    <div class="span3">
        <!-- <h2 align="center">Upgrade Account <button class="btn btn-info" disabled=""><?php echo $account_type;?></button></h2> -->


<?php if($this->session->flashdata('success')){ ?>
        <div class="alert alert-success">
           
            <?php echo $this->session->flashdata('success'); ?>
        </div>
<?php }else if($this->session->flashdata('error')){  ?>
        <div class="alert alert-danger">
            
            <?php echo $this->session->flashdata('error'); ?>
        </div>
<?php }else if($this->session->flashdata('info')){  ?>
        <div class="alert alert-info">
            
            <?php echo $this->session->flashdata('info'); ?>
        </div>
<?php } ?>
<style type="text/css">
/*.center {
    margin: auto;
    width: 50%;
    border: 1px solid orange;
    padding: 20px;
    border-radius: 2px;
    */
}
.t1{
    text-align: left;
}
</style>

        <div class="row">

<?php 
    $emp_id=$this->session->userdata('emp_id');
        $url="https://softcadinfotech.in/payment/get_emp_expire_service_time/".$emp_id;
        $data = file_get_contents($url); // put the contents of the file into a variable
        $apidata = json_decode($data); 
        //var_dump($apidata);

        if($apidata)
        {
            $now = time(); // or your date as well
            $your_date = strtotime($apidata);
            $datediff = $now - $your_date;

            $dbdaysleft=round($datediff / (60 * 60 * 24));
            if($dbdaysleft < 0)
            {
                $daysleft=($dbdaysleft * (-1)).' Days Left';
            }
            else
            {
                $daysleft=$dbdaysleft.' Days Left';
            }
            if($daysleft < 5)
            {
                $color='red';
                $button='<a href="'.base_url().'services/all_services"><button class="btn btn-success">Buy</button></a>';
            }
            else if($daysleft < 10)
            {
                $color='red';
                $button='<a href="'.base_url().'services/all_services"><button class="btn btn-success">Buy</button></a>';
            }
            else
            {
                $color='green';
                $button=' ';
            }
        }
        else
        {
            $color='white';
            $daysleft=' ';
        }
        


        //exit();
?>

            <div class="col-md-3 col-xs-1"></div>
            <div class="col-md-6 col-xs-10 " style= "box-shadow: 2px 2px 5px 2px #cccccc; border-bottom: none; border: 0px solid red;">
            <div class style="width: 100%; background-color: #fff; border: 0px solid blue;">   
            <h2 style="color: #0055A5;padding: 0px 10px; font-size: 24px; text-align: center;">Upgrade Account</h2> 
            <p align="center"><button class="btn btn-info" disabled=""><?php echo $account_type;?></button><b><span class="pull-right" style="color:<?php echo $color;?>"><?php echo $daysleft; ?></span><?php echo $button;?></b></p>
            <form style="padding: 0px 20px; text-align: left;" action="" method="post" >                  
            <label for=Name>Name</label>
            <input type="text" name="name" class="span3" value="<?php echo $this->session->userdata('name');?>" readonly="">
            <label class=t1>Email</label>
            <input type="email" name="email" class="span3" value="<?php echo $this->session->userdata('email');?>" readonly="">
            <label class=t1>Mobile</label>
            <input type="tel" maxlength="10" name="mobile" class="span3" value="<?php echo $this->session->userdata('mobile');?>" readonly="">
            <label class="t1">Upgrade</label>

            <select class="span3" name="requested_account">
                
            <?php for ($i=0; $i < count($accounts); $i++) 
                    { 
                        $selected=$account_type == ($accounts[$i] ? 'selected' : '');
                        echo '<option value="'.$accounts[$i].'" '.$selected.'>'.$accounts[$i].'</option>';
                    }
            ?>
            </select>
            <br /><br />
        
    </div>
      <div class="row">
            
            <div class="col-md-12 col-xs-12" align="center">
            <input type="submit" value="Request Now" class="btn btn-primary" style="border: 0px solid red;">
            <input type="hidden" name="h_current_account" value="<?php echo $account_type;?>"></input>
            </form>
            <p> </p>
        </div>

        </div>
        </div>
    </div>
</div>
<br />
</div>