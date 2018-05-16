@extends( 'layouts.website' )
@section( 'innercontent' )
  <!-- Header -->
  <link rel="stylesheet" type="text/css" href="{{ asset('public/css/kpidashboard.css')}}">
<div class="web-container">
	<header class="mainheader">
    <div class="navigation">
        <div class="wow fadeInDown">
            <div class="container">
                <ol class="breadcrumb" id="navigation"><li><a href="<?php echo ROOT_URL; ?>" title="Home"><i class="fa fa-home"></i></a></li> <li> KPI Dashboard</li></ol>
            </div>
        </div>
    </div>
</header>
	<div class="container ">
		<div class="innercontainer"> 
<div>
    <h1 class="pageheader"><?= $kpi_details->kpi_name ?> <a href="javascript:void(0);" class="backbtn btn btn-sm btn-inverse btn-inverse-outline" onclick="goBack()" title="Go to back"> <i class="fa fa-arrow-left"></i> </a></h1>
<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs kpinav-list" role="tablist">
    <li role="presentation" class="active"><a href="#visual" aria-controls="visual" role="tab" data-toggle="tab"><i class="icon-graph-icon"></i> <span>Visualization</span></a></li>
    <li role="presentation"><a href="#data" aria-controls="data" role="tab" data-toggle="tab"><i class="icon-data-icon"></i> <span>Data</span></a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="visual">
    <div class="right-colm contain">
	  <div class="row">
		 <div class="col-xs-12 col-md-6">
		      <div class="portlet">
                <div id="dunotGraph" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
              </div>
        </div>
		 <div class="col-md-6">
		    <div class="portlet">
			 <div id="columChart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
			</div> 
	    </div> 
		 <div class="col-md-12">
			 <div class="srvcontainer">
                <?php if(isset($kpi_details)) {?>
				 
                            <h4>Department</h4>
                            <?php if($kpi_details->department_id != "" && $kpi_details->department_id != null){ ?>
                              <?php  $department= DB::table('department')->where('id', $kpi_details->department_id)->where('status', 1)->where('is_deleted', 0)->first(); ?>
                              <p><?= $department->name; ?></p>
                              <?php 
                              } ?>

                            <h4>Description</h4>

                            <p><?= $kpi_details->description ?></p>

                            <h4>Methodology</h4>

                            <p><b>Calculate as: </b></p>
                            <p><?php
                                $formula = (string)$kpi_details->calculation_formula;
                                $formula = strtolower($formula);
                                $parameters = DB::table('parameters')->where('kpi_id', $kpi_details->id)->where('status', '1')->where('is_deleted', 0)->orderBy('id', 'ASC')->get();
                                foreach ($parameters as $key => $value) {
                                  $formula = str_replace($value->parameter_no, $value->name, $formula);
                                } ?>
                                <?= $formula ?> 
                            </p>

                            <h4>Goal </h4>
                            <p>> <?= $kpi_details->goal_lower_limit.' '.$kpi_details->unit ?>     and < <?= $kpi_details->goal_upper_limit.' '.$kpi_details->unit ?> </p>

                            <h4>Unit </h4>
                            <p> <?= $kpi_details->unit ?> </p>
                <?php }?>

                </div>
		</div> 
		  
		</div>
	  
	  </div>
	  </div>
    <div role="tabpanel" class="tab-pane" id="data">
    <div class="right-colm contain">
	  <table id="example" class="display table-bordered table-striped table m-t-30">
        <thead>
            <tr>
                <th>#</th>
                <th>Month</th>
                <th>Rate in(%)</th>
                <?php 
                foreach ($table_parameter as $key => $value) { ?>
                  <th><?= $value ?></th>
                <?php }
                ?>
                <th>Last Updated</th>
            </tr>
        </thead>
        <tbody>
            <?php 
              foreach ($table_data as $key => $value) { ?>
                  <tr>
                    <td><?= $key+1 ?></td>
                    <td><?= date('F',strtotime($value['date'])); ?></td>
                    <td><?= $value['calculated_value'] ?></td>
                    <?php 
                    foreach ($table_parameter as $key1 => $value1) { ?>
                      <td><?= $value['parameter_value'][$value1] ?></td>
                    <?php }
                    ?>
                    <td><?= $value['created_at'] ?></td>
                </tr>
              <?php }
              ?>
        </tbody>
        <tfoot>
            <tr style="display: none;">
                <th>#</th>
              <th>Month</th>
              <th>Rate in(%)</th>
              <?php 
              foreach ($table_parameter as $key => $value) { ?>
                <th><?= $value ?></th>
              <?php }
              ?>
              <th>Last Updated</th>
            </tr>
        </tfoot> 
    </table>
<div class="srvcontainer">
                <?php if(isset($kpi_details)) {?>
                 
                            <h4>Department</h4>
                            <?php if($kpi_details->department_id != "" && $kpi_details->department_id != null){ ?>
                              <?php  $department= DB::table('department')->where('id', $kpi_details->department_id)->where('status', 1)->where('is_deleted', 0)->first(); ?>
                              <p><?= $department->name; ?></p>
                              <?php 
                              } ?>

                            <h4>Description</h4>

                            <p><?= $kpi_details->description ?></p>

                            <h4>Methodology</h4>

                            <p><b>Calculate as: </b></p>
                            <p><?php
                                $formula = (string)$kpi_details->calculation_formula;
                                $formula = strtolower($formula);
                                $parameters = DB::table('parameters')->where('kpi_id', $kpi_details->id)->where('status', '1')->where('is_deleted', 0)->orderBy('id', 'ASC')->get();
                                foreach ($parameters as $key => $value) {
                                  $formula = str_replace($value->parameter_no, $value->name, $formula);
                                } ?>
                                <?= $formula ?> 
                            </p>

                            <h4>Goal </h4>
                            <p>> <?= $kpi_details->goal_lower_limit.' '.$kpi_details->unit ?>     and < <?= $kpi_details->goal_upper_limit.' '.$kpi_details->unit ?> </p>

                            <h4>Unit </h4>
                            <p> <?= $kpi_details->unit ?> </p>
                <?php } ?>

                </div>	  
	  </div>
	  </div>
  </div>

</div>
    <div class="row wow fadeInDown" style="display: none;">
        
              <div class="col-xs-12 col-sm-6 col-md-7 col-lg-7">
                <div class="srvcontainer">

                <?php if(isset($kpi_details)) {?>
                 
                            <h4>Department</h4>
                            <?php if($kpi_details->department_id != "" && $kpi_details->department_id != null){ ?>
                              <?php  $department= DB::table('department')->where('id', $kpi_details->department_id)->where('status', 1)->where('is_deleted', 0)->first(); ?>
                              <p><?= $department->name; ?></p>
                              <?php 
                              } ?>

                            <h4>Description</h4>

                            <p><?= $kpi_details->description ?></p>

                            <h4>Methodology</h4>

                            <p><b>Calculate as: </b></p>
                            <p><?php
                                $formula = (string)$kpi_details->calculation_formula;
                                $formula = strtolower($formula);
                                $parameters = DB::table('parameters')->where('kpi_id', $kpi_details->id)->where('status', '1')->where('is_deleted', 0)->orderBy('id', 'ASC')->get();
                                foreach ($parameters as $key => $value) {
                                  $formula = str_replace($value->parameter_no, $value->name, $formula);
                                } ?>
                                <?= $formula ?> 
                            </p>

                            <h4>Goal </h4>
                            <p>> <?= $kpi_details->goal_lower_limit.' '.$kpi_details->unit ?>     and < <?= $kpi_details->goal_upper_limit.' '.$kpi_details->unit ?> </p>

                            <h4>Unit </h4>
                            <p> <?= $kpi_details->unit ?> </p>
                <?php } ?>

                </div>
              </div>
    </div>
    

<!-- Modal -->
<!-- <div id="moredeatils" class="modal fade" role="dialog"> -->
<?php if($check_parameter == 1){ ?>
<div >
  <div class="modal-dialog modal-lg" style="display: none;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?= $kpi_details->kpi_name ?></h4>
      </div>
      <div class="modal-body">
      <div class="modalchart">
       <div id="container" style=" height: 260px; "></div>
       </div>
      <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<style type="text/css">
    tfoot input {
        width: 100%;
        padding: 3px;
        box-sizing: border-box;
    }
    .dataTables_wrapper 
    {
        /*float: left;*/
        /*color:blue;*/
    }
    .dataTables_wrapper .dataTables_filter 
    {
        float: right;
        text-align: right;
    }
</style>
</head>
<body>


        </div>
       </div>
      </div>
    </div>

  </div>	
</div>
</div>
</div>
<?php } ?>
    
  </div>
</div>
<?php 
  $graph_value = 0;
  if(isset($calculated_value)){
    $graph_value = $calculated_value;
  }
?>
<?php $name = $kpi_details->kpi_name; 
      $name = (string)$name;
?>
<script type="text/javascript">
    /*$(document).ready(function() {
    $('#example').DataTable();
} );*/
$(document).ready(function() {
    // Setup - add a text input to each footer cell
    // $('#example tfoot th').each( function () {
    //     var title = $(this).text();
    //     $(this).html( '<input type="text" placeholder="Search '+title+'" />' );
    // } );
 
    // DataTable
    var table = $('#example').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
} );
</script>

  <script type="text/javascript" src="{{ asset('public/js/highcharts.js')}}"></script>
<!--    <script type="text/javascript" src="{{ asset('public/js/highcharts-more.js')}}"></script>
      <script type="text/javascript" src="{{ asset('public/js/solid-gauge.js')}}"></script>-->
    
<script>
      var data_graph = <?= $graph ?>;
      console.log(data_graph);
      var data_values=[];
      for (var i = 0; i < data_graph.length; i++) {
        var data_points = [];
        for(var j=0; j<data_graph[i].series.length; j++){
          data_points[j] = Number(data_graph[i].series[j]);
        }
        data_values.push({
              name: data_graph[i].name,
              data: data_points
          });
      }
/*donut chart*/
	Highcharts.chart('dunotGraph', {
    chart: {
		backgroundColor: '#f5f5f5',
        plotBackgroundColor: null,
        plotBorderWidth: 0,
        plotShadow: false
    },
	
    title: {
        text: '',
        align: 'center',
        verticalAlign: 'middle',
        y: 40
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            dataLabels: {
                enabled: true,
                distance: -50,
                style: {
                    fontWeight: 'bold',
                    color: 'white'
                }
            },
            startAngle: -90,
            endAngle: 90,
            center: ['50%', '75%']
        }
    },
    series: [{
        type: 'pie',
        name: 'Population',
        innerSize: '50%',
        data: [
        <?php $i=1; foreach ($percentage as $key) 
        { ?>
            {
                name: '<?php echo "P".$i; ?>',
                y: <?php echo $key;?>,
                dataLabels: {
                    enabled: false
                }
            },
        <?php $i++; } ?>
        ]
    }]
});
/*colum chart*/

 Highcharts.chart('columChart', {
    chart: {
		backgroundColor: '#f5f5f5',
        type: 'bar'
    },
    title: {
        text: ''
    },
    subtitle: {
        text: '<?= $name ?>'
    },
    xAxis: {
        categories: <?= $month ?>,
        title: {
            text: null
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Population (Lakhs)',
            align: 'high'
        },
        labels: {
            overflow: 'justify'
        }
    },
    tooltip: {
        valueSuffix: ' Lakhs'
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true
            }
        }
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'top',
        x: -40,
        y: 80,
        floating: true,
        borderWidth: 1,
        backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
        shadow: true
    },
    credits: {
        enabled: false
    },
    series: data_values
});
	
	
	
	
	
$(document).ready(function(){
	
loadNavigation('Kpidetails', 'gl', 'pl', 'KPI Dashboard', '');	



})
</script>

@endsection