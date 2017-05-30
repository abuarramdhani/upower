<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/uu.png">

    <title>Dashboard || Admin</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url() ?>assets/cssadmin/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url() ?>assets/cssadmin/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url() ?>assets/cssadmin/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/cssadmin/font-awesome.min.css" rel="stylesheet" />    
    <!-- full calendar css-->
    <link href="<?php echo base_url() ?>assets/assetsadmin/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
	<link href="<?php echo base_url() ?>assets/assetsadmin/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="<?php echo base_url() ?>assets/assetsadmin/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <!-- owl carousel -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/cssadmin/owl.carousel.css" type="text/css">
	<link href="<?php echo base_url() ?>assets/cssadmin/jquery-jvectormap-1.2.2.css" rel="stylesheet">
    <!-- Custom styles -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/cssadmin/fullcalendar.css">
	<link href="<?php echo base_url() ?>assets/cssadmin/widgets.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/cssadmin/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/cssadmin/style-responsive.css" rel="stylesheet" />
	<link href="<?php echo base_url() ?>assets/cssadmin/xcharts.min.css" rel=" stylesheet">	
	<link href="<?php echo base_url() ?>assets/cssadmin/jquery-ui-1.10.4.min.css" rel="stylesheet">
    <!-- =======================================================
        Theme Name: NiceAdmin
        Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
     
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="<?php echo base_url()."index.php/c_admin/index" ?>" class="logo">Unitrak <span class="lite">Power</span></a>
            <!--logo end-->

            

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    

                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="username"><?php echo $this->session->userdata('nama_admin') ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="<?php echo base_url()."index.php/c_admin/adminlogout" ?>"><i class="icon_key_alt"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
      </header>      
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="<?php echo base_url()."index.php/c_admin/index" ?>">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
				  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Forms</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url()."index.php/c_admin/createforklift" ?>">Tambah Forklift</a></li>                          
                          <li><a class="" href="<?php echo base_url()."index.php/c_admin/creategenset" ?>">Tambah Genset</a></li>
                          <li><a class="" href="<?php echo base_url()."index.php/c_admin/createcom" ?>">Tambah Compressor</a></li>
                      </ul>
                  </li>          
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_table"></i>
                          <span>Tables</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url()."index.php/c_admin/dataforklift" ?>">Daftar Forklift</a></li>
                          <li><a class="" href="<?php echo base_url()."index.php/c_admin/datagenset" ?>">Daftar Genset</a></li>
                          <li><a class="" href="<?php echo base_url()."index.php/c_admin/datacom" ?>">Daftar Compressor</a></li>
                      </ul>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="<?php echo base_url()."index.php/MyController/index" ?>">Website</a></li>
                          <li><a class="" href="<?php echo base_url()."index.php/c_admin/adminlogout" ?>">Logout</a></li>
                      </ul>
                  </li>   
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">            
              <!--overview start-->
			  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Dashboard</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-laptop"></i>Dashboard</li>						  	
					</ol>
				</div>
			</div>
              
            <div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box blue-bg">
						<i class="fa fa-edit"></i>
						<div class="count">Forms</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box brown-bg">
						<i class="fa fa-database"></i>
						<div class="count">Data</div>					
					</div><!--/.info-box-->			
				</div><!--/.col-->	
				
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="info-box dark-bg">
						<i class="fa fa-laptop"></i>
						<div class="count">Web</div>						
					</div><!--/.info-box-->			
				</div><!--/.col-->
				
			</div><!--/.row-->
		

          </section>
          <div class="text-right">
          <div class="credits">
                <!-- 
                    All the links in the footer should remain intact. 
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version form: https://bootstrapmade.com/buy/?theme=NiceAdmin
                -->
                <h4>by Dhila.</h4>
            </div>
        </div>
      </section>
      <!--main content end-->
  </section>
  <!-- container section start -->

    <!-- javascripts -->
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/jquery-ui-1.10.4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/admin/jquery-ui-1.9.2.custom.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url() ?>assets/jsadmin/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- charts scripts -->
    <script src="<?php echo base_url() ?>assets/assetsadmin/jquery-knob/js/jquery.knob.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.sparkline.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/assetsadmin/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/owl.carousel.js" ></script>
    <!-- jQuery full calendar -->
    <<script src="<?php echo base_url() ?>assets/jsadmin/fullcalendar.min.js"></script> <!-- Full Google Calendar - Calendar -->
	<script src="<?php echo base_url() ?>assets/assetsadmin/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="<?php echo base_url() ?>assets/jsadmin/calendar-custom.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.customSelect.min.js" ></script>
	<script src="<?php echo base_url() ?>assets/assetsadmin/chart-master/Chart.js"></script>
   
    <!--custome script for all page-->
    <script src="<?php echo base_url() ?>assets/jsadmin/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="<?php echo base_url() ?>assets/jsadmin/sparkline-chart.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/easy-pie-chart.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/jquery-jvectormap-world-mill-en.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/xcharts.min.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/jquery.autosize.min.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/jquery.placeholder.min.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/gdp-data.js"></script>	
	<script src="<?php echo base_url() ?>assets/jsadmin/morris.min.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/sparklines.js"></script>	
	<script src="<?php echo base_url() ?>assets/jsadmin/charts.js"></script>
	<script src="<?php echo base_url() ?>assets/jsadmin/jquery.slimscroll.min.js"></script>
  <script>

      //knob
      $(function() {
        $(".knob").knob({
          'draw' : function () { 
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
          $("#owl-slider").owlCarousel({
              navigation : true,
              slideSpeed : 300,
              paginationSpeed : 400,
              singleItem : true

          });
      });

      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });
	  
	  /* ---------- Map ---------- */
	$(function(){
	  $('#map').vectorMap({
	    map: 'world_mill_en',
	    series: {
	      regions: [{
	        values: gdpData,
	        scale: ['#000', '#000'],
	        normalizeFunction: 'polynomial'
	      }]
	    },
		backgroundColor: '#eef3f7',
	    onLabelShow: function(e, el, code){
	      el.html(el.html()+' (GDP - '+gdpData[code]+')');
	    }
	  });
	});

  </script>

  </body>
</html>
