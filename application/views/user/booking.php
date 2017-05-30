<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/uu.png">
    <title>Booking Service || Unitrak Power</title>
    <style>@import url(http://fonts.googleapis.com/css?family=Lato:100,300,400);

input::-webkit-input-placeholder, textarea::-webkit-input-placeholder {
  color: #aca49c;
  font-size: 0.875em;
}

input:focus::-webkit-input-placeholder, textarea:focus::-webkit-input-placeholder {
  color: #bbb5af;
}

input::-moz-placeholder, textarea::-moz-placeholder {
  color: #aca49c;
  font-size: 0.875em;
}

input:focus::-moz-placeholder, textarea:focus::-moz-placeholder {
  color: #bbb5af;
}

input::placeholder, textarea::placeholder {
  color: #aca49c;
  font-size: 0.875em;
}

input:focus::placeholder, textarea::focus:placeholder {
  color: #bbb5af;
}

input::-ms-placeholder, textarea::-ms-placeholder {
  color: #aca49c;
  font-size: 0.875em;
}

input:focus::-ms-placeholder, textarea:focus::-ms-placeholder {
  color: #bbb5af;
}

/* on hover placeholder */

input:hover::-webkit-input-placeholder, textarea:hover::-webkit-input-placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::-webkit-input-placeholder, textarea:hover:focus::-webkit-input-placeholder {
  color: #cbc6c1;
}

input:hover::-moz-placeholder, textarea:hover::-moz-placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::-moz-placeholder, textarea:hover:focus::-moz-placeholder {
  color: #cbc6c1;
}

input:hover::placeholder, textarea:hover::placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::placeholder, textarea:hover:focus::placeholder {
  color: #cbc6c1;
}

input:hover::placeholder, textarea:hover::placeholder {
  color: #e2dedb;
  font-size: 0.875em;
}

input:hover:focus::-ms-placeholder, textarea:hover::focus:-ms-placeholder {
  color: #cbc6c1;
}

body {
  font-family: 'Lato', sans-serif;
  background: #e2dedb;
  color: #edefed;
}


h1 {
  position: relative;
  margin: 100px 0 25px 0;
  font-size: 2.3em;
  text-align: center;
  letter-spacing: 7px;
  color: #333;
}

#form {
  position: relative;
  width: 500px;
  margin: 150px auto 100px auto;
  color: #333;
}

input {
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  width: 470px;
  height: 50px;
  padding: 0px 15px 0px 15px;
  
  background: #fff;
  outline: none;
  color: #726659;
  
  border: solid 1px #b3aca7;
  border-bottom: none;
  
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
}

input:hover {
  background: #1BBD36;
  color: #fff;
}

textarea {
  width: 470px;
  max-width: 470px;
  height: 110px;
  max-height: 110px;
  padding: 15px;
  
  background: #fff;
  outline: none;
  
  color: #333;
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  
  border: solid 1px #b3aca7;
  
  transition: all 0.3s ease-in-out;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
}

textarea:hover {
  background: #1BBD36;
  color: #fff;
}

#submit {
  width: 470px;
  
  padding: 0;
  margin: -5px 0px 0px 0px;
  
  font-family: 'Lato', sans-serif;
  font-size: 0.875em;
  color: #1BBD36;
  
  outline:none;
  cursor: pointer;
  
  border: solid 1px #b3aca7;
}

#submit:hover {
  color: #e2dedb;
}</style>
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
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
							<a href="index.html"><h1><span>Unitrak </span>Power</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="<?php echo base_url()."index.php/MyController/index" ?>">Home</a></li>
								<li role="presentation"><a href="about.html">About Us</a></li>
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/servicepage" ?>">Services</a></li>							
								<li role="presentation"><a href="<?php echo base_url()."index.php/c_user/catalogpage" ?>" >Catalog</a></li>
                                <li role="presentation"><a href="<?php echo base_url()."index.php/c_user/bookingpage" ?>" class="active">Book Service Online</a></li>
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

		

		<form method="post" action="<?php echo base_url().'index.php/c_user/bookemail'?>" id="form" class="topBefore">
			<h1>Booking Service</h1>
			<input id="email" type="email" value="<?php echo $this->session->userdata('email') ?>" name="email">
			<input id="name" type="text" value="<?php echo $this->session->userdata('nama_depan') ?>" name="nama_depan">
			<input id="name" type="text" value="<?php echo $this->session->userdata('telepon') ?>" name="telepon">
			<input id="name" type="text" value="<?php echo $this->session->userdata('lokasi') ?>" name="lokasi">
			<input id="name" type="text" placeholder="Alamat Anda" name="alamat">
			<input id="name" type="date" placeholder="Tanggal Booking" name="tgl">
			<input id="name" type="textarea" placeholder="Permasalahan" name="masalah">
			<input id="submit" type="submit" value="Book">
		</form>
</body>
</html>