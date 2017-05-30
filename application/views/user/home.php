<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/uu.png">
    
    <title>Home || Unitrak Power</title>

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
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/index" ?>" class="active">Home</a></li>
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/servicepage" ?>">Services</a></li>								
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/catalogpage" ?>">Catalog</a></li>
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
	
	<section id="main-slider" class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(<?php echo base_url() ?>assets/images/slider/g5.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">Unitrak <span>Power</span></h2>
                                    <p class="animation animated-item-2">Pusat Perbaikan dan Jual Beli Unit <b>Second Hand</b></p>
                                    <a class="btn-slide animation animated-item-3" href="<?php echo base_url()."index.php/c_user/servicepage" ?>">Read More</a>
                                </div>
                            </div>

                           
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
	
	<div class="feature">
		<div class="container">
			<div class="text-center">
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<i class="fa fa-truck"></i>	
						<h2>Forklift</h2>
						<p>Melayani segala macam perbaikan <b>forklift</b>, penyewaan serta jual beli <b>forklift</b>.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
						<i class="fa fa-anchor"></i>	
						<h2>Alat Berat</h2>
						<p>Melayani jual beli segala jenis <b>alat berat</b>.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
						<i class="fa fa-gear"></i>	
						<h2>Genset</h2>
						<p>Melayani jual beli segala jenis <b> genset</b>.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
						<i class="fa fa-fire"></i>	
						<h2>Compressor</h2>
						<p>Melayani jual beli segala jenis <b>compressor</b>.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="about">
		<div class="container">
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
				
				<img src="<?php echo base_url() ?>assets/images/home/ww.png" class="img-responsive"/>
				<p></p>
			</div>
			
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
				<h2>About US</h2>
				<p>Kami telah berdiri selama 17 tahun</p>
				<p>Kami telah memperbaiki berbagai macam forklift dan telah menjual berbagai macam alat seperti spare parts, genset, compressor dan alat berat ke berbagai daerah.</p>
				<p>Keluhan Anda akan sangat kami dengarkan dan kami akan mengerjakan sebaik mungkin. Anda bisa memanggil teknisi ke kami untuk datang ke lokasi atau Anda dapat membawa forklift Anda ke kantor kami.</p>
				<p>Silahkan tinggalkan pesan dan Anda bisa mem-booking service melalui online di website ini.</p>
			</div>
		</div>
	</div>
	
	<div class="lates">
		<div class="container">
			<div class="text-center">
				<h2>Gallery</h2>
			</div>
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<img src="<?php echo base_url() ?>assets/images/home/w1.jpg" class="img-responsive"/>
				
			</div>
			
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
				<img src="<?php echo base_url() ?>assets/images/home/w3.jpg" class="img-responsive"/>
				
			</div>
			
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">				
				<img src="<?php echo base_url() ?>assets/images/home/w2.jpg" class="img-responsive"/>
				ph
			</div>
		</div>
	</div>
	
	<section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Hubungi kami</h2>
                            <h4>Fax    : 031 - 8474000</h4>
                            <h4>HP     : 0811325500 (Herwanto)</h4>
                            <h4>Email  : unitrakpower@gmail.com</h4>
                            <h4>Alamat : Jl. Jagir Wonokromo No. 274, Surabaya</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
	
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
	<script src="<?php echo base_url() ?>assets/js/functions.js"></script>
	
</body>
</html>