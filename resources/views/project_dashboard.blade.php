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
</style>
<div id="wrapper">
    <nav class="navbar header-top fixed-top navbar-expand-lg  navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Task Manager</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav side-nav">
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
        </ul>
        <ul class="navbar-nav ml-md-auto d-md-flex">
          <li class="nav-item">
            <a class="nav-link" href="#">Asign Task
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Top Menu Items</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid">
        <div class="row">
        
        <?php echo $subview;?>
        </div>
          </div>
        </div>
      </div>
    </div>
  </div>