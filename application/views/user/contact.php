<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/uu.png">
    
    <title>Contact || Unitrak Power</title>

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
							<a href="<?php echo base_url()."index.php/MyController/index" ?>"><h1><span>Unitrak </span>Power</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="<?php echo base_url()."index.php/MyController/index" ?>">Home</a></li>
								<li role="presentation"><a href="about.html">About Us</a></li>
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/servicepage" ?>">Services</a></li>							
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/catalogpage" ?>" >Catalog</a></li>
                                <li role="presentation"><a href="<?php echo base_url()."index.php/c_user/bookingpage" ?>">Book Service Online</a></li>
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/contactpage" ?>" class="active">Contact</a></li>	
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
				<li><a href="index.html">Home</a></li>
				<li>Contact</li>			
			</div>		
		</div>	
	</div>
	
	<div class="map">
        <div id="google-map" data-latitude="-7.304602" data-longitude="112.7532783">
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
	
	<section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Tinggalkan Pesan Anda</h2>
                <p>Butuh bantuan? Inginkan informasi lebih lanjut? Kritik dan Saran? Silahkan kirimkan pesan Anda disini.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <div class="col-md-6 col-md-offset-3">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>

                    <?php echo form_open_multipart('c_user/email'); ?>

                            <div class="form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                    <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                    <input type="text" name="phone" class="form-control" id="name" placeholder="Telepon Anda" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                    <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                    <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Pesan"></textarea>
                                    <div class="validation"></div>
                            </div>
                        <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Kirim Pesan</button></div>
                     <?php echo form_close();?>                      
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
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
    <!--<script src="https://maps.google.com/maps/api/js?sensor=true"></script>-->
    <script src="<?php echo base_url() ?>assets/js/functions.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBjGJ3Hv61oRp-57XjDecqqbMDV8AUteg0"></script>
    
</body>
</html>