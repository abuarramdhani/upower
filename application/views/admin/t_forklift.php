<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/uu.png">

    <title>Data Forklift || Admin</title>

    <!-- Bootstrap CSS -->    
    <link href="<?php echo base_url() ?>assets/cssadmin/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url() ?>assets/cssadmin/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url() ?>assets/cssadmin/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/css/font-awesome.min.css" rel="stylesheet" />
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

            <div class="nav search-row" id="top_menu">
                <!--  search form start -->
                <ul class="nav top-menu">                    
                    <li>
                        <form class="navbar-form">
                            <input class="form-control" placeholder="Search" type="text">
                        </form>
                    </li>                    
                </ul>
                <!--  search form end -->                
            </div>

            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- task notificatoin start -->
                    
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

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-table"></i> Data Forklift</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-table"></i>Table</li>
						<li><i class="fa fa-th-list"></i>Data Forklift</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Data Forklift
                          </header>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr>
                                  <th></th>
                                  <th>#</th>
                                  <th>Nama Forklift</th>
                                  <th>Merk Forklift</th>
                                  <th>Tipe Forklift</th>
                                  <th>Tahun Forklift</th>
                                  <th>Berat Forklift</th>
                                  <th>Max Forklift</th>
                                  <th>Kondisi Forklift</th>
                                  <th>Harga Forklift</th>
                                  <th>Deskripsi Forklift</th>
                                  <th>Gambar Forklift</th>
                                  <th></th>
                                </tr>
                              </thead>
                              <tbody>
                              <form method="post" action="<?php echo base_url().'index.php/c_admin/delforklift'?>">

                                <?php foreach ($data as $x) { ?>

                                <tr>
                                    <td><input type="checkbox" value="<?= $x['id_forklift'] ?>" name="item[]"></td>
                                    <td><?= $x['id_forklift'] ?></td>
                                    <td><?= $x['nama_forklift'] ?></td>
                                    <td><?= $x['merk_forklift'] ?></td>
                                    <td><?= $x['tipe_forklift'] ?></td>
                                    <td><?= $x['tahun_forklift'] ?></td>
                                    <td><?= $x['berat_forklift'] ?></td>
                                    <td><?= $x['max_forklift'] ?></td>
                                    <td><?= $x['kondisi_forklift'] ?></td>
                                    <td><?= $x['harga_forklift'] ?></td>
                                    <td><?= $x['des_forklift'] ?></td>
                                    <td style="width:10px, height:10px;"><img src="<?php echo base_url().'/uploads/forklift/'.$x['gambar_forklift']; ?>"></td>

                                    <td align="center">
                                        <a href="<?php echo base_url()."index.php/c_admin/editforklift/".$x['id_forklift'];?>">Edit</a>
                                    </td>
                                </tr>        

                                <?php } ?>

                            </tbody>
                            </table>
                          </div>
                      </section>
                  </div>
              </div>
              <input type="submit" value="Delete">
            </form>
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
                <h4>by Dhila</h4>
            </div>
        </div>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url() ?>assets/jsadmin/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="<?php echo base_url() ?>assets/jsadmin/scripts.js"></script>


  </body>
</html>
