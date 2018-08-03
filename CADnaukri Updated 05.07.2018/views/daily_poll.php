<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="panel panel-primary" style="margin-top: 0px; border:0px solid #0055A5;">
                        <div class="panel">
                            <h3 class="panel-title" style="font-size: 17px; background-color: #fff;color: #000;margin-top: 8px;"><span class="fa fa-line-chart"></span><center><b>Daily Poll</b></center></h3>
                        </div>
                        <?php 

                        $daily_poll_details=$this->Search_M->get_daily_poll_details();
                        foreach ($daily_poll_details as $key) { 


                        ?>
                        <div class="panel" style="background-color: #fff; color: #000;">
                            <p class="panel-title" style="margin-top: -10px;margin-right: 1px; margin-left: 1px;font-size: 14px;color: #888F95; text-align: center; line-height: 15px; height: 44px;"><!-- <span class="fa fa-line-chart"></span> --><?php echo $key->question; ?> </p>
                        </div>
                        <div class="panel-body" style="margin-top: -8px;">
                            <ul class="list-group" style="font-size: 12px; padding: 5px 5px;">
                                <li class="list-group-item1">
                                    <div class="radio">
                                        <label class="label_margin" style="">
                                            <input type="radio" value="" name="ans" class="lable_radio"><!-- <button type="button" class="btn btn-primary btn-sm pull-right">
                                            Lock </button> -->
                                            <?php echo $key->ans_A; ?>
                                            <a onclick="clickthis()" href="<?php echo base_url();?>best_design_jobs/selected_daily_poll_ans/<?php echo $key->question_id; ?>/1"><span class="glyphicon glyphicon-lock pull-right" style="color: #0055A5;" ></span></a>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item1">
                                    <div class="radio">
                                        <label class="label_margin">
                                            <input type="radio" value="" name="ans" class="lable_radio">
                                            <?php echo $key->ans_B; ?>
                                            <a onclick="clickthis()" href="<?php echo base_url();?>best_design_jobs/selected_daily_poll_ans/<?php echo $key->question_id; ?>/2">
                                            <span class="glyphicon glyphicon-lock pull-right" style="color: #0055A5;" ></span></a>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item1">
                                    <div class="radio">
                                        <label class="label_margin">
                                            <input type="radio" value="" name="ans" class="lable_radio">
                                            <?php echo $key->ans_C; ?>
                                            <a onclick="clickthis()" href="<?php echo base_url();?>best_design_jobs/selected_daily_poll_ans/<?php echo $key->question_id; ?>/3">
                                            <span class="glyphicon glyphicon-lock pull-right" style="color: #0055A5;" ></span></a>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item1">
                                    <div class="radio">
                                        <label class="label_margin">
                                            <input type="radio" value="" name="ans" class="lable_radio">
                                            <?php echo $key->ans_D; ?>
                                            <a onclick="clickthis()" href="<?php echo base_url();?>best_design_jobs/selected_daily_poll_ans/<?php echo $key->question_id; ?>/4">
                                            <span class="glyphicon glyphicon-lock pull-right" style="color: #0055A5;" ></span></a>
                                        </label>

                                    </div>
                                </li>
                                
                            </ul>
                        <?php } ?>
                        <p id="myElem" style="display: none;text-align: center;color:green;">Thank You!</p>
                            <div class="panel-footer text-center" style="color:#0055A5;">
                                 Please Lock Your Answer
                            </div>
                        </div>
                        <!-- <hr style="margin-top: -2px;"> -->
                        <div class="panel-footer text-center" style="">
                            <a href="<?php echo base_url();?>best_design_jobs/view_daily_poll" class="small" target="poll"><center >Yesterday's Poll Results</center></a>
                        </div>
</div>

<style>
    /*body {
        margin-top: 20px;
    }*/
.small {   
  animation-duration: 200ms;
  animation-name: tgle;
  animation-iteration-count: infinite;
  /*animation-direction: alternate;*/
}

@keyframes tgle {
  0% {
    opacity: 1;
    color: #0055A5;
  }

  25% {
    color: green;
    opacity: 0;
  }

  50% {
    opacity: 1;
    color: #FF7900;
  }

  75% {
   opacity: 0;
   color: orange;
 }

 100% {
   opacity: 1;
   color: #0055A5;
 }
}
    .small:hover{text-decoration: none;color:#FF7900;}

    .label_margin
    {margin: -2px 0px;}
    
    /* a .small :hover{
      color: #FF7900;
      text-decoration: none;
      display: inline-block;
      background-color: red;
    }*/
    /*.small{color: #0055A5;}*/
    .small:hover{text-decoration: none;color:#FF7900;}

    .panel-body:not(.two-col) {
        padding: 0px;
    }

    .glyphicon {
        margin-right: 5px;
    }
    input[type="radio"].lable_radio{
      opacity: 1;
      margin-top: 0px;margin-left: -15px;

    }

    .glyphicon-new-window {
        margin-left: 5px;
    }

    .panel-body .radio, .panel-body .radio {
        margin-top: 0px;
        margin-bottom: 0px;

    }

    .panel-body .list-group {
        margin-bottom: 0;

    }

    .margin-bottom-none {
        margin-bottom: 0;
    }

    .panel-body .radio label, .panel-body .radio label {
        display:block;
    }
</style>

<script type="text/javascript">
    
function clickthis()
{
  $("#myElem").show().delay(10000).queue(function(n) 
  {
  $(this).hide(); n();
});
}

</script>


