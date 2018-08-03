<!DOCTYPE html>
<html>
<!dochtmltype html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
</head>
<body>
<div class="container">Hover on image
  <div style="border: 0px solid red;height: 67px;width: 67px;position: relative;">
    <img onmouseover="smallImg(this)" onmouseout="bigImg(this)" border="" src="<?php echo base_url()?>assets/images/social_t.jpg" alt="Smiley" width="64" height="64" class="im" >
    <div class="overlay" st>
      <div class="text" id=mydiv>Follow us</div>
    </div>
  </div>
</div><!--Container End-->

<style type="text/css">
  .im:hover{margin: 16px 16px;}

.overlay {
  /*position: absolute;*/
  top: 0px;
  bottom: 0;
  left: 0;
  right: 0;
  /*height: 100%;
  width: 100%;*/
  opacity: 0;
  transition: .5s ease;
  background-color: transparent;
}

.container:hover .overlay {
  opacity:1;
}

.text {
  color: white;
  font-size: 14px;
  /*position: absolute;*/
  top: ;
  left: ;

}
#mydiv {
    margin: auto;
    border: 1px solid black;
    margin-top:-30px;
    margin-left: 0px;
    /*width: 200px;
    height: 100px;*/
    background-color:transparent;
    color: #000;
    -webkit-animation: mymove 2s infinite; /* Chrome, Safari, Opera */
    animation: mymove 2s infinite;
    animation-direction: alternate;
}
/* Chrome, Safari, Opera */
/*@-webkit-keyframes mymove {
    100% {-webkit-transform: rotate(360deg);}
}*/

/* Standard syntax */
@keyframes mymove {
    0% {transform: rotate(360deg);}

}


</style>


<script>
function bigImg(x) {
    x.style.height = "64px";
    x.style.width = "64px";

}

function smallImg(x) {
    x.style.height = "32px";
    x.style.width = "32px";


}
</script>
<style>
/*.dropdown{margin-left: 40px;padding:}
.dropdown-menu{background-color: red;}*/
</style>
<div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="" data-toggle="dropdown" style="border:none; margin-top: 0px;margin-left: -15px;margin-top: ;font-size: 18px">By Location
          <span class="caret"></span></button>
          <ul class="dropdown-menu" style="margin-left: -25px;">
            <li class="col-md-1 col-xs-3"><a href="#" >Pune</a></li>
            <li class="col-md-1 col-xs-3"><a href="#" style="" >Ahmedabad</a></li>
            <li class="col-md-1 col-xs-3"><a href="#" >Bangalore</a></li>
            <li class="col-md-1 col-xs-3"><a href="#" >Chennai</a></li>
            <li class="col-md-1 col-xs-3"><a href="#" >Bhubaneswar</a></li>
            <li class="col-md-1 col-xs-3"><a href="#" >Delhi</a></li>
            <li class="col-md-1 col-xs-3"><a href="#" >Hyderabad</a></li>
            <li class="col-md-1 col-xs-3"><a href="#" >Indore</a></li>
            <li class="col-md-1 col-xs-3"><a href="#" >Mumbai</a></li>
            <li class="col-md-1 col-xs-3"><a href="#" >Surat</a></li>
            
               
          </ul>
        </div>

</body>
</html>
