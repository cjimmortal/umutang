<?php


$conn = new mysqli('localhost', 'root', '', 'umutang');
if($conn->connect_error){
    echo "connection : error". $conn->connect_error;
}else{
    // echo"connection success";
}