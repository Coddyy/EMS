
<!-- <html> -->

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/sam/footer/Footer-with-social-icons.css">
</head>
<style type="text/css">
    div,p,h1,h2,h3,h4,h5,h6,li,ul,a,footer,i{font-family: calibri;}
</style>
<!-- <body> -->
<!-- <div class="content"> -->
<!-- </div> -->
    <footer id="myFooter" >
        <div class="container">
            <div class="row">



        <!-- <div class="" style="font-size: 30px; border: 1px solid red;" align="center"> -->
            <!-- <a href="https://twitter.com/cadnaukri" target="_blank" title="" class=""><i class="fa fa-twitter twitter" style="font-size: 50px;"></i></a> -->
            <!-- <a href="https://www.facebook.com/CADnaukri" target="_blank" class=""><i class="fa fa-facebook-official facebook"></i></a> -->
            <!-- <a href="https://plus.google.com/u/0/+CADnaukri" target="_blank" class=""><i class="fa fa-google-plus google"></i></a> -->
            <!-- <a href="https://www.youtube.com/watch?v=LaKtY29qcyo" target="_blank" class=""><i class="fa fa-youtube google"></i></a> -->
            <!-- <a href="https://in.linkedin.com/company/cadnaukri-com" target="_blank" class=""><i class="fa fa-linkedin linkedin"></i></a> -->
        <!-- </div> -->
        <div class="footer-copyright" style="margin-bottom: -45px;">
            
             <p>All rights reserved @ 2018 CADnaukri.com</p>
            
             <a class="font-size: 20px;" href="https://twitter.com/cadnaukri" target="_blank" title="" class=""><i class="fa fa-twitter twitter" style="font-size: 20px;"></i></a> 
            <a href="https://www.facebook.com/CADnaukri" target="_blank" class=""><i class="fa fa-facebook-official facebook" style="font-size: 20px;"></i></a> 
            <a href="https://plus.google.com/u/0/+CADnaukri" target="_blank" class=""><i class="fa fa-google-plus google" style="font-size: 20px;"></i></a> 
            <a href="https://www.youtube.com/watch?v=LaKtY29qcyo" target="_blank" class=""><i class="fa fa-youtube google" style="font-size: 20px;"></i></a> 
            <a href="https://in.linkedin.com/company/cadnaukri-com" target="_blank" class=""><i class="fa fa-linkedin linkedin" style="font-size: 20px;"></i></a>
           
        </div>
        <!-- <div class="row" style="background-color: red; font-size: 12px;"> </div> -->

    </footer>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<!-- </body> -->


<!-- </html> -->

<!--Old Footer script Starts-->

                <script src="<?php echo base_url()?>assets/js/jquery.bxslider.js"></script>
                <script type="text/javascript">
                $(document).ready(function(){
                  $('.bxslider').bxSlider({
                        auto: true,
                        randomStart: true,
                        infiniteLoop: true,
                          mode: 'horizontal',
                          captions: true,
                          controls: false,
                          pager: true
                          
                    }); 
                    $('.testimonials').bxSlider({
                         
                        auto: true,
                        infiniteLoop: true,
                        mode: 'horizontal',
                        captions: true,
                        controls: false,
                        pager: true,
                        useCSS:false
                          
                    }); 
                    $('.news_slider').bxSlider({
                         
                        auto: true,
                        infiniteLoop: true,
                        mode: 'horizontal',
                        captions: true,
                        controls: false,
                        pager: true,
                        useCSS:false
                          
                    }); 
                });
                </script>
               



                <script src="<?php echo base_url()?>assets/js/easyResponsiveTabs.js"></script>

                <script type="text/javascript">
                    $(document).ready(function() {
                       
                        $('#parentHorizontalTab').easyResponsiveTabs({
                            type: 'default', 
                            width: 'auto', 
                            fit: true, 
                            tabidentify: 'hor_1', 
                            activate: function(event) { 
                                var $tab = $(this);
                                var $info = $('#nested-tabInfo');
                                var $name = $('span', $info);
                                $name.text($tab.text());
                                $info.show();
                            }
                        });

                        // Child Tab
                        $('#ChildVerticalTab_1').easyResponsiveTabs({
                            type: 'vertical',
                            width: 'auto',
                            fit: true,
                            tabidentify: 'ver_1', 
                            activetab_bg: '#fff', 
                            inactive_bg: '#F5F5F5', 
                            active_border_color: '#c1c1c1', 
                            active_content_border_color: '#5AB1D0'
                        });

                        
                        $('#parentVerticalTab').easyResponsiveTabs({
                            type: 'vertical',
                            width: 'auto', 
                            fit: true, 
                            closed: 'accordion', 
                            tabidentify: 'hor_1', 
                            activate: function(event) { 
                                var $tab = $(this);
                                var $info = $('#nested-tabInfo2');
                                var $name = $('span', $info);
                                $name.text($tab.text());
                                $info.show();
                            }
                        });
                    });
                </script>
                <script src="<?php echo base_url()?>assets/js/gridslider.js"></script>
                <script type="text/javascript">
                $(function ()
                {
                    $('.image-feed-slider').gridSlider({
                        cols: 6, 
                        rows: 3, 
                        image_stretch_mode: 'x', 
                        grid_height: 60, 
                        align: 'center', 
                        width: '100%',
                        ctrl_pag: false,
                        autoplay_enable: true, 
                        autoplay_interval: 3 
                    });
                });
                </script>
                <script src="<?php echo base_url()?>assets/js/classie.js"></script>
                <script src="<?php echo base_url()?>assets/js/modalEffects.js"></script>
                <script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.quickflip.js" ></script>
                <script type="text/javascript">
                    $('document').ready(function(){
                        $('#flip-container').quickFlip();
                        $('#flip-navigation div input:radio[name="radio"]').each(function(){
                            $(this).change(function(){
                                $('#flip-navigation div').each(function(){
                                    $(this).removeClass('selected');
                                });
                                $(this).parent().addClass('selected');
                                var flipid=$(this).attr('id').substr(4);
                                $('#flip-container').quickFlipper({ }, flipid, 1);
                                
                                return false;
                            });
                        });
                    });
                    $('.subscription_btn').on('click',function(){
                        
                        var subscription_mail_id=$('.subscription_mail_id').val();
                        if(subscription_mail_id == '')
                        {
                            $('#subs_res').html('Enter an valid email id');
                            $('#sub_res').addClass('sub_error');
                            return false;
                        }
                        else{
                            $.ajax({
                                   url: "<?php echo base_url('index/news_subscription')?>",
                                   data: {'email':subscription_mail_id},
                                   type: 'POST',
                                    dataType: 'json',
                                   success: function(data) {
                                        $('#subs_res').html('Thank you for connecting with us');
                                        $('#sub_res').addClass('sub_sucess');

                                   },
                                  
                                });

                        }
                    });
                </script>

<!--Old footer script ends-->
