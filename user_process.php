<?php
/**
 * Created By: WD:301.
 * User : SLRP
 * Date: 02-07-17
 * Time: 09:58pm
 */
include("dbconnect.php");
$name=$_REQUEST['name'];
$cellno=$_REQUEST['cellno'];
$email=$_REQUEST['email'];
$msg=$_REQUEST['message'];

/*
 * Inserting data to table
 * */

$query=mysqli_query($db_connect,"INSERT INTO slrp (name, cellno, email, message) VALUES ('$name','$cellno', '$email', '$msg')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:index.php?note=success");

/*
 * change the index to contact.php if completed
 * */