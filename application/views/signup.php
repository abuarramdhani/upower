<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/uu.png">
    <title>Register || Unitrak Power</title>
    <link href="<?php echo base_url() ?>assets/css/stylesignup.css" rel="stylesheet" />
  </head>
  <body>

		<header>Register</header>

		<form method="post" action="<?php echo base_url().'index.php/MyController/signupuser'?>" id="form" class="topBefore">
			<input id="email" type="email" placeholder="EMAIL" name="email">
			<input id="email" type="password" placeholder="PASSWORD" name="password_user">
			<input id="name" type="text" placeholder="NAMA DEPAN" name="nama_depan">
			<input id="name" type="text" placeholder="NAMA BELAKANG" name="nama_belakang">
			<input id="name" type="text" placeholder="NO HANDPHONE" name="telepon">
			<input id="name" type="text" placeholder="LOKASI : Ex. Surabaya" name="lokasi">
			<input id="submit" type="submit" value="Register">
		</form>
</body>
</html>