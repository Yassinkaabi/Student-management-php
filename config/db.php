<?php
session_start();
define('SITEURL','http://localhost/ecole/');
$servername="localhost";
$username="root";
$password="";
$dbname="ecole_bd";

//création de la connexion
$conn=new mysqli($servername,$username,$password,$dbname);

//test de connexion
if($conn->connect_error){
        die("Connection failed :".$conn->connect_error);
    }

?>