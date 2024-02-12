<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbName = "language_app";

$conn = mysqli_connect($host, $user, $pass, $dbName);

if(!$conn){
    die("connection failed: ". mysqli_connect_error());
}