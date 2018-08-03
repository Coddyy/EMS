<title>Set Password</title>
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
    <div class="row vertical">
        <div class="col-md-6 col-md-offset-3">
    		<div class="panel panel-default">
			  	<div class="panel-heading1" style="background-color:#0055A5;color:#fff;height: 40px;line-height: 40px; vertical-align: middle;margin-top: -20px;border-radius: 4px;">
			    	<h3 align="center" style="padding: 8px;">Set Your Password</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form action="" method="post" id="f1">
                    <fieldset>
			    	  	<div class="form-group">
			    	  	<label>New password</label>
			    		    <input class="form-control" onkeyup="validatepass()" id="pass" placeholder="Password" name="password" type="password" required>
			    		</div>
			    		<label id="errpass"></label>
			    		<div class="form-group">
			    		<label>Confirm password</label>
			    			<input class="form-control" id="cpass" onkeyup="validatecpass()" placeholder="Confirm password" name="confirm_password" type="password" value="" required>
			    		</div>
			    		<label id="errcpass"></label>
			    		<div class="form-group">
			    		<label>Date of birth</label>
			    			<input class="form-control" id="dob"  placeholder="Enter your date of birth" name="dob" type="date"  required>
			    		</div>
			    		<div class="form-group">
			    		<label>Nickname</label>
			    			<input class="form-control" id="nick_name"  placeholder="Enter your nickname" name="nick_name" type="text"  required>
			    		</div>
			    		<button type="submit" align="center" class="btn_submit" onclick="validate()" style=""> Submit</button>
    					<label id="signup"> </label>
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
<br />
<style type="text/css">
	.btn_submit{margin-left:30%;margin-right:30%;background-color: #FF7900;color:white;width:40%;font-size: 20px;padding: 0 0;}
	.btn_submit:hover{margin-left:30%;margin-right:30%;background-color: #0055A5;color:white;width:40%;}

</style>

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