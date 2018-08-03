<!-- <?php //include('header.php'); ?> -->
<link href="<?php echo base_url()?>assets/superadmin/css/bootstrap.min.css" rel="stylesheet">
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href='<?php echo base_url()?>assets/superadmin/css/editor.css' rel='stylesheet'>
<script language="javascript" type="text/javascript">
$(document).ready( function() {
$("#txtEditor1").Editor();

$("#txtEditor").Editor();
  $("#txtEdit").Editor();
});

</script>
<script src="<?php echo base_url('assets/superadmin/js/editor.js')?>"></script>


<style>
table{
    font-family:'Calibri';
    font-size:15px;
    background-color:#fff;
    color:#333;
}
.modal-header{
    background-color:#333;
    color:#fff;
}
</style>

</head>
<!-- <div class="container" style="border:0px solid red;"> 
<br />  
    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">           
            <?php if($this->session->flashdata('success')){ ?>
                  <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success'); ?>
                  </div>
            <?php }else if($this->session->flashdata('error')){  ?>
                  <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('error'); ?>
                  </div>
        <?php } ?>
      </div>
    </div> -->
    <!--End OF container-->
            <div class="panel panel-info" style="">
                    <div class="panel-heading">
                        <center><div class="panel-title">Add Blog</div></center>                        
                    </div>     
	           <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        <form action="" enctype="multipart/form-data" method="post" id="registerform" class="form-horizontal" role="form">

				    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><label>Title:</label>
                        </span> 

                        <input id="register-username" type="text" class="form-control" name="blog_title" value="" placeholder="Blog title" style="height:40px;">                                        
            </div>
            <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><label style="padding-top: 3px;">Blogger Name</label></i></span> 

                        <input id="register-username" type="text" class="form-control" name="blogger_name" value="" placeholder="Blogger Name" style="height:40px;">                                        
                    </div>

                    <p style="color:red;"> Only JPG,PNG,GIF Between 480*360 are allowed</p>
            <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><label style="padding-top: 3px;">Picture</label></span>

                        <input id="register-repeat-password" type="file" class="form-control" name="blogpic" placeholder="Repite tu contraseña" style="height:40px;">
                        
                    </div>      
					 <div style="margin-bottom: 25px" class="input-group">
                        <!-- <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span> -->
                        <span class="input-group-addon"><label>Image Description</label></span>
                        <input id="register-email" type="text" class="form-control" name="image_desc" placeholder="Add Image Description" style="height:40px;">
                    </div> 

					<div style="margin-bottom: 25px;" class="input-group">
                        <span class="input-group-addon"><label>Content</label></span>
                        <!-- <input id="register-password" type="textarea" class="form-control" name="description" placeholder="Description"> -->
                        <textarea id="txtEditor" name="description"></textarea>
                    </div>
          <div style="margin-bottom: 25px;width:100%;" class="input-group">
                        <span class="input-group-addon"><label>More <br>About<br> Content</label></span>
                        <!-- <input id="register-password" style="height:20%;" type="textarea" class="form-control" name="more_description" placeholder="Description"> -->
                        <textarea id="txtEdit" name="more_description"></textarea>
                    </div>

					

						<div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <center>
                                    <div class="col-sm-12 controls">
                                      <!-- <a id="btn-login" href="#" type="submit" class="btn btn-success">Add</a> -->
                                      <input type="submit" value="Add" class="btn btn-success" />
                                    </div>
                                    </center>
                                    <!-- <br>
                                    <br>
                                    <br>
                                    <br>
                                    <center><a href="login.php">¿Ya tienes cuenta?. ¡Logueate :D!</a></center> -->
                        
                                </div>
					
					</form>
				</div>
			</div>

		</div>

<!-- ******************************   TABLE FOR BLOG  *********************************** -->

<div class="container">
    <div class="row">

        <table class="table table-hover table-responsive">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>ID</th>
                    <th>Date</th>
                    <th>Title</th>
                    <th>Comments</th>
                    <!-- <th>Description</th>
                    <th>Image Content</th> -->
                    <th>Edit</th>
                    <th>Delete</th>
                    <textarea id="txtEditor1" name="description"></textarea>
                </tr>
            </thead>
            <tbody>
<?php $blogs=$this->SuperAdmin_M->get_all_blogs();
       foreach ($blogs as $key) 
       {
            $picture=$key->image;
            //echo $picture;
            $pic=base_url()."blogimage/".$picture;
            $date=$key->created;
            $row=explode(' ',$date);
            //echo $row[0];
            //echo date("d F Y",strtotime($row[0]));

            //echo $pic;

?>
                <tr id="d1">
                    <td id="f1" style="height:10%;width:10%;">
                        <img style="height:10%;width:80%;" src='<?php echo $pic;?>' class="img-rounded image-responsive" alt="Blog Image" ></td>
                    <td><?php echo $key->blog_id; ?></td>
                    <td id="m1"><?php echo date("d F Y",strtotime($row[0]));; ?></td>
                    <td id="l1"><?php echo $key->blog_title; ?></td>
                    <td id="l1"><?php  ?>New 11</td>
                    <!-- <td id="m1"><?php //echo $key->description; ?></td>
                    <td id="m1"><?php //echo $key->image_desc; ?></td> -->
                    <!-- <td id="m1">
                    <?php //$url=base_url($key->blog_link); 
                        //$link=explode('/',$url); ?>
                      <a href="<?php 
                        
                        //echo $link[1];
                        ?>">Check
                      </a>
                    </td> -->
                    <td><a href="<?php echo base_url();?>superadmin/admin/edit_blog/<?php echo $key->blog_id; ?>"><button type="button" class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></a></td>

                    <td><button id="this_id" value="<?php echo $key->blog_id ;?>" class="btn btn-danger btn-sm" onclick="delete_this();" ><span class="glyphicon glyphicon-trash"></span></button></td>
                </tr>
<?php } ?>
            </tbody>
        </table>
    </div>
</div>




<script>
// ****************** DELETE  ***************** //
function delete_this()
{
  //alert("Working");
  var id=document.getElementById('this_id').value;
  //alert(id);//$(this).attr("id");
    if(confirm("Are You Sure You Want To Delete This ??"))
    {
      window.location="<?php echo base_url();?>superadmin/admin/delete_blog/"+id;
      //alert('hi');
    }
    else
    {
      return false;
    }
}
// ****************** END DELETE  ***************** //

  
</script>
<!-- ******************************  END TABLE FOR BLOG  *********************************** -->





        <!-- *********************  TWITTER TIMELINE TEST  ********************** -->



<style>
/*blockquote.twitter-tweet {
  display: inline-block;
  font-family: "Helvetica Neue", Roboto, "Segoe UI", Calibri, sans-serif;
  font-size: 12px;
  font-weight: bold;
  line-height: 16px;
  border-color: #eee #ddd #bbb;
  border-radius: 5px;
  border-style: solid;
  border-width: 1px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
  margin: 10px 5px;
  padding: 0 16px 16px 16px;
  max-width: 468px;
}

blockquote.twitter-tweet p {
  font-size: 16px;
  font-weight: normal;
  line-height: 20px;
}

blockquote.twitter-tweet a {
  color: inherit;
  font-weight: normal;
  text-decoration: none;
  outline: 0 none;
}
blockquote.twitter-tweet a:hover,
blockquote.twitter-tweet a:focus {
  text-decoration: underline;
}*/
</style>
<!-- <div id="container"></div> -->
<script type="text/javascript">
    
//     twttr.widgets.createTweet(
//   '20',
//   document.getElementById('container'),
//   {
//     theme: 'dark'
//   }
// );
//     twttr.widgets.createTweet(...)
// .then( function( el ) {
//   console.log('Tweet added.');
// });
</script>





        <!-- ********************* END TWITTER **********************