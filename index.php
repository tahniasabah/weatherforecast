<?php  

	include('Config.php');
        
         $sql = "SELECT * FROM data  order by time_and_date DESC limit 1";
        $result = mysqli_query($db, $sql);

            while ($row = mysqli_fetch_array($result)) {
                
            $co= $row['co'];
            $lpg_rate= $row['lpg_rate'];
            $smoke_rate= $row['smoke_rate'];
            $temperature= $row['temperature'];
            $humidity= $row['humidity'];
            $time_and_date= $row['time_and_date'];
            date_default_timezone_set("Asia/Dhaka");
        }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		<link type="image/x-icon" rel="shortcut icon" href="images/logo.png" />
		<title>Weather Forecast</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
	

	</head>


	<body>
		
		<div class="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.php" class="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-type">
							<h1 class="site-title">Digital Climate Info</h1>
							
						</div>
					</a>

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.php">Home</a></li>
							<li class="menu-item"><a href="allrecords.php">All Records</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			<div class="forecast-table">
				<div class="container">
					<div class="forecast-container">
						<div class="today forecast">
							<div class="forecast-header">
								<div class="day"><?php echo date('l', strtotime($time_and_date))  ;?></div>
								<div class="date"><?php echo date('d F', strtotime($time_and_date))  ;?></div>
							</div> <!-- .forecast-header -->
							<div class="forecast-content">
								<div class="location">Dhaka</div>
								<div class="time"><?php echo date('H:m A', strtotime($time_and_date))  ;?></div>
								<div class="degree">
									<div class="num"> <?php echo $temperature ;?> <sup>o</sup>C</div>

									<div class="forecast-icon">
										<img src="images/icons/icon-1.svg" alt="" width=80>
										
									</div>
									<p><img src="images/icon-umberella.png" alt=""> Humidity: <?php echo $humidity ;?>%</p>
								</div>
								
								<span><img src="images/icon-wind.png" alt="">CO Rate:<?php echo $co ;?></span>
								<span><i class='fa fa-meteor'></i> LPG Rate:<?php echo $lpg_rate ;?></span>
								<span><i class='fa fa-smog'></i> Smoke Rate:<?php echo $smoke_rate ;?></span>
							</div>
						</div>
						
						
						

					</div>
				</div>
			</div>

<br><br><br><br>
			<footer class="site-footer">
				<div class="container">
					

					<center><p class="colophon">Copyright 2018 Outlaw. All rights reserved</p></center>
				</div>
			</footer> <!-- .site-footer -->
		</div>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>