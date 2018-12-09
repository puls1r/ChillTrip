<!DOCTYPE html>
<html>
<head>
<title>Chill Trip | Register</title>
<link href="<?php echo base_url() ?>assets/bootstrap-4.1.3-dist/css/bootstrap-grid.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/css/gaya.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/css/footer.css" rel ="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/css/form.css" rel ="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/css/checkbox.css" rel ="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/css/form-register.css" rel ="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
</head>

<body class="loginpage">
<div class="container-fluid" style="padding:0;margin:0">
	<div class=" kepala row">
		<a href="<?php echo site_url('home') ?>"><img class="logo" src="<?php echo base_url() ?>assets/img/logo/chillTrip_logo.png"></a>
	</div>
	<div class="row">
		<div class="col-sm-3 col-xs-3 col-md-3 col-lg-3"></div>
		<div class="col-sm-6 col-xs-6 col-md-6 col-lg-6">
		<p style="text-align:center;font-size:30px;margin:0;color:white;margin-bottom:15px"><b>Welcome to Chill Trip!</b></p>
				<div class="form-reg">
				<input type="text" placeholder="Name" name="nama" size="50px">
				<input type="text" placeholder="Username" name="username" size="50px">
				<input type="text" placeholder="No. HP" name="hp" size="50px">
                <input type="text" placeholder="Email" name="email" size="50px">
                <input type="text" placeholder="Nomor Identitas" name="identitas" size="50px">
				<input type="password" placeholder="Password" name="password" size="50px">
				<input type="password" placeholder="Confirm Password" name="confirmpassword" size="50px">
				<p>By clicking Register, you agree to Chill Trip's <a href="#">User Agreement</a>, <a href="#">Privacy Policy</a>, and <a href="#">Cookie Policy</a></p>
				<input type="submit" name="register" value="Register">
				</div>
		</div>
			
		<div class="col-sm-3 col-xs-3 col-md-3 col-lg-3"></div>
	</div>
	<div class="row" style="margin:0">
		<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12" style="padding:0">
			<footer class="footer-mini" style=""><span style="color:grey">&copy; 2018, Chill Trip</span> </footer>
		</div>
	</div>
</div>
</body>
</html>