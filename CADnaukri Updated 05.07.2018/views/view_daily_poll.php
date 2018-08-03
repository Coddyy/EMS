<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<div class="panel panel-primary" style="margin-top: 0px; border:0px solid #0055A5;">
                        <div class="panel">
                            <h3 class="panel-title" style="font-size: 17px; background-color: #fff;color: #000;margin-top: 8px;"><span class="fa fa-line-chart"></span><center><b>Yesterday's Result</b></center></h3>
                        </div>
                         <?php 

                        $daily_poll_details=$this->Search_M->get_daily_poll_result();
                        foreach ($daily_poll_details as $key) { 

                            $total_vote=($key->vote_ans_A + $key->vote_ans_B + $key->vote_ans_C + $key->vote_ans_D);
                            $per_of_A=($key->vote_ans_A / $total_vote) *100 ;
                            $per_of_B=($key->vote_ans_B / $total_vote) *100 ;
                            $per_of_C=($key->vote_ans_C / $total_vote) *100 ;
                            $per_of_D=($key->vote_ans_D / $total_vote) *100 ;
                        ?>
                        <div class="panel" style="background-color: #fff; color: #000;">
                            <p class="panel-title" style="margin-top: -10px;margin-right: 1px; margin-left: 1px;font-size: 15px;color: #888F95; text-align: center; line-height: 15px; height: 65px;"><!-- <span class="fa fa-line-chart"></span> --> <?php echo $key->question; ?> </p>
                        </div>
                        <div class="panel-body" style="margin-top: -8px;">
                            <ul class="list-group" style="font-size: 12px; padding: 5px 5px;">
                                <li class="list-group-item1">
                                    <div class="radio">
                                        <label class="label_margin" style="">
                                             <?php echo $key->ans_A; ?><!-- <button type="button" class="btn btn-primary btn-sm pull-right">
                                            Lock </button> -->
                                            <span class="glyphicon pull-right" style="color: #0055A5;" ><?php echo round($per_of_A);?>&nbsp%</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item1">
                                    <div class="radio">
                                        <label class="label_margin">
                                             <?php echo $key->ans_B; ?>
                                            <span class="glyphicon pull-right" style="color: #0055A5;" ><?php echo round($per_of_B);?>&nbsp%</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item1">
                                    <div class="radio">
                                        <label class="label_margin">
                                             <?php echo $key->ans_C; ?>
                                            <span class="glyphicon pull-right" style="color: #0055A5;" ><?php echo round($per_of_C);?>&nbsp%</span>
                                        </label>
                                    </div>
                                </li>
                                <li class="list-group-item1">
                                    <div class="radio">
                                        <label class="label_margin">
                                             <?php echo $key->ans_D; ?>
                                            <span class="glyphicon pull-right" style="color: #0055A5;" ><?php echo round($per_of_D);?>&nbsp%</span>
                                        </label>

                                    </div>
                                </li>
                                
                            </ul>
                            <?php } ?>
                            <div class="panel-footer text-center" style="color:#0055A5;">
                                 <p><?php //echo $total_vote; ?></p>
                            </div>
                        </div>
                        <!-- <hr style="margin-top: -2px;"> -->
                        <div class="panel-footer text-center" style="">
                            <a href="<?php echo base_url();?>best_design_jobs/daily_poll" class="small" target="poll"><center>Today's Poll</center></a>
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


