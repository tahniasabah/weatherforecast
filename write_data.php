<?php
    $co2='';
    $lpg_rate='';
    $smoke_rate='';
    $temperature='';
    $humidity='';
    $Send='';
    // Prepare variables for database connection
    $servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "basasgla_weather";

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

    // Prepare the SQL statement

    $sql = "INSERT INTO data (co,lpg_rate,smoke_rate,temperature,humidity) VALUES ('".$_GET["co"]."','".$_GET["lpg_rate"]."','".$_GET["smoke_rate"]."','".$_GET["temperature"]."','".$_GET["humidity"]."')";    

    // Execute SQL statement
    //localhost/write_data.php?co=25 & lpg_rate=12 & smoke_rate=36 & temperature=35 & humidity=68

   if ($db->query($sql) == TRUE) {
          
            $Send="data send";
			header("Location:index.php");
			
            } 
        else {
                     $Send="not send";
            }

?>