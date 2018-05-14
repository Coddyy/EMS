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
<?php 

use App\Main_M as Main_M;
$Main_M = new Main_M();
$employee=$Main_M->all_non_asigned_employees(); 


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
        <form role="form" action="{{ route('taskInsert') }}" method="POST">
        <br style="clear:both">
        {{ csrf_field() }}
                    <h3 style="margin-bottom: 25px; text-align: center;">Asign Task</h3>
					<div class="form-group">
                        <input type="text" class="form-control" id="email" name="task" placeholder="Task" required>
                    </div>
					<div class="form-group">
						<input type="number" class="form-control" id="mobile" name="hours" placeholder="Time in hours" required>
					</div>
                    <div class="form-group">
                        <select name="emp_id" class="form-control">
                            <option value="">--Select Employee--</option>
                            <?php 
                            // echo '<pre>';
                            // print_r($employee);//die();
                            foreach ($employee as $key => $value) 
                            { ?>

                                <option value="<?php echo $value->id;?>"><?php echo $value->name;?></option>

                            <?php } ?>
                            ?>
                        </select>
                    </div>
            
        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Asign</button>
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

</script>