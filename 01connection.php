<?php

$server="localhost";
$username= "root";
$password= "";
$database= "todoapp";

$con =mysqli_connect($server,$username,$password);
 if(!$con){
    die("connection failed".mysqli_connect_error());
 }
 $database="create database".$database;
 $res=mysqli_query($con,$database);
?>