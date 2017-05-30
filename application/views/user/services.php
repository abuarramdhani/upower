<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/uu.png">
    
    <title>Service || Unitrak Power</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.css">
	<link href="<?php echo base_url() ?>assets/css/prettyPhoto.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" />	

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
							<a href="index.html"><h1><span>Unitrak</span>Power</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/index" ?>">Home</a></li>
								<li role="presentation"><a href="services.html" class="active" >Services</a></li>		
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/catalogpage" ?>" >Catalog</a></li>
                                <li role="presentation"><a href="<?php echo base_url()."index.php/c_user/bookingpage" ?>">Book Service Online</a></li>
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/contactpage" ?>">Contact</a></li>	
								<li role="presentation"><button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Hi <?php echo $this->session->userdata('nama_depan') ?>  <span class="caret"></span></button>
    								<ul class="dropdown-menu">
      									<li class="disabled">You Have</li>
									    <li class="disabled"><a href="#">Login</a></li>
									    <li class="active"><a href="#"></a><?php echo $this->session->userdata('nama_depan') ?></li>
									    <li><a href="<?php echo base_url()."index.php/c_user/logout" ?>">Logout</a></li>
									</ul>				
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
				<li><a href="<?php echo base_url()."index.php/MyController/index" ?>">Home</a></li>
				<li>Services</li>			
			</div>		
		</div>	
	</div>
	
	<div class="services">
		<div class="container">
			<h3>Unitrak Power Services</h3>
			<hr>
			<div class="col-md-6">
				<img src="<?php echo base_url() ?>assets/images/services/f6.jpg" class="img-responsive">
				<p></p>
			</div>
			
			<div class="col-md-6">
				<div class="media">
					<ul>
						<li>
							<div class="media-left">
								<i class="fa fa-wrench"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">Service and Repair</h4>
								<p>Unitrak Power dapat memenuhi kebutuhan pelanggan dan mampu memperbaiki serta melayani semua model peralatan serta alat-alat berat. Teknisi kami sangat terampil, kompeten, dan berpengetahuan luas. Anda dapet data langsung ke lokasi maupun memanggil kami untuk datang ke lokasi Anda.</p>
								<p>Bila forklift Anda tidak berfungsi, bila peralatan-peralatan Anda tidak berfungsi sehingga Anda kehilangan waktu dan keuntungan Anda, maka Unitrak Power akan siap menawarkan layanan yang terbaik sehingga Anda tidak perlu cemas.</p>
								<p>Dengan adanya kontrak, juga akan menghemat waktu dan uang Anda untuk memastikan forklift benar-benar di maintenance dengan standar terbaik. Unitrak Power dapat menyesuaikan program yang sesuai untuk forklift Anda agar kembali bekerja normal lagi.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
	
	<div class="sub-services">
		<div class="container">
			<div class="col-md-6">
				<div class="media">
					<ul>
						<li>
							<div class="media-left">
								<i class="fa fa-wrench"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">Parts</h4>
								<p>Setiap masing-masing forklift terdiri dari ratusan bagian forklift ataupun mesin-mesin forklift. Sepanjang pemakaian tentunya perlu adanya pergantian karena keausan dan juga penggunaan yang semakin meningkat. </p>

								<p>Untuk itu, Unitrak Power adalah tempat yang cocok untuk mengatasi permasalahan seperti itu. Kami memiliki teknisi yang ahli yang dapat membantu menjawab pertanyaan apapun yang Anda miliki. Unitrak power menjadi tempat yang tepat untuk menemukan bagian-bagian maupun mesin-mesin forklift yang Anda butuhkan.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<img src="<?php echo base_url() ?>assets/images/services/f4.jpg" class="img-responsive">
			</div>
		</div>
	</div>

	<div class="services">
		<div class="container">
			<div class="col-md-6">
				<img src="<?php echo base_url() ?>assets/images/services/f2.jpg" class="img-responsive">
				<p></p>
			</div>
			
			<div class="col-md-6">
				<div class="media">
					<ul>
						<li>
							<div class="media-left">
								<i class="fa fa-wrench"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">Forklift Refurbishment</h4>
								<p>Unitrak Power menawarkan fasilitas untuk memperbarui forklift yang sudah tua. Kami juga dapat memperarui forklift Anda dengan warna perusahaan Anda, sehingga memungkinkan keseragaman dan penguatan merek perusahaan Anda.</p>
								<p>Kami juga menjual forklift tua yang telah kami sulap sedemikan rupa sehingga seperti baru. Sehingga Anda tak perlu tetap dapat mendapatkan forklift dan menghemat pengeluaran perusahaan Anda</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>	
	
	<div class="sub-services">
		<div class="container">
			<div class="col-md-6">
				<div class="media">
					<ul>
						<li>
							<div class="media-left">
								<i class="fa fa-wrench"></i>						
							</div>
							<div class="media-body">
								<h4 class="media-heading">Sell and Rent</h4>
								<p>Unitrak Power menjual forklift-forklift second atau bekas yang sudah di refurbish seperti baru.</p>

								<p>Selain menjual, forklift refurbished juga disewakan. Anda dapat menyewa forklift untuk keperluan bisnis Anda. Hal ini tentunya dapat menghemat waktu dan uang perusahaan Anda.</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<img src="<?php echo base_url() ?>assets/images/services/f9.jpg" class="img-responsive">
			</div>
		</div>
	</div>
	
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