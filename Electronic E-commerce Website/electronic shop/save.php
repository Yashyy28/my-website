<?php

$server ="localhost";
$username ="root";
$password ="";
$dbname = "register";

$con = mysqli_connect($server,$username,$password,$dbname);

if(!$con)
{
    echo"Not Connected";
}
else
{
    echo"Connect";
}