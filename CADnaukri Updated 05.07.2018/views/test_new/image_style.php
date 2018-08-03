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
<style>
.container {
  position: relative;
  width: 50%;
}

.image {
 /* display: block;*/
  width: 100%;
  height: auto;border: 1px solid red;
}
.container:hover .image{border: 1px solid green;
  /*display: block;*/
  width: 50%;
  height:50% ;
margin-left:10%;
margin-top:10%;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 100%;
  width: 100%;
  opacity: 0;
  transition: .5s ease;
  background-color: transparent;
}

.container:hover .overlay {
  opacity:1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 60%;
  left: 35%;

  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
}
#mydiv {
    margin: auto;
    border: 1px solid black;

    /*width: 200px;
    height: 100px;*/
    background-color: yellow;
    color: #000;
    -webkit-animation: mymove 05s infinite; /* Chrome, Safari, Opera */
    animation: mymove 05s infinite;
    animation-direction: alternate;
}
/* Chrome, Safari, Opera */
/*@-webkit-keyframes mymove {
    100% {-webkit-transform: rotate(360deg);}
}*/

/* Standard syntax */
@keyframes mymove {
    0% {transform: rotate(180deg);}

}
</style>
</head>
<body>

<h2>Fade in Overlay</h2>
<p>Hover over the image to see the effect.</p>

<div class="container">
  <img src="<?php echo base_url()?>assets/images/images5.jpg" alt="" class="image">
  <div class="overlay">
    <div class="text" id=mydiv>Follow us</div>
  </div>
</div>

</body>
</html>
