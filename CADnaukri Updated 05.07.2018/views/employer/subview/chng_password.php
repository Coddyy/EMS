<title>Employer | Reset Password</title>
<style>
body{
    background: url(http://mymaplist.com/img/parallax/back.png);
    background-color: #444;
    background: url(http://mymaplist.com/img/parallax/pinlayer2.png),url(http://mymaplist.com/img/parallax/pinlayer1.png),url(http://mymaplist.com/img/parallax/back.png);    
}

.vertical-offset-100{
    padding-top:100px;
}
</style>
<br />

<div class="container">
<?php if($this->uri->segment(2) == 'new_password_updated'){ ?>
<div class="alert alert-success">
  Password Updated
</div>
<?php } else if($this->uri->segment(2) == 'new_password_not_updated'){ ?>
<div class="alert alert-danger">
  Password Not Updated
</div>
<?php } ?>
    <div class="row vertical">
        <div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h4 align="center">Set New Password</h4>
			 	</div>
			  	<div class="panel-body">
			    	<form action="" method="post" id="f1">
                    <fieldset>
			    	  	<div class="form-group">
			    	  	<label>Password</label>
			    		    <input class="form-control" onkeyup="validatepass()" id="pass" placeholder="Password" name="password" type="password" required>
			    		</div>
			    		<label id="errpass"></label>
			    		<div class="form-group">
			    		<label>Confirm Password</label>
			    			<input class="form-control" id="cpass" onkeyup="validatecpass()" placeholder="Confirm Password" name="confirm_password" type="password" value="" required>
			    		</div>
			    		<label id="errcpass"></label>
			    		<input type="submit" align="center" name="reset" onclick="validate()" style="margin-left:30%;margin-right:30%;background-color: green;color:white;width:40%;" value="Submit"> </input>
    					<label id="signup"> </label>
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
<br />
<script>
$(document).ready(function(){
  $(document).mousemove(function(e){
     TweenLite.to($('body'), 
        .5, 
        { css: 
            {
                backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
            }
        });
  });
});

function validate()
{
	if( !validatepass() || !validatecpass())
	{
		show("signup");
		dislabel("Enter Valid Details","signup","red");
		document.getElementById("f1").reset();
		return false;
		
	}
	else
	{
		return true;
	}

}

function show(id)
{
	document.getElementById(id).style.display="block";
	return;
}
function hide(id)
{
	document.getElementById(id).style.display="none";
}

function validatepass()
{
	var name=document.getElementById("pass").value;
	if(name.length < 8)
	{
		dislabel("Enter at least 8 characters","errpass","red");
		return false;
	}
	else if(name.length > 16)
	{
		dislabel("Oops! Max length 16 characters!","errpass","red");
		return false;
	}
	// else if(!name.match(/^[A-Z]{1,}[a-z]{1,}[!@#$%^&*\-\.\_]{1,}[0-9]{1,}[A-Za-z0-9!@#$%^&*\-\.\_]*$/))
	else if(!name.match(/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$#@$!%*?&])[A-Za-z\d$#@$!%*?&]{8,16}$/))
	{
		dislabel("Should have 1 Capital, Small, Number and Special","errpass","red");
		return false;
	}
	else
	{
		dislabel("Great!","errpass","green");
		return true;
	}
}
function validatecpass()
{
	var password=document.getElementById("pass").value;
	var confirm_password=document.getElementById("cpass").value;
	if(password != confirm_password)
	{
		dislabel("Don't Copy!, Please Type Your Password","errcpass","red");
		return false;
	}
	else
	{
		dislabel("Matched","errcpass","	green");
		return true;
	}
}

function dislabel(msg,plocation,color)
{
	document.getElementById(plocation).innerHTML = msg;
	document.getElementById(plocation).style.color = color;
}
</script>