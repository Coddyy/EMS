
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
        <form role="form" action="{{ route('insertModule') }}" method="POST">
        <br style="clear:both">
        {{ csrf_field() }}
                    <h3 style="margin-bottom: 25px; text-align: center;">Add Module</h3>
    				<div class="form-group">
						<input type="text" class="form-control" id="name" name="module" placeholder="Module Details" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" id="mobile" name="hours" placeholder="Hours Required" required>
					</div>
                    
        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right">Add</button>
        </form>
    </div>
</div>
</div>

  <?php } else { 

      Session::flush();
      return redirect()->action('LoginController@index');

    }
    ?>