<?php
session_start();

function pageLogin(){
    $_SESSION['id'] = 0;
    if($_SESSION['id'] == 1){
        header("location: dashboard.php");
    }else{
        // header("location: index.php");
    }
}

function loginSuccess(){
    if($_SESSION['id'] == 1){
        // header("location: dashboard.php");
    }else{
        header("location: index.php");
    }
}
