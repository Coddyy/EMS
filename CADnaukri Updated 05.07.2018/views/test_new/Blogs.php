<!dochtmltype html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
      
        <div class="item active">
          <img src="<?php echo base_url()?>assets/images/360_760-min.jpg" style="height: 360px;width: 760px;">
           <div class="carousel-caption">
            <h4><a href="#">Lorem ipsum dolor sit amet consetetur sadipscing</a></h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="#" target="_blank">Latest News and Events</a></p>
          </div>
        </div><!-- End Item -->
 
         <div class="item">
          <img src="<?php echo base_url()?>assets/images/images1.jpg" style="height: 360px;width: 760px;">
           <div class="carousel-caption">
            <h4><a href="#">consetetur sadipscing elitr, sed diam nonumy eirmod</a></h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="#" target="_blank">Latest News and Events</a></p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="<?php echo base_url()?>assets/images/images3.jpg" style="height: 360px;width: 760px;">
           <div class="carousel-caption">
            <h4><a href="#">tempor invidunt ut labore et dolore</a></h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="#" target="_blank">Latest News and Events</a></p>
          </div>
        </div><!-- End Item -->
        
        <div class="item">
          <img src="<?php echo base_url()?>assets/images/images1.jpg" style="height: 360px;width: 760px;">
           <div class="carousel-caption">
            <h4><a href="#">magna aliquyam erat, sed diam voluptua</a></h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="#" target="_blank">Latest News and Events</a></p>
          </div>
        </div><!-- End Item -->

        <div class="item">
          <img src="<?php echo base_url()?>assets/images/images1.jpg" style="height: 360px;width: 760px;">
           <div class="carousel-caption">
            <h4><a href="#">tempor invidunt ut labore et dolore magna aliquyam erat</a></h4>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. <a class="label label-primary" href="#" target="_blank">Latest News and Events</a></p>
          </div>
        </div><!-- End Item -->
                
      </div><!-- End Carousel Inner -->


    <ul class="list-group col-sm-4">
      <li data-target="#myCarousel" data-slide-to="0" class="list-group-item"><h4 style="">Wellcome To Latest News And Events </h4></li>
      <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4 style="">consetetur sadipscing elitr, sed diam nonumy eirmod</h4></li>
      <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4 style="">tempor invidunt ut labore et dolore</h4></li>
      <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4 style="">magna aliquyam erat, sed diam voluptua</h4></li>
      <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><h4 style="">tempor invidunt ut labore et dolore magna aliquyam erat</h4></li>
    </ul>

      <!-- Controls -->
      <div class="carousel-controls">
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
      </div>

    </div><!-- End Carousel -->
</div>

<style type="text/css">
    body { padding-top: 50px; }

    #myCarousel .carousel-caption {
      left:0;
      right:0;
      bottom:0;
      text-align:left;
      padding:10px;
      background:#0055A5;
      text-shadow:none;
    }

    #myCarousel .list-group {
      position:absolute;
      top:0;
      right:0;
    }
    #myCarousel .list-group-item {
      border-radius:0px;
      cursor:pointer;
      color: #0055A5;
    }
    #myCarousel .list-group .active {
      background-color:#eee;  
    }

    @media (min-width: 992px) { 
      #myCarousel {padding-right:33.3333%;}
      #myCarousel .carousel-controls {display:none;}  
    }
    @media (max-width: 991px) { 
      .carousel-caption p,
      #myCarousel .list-group {display:none;} 
    }
</style>

<!-- <script type="text/javascript">
  $(document).ready(function(){
    
  var clickEvent = true;
  $('#myCarousel').carousel({
    interval:   4000 
  }).on('click', '.list-group li', function() {
      clickEvent = true;
      $('.list-group li').removeClass('active');
      $(this).addClass('active');   
  }).on('slid.bs.carousel', function(e) {
    if(!clickEvent) {
      var count = $('.list-group').children().length -1;
      var current = $('.list-group li.active');
      current.removeClass('active').next().addClass('active');
      var id = parseInt(current.data('slide-to'));
      if(count == id) {
        $('.list-group li').first().addClass('active'); 
      }
    }
    clickEvent = false;
  });
    })

    $(window).load(function() {
        var boxheight = $('#myCarousel .carousel-inner').innerHeight();
        var itemlength = $('#myCarousel .item').length;
        var triggerheight = Math.round(boxheight/itemlength+1);
      $('#myCarousel .list-group-item').outerHeight(triggerheight);
    });
</script> -->