<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<style type="text/css">
  body{background:#f9f9f9;}
#wrapper{padding:90px 15px;}
.navbar-expand-lg .navbar-nav.side-nav{flex-direction: column;}
.card{margin-bottom: 15px; border-radius:0; box-shadow: 0 3px 5px rgba(0,0,0,.1); }
.header-top{box-shadow: 0 3px 5px rgba(0,0,0,.1)}
@media(min-width:992px) {
#wrapper{margin-left: 200px;padding: 90px 15px 15px;}
.navbar-nav.side-nav{background: #585f66;box-shadow: 2px 1px 2px rgba(0,0,0,.1);position:fixed;top:56px;flex-direction: column!important;left:0;width:200px;overflow-y:auto;bottom:0;overflow-x:hidden;padding-bottom:40px}
}

.caret-up {
    width: 0; 
    height: 0; 
    border-left: 4px solid rgba(0, 0, 0, 0);
    border-right: 4px solid rgba(0, 0, 0, 0);
    border-bottom: 4px solid;
    
    display: inline-block;
    margin-left: 2px;
    vertical-align: middle;
}
</style>
<?php if(Session::has('id')){ 

  

//  echo '<pre>';
// $data=Session::all();
// echo Session::get('name');die();

?>
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Task Manager</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav side-nav">

        <?php if(Session::get('type') == 'admin'){ ?>

                <li class="nav-item">
                  <a class="nav-link" href="{{ route('home') }}">Dashboard
                    <span class="sr-only">(current)</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('addEmployee')}}">Add Employee</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('asignTask') }}">Asign Task</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('allTasks') }}">All Tasks</a>
                </li>

          <?php } else if(Session::get('type') == 'employee') 
          { ?>

                <li class="nav-item">
                  <a class="nav-link" href="{{ route('EmployeeDashboard')}}">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('MyTasks') }}">My Tasks</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('allTasks') }}">Report</a>
                </li>
          
          <?php 

              //return redirect()->action('LoginController@index');
          } ?>

        </ul>
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <!-- <li class="nav-item dropdown btn btn-info" >
              <a style="color:white;" href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Session::get('name') }} <b class="caret"></b></a>
              <ul class="dropdown-menu" style="color:black;">
                <a href="#"><li ></li></a>
                <li class="divider"></li>
                <a href="{{ route('Logout') }}"><li>Logout</li></a>
              </ul>
          </li> -->
          <li class="nav-item">
            <select class="btn btn-info" id="dropdown" onchange="clickthis()">
              <option>{{ Session::get('name') }}</option>
              <option value="logout">Logout</option>
              <!-- <a href="{{ route('Logout') }}"><option onclick="click()">Logout</option></a> -->
            </select>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
        <?php 
        
        echo $subview;?>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<script type="text/javascript">
      $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
                $(this).toggleClass('open');
                //$('b', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
                $(this).toggleClass('open');
                // $('b', this).toggleClass("caret caret-up");                
            });
    });

      function clickthis()
      {
        //alert('ok');
        var data=$('#dropdown').val();
        if(data == 'logout')
        {
          //alert('ok');
          window.location.href = "<?php echo route('Logout');?>";
        }
      }
    
</script>
  <?php } else { 

      Session::flush();
      return redirect()->action('LoginController@index');

    }
    ?>
