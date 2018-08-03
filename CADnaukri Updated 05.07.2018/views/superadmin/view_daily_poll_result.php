<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
/* http://www.jquery2dotnet.com/ */
body{ margin-top:20px;}
.glyphicon { margin-right:5px;}
.rating .glyphicon {font-size: 22px;}
.rating-num { margin-top:0px;font-size: 20px; }
.progress { margin-bottom: 5px;}
.progress-bar { text-align: left; }
.rating-desc .col-md-3 {padding-right: 0px;}
.sr-only { margin-left: 5px;overflow: visible;clip: auto; }

<?php foreach ($view_poll as $key) { 
    $total_vote=($key->vote_ans_A + $key->vote_ans_B + $key->vote_ans_C + $key->vote_ans_D);

    $per_of_A=($key->vote_ans_A / $total_vote) *100 ;
    $per_of_B=($key->vote_ans_B / $total_vote) *100 ;
    $per_of_C=($key->vote_ans_C / $total_vote) *100 ;
    $per_of_D=($key->vote_ans_D / $total_vote) *100 ;

//     $percent=array($per_of_A,$per_of_B,$per_of_B,$per_of_B);
//     rsort($percent);
                                    
    //echo $total_vote;
?>


</style>
<!-- http://www.jquery2dotnet.com/ -->
<div class="container">
    <div class="row" >
        <div class="col-xs-12 col-md-12" >
            <div class="well well-sm">
                <div class="row">
                <h3 align="center"><?php echo $key->question; ?></h3>
                <br />
                    <div class="col-xs-12 col-md-6 text-center">
                        <h5 class="rating-num">
                            <span class="glyphicon glyphicon-user"></span><?php echo $total_vote;
                             ?>&nbsp
                            Votes

                            </h5>
                        <div class="rating">
                            
                            
                        </div>
                        <div>
                            
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <div class="row rating-desc" >
                            
                            <!-- end 5 -->
                            <div class="col-xs-3 col-md-3 text-right">
                                <?php echo $key->ans_A; ?>
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress" >
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $per_of_A;?>%;color:black;">
                                        <span class="sr-only" ><b><?php echo $key->vote_ans_A;?>&nbsp(<?php echo round($per_of_A);?>%)</b></span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 4 -->
                            <div class="col-xs-3 col-md-3 text-right">
                                <?php echo $key->ans_B; ?>
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $per_of_B;?>%;color:black;">
                                        <span class="sr-only"><b><?php echo $key->vote_ans_B;?>&nbsp(<?php echo round($per_of_B);?>%)</b></span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 3 -->
                            <div class="col-xs-3 col-md-3 text-right">
                                <?php echo $key->ans_C; ?>
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $per_of_C;?>%;color:black;">
                                        <span class="sr-only"><b><?php echo $key->vote_ans_C;?>&nbsp(<?php echo round($per_of_C);?>%)</b></span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 2 -->
                            <div class="col-xs-3 col-md-3 text-right">
                               <?php echo $key->ans_D; ?>
                            </div>
                            <div class="col-xs-8 col-md-9">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $per_of_D;?>%;color:black;">
                                        <span class="sr-only"><b><?php echo $key->vote_ans_D;?>&nbsp(<?php echo round($per_of_D);?>%)</b></span>
                                    </div>
                                </div>
                            </div>
                            <!-- end 1 -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
      <a href="<?php echo base_url();?>superadmin/admin/add_daily_poll"><button class="btn btn-primary">Back</button></a>
    </div>
    </div>
</div>
<?php } ?>
