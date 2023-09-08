
<?php
//Set Default Timezone
date_default_timezone_set("Asia/Karachi");
// Step 1: Database connection - Local
// $con = new mysqli('localhost', 'root', '', 'ypp');
//Live Connection
$con = new mysqli('localhost', 'sunaina_root', 'ypp_sunaina', 'sunaina_ypp');

if ($con->connect_error) {
    die('Connection failed: ' . $con->connect_error);
}


//FETCH GENERAL SETTINGS
            $query = "SELECT * FROM general_settings";
            $data = $con->query($query);
            $mainsettings = $data->fetch_assoc();


//FETCH SOCIAL LINKS
            $squery = "SELECT * FROM social_links";
            $sdata = $con->query($squery);
            $mainsocial = $sdata->fetch_assoc();
?>