<!DOCTYPE html>
<html>
<head>
<title>Chill Trip | Trip</title>
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
				<p style="margin:auto;margin-top:10px;margin-left:-7px;text-align:center"><a href="<?php echo site_url('home') ?>">Home</a></p>
			</div>
			<div class="col-md-2 col-lg-2">
				<p style="margin:auto;margin-top:10px;text-align:center"><a href="<?php echo site_url('trip') ?>" class="active">Trip</a></p>
			</div>
			<div class="col-md-2 col-lg-2">
				<p style="margin:auto;margin-top:10px;margin-bottom:10px;text-align:center"><a href="<?php echo site_url('chart') ?>">Chart</a></p>
			</div>
			<div class="col-md-3 col-lg-3"></div>
			</div>
		</div>
		<div class="nav col-md-2 col-lg-2">
			<div class="row">
			<div class="col-md-7 col-lg-7"><p style="margin:auto;margin-top:10px;text-align:center">Hello <?php echo ucfirst($this->session->userdata('username'));?> :)</p></div>
			<div class="col-md-5 col-lg-5"><p style="margin:auto;margin-top:10px;text-align:center"><?php echo anchor('login/logout','Logout'); ?></p></div>
			</div>
		</div>	
	</div>
	<div class="alert"> <p><?php echo $this->session->flashdata('sudah'); ?></p> </div>
	<h1 style="text-align:left; margin-left:100px;">Most Popular City</h1>
	<div class="row">
		<div class="col-sm-1 col-xs-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-7 col-xs-7 col-md-7 col-lg-7"><a href="<?php echo site_url('bandung') ?>"><img class="center" src="<?php echo base_url() ?>assets/img/bandung.jpg" alt="Logo" style="height:500px; width:730px;padding:5px"></a></div>
		<div class="col-sm-3 col-xs-3 col-md-3 col-lg-3">
			<div class="row"><div class="col-sm-12 col-xs-12 col-md-12 col-lg-12"><a href="<?php echo site_url('wonosobo') ?>"><img class="center" src="<?php echo base_url() ?>assets/img/wonosobo.jpg" alt="Logo" style="height:250px; width:315px;padding:5px"></a>
			</div></div>
			<div class="row"><div class="col-sm-12 col-xs-12 col-md-12 col-lg-12"><a href="#"><img class="center" src="<?php echo base_url() ?>assets/img/seribu.jpg" alt="Logo" style="height:250px; width:315px;padding:5px"></a>
			</div></div>	
		</div>
		<div class="col-sm-1 col-xs-1 col-md-1 col-lg-1"></div>
	</div>
	<h1 style="margin-top:40px;margin-left:100px">Other Beautiful City You might Like</h1>
	<div class="row">
		<div class="col-sm-1 col-xs-1 col-md-1 col-lg-1"></div>
		<div class="col-sm-3 col-xs-3 col-md-3 col-lg-3"><a href="a"><img class="center" src="<?php echo base_url() ?>assets/img/yogya.jpg" alt="Logo" style="height:250px; width:340px;padding:5px"></a></div>
		<div class="col-sm-3 col-xs-3 col-md-3 col-lg-3" style="margin-left:40px"><a href="b"><img class="center" src="<?php echo base_url() ?>assets/img/bali.jpg" alt="Logo" style="height:250px;width:340px;padding:5px"></a></div>
		<div class="col-sm-3 col-xs-3 col-md-3 col-lg-3" style="margin-left:40px"><a href="c"><img class="center" src="<?php echo base_url() ?>assets/img/ampat.jpg" alt="Logo" style="height:250px;width:340px;padding:5px"></a></div>
		<div class="col-sm-1 col-xs-1 col-md-1 col-lg-1"></div>
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