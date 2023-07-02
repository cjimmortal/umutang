<?php
    include '../class/class.php';

    $user = $_POST['username'];
    $pass = $_POST['password'];

    $login = new login((string)$user, (string)$pass);
    $login->admincheck();
  