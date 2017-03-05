<?php
/**
 * Created By: WD:301.
 * User : SLRP
 * Date: 02-07-17
 * Time: 09:58pm
 */

$db_host="localhost";
$db_username="root";
$db_password="";
$db_name="slrp_database";


$db_connect     = mysqli_connect($db_host, $db_username, $db_password, $db_name);
// Check connection
if (mysqli_connect_error())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//echo "<h1>Connected!</h1>";