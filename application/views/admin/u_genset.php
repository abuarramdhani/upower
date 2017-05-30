<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/uu.png">

    <title>Edit Genset || Admin</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url() ?>assets/cssadmin/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url() ?>assets/cssadmin/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url() ?>assets/cssadmin/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/cssadmin/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url() ?>assets/cssadmin/style.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/cssadmin/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Unitrak <span class="lite">Power</span></a>
            <!--logo end-->


            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    
                    </li>
                    <!-- alert notification end-->
                    <!-- user login dropdown start-->
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
                          <li><a class="" href="<?php echo base_url()."index.php/c_admin/createcom" ?>">Tambah Compressoe</a></li>
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
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Edit Genset</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Forms</li>
						<li><i class="fa fa-files-o"></i>Edit Genset</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Edit Genset
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="<?php echo base_url()."index.php/c_admin/doeditgenset" ?>" enctype="multipart/form-data">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">ID Genset <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="id_genset" type="text" value="<?php echo $id_genset; ?>" readonly required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Nama Genset <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cname" type="text" name="nama_genset" value="<?php echo $nama_genset; ?>" required />
                                          </div>
                                      </div>
                                      
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Merk Genset </label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="merk_genset" type="text" value="<?php echo $merk_genset; ?>" required/>
                                          </div>
                                      </div>                                      
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Tipe Genset </label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cname" name="tipe_genset" value="<?php echo $tipe_genset; ?>" required></input>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Berat Genset </label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="ccomment" name="berat_genset" value="<?php echo $berat_genset; ?>" required></input>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Kondisi Genset </label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cname" name="kondisi_genset" value="<?php echo $kondisi_genset; ?>" required></input>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Harga Genset </label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cname" name="harga_genset" value="<?php echo $harga_genset; ?>" required></input>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="ccomment" class="control-label col-lg-2">Deskripsi Genset <span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " id="ccomment" name="des_genset" value="<?php echo $des_genset; ?>" required></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Foto Genset </label>
                                          <div class="col-lg-10">
                                      <input class="form-control " id="cname" type="file" name="img_genset" size="20" required></input
                                    ></div>
                                      </div>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input class="btn btn-primary" type="submit" value="SAVE">

                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>
          </section>
      </section>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
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
  <!-- container section end -->

    <!-- javascripts -->
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/jsadmin/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="<?php echo base_url() ?>assets/jsadmin/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="<?php echo base_url() ?>assets/jsadmin/scripts.js"></script>    


  </body>
</html>
