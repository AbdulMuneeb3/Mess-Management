<?php

$servername = 'localhost';

$username = 'root'; 

$password = ''; 

$database = 'mess'; 

$conn = mysqli_connect($servername,$username,$password,$database);
 if($conn){
    }else{
die("Connection failed:".mysqli_connect_error());
 }
?> 