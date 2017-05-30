<html>
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/uu.png">
    <title>Login || Unitrak Power</title>
    <link href="<?php echo base_url() ?>assets/css/styleemail.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <form method="post" action="<?php echo base_url().'index.php/MyController/useremail'?>"  name="sign up for beta form">
      <div class="header">
         <p>Masukkan E-mail Anda</p>
      </div>
      <div class="description">
        <p>Silahkan masukkan alamat Email Anda untuk proses booking service selanjutnya</p>
      </div>
      <div class="input">
        
        <input type="text" class="button" id="email" name="email" placeholder="NAME@EXAMPLE.COM">
        <input type="submit" class="button" id="submit" value="GO">

      </div>
    </form>
  </body>
</html>