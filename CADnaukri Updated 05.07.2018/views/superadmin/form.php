<!dochtmltype html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form action="" method="post">
<div class="panel panel-default">
  <!-- <div class="panel-heading">Dynamic Form Fields - Add & Remove Multiple fields</div>
  <div class="panel-heading">Education Experience</div> -->
  <div class="panel-body">
  
  <div id="education_fields"></div>
        
      <div class="col-sm-3 nopadding">
        <div class="form-group">
          <input type="text" class="form-control" id="Schoolname" name="title[]" value="" placeholder="Enter Articles">
        </div>
      </div>
      <!-- <div class="col-sm-3 nopadding">
        <div class="form-group">
          <input type="text" class="form-control" id="Major" name="Major[]" value="" placeholder="Major">
        </div>
      </div> -->
      <!-- <div class="col-sm-3 nopadding">
        <div class="form-group">
          <input type="text" class="form-control" id="Degree" name="Degree[]" value="" placeholder="Degree">
        </div>
      </div> -->

      <!-- <div class="col-sm-3 nopadding">
        <div class="form-group">
          <div class="input-group">
            <select class="form-control" id="educationDate" name="educationDate[]">
            
              <option value="">Date</option>
              <option value="2015">2015</option>
              <option value="2016">2016</option>
              <option value="2017">2017</option>
              <option value="2018">2018</option>
            </select>-->
            <div class="input-group-btn">
              <button class="btn btn-success" type="button"  onclick="education_fields();"> <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> </button>
            </div>
          </div>
        </div>
      </div> 

      <div class="clear"></div>
  
  </div>
     <!-- <div class="panel-footer"><small>Press <span class="glyphicon glyphicon-plus gs"></span> to add another form field :)</small>, <small>Press <span class="glyphicon glyphicon-minus gs"></span> to remove form field :)</small>
    </div>

  <div class="panel-footer"><small><em><a href="#">Cadnaukri.com</a></em></small>
  </div> -->

</div>

<script type="text/javascript">
  var room = 1;
  function education_fields() {
 
    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass"+room);
    var rdiv = 'removeclass'+room;
    divtest.innerHTML = '<div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Schoolname" name="title[]" value="" placeholder="Title"></div></div><div class="input-group-btn"> <button class="btn btn-danger" type="button" onclick="remove_education_fields('+ room +');"> <span class="glyphicon glyphicon-minus" aria-hidden="true"></span> </button></div></div></div></div><div class="clear"></div>';
    
    objTo.appendChild(divtest)
}
   function remove_education_fields(rid) {
     $('.removeclass'+rid).remove();
   }

</script>

<input type="submit" value="Add"></input>
</form>