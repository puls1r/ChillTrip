<!DOCTYPE html>
<html>
<head>
<title>Chill Trip | Chart</title>
<link href="<?php echo base_url() ?>assets/bootstrap-4.1.3-dist/css/bootstrap-grid.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/css/gaya.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/css/footer.css" rel ="stylesheet" type="text/css">
<link href="<?php echo base_url() ?>assets/css/chart.css" rel ="stylesheet" type="text/css">

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<script>
	
</script>
</head>

<body>
<div class="container-fluid" style="padding:0;margin:0">
	<div class="navbar row">
		<div class="nav col-md-3 col-lg-3">
			<p style="font-size:30px;margin:auto;margin-left:70px;margin-top:;color:#34dddd">Chill Trip</p>
		</div>
		<div class="nav col-md-3 col-lg-3"></div>
		<div class="nav col-md-3 col-lg-3">
			<div class="row">
			<div class="col-md-3 col-lg-3"></div>
			<div class="col-md-2 col-lg-2">
				<p style="margin:auto;margin-top:10px;margin-left:-15px;text-align:center"><a href="<?php echo site_url('home') ?>">Home</a></p>
			</div>
			<div class="col-md-2 col-lg-2">
				<p style="margin:auto;margin-top:10px;text-align:center"><a href="<?php echo site_url('trip') ?>">Trip</a></p>
			</div>
			<div class="col-md-2 col-lg-2">
				<p style="margin:auto;margin-top:10px;margin-bottom:10px;text-align:center"><a href="<?php echo site_url('chart') ?>" class="active">Chart</a></p>
			</div>
			<div class="col-md-3 col-lg-2"></div>
			</div>
		</div>
		<div class="nav col-md-3 col-lg-3">
        <div class="row">
			<div class="col-md-7 col-lg-7"><p style="margin:auto;margin-top:10px;text-align:center">Hello <?php echo ucfirst($this->session->userdata('username'));?> :)</p></div>
			<div class="col-md-5 col-lg-5"><p style="margin:auto;margin-top:10px;text-align:center"><?php echo anchor('login/logout','Logout'); ?></p></div>
            </div>
		</div>	
	</div>
    <div class="invoice-box" style="margin-top:70px">
        <table cellpadding="0" cellspacing="0">
            <tr class="top">
                <td colspan="2">
                    <table>
                        <tr>
                            <td class="title">
                                <img class="logo" src="<?php echo base_url() ?>assets/img/logo/chillTrip_logo.png" style="width:100%; max-width:200px;">
                            </td>
                            <td>
                                <br>
								
                                Invoice #: <?php echo $id_dest ?> <br>
                                <?php echo date('l,d-m-Y') ?><br>
                                <?php date_default_timezone_set("Asia/Bangkok");
                                echo date("H:i a"); ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="information">
                <td colspan="2">
                    <table>
                        <tr>
                            <td>
                                ChillTrip, Inc.<br>
                                Komp. Puri indah <br>
                                Blok B5 no. 17, Jatinangor
                            </td>
                            <td>
                                <?php echo $name ?><br>
                                <?php echo $email ?>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Payment Method
                </td>
                <td>
                    Transfer To :
                </td>
            </tr>
            <tr class="details">
                <td>
                    <div style="width:200px;">
						<select id="bank" onchange="Rekening();">
							<option disabled selected>Select Bank</option>
							<option value="013089783">BNI</option>
							<option value="032001093">Mandiri</option>
							<option value="050384002">BRI</option>
						</select>
					</div>
                </td>
                <td>
                    <p id="rekening"></p>
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Tujuan
                </td>
                
                <td>
                    Price
                </td>
            </tr>
            <tr class="item">
                <td>
                    <?php echo $tempat?>
                </td>
                <td>
                    Rp. <?php echo $harga ?>
                </td>
            </tr>
            <tr class="heading">
                <td>
                    Pax
                </td>
                
                <td>
                    <?php echo $pax ?> Orang
                </td>
            </tr>
            <tr class="total">

                <td>Total</td>
                <td>
                   Rp. <?php echo ($pax*$harga)?>
                </td>

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
</body>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/chart.js" ></script>
</html>