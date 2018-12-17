
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
		
	<style>
body {
  font: colibri;
}
table {
  border-collapse: collapse;
  width: 100%;
}
th, td {
  padding: 0.2rem;
  text-align: center;
  border: 3px solid #ccc;
}
tbody tr:nth-child(odd) {
  background: grey  ;
}
</style>

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
							<li class="menu-item "><a href="index.php">Home</a></li>
							<li class="menu-item current-menu-item"><a href="allrecords.php">All Records</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

		
<div class="container">
        <div class="container-table100">

            <div class="wrap-table100">

                <div class="table100">

                    <table>
                        <thead>
                            <tr class="table100-head">
                                <th class="column1">Date and Time</th>
                                <th class="column2">Temprature (C)</th>
                                <th class="column3">Himudity %</th>
                                <th class="column4">CO Rate</th>
                                <th class="column5">LPG Rate</th>
                                <th class="column6">Smoke Rate</th>
                            </tr>
                        </thead>
                        <tbody>

<?php 
    include('Config.php');
      $sql= "SELECT * From data order by time_and_date DESC ";

        $result = mysqli_query($db, $sql);
        
        while ($row = mysqli_fetch_array($result)) {
            echo ("<tr>
                                    <td class='column1'>". $row["time_and_date"]."</td>
                                    <td class='column2'>". $row["temperature"]."</td>
                                    <td class='column3'>". $row["humidity"]."</td>
                                    <td class='column4'>". $row["co"]."</td>
                                    <td class='column5'>". $row["lpg_rate"]."</td>
                                    <td class='column6'>". $row["smoke_rate"]."</td>
                                    ");

        }
    
 ?>

                                
                                

                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</div>

			

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

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