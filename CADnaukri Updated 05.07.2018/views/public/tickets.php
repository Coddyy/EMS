<title>
Contact Us
</title>

<style>

fieldset {
    border: thin solid #ccc; 
    border-radius: 4px;
    padding: 20px;
    padding-left: 40px;
    background: #fbfbfb;
}
legend {
   color: #678;
}
.form-control {
    width: 95%;
}
label small {
    color: #678 !important;
}
span.req {
    color:red;
    font-size: 112%;
}
</style>
<br />
<br />
<div class="container" style="border: 0px solid red;" >

	<div class="row">
        <div class="col-md-6 col-xs-12">
        	<!--Contact us-->
        		

<style type="text/css">
  			/*.glyphicon{color:#0055A5;}*/
  			.iframe_map{
  				width:440px;height: 295px;border: 0px solid red;
  			}
</style>
                    <div class="panel panel-default" style="margin-top: 15px;">
                        <div class="panel-heading">
                            <h2 align="center" style="color:grey; padding: 0px 0;">Contact Us</h2><hr style="border-color: pink;">
                            <h3 align="left" style="color:#0055A5;">Development Centre </h3><hr>
                            	<p>218, 2nd Floor, OCAC Tower<br>
								Samantarapuri, Near Acharya Vihar Square<br>
								Doordarshan Colony, Gajapati Nagar<br>
								Bhubaneswar, Odisha 751013</p>
                           
                           
                            	<p class="pull-top">Mail us at:

								<i class="glyphicon glyphicon-envelope blue" style="padding: 0 10px;"></i>info@cadnaukri.com</p>
                           

                        </div>
		                   <form action="" method="POST">
		                    <div class="panel-body">
		                        <div class="form-group">
 									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.029892640662!2d85.82875731492055!3d20.299029786398247!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a1909e97ebfffff%3A0x87ebba93f73f8cd8!2sCADnaukri.com!5e0!3m2!1sen!2sin!4v1512108272637" frameborder="0" style="border:0px solid red;" class="iframe_map img-responsive"  allowfullscreen></iframe>
 								</div>
		                        
		                    </div>
		                   </form>
                	</div>
            
        
        


        	<!--contact us-->
            
                <!-- <img src="<?php echo base_url();?>assets/images/query.png" /> -->
            
        </div>
        <div class="col-md-6 col-xs-12" >
        <?php if($this->uri->segment(1) == "Query-saved"){ ?>
            <div class="alert alert-success">
              Your Query Has Been Saved Successfully
            </div>
        <?php } else if($this->uri->segment(1) == "Query-not-saved"){ ?>
            <div class="alert alert-danger">
              Oops! Query Not Saved
            </div>
        <?php } ?>
        <?php if($this->uri->segment(2) == "Re-Opened"){ ?>
            <div class="alert alert-info">
              Your Query Has Been Re Opened
            </div>
        <?php } else if($this->uri->segment(2) == "Re-Opened-Failed"){ ?>
            <div class="alert alert-danger">
              Oops! Query Not Saved
            </div>
        <?php } ?>

        
            <form action="" method="post" id="query" role="form" enctype="multipart/form-data">
            <fieldset><legend class="text-center">Valid information is required for any queries. <!--<span class="req"> <small> required *</small></span> --></legend>

            <div class="form-group"> 	 
                <label for="firstname"><span class="req">* </span> Full name: </label>
                    <input class="form-control" type="text" placeholder="Full Name" name="name" id = "txt" onkeyup = "Validate(this)" required /> 
                        <div id="errFirst"></div>    
            </div>
            
            <div class="form-group">
            <label for="phonenumber"><span class="req">* </span> Phone Number: </label>
                    <input required type="text" name="mobile" id="phone" class="form-control phone" maxlength="10" onkeyup="validatephone(this);" placeholder="Mobile" required="" /> 
            </div>

            <div class="form-group">
                <label for="email"><span class="req">* </span> Email Address: </label> 
                    <input class="form-control" required type="text" placeholder="Email" name="email" id = "email"  onkeyup="email_validate(this.value);" />   
                        <div class="status" id="status"></div>
            </div>

            <div class="form-group">     
                <label for="firstname"><span class="req">* </span> Related To </label>
                    <select name="related_to" required="">
                        <option value="SALES">Sales</option>
                        <option value="JOB-POST">Job Post</option>
                        <option value="WEB-PAGE">Web Pages</option>
                        <option value="PLACEMENT">Placement</option>
                    </select>    
            </div>

            <div class="form-group">     
                <label for="firstname"><span class="req">* </span> Comments </label>
                    <input class="form-control" style="width:100%;" type="textarea" placeholder="Comment" name="comments" id = "txt" onkeyup = "Validate(this)" maxlength="150" required /> 
                        <div id="errFirst"></div>    
            </div>
            <div class="form-group">     
                <label for="firstname"><span class="req"> </span> Screenshot ( If Any ) </label>
                    <input class="form-control" style="width:100%;" type="file" name="screenshot" /> 
                        <div id=""><span style="color:orange;" ><small>[ Size Should be less than 50 kb ]</small></span></div>    
            </div>
           

            

            <div class="form-group" align="center" style="">
                <button class="btn btn-success" type="submit" name="submit_reg" onclick="validate()">Shoot<span class="glyphicon glyphicon-send"></span></button>
            </div>
            <div class="status" id="shoot"></div>
 

            </fieldset>
            </form><!-- ends register form -->
        </div><!-- ends col-6 -->

	</div>
</div>
<br />
<br />
<script>
function validate()
{
    alert(screentshot.files[0].size);
    if(!email_validate())
    {
        show("shoot");
        queryprompt("Enter Valid Details","shoot","red");
        document.getElementById("query").reset();
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
function validatephone(phone) 
{
    var maintainplus = '';
    var numval = phone.value
    if ( numval.charAt(0)=='+' )
    {
        var maintainplus = '';
    }
    curphonevar = numval.replace(/[\\A-Za-z!"£$%^&\,*+_={};:'@#~,.Š\/<>?|`¬\]\[]/g,'');
    phone.value = maintainplus + curphonevar;
    var maintainplus = '';
    phone.focus;
}
// validates text only
function Validate(txt) {
    txt.value = txt.value.replace(/[^a-zA-Z-'\n\r. ]+/g, '');
}
// validate email
function email_validate(email)
{
    var email=document.getElementById("email").value;
    if(email.length == 0)
    {
        queryprompt("Required Email","status","red");
        return false;
    }
    else if(!email.match(/^[A-Za-z0-9.\-_]{1,}@[A-Za-z]{1,}\.[a-z]{2,4}$/))
    {
        queryprompt("Enter Valid Email","status","red");
        return false;
    }
    else
    {
        queryprompt("Good To Go","status","green");
        return true;
    }
}
function queryprompt(msg,plocation,color)
{
    document.getElementById(plocation).innerHTML = msg;
    document.getElementById(plocation).style.color = color;
}

</script>

