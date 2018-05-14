
<style type="text/css">
    
.red{
    color:red;
    }
.form-area
{
    background-color: #FAFAFA;
    padding: 10px 40px 60px;
    /margin: 10px 0px 60px;
    border: 1px solid GREY;
    }
</style>
<?php if(Session::has('id')){ 

//  echo '<pre>';
// $data=Session::all();
// echo Session::get('name');die();

?>
<div class="container">
<div class="col-md-6">

    @if(Session::has('success_msg'))
        <div class="alert alert-success">{{ Session::get('success_msg') }}</div>
    @endif

    @if(Session::has('error_msg'))
        <div class="alert alert-danger">{{ Session::get('success_msg') }}</div>
    @endif

    <div class="form-area">  
        <form role="form" action="{{ route('employeeInsert') }}" method="POST">
        <br style="clear:both">
        {{ csrf_field() }}
                    <h3 style="margin-bottom: 25px; text-align: center;">Add Employee</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="emp_name" placeholder="Name" required>
					</div>
					<div class="form-group">
                        <input type="email" class="form-control" id="email" name="emp_email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input type="passsword" class="form-control" onblur="check()" id="pass" name="emp_password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input type="passsword" class="form-control" onblur="check()" id="cpass" name="emp_cpassword" placeholder="Confirm Password" required>
                        <span id="err_msg" style="color:red;display: none;">Password not matched</span>
                    </div>
                    
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="emp_mobile" placeholder="Mobile" required>
					</div>
                    <?php $role=array('Android Developer','Android Designer','BDE','Full Stack Android','Full Stack Web','Graphics Designer','HR','Manager','SEO','SMO','Team Leader','Web Developer','Web Designer');?>
                    <div class="form-group">
                        <select name="role" class="form-control">
                            <option value="">--Select Role--</option>
                            <?php foreach ($role as $key) 
                            {?>
                                <option value="<?php echo $key;?>"><?php echo $key;?></option>
                            <?php } ?>
                        </select>
                    </div>
					<!-- <div class="form-group">
						<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
					</div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" name="msg" rows="7"></textarea>
                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                    </div> -->
            
        <button type="submit" id="submit" name="submit" onmouseenter="check()" class="btn btn-primary pull-right">Add</button>
        </form>
    </div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});

    function check()
    {
        var pass=$('#pass').val();
        var cpass=$('#cpass').val();
        if(pass !='' && cpass != '')
        {
           if(pass == cpass)
            {
                $('#err_msg').hide();
                return true;
            }
            else
            {
                $('#cpass').val('');
                $('#err_msg').show();
            } 
        }
        
    }

</script>
  <?php } else { 

      Session::flush();
      return redirect()->action('LoginController@index');

    }
    ?>