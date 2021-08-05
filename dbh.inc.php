<?php

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "logs";

$conn = musqli_connect($servername,$dbusername,$dbpassword,$dbname);

if (!$conn) {
    die("Connection failed".mysqli_connect_error());
}

