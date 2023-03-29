<?php
$conn=mysqli_connect("localhost","root","","iqra_itc");

if(!$conn)
{
    die("Error".mysqli_error($conn));
}
?>