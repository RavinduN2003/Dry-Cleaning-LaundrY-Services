<?php
$serverName="localhost";
$dbUsername="root";
$dbPassword="";//no password
$dbName="website_login";

$conn=mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);


if(!$conn){
    die("connection failed :".mysqli_connect_error());
}