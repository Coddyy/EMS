<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
.panel-default{
    text-align:center;
    cursor:pointer;
    font-family: 'Raleway',sans-serif;
    background-color: #47c8ed;    
    height:100%;
    border:2px solid black;
    color:#fff;
   
}
.panel-default > .panel-footer {
    color: #fff;
    background-color: #FF80FF;    
    display:none;
    text-shadow: 1px 1px 1px rgba(150, 150, 150, 1);
    border:2px solid black;
     border-left: 0px;
    border-right:0px;
     border-bottom: 0px;
   

}
.panel-default i{
    font-size: 5em;
    }
</style>
<div class="container" style="height: 500px;">
	<div class="row" style="height:200px;">
        <a href="<?php echo base_url();?>superadmin/index/view_tickets/SALES">
    		<div class="col-md-6 col-sm-12 col-xs-12" style="">
                <div class="panel panel-default">
                    <div class="panel-body">                    
                        <h2>Sales Related</h2>
                        <!-- <p>I will show the footer panel</p> -->
                    </div>
                    <div class="panel-footer">Panel footer</div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url();?>superadmin/index/view_tickets/JOB-POST">
            <div class="col-md-6 col-sm-12 col-xs-12" style="">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2>Job Post Related</h2>
                        <!-- <p>I will show the footer panel with a Badge</p> -->
                    </div>
                    <div class="panel-footer"><a href="#"><span class="badge">42</span></a></div>
                </div>
            </div>
        </a>
    </div>
	<div class="row" style="height:200px;">
        <a href="<?php echo base_url();?>superadmin/index/view_tickets/WEB-PAGE">
            <div class="col-md-6 col-sm-12 col-xs-12" style="">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2>Site Related</h2>
                        <!-- <p>I will show the footer panel with a Badge</p> -->
                    </div>
                    <div class="panel-footer"><a href="#"><span class="badge">42</span></a></div>
                </div>
            </div>
        </a>
        <a href="<?php echo base_url();?>superadmin/index/view_tickets/PLACEMENT">
            <div class="col-md-6 col-sm-12 col-xs-12" style="">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h2>Placement Related</h2>
                        <!-- <p>I will show the footer panel with a Badge</p> -->
                    </div>
                    <div class="panel-footer"><a href="#"><span class="badge">42</span></a></div>
                </div>
            </div>
        </a>
	</div>
</div>

<script>
	$(function(){
$('.panel').hover(function(){
        $(this).find('.panel-footer').slideDown(250);
    },function(){
        $(this).find('.panel-footer').slideUp(250); //.fadeOut(205)
    });
});
</script>