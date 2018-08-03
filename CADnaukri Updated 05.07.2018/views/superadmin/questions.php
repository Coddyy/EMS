<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<div class="container">
    <div class="row">
        <div class="col-xs-12" style="">
            <div class="panel panel-default list-group-panel">
                <div class="panel-body">
                    <ul class="list-group list-group-header">
                        <li class="list-group-item list-group-body">
                            <div class="row">
                                <div class="col-xs-4 text-left">Question</div>
                                <div class="col-xs-2 text-left">Option 1</div>
                                <div class="col-xs-2 text-left">Option 2</div>
                                <div class="col-xs-2 text-left">Option 3</div>
                                <div class="col-xs-2 text-left">Option 4</div>

                            </div>
                        </li>
                    </ul>
                    <ul class="list-group list-group-body" style="">
                        <li class="list-group-item">
                        <?php $question1=$this->SuperAdmin_M->get_question_details($question->qtn1);?>
                            <div class="row">
                                <div class="col-xs-4 text-left" style=""> 
                                    <span class="glyphicon glyphicon-file" aria-hidden="true"></span> 
                                    <?php echo $question1->question;?>
                                </div>
                                <div class="col-xs-2" style=""><?php echo $question1->opt1;?></div>
                                <div class="col-xs-2" style=""><?php echo $question1->opt2;?></div>
                                <div class="col-xs-2" style=""><?php echo $question1->opt3;?></div>
                                <div class="col-xs-2" style=""><?php echo $question1->opt4;?></div>
                            </div><hr>

                        <?php $question2=$this->SuperAdmin_M->get_question_details($question->qtn2);?>
                            <div class="row">
                                <div class="col-xs-4 text-left" style=""> 
                                    <span class="glyphicon glyphicon-file" aria-hidden="true"></span> 
                                    <?php echo $question2->question;?>
                                </div>
                                <div class="col-xs-2" style=""><?php echo $question2->opt1;?></div>
                                <div class="col-xs-2" style=""><?php echo $question2->opt2;?></div>
                                <div class="col-xs-2" style=""><?php echo $question2->opt3;?></div>
                                <div class="col-xs-2" style=""><?php echo $question2->opt4;?></div>
                            </div><hr>
                        <?php $question3=$this->SuperAdmin_M->get_question_details($question->qtn3);?>
                            <div class="row">
                                <div class="col-xs-4 text-left" style=""> 
                                    <span class="glyphicon glyphicon-file" aria-hidden="true"></span> 
                                    <?php echo $question3->question;?>
                                </div>
                                <div class="col-xs-2" style=""><?php echo $question3->opt1;?></div>
                                <div class="col-xs-2" style=""><?php echo $question3->opt2;?></div>
                                <div class="col-xs-2" style=""><?php echo $question3->opt3;?></div>
                                <div class="col-xs-2" style=""><?php echo $question3->opt4;?></div>
                            </div><hr>
                        <?php $question4=$this->SuperAdmin_M->get_question_details($question->qtn4);?>
                            <div class="row">
                                <div class="col-xs-4 text-left" style=""> 
                                    <span class="glyphicon glyphicon-file" aria-hidden="true"></span> 
                                    <?php echo $question4->question;?>
                                </div>
                                <div class="col-xs-2" style=""><?php echo $question4->opt1;?></div>
                                <div class="col-xs-2" style=""><?php echo $question4->opt2;?></div>
                                <div class="col-xs-2" style=""><?php echo $question4->opt3;?></div>
                                <div class="col-xs-2" style=""><?php echo $question4->opt4;?></div>
                            </div><hr>
                        <?php $question5=$this->SuperAdmin_M->get_question_details($question->qtn5);?>
                            <div class="row">
                                <div class="col-xs-4 text-left" style=""> 
                                    <span class="glyphicon glyphicon-file" aria-hidden="true"></span> 
                                    <?php echo $question5->question;?>
                                </div>
                                <div class="col-xs-2" style=""><?php echo $question5->opt1;?></div>
                                <div class="col-xs-2" style=""><?php echo $question5->opt2;?></div>
                                <div class="col-xs-2" style=""><?php echo $question5->opt3;?></div>
                                <div class="col-xs-2" style=""><?php echo $question5->opt4;?></div>
                            </div><hr>
                        <?php $question6=$this->SuperAdmin_M->get_question_details($question->qtn6);?>
                            <div class="row">
                                <div class="col-xs-4 text-left" style=""> 
                                    <span class="glyphicon glyphicon-file" aria-hidden="true"></span> 
                                    <?php echo $question6->question;?>
                                </div>
                                <div class="col-xs-2" style="">...<?php echo $question6->opt1;?></div>
                                <div class="col-xs-2" style="">...<?php echo $question6->opt2;?></div>
                                <div class="col-xs-2" style="">...<?php echo $question6->opt3;?></div>
                                <div class="col-xs-2" style="">...<?php echo $question6->opt4;?></div>
                            </div><hr>
                        <?php $question7=$this->SuperAdmin_M->get_question_details($question->qtn7);?>
                            <div class="row">
                                <div class="col-xs-4 text-left" style=""> 
                                    <span class="glyphicon glyphicon-file" aria-hidden="true"></span> 
                                    <?php echo $question7->question;?>
                                </div>
                                <div class="col-xs-2" style=""><?php echo $question7->opt1;?></div>
                                <div class="col-xs-2" style=""><?php echo $question7->opt2;?></div>
                                <div class="col-xs-2" style=""><?php echo $question7->opt3;?></div>
                                <div class="col-xs-2" style=""><?php echo $question7->opt4;?></div>
                            </div><hr>
                        <?php $question8=$this->SuperAdmin_M->get_question_details($question->qtn8);?>
                            <div class="row">
                                <div class="col-xs-4 text-left" style=""> 
                                    <span class="glyphicon glyphicon-file" aria-hidden="true"></span> 
                                    <?php echo $question8->question;?>
                                </div>
                                <div class="col-xs-2" style=""><?php echo $question8->opt1;?></div>
                                <div class="col-xs-2" style=""><?php echo $question8->opt2;?></div>
                                <div class="col-xs-2" style=""><?php echo $question8->opt3;?></div>
                                <div class="col-xs-2" style=""><?php echo $question8->opt4;?></div>
                            </div><hr>
                        <?php $question9=$this->SuperAdmin_M->get_question_details($question->qtn9);?>
                            <div class="row">
                                <div class="col-xs-4 text-left" style=""> 
                                    <span class="glyphicon glyphicon-file" aria-hidden="true"></span> 
                                    <?php echo $question9->question;?>
                                </div>
                                <div class="col-xs-2" style=""><?php echo $question9->opt1;?></div>
                                <div class="col-xs-2" style=""><?php echo $question9->opt2;?></div>
                                <div class="col-xs-2" style=""><?php echo $question9->opt3;?></div>
                                <div class="col-xs-2" style=""><?php echo $question9->opt4;?></div>
                            </div><hr>
                        <?php $question10=$this->SuperAdmin_M->get_question_details($question->qtn10);?>
                            <div class="row">
                                <div class="col-xs-4 text-left" style=""> 
                                    <span class="glyphicon glyphicon-file" aria-hidden="true"></span> 
                                    <?php echo $question10->question;?>
                                </div>
                                <div class="col-xs-2" style=""><?php echo $question10->opt1;?></div>
                                <div class="col-xs-2" style=""><?php echo $question10->opt2;?></div>
                                <div class="col-xs-2" style=""><?php echo $question10->opt3;?></div>
                                <div class="col-xs-2" style=""><?php echo $question10->opt4;?></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>