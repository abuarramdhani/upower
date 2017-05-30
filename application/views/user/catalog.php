<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/uu.png">

    <title>Catalog || Unitrak Power</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
	<link href="<?php echo base_url() ?>assets/css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" />	
    <!-- =======================================================
        Theme Name: Company
        Theme URL: https://bootstrapmade.com/company-free-html-bootstrap-template/
        Author: BootstrapMade
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="<?php echo base_url()."index.php/MyController/index" ?>"><h1><span>Unitrak</span>Power</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/index" ?>">Home</a></li>
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/servicepage" ?>">Services</a></li>								
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/catalogpage" ?>" class="active">Catalog</a></li>
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/bookingpage" ?>">Book Service Online</a></li>
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/contactpage" ?>">Contact</a></li>
								<li role="presentation"><button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Hi <?php echo $this->session->userdata('nama_depan') ?>  <span class="caret"></span></button>
    								<ul class="dropdown-menu">
      									<li class="disabled">You Have</li>
									    <li class="disabled">Login</li>
									    <li class="active"></a><?php echo $this->session->userdata('nama_depan') ?></li>
									    <li><a href="<?php echo base_url()."index.php/c_user/logout" ?>">Logout</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Home</a></li>
				<li>Portfolio</li>			
			</div>		
		</div>	
	</div>
	
	<section id="portfolio">	
        <div class="container">
            <div class="center">
               <p>Berikut beberapa barang yang kami sediakan</p>
            </div>

            <ul class="portfolio-filter text-center">
                <li><a class="btn btn-default active" href="<?php echo base_url()."index.php/c_user/catalopage" ?>">Forklift</a></li>
                <li><a class="btn btn-default" href="<?php echo base_url()."index.php/c_user/gensetpage" ?>">Genset</a></li>
                <li><a class="btn btn-default" href="<?php echo base_url()."index.php/c_user/compage" ?>" >Compressor</a></li>
            </ul><!--/#portfolio-filter-->
		</div>

		<div class="container">
            <div class="">
                <div class="portfolio-items">
                <?php foreach ($data as $x) { ?>

                    <div class="portfolio-item apps col-xs-12 col-sm-4 col-md-3">

                        <div class="recent-work-wrap">
                            <img class="img-responsive" src="<?php echo base_url().'/uploads/forklift/'.$x['gambar_forklift']; ?>">
                            <div class="overlay">
                                <div class="recent-work-inner">
                                    <h3><a href="#"><?= $x['nama_forklift'] ?></a></h3>
                                    <p><?= $x['des_forklift'] ?></p>
                                    <a class="preview" href="<?php echo base_url().'/uploads/forklift/'.$x['gambar_forklift']; ?>" rel="prettyPhoto"><i class="fa fa-eye"></i> View</a>
                                </div> 
                            </div>
                        </div>
                         
                    </div><!--/.portfolio-item-->

                   <?php } ?>

                </div>
            </div>
        </div>         
    </section>


	<footer>
		<div class="footer">
			<div class="container">
				<div class="social-icon">
					<div class="col-md-4">
						
					</div>
				</div>
				
				<div class="col-md-4 col-md-offset-4">
					<div class="copyright">
						&copy; by Dhila.
                        <div class="credits">
                            <!-- 
                                All the links in the footer should remain intact. 
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Company
                            -->
                            
                        </div>
					</div>
				</div>						
			</div>
			<div class="pull-right">
				<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
			</div>
		</div>
	</footer>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="<?php echo base_url() ?>assets/js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.isotope.min.js"></script>  
	<script src="<?php echo base_url() ?>assets/js/wow.min.js"></script>
	<script src="js/functions.js"></script>
    
</body>
</html>