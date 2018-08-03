<!DOCTYPE html>
<html lang="en">
<head>
  <title>Schools | Register for free</title>
  <meta charset="CADnaukri">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
  .h1{text-align: center; border-bottom: 0px solid;background-color:#0055A5;padding: 20px;border-radius: 4px;color:#fff; font-size: 28px;}
  @media screen and (max-width: 768px){
    .h1{font-size: 22px;}
  }
</style>

<body onload="document.sine_up.cname.focus();">
<div class="container" style="border:1px solid grey; border-radius: 4px;">
<div class="col-md-4"></div>

<?php if($this->uri->segment(2) == "saved")
{ ?>
<p class="h1">Thank you for ubmitting your company</p>
<br /><br />
<div class="alert alert-success" align="center" style="width:60%;">
<br /><br />
  <h3>It may take upto 72 hrs to get updated in our database</h3>
<br /><br /><br />
</div>
<br /><br />
<?php }else if($this->uri->segment(2) == "not_saved"){ ?>
<div class="alert alert-danger" align="center">
  School not saved!
</div>
<?php } ?>


<hr>

<?php if($this->uri->segment(2) != "saved")
{ ?>
<p class="h1">Register Your Company</p>
  <form class="form-horizontal" style="background-color:;" action="" method="post" name="resform1" onsubmit="return formValidation()">
    <div class="form-group">
      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12"></div>
          <div class="col-md-6 col-sm-12 col-xs-12">
              <label class="control-label col-md-4 col-xs-12" for="cname">Company Name:</label>
                <div class="col-md-8 col-xs-12">
                  <input type="text" class="form-control" id="cname"  placeholder="Enter name" name="cname" required>
                </div>
          </div>
        </div>
      </div>
      <div class="form-group">
      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12"></div>
          <div class="col-md-6 col-sm-12 col-xs-12">
              <label class="control-label col-md-4 col-xs-12" for="cname">Contact Person:</label>
                <div class="col-md-8 col-xs-12">
                  <input type="text" class="form-control" placeholder="Enter name" name="contact_person_name" required>
                </div>
          </div>
        </div>
      </div>
      <div id="resultajax"></div>
      <?php $year=date('Y'); ?>
      <div class="form-group">
      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12"></div>
          <div class="col-md-6 col-sm-12 col-xs-12">  
            <label class="control-label col-xs-12 col-md-4"  for="year">Year Of Establishment:
            </label>
              <div class="col-md-8 col-xs-12">  
                <!-- <select name="year" id="year" onChange="getAvl(this.value);" class="form-control" required> -->
                <select name="est_year" id="model-list" class="demoInputBox"  required>
                  <?php for($i=$year;$i>=1980;$i--){?>
                  <option value="<?php echo $i;?>"><?php echo $i;?></option>
                  <?php } ?>
              </select>        
            </div>
            
          </div>
      </div>
    </div>
    
    <div class="form-group">
      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12"></div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <label class="control-label col-xs-12 col-md-4" for="mobile">Mobile:</label>
              <div class="col-md-8 col-xs-12">          
                <input type="text" maxlength="10" onkeyup = "validate_number(this)" class="form-control" id="phone" placeholder="Enter number" name="mobile" required>
              </div>
          </div>  
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12"></div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <label class="control-label col-xs-12 col-md-4" for="land">Land Line Number:</label>
              <div class="col-md-8 col-xs-12">          
                <input type="text" maxlength="15" onkeyup = "validate_number(this)" class="form-control" id="land" placeholder="Enter number" name="landno" required>
              </div>
          </div>  
      </div>
    </div> 
    <div class="form-group">
        <div class="row">
          <div class="col-md-3 col-xs-12 col-sm-12"></div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <label class="control-label col-xs-12 col-md-4" for="websit">Website:</label>
                <div class="col-md-8 col-xs-12">          
                  <input type="text" class="form-control" id="web" placeholder="Enter website" name="website" required>
                </div>
            </div>
        </div>
      </div>     
      <div class="form-group">
        <div class="row">
          <div class="col-md-3 col-xs-12 col-sm-12"></div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <label class="control-label col-xs-12 col-md-4" for="email">Email:</label>
                <div class="col-md-8 col-xs-12">          
                  <input type="email" class="form-control" onblur="validate_email(this.value);" id="email" placeholder="Enter email" name="email" required>
                </div>
            </div>
        </div>
      </div>
    <div class="form-group">
      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12"></div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <label class="control-label col-xs-12 col-md-4" for="address">Address:</label>
              <div class="col-md-8 col-xs-12">          
                <textarea class="form-control" rows="3" id="add" placeholder="Enter address" name="address" required>
                </textarea>
              </div>
          </div>
      </div>
    </div>
    <div class="form-group">
      <div class="row">
        <div class="col-md-3 col-xs-12 col-sm-12"></div>
          <div class="col-md-6 col-sm-12 col-xs-12">  
            <label class="control-label col-xs-12 col-md-4" for="course">Course Offered:</label>
              <div class="col-md-8 col-xs-12">  
                 <input type="text" class="form-control" onkeyup = "validate_course(this)" id="course" placeholder="Example:- Autocad ; Catia ; Creo" name="course" required>       
            </div>
          </div>
      </div>
    </div>     
      <div class="form-group">
        <div class="control-label col-sm-6 col-xs-6" style="border:0px solid;" align="center"> 
          <button type="submit" class="btn btn-primary btn_style" name="submit">Submit</button>
          <!-- <input type="submit" class="btn btn-success" name="submit" value="Submit" > -->
        </div>
        <div class="control-label col-sm-6 col-xs-6" style="border:0px solid;" align="center">          
           <!--  <button type="reset" name="cancel" class="btn btn-danger pull-left">Reset</button> -->
           <button type="reset" name="cancel" class="btn btn-primary pull-left btn_style">Reset </button>
        </div>
      </div>
      
  </form>
  <?php } ?>
</div>

</body>
<br>

<style type="text/css">
  .btn_style{background-color: #0055A5;max-width: 120px;}
</style>





<script>
function validate_email(evalue)
{
  //var value=val.split(" ");
  var cname=document.getElementById('cname').value;
  var value=cname.split(" ");
  var company_name=value[0];
  //alert(value[0]);
  var row=evalue.split("@");
  var email=row[1];
  // if(email.match(/company_name.*/))

  var string = company_name.toLowerCase();
  var stremail = email.toLowerCase();
  var string2=stremail.substring(stremail.lastIndexOf("@")+1,stremail.lastIndexOf("."));
  if(cname.length == 0)
  {
    alert('Please Give your Company Name');
    document.getElementById('email').value='';
    document.getElementById('cname').focus();
  }
  else
  {
    if(string2.indexOf(string) > -1)
    {
      //alert(string+" found inside your_string");
      return true;
    }
    else
    {
      alert('Email is not matching with your company name');
      document.getElementById('email').value='';
      document.getElementById('email').focus();
    }
  }
  

}

function validate_number(num) {
    num.value = num.value.replace(/[^0-9]+/g, '');
}
function validate_course(course) {
  //alert(course);
    course.value = course.value.replace(/[^a-zA-Z0-9;]+/g, '');
}

</script>