<br /><br /><br /><br /><br /><br />

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
.demo {
  text-align: center;
  font-size: 60px;
  margin-top:0px;
}
</style>
</head>
<body>
<?php echo date('m-d-Y H:i:s');?>
<input type="hidden" id="date" value="<?php echo '2018-03-15 16:56:01';?>" />
<p id="demo" class="demo"></p>

<script>

var date=document.getElementById("date").value;

    // Set the date we're counting down to
    

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get todays date and time
    var countDownDate = new Date(date).getTime();
    var now = (new Date()).getTime();

    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    //var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    //var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    // document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    // + minutes + "m " + seconds + "s ";

    document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
        return true;
        window.location="<?php echo base_url();?>candidate/dashboard";
    }
}, 1000);
</script>

<br /><br /><br /><br />
<br /><br /><br /><br />