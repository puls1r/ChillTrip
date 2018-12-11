<!DOCTYPE html>
<html>
<head>
<title>Chill Trip | Home</title>

<link href="<?php echo base_url() ?>assets/bootstrap-4.1.3-dist/css/bootstrap-grid.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/css/gaya.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/css/footer.css" rel ="stylesheet" type="text/css">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>

<body>
<div class="container-fluid" style="padding:0;margin:0">
	<div class="navbar row">
		<div class="nav col-md-3 col-lg-3">
			<p style="font-size:30px;margin:auto;margin-left:70px;margin-top:;color:#34dddd">Chill Trip</p>
		</div>
		<div class="nav col-md-3 col-lg-3"></div>
		<div class="nav col-md-4 col-lg-4">
			<div class="row">
			<div class="col-md-3 col-lg-3"></div>
			<div class="col-md-2 col-lg-2">
				<p style="margin:auto;margin-top:10px;margin-left:-7px;text-align:center"><a href="<?php echo site_url('home') ?>" class="active">Home</a></p>
			</div>
			<div class="col-md-2 col-lg-2">
				<p style="margin:auto;margin-top:10px;text-align:center"><a href="<?php echo site_url('trip') ?>">Trip</a></p>
			</div>
			<div class="col-md-2 col-lg-2">
				<p style="margin:auto;margin-top:10px;margin-bottom:10px;text-align:center"><a href="<?php echo site_url('chart') ?>">Chart</a></p>
			</div>
			<div class="col-md-3 col-lg-2"></div>
			</div>
		</div>
		<div class="nav col-md-2 col-lg-2">
			<p style="margin:auto;margin-top:10px;text-align:center"><a><?php echo anchor('login/cekin','Login'); ?></a></p>
		</div>	
	</div>
	<div class="intro row">
	<div class="col-sm-4 col-xs-4 col-md-4 col-lg-4"><img src="<?php echo base_url() ?>assets/img/icon.png" alt="Logo" style="height:250px; width:250x;"></div>
	<div class="text col-sm-8 col-xs-8 col-md-8 col-lg-8"><img class="logo" src="<?php echo base_url() ?>assets/img/logo/chillTrip_logo.png">
	<p style="color:white"><b>"We Chill Every Trip:)"</b></p>
	<p style="color:white">Find the best deal for every trip you want!</p></div>
	</div>
	<div class="how row" style="margin:0">
	<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12" style="margin:0;"><h1 style="text-align:center">How to Chill With us</h1>
	<table class="spacing" cellpadding="2px">
	<tr>
		<td>1. </td><td>Create an account.</td>
	</tr>
	<tr>
		<td></td><td>Click <a style="color:#34dddd"href="<?php echo site_url('register') ?>">here</a> to create an account</td>
	</tr>
	<tr>
		<td><br>2. </td><td><br>Go to "Trip"</td>
	</tr>
	<tr>
		<td><br>3. </td><td><br>Choose your destination</td>
	</tr>
	<tr>
		<td></td><td>and your holiday date</td>
	</tr>
	<tr>
		<td><br>4. </td><td><br>Book your chill trip</td>
	</tr>
	<tr>
		<td><br>5. </td><td><br>Go to "Chart" and make the payment</td>
	</tr>
	<tr>
		<td><br>6. </td><td><br>Print the payment invoice</td>
	</tr>
	<tr>
		<td><br>7. </td><td><br>Receive Your E-Ticket</td>
	</tr>
	</table>
	</div>
	</div>
	<div class="row" style="margin:0">
	<div class="col-sm-12 col-xs-12 col-md-12 col-lg-12" style="padding:0">
	<footer class="footer-distributed">

			<div class="footer-left">

				<img class="logo" src="<?php echo base_url() ?>assets/img/logo/chillTrip_logo.png">

				

				<p class="footer-company-name">Chill Trip &copy; 2018</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Komp. Puri indah Blok B5 no. 17, Jatinangor</span> Jawa Barat, Indonesia</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+0878 7877 0097</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:cs@opentrip.com">cs@chilltrip.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About us</span>
					Chill Trip is a Website that provides you choices to fullfill your holiday wishes
				</p>

				<div class="footer-icons">

					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
		</div>
		</div>
</div>
</body>


</html>